<?php
    $username = 'root';
    $password = '';
    $dbname = 'btth01_cse485';
    $severname = 'localhost';

    $conn = new mysqli($severname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    $sql = "SELECT * FROM theloai";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="header my-3">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Administration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trang ngoài</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="category.php">Thể loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tác giả</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bài viết</a>
            </li>
        </ul>
    </div>

    <div class="main col-md-9 my-3" style="margin-left: 10%;">
        <div class="btn">
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Thêm mới</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Tên thể loại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>".$row["ma_tloai"]."</th>";
                        echo "<td>".$row["ten_tloai"]."</td>";
                        echo "<td><a href='sua.php?id='><i class='bi bi-pencil-square'></i></a></td>";
                        echo "<td><a href='xoa.php?id='><i class='bi bi-trash-fill'></i></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
            </table>

    </div>

    <footer class="text-center text-black my-5">   
        <hr>
        <h1>TLU'S MUSIC GARDEN</h1>
    </footer>

    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/js/bootstrap.js">
</body>
</html>