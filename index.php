<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý NH Thằng Bờm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./quanlydatban/style.css">
    <style>
        
    </style>
</head>
<body>
    <header>
        <nav id ="navbar">
            <a class="logo" href="./index.php">Nhà hàng Thằng Bờm Manager & Dev team</a>
            <div class="nav-menu">
                <ul>
                    <li class="active"><a href="../index.php"><i class="ti-bar-chart">Danh sách đặt bàn</a></li>
                    <li><a href="./thongtin.html"><i class="ti-list">Thông tin nhóm</a></li>
                    <li><a href="./index.html"><i class="ti-back-left">Quay lại WEB nhà hàng</a></li>
                </ul>
            </div>
        </nav>
    




        <div class="datban">
        
            <table class ="table table-light table-striped  table-hover table-bordered">
            <h1>Danh sách khách đặt bàn</h1><br>
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Lịch</th>
                        <th>Giờ</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Số lượng khách</th>
                        <th>Ghi chú</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "nhahanthangbom";

                    $connection = new mysqli($servername, $username, $password,$database);

                    $sql = "SELECT * FROM datban";
                    $result = $connection->query($sql);

                    while ($row = $result->fetch_assoc()){
                        echo "
                    
                    <tr>
                        <td>". $row["id"] ."</td>
                        <td>". $row["chooseDate"] ."</td>
                        <td>". $row["hours"] ."</td>
                        <td>". $row["name"] ."</td>
                        <td>". $row["phonenumber"] ."</td>
                        <td>". $row["email"] ."</td>
                        <td>". $row["people"] ."</td>
                        <td>". $row["note"] ."</td>
                        
                        
                    </tr>";
                    }
                    
                    ?>
                </tbody>

                
            </table>
        </div>
    
    </header>
</body>

</html>