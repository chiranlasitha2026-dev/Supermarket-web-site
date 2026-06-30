<?php
session_start();

if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: login.html");
    exit();
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(empty($email) || empty($password)){
    die("All fields are required");
}

$conn = new mysqli('localhost','root','','supermarket');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

$stmt = $conn->prepare("SELECT id, fullName, password FROM register WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        
        // ✅ SESSION DATA
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullName'] = $user['fullName'];
        $_SESSION['email'] = $email;

        header("Location: index.php");
        exit();

    } else {
        header("Location: login.html?error=wrongpass&email=" . urlencode($email));
        exit();
    }

} else {
    header("Location: login.html?error=nouser&email=" . urlencode($email));
    exit();
}

$stmt->close();
$conn->close();
?>