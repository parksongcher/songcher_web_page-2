<?php
date_default_timezone_set("Asia/Seoul");
$server_name = "localhost";
$user_name = "root";
$pass = "123456";
$db_name = "sample";

$con = mysqli_connect($server_name, $user_name, $pass);
$query = "create database if not exists sample";
$result = $con->query($query) or die($con->error);

$con->select_db($db_name) or die($con->error);

function alert_back($message)
{
    echo ("
			<script>
			alert('$message');
			history.go(-1)
			</script>
			");
}
//주의할곳
function input_set($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
