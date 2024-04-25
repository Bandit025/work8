<?php

session_start();
require_once 'connect.php';
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
} else {
    if (isset($_SESSION['admin_login'])) {
        $admin_id = $_SESSION['admin_login'];
        $stmt = "SELECT *
        FROM users a
        INNER JOIN urole b ON a.urole = b.id_urole
        INNER JOIN prefix c ON a.prefix = c.id_prefix
        WHERE urole != 3
        ORDER BY a.id_user";
        $re_stmt = mysqli_query($conn, $stmt);
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        
        <div class="container">


            <h3 class="mt-4">รายชื่อทั้งหมด</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">รหัสผู้ใช้</th>
                        <th scope="col">ชื่อ - สกุล</th>
                        
                        <th scope="col">สถานะ</th>
                        <th scope="col">เบอร์โทรศัพท์</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($re_stmt)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['username'] ?></th>
                            <td><?php echo $row['name_prefix'].$row['fname'] . " " . $row['lname'] ?></td>
                            <td><?php echo $row['name_urole'] ?></td>
                            <td><a href="tel:<?php echo $row['tel']; ?>" class="btn btn-success"><?php echo $row["tel"] ?></a></td>
                            
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>

    </body>
    <script>
       
    </script>

    </html>
<?php } ?>