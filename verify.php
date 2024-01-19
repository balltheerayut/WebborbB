<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
<h1 style="text-align: center;">WebboardlnwZa007</h1>
<hr>
<div style="text-align: center ;"> 
<?php $n = $_POST['login']; 
      $p = $_POST['pwd'];
                if ($n == "admin"&& $p == "ad1234"){
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
                    echo "<center> ยินดีต้อนรับ คุณAdmin <BR>";
                    }
                elseif ($n == "member"&& $p == "mem1234") {
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
                    echo "<center> ยินดีต้อนรับ คุณMember <BR>";
                    }
                else{
                    echo "<center>  ชื่อบัญชีผู้ใช้ไม่ถูกต้อง <BR>";
                }
                    echo"<a href=index.php>กลับไปหน้าหลัก</a>";
                            
                            
?>
</div>
</body>
</html>