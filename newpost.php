<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewPost</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;" class="m-3">Webboard KakKak</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-into">
                    <div class="card-header bg-info text-white">ตั้งกระทู้ใหม่</div>
                    <div class="card-body">
                        <form action="newpost_save.php" method="post">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">หมวดหมู่</label>
                                <div class="col-lg-9">
                                    <select name="category" class="form-select">
                                        <?php 
                                            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                            $sql="SELECT * FROM category";
                                            foreach($conn->query($sql) as $row){
                                            echo "<option value=$row[id]>$row[name]</option>";
                                            }
                                            $conn=null;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">หัวข้อ:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="topic" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">เนื้อหา:</label>
                                <div class="col-lg-9">
                                    <textarea name="content" rows="8" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-info btn-sm text-white me-2">
                                <i class="bi bi-caret-right-square"></i> บันทึกข้อความ</button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                <i class="bi bi-x-square"></i> ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div><br>
</body>
</html>