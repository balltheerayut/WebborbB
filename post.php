<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    ?>
    <h1 style="text-align: center;">WebboardlnwZa007</h1>
    <hr>
    <div style="text-align: center ;">ต้องการดูกระทู้หมายเลข <?php echo $_GET['id'];?>
    <br>
    <?php 
    if ($id%2==0) {
        echo"เป็นกระทู้หมายเลขคู่";
    }
    if ($id%2==1) {
        echo"เป็นกระทู้หมายเลขคี่";
    }
    ?>
</div>
        
    <table style="border: 2px solid black; width:40%;" align="center">
        <tr style="background-color:#6CD2FE ;"><td>แสดงควาคิดเห็น</td></tr>
        <tr><td align="center"><textarea cols="50"rows="10"></textarea><br>
        <input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>