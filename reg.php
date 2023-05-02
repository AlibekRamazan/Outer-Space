<?php
session_start();
$fullname = filter_var(trim($_POST['fullname']), FILTER_SANITIZE_STRING);
$dateofbirth = filter_var(trim($_POST['dateofbirth']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$mobile = filter_var(trim($_POST['mobile']), FILTER_SANITIZE_STRING);
$gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$yourcourse = filter_var(trim($_POST['yourcourse']), FILTER_SANITIZE_STRING);
$uniid = filter_var(trim($_POST['uniid']),  FILTER_SANITIZE_STRING);
$degreelevel = filter_var(trim($_POST['degreelevel']), FILTER_SANITIZE_STRING);
$speciality = filter_var(trim($_POST['speciality']), FILTER_SANITIZE_STRING);
$numberofgroup = filter_var(trim($_POST['numberofgroup']), FILTER_SANITIZE_STRING);
$language = filter_var(trim($_POST['language']), FILTER_SANITIZE_STRING);
$_SESSION['fullname']=$fullname;
$_SESSION['dateofbirth']=$dateofbirth;
$_SESSION['email']=$email;
$_SESSION['mobile']=$mobile;
$_SESSION['gender']=$gender;
$_SESSION['yourcourse']=$yourcourse;
$_SESSION['uniid']=$uniid;
$_SESSION['degreelevel']=$degreelevel;
$_SESSION['speciality']=$speciality;
$_SESSION['numberofgroup']=$numberofgroup;
$_SESSION['language']=$language;

$mysql = new mysqli('localhost', 'root', 'root', 'registr');    
$user = $mysql->query("INSERT INTO `users` (`fullname`, `dateofbirth`, `email`, `mobile`, `gender`, `password`, `yourcourse`, `uniid`, `degreelevel`, `speciality`, `numberofgroup`, `language`)
    VALUES('$fullname', '$dateofbirth', '$email', '$mobile', '$gender', '$password', '$yourcourse', '$uniid', '$degreelevel', '$speciality', '$numberofgroup', '$language')");
$mysql->close();

setcookie('user', $user['email'], time() + 3600, "/");

header('Location: myacc.php');

?>

