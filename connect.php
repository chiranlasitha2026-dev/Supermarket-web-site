<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: login.html");
    exit();}

$fullName = $_POST['fullName'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

// validation
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    die("Invalid email format");
}

if(empty($fullName) || empty($email) || empty($password)){
    die("All fields are required");
}

// database connection
$conn = new mysqli('localhost','root','','supermarket');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{

    // check email
    $check = $conn->prepare("SELECT id FROM register WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if($check->num_rows > 0){
        echo "Email already registered!";
    } 
    else {
        // ✅ INSERT ONLY HERE
        $stmt = $conn->prepare("INSERT INTO register(fullName, email, password) VALUES(?,?,?)");
        $stmt->bind_param("sss", $fullName, $email, $hashedpassword);
        $stmt->execute();

        header("Location: login.html");
        exit();

        $stmt->close();
    }

    $check->close();
    $conn->close();
}
?>