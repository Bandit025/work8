<?php session_start();
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container text-center">
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <hr>
        <form action="register_db.php" method="post">
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php
                    echo $_SESSION['warning'];
                    unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-4">
                    <div class="mb-4">
                        <label for="firstname" class="form-label">คำนำหน้า</label>
                        <select class="form-select" aria-label="Default select example" name="prefix">
                            <option selected>เลือกคำนำหน้า</option>
                            <option value="1">นาย</option>
                            <option value="2">นาง</option>
                            <option value="3">นางสาว</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="firstname" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="lastname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-4">
                        <label for="id_card" class="form-label">รหัสบัตรประชาชน13หลัก</label>
                        <input type="text" class="form-control" name="id_card" aria-describedby="lastname">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="email" class="form-label">username</label>
                        <input type="text" class="form-control" name="username" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="16881688Scm">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-4">
                        <label for="tel" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-4">
                        <button type="submit" name="signup" class="btn btn-primary">สมัครสมาชิก</button>
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
            <hr>
            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="index.php">เข้าสู่ระบบ</a></p>
    </div>
    </form>
    
    </div>

    
    </div>
</body>

</html>