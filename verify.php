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
                    echo "<center> ยินดีต้อนรับ คุณAdmin <BR>";
                    }
                if ($n == "member"&& $p == "mem1234") {
                    echo "<center> ยินดีต้อนรับ คุณMember <BR>";
                    }
                    echo"<a href=login.html>กลับไปหน้าหลัก</a>";
                            
                            
?>
</div>
</body>
</html>