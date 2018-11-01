<?php
header("Content-type:text/html;charset=utf-8");
// 创建连接
$con=mysqli_connect('localhost','root','');
// 检测连接
if(!$con){
die('Could not connect:'.mysql_error());
};

// 创建数据库
$sql = "CREATE DATABASE if not exists myDB,character set 'utf',collate 'utf_general_ci' ";
if ($con->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $con->error;
}
$con->close();

// 创建连接
$conn = mysqli_connect('localhost', 'root','',myDB );
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
//使用sql创建数据表
$sql="create table if not exists MyGuests(
id int(6) unsigned auto_increment primary key,
username varchar(50) not null,
password varchar(50) not null,
email varchar(50) not null,
sex varchar(10) not null,
firstname varchar(50) not null,
lastname varchar(50) not null,
reg_data timestamp
)";
if (mysqli_query($conn, $sql)) {
    echo "数据表 MyGuests 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);

// 创建连接
$conn = mysqli_connect('localhost', 'root', '',myDB );
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$username = $_REQUEST['username'];
$lastname = $_REQUEST['lastname'];
$firstname= $_REQUEST['firstname'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$sex=$_REQUEST['sex'];

$sql = "INSERT INTO MyGuests
(username,password,email,sex,firstname,lastname)
VALUES
('".$username."', '".$password."', '".$email."','".$sex."','".$firstname."','".$lastname."')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>