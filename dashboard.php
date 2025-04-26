<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>会员专属页面</title>
</head>
<body>
    <h1>欢迎, <?php echo $_SESSION['username']; ?>!</h1>
    <p>这里是会员专属内容。</p>
    <a href="logout.php">注销</a>
</body>
</html>
