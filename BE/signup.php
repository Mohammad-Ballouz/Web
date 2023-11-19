<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user=new stdClass();

$user->uname = isset($_POST["username"]) ? $_POST["username"] : "";
$user->fname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";
$user->pass = isset($_POST["passw"]) ? $_POST["passw"] : "";
$user->cpass = isset($_POST["confirm_passw"]) ? $_POST["confirm_passw"] : "";
$user->dob = isset($_POST["d"]) ? $_POST["d"] : "";
$user->sex = isset($_POST["sex"]) ? $_POST["sex"] : "";
$user->email = isset($_POST["email"]) ? $_POST["email"] : "";


$jsonData=file_get_contents("data.json");

$users=json_decode($jsonData,true);

$users["users"][]=$user;

$updatejData=json_encode($users);

$result=file_put_contents("data.json", $updatejData);

if($result!==false){
    echo '<script>alert("Sign Up Successful!");
            window.location="../pages/login.php"</script>';
}
}
?>