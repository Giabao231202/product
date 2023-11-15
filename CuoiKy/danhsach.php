<?php 
    session_start();
    $sql = "SELECT * FROM product";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    Chào mừng <?=$_SESSION['username']?>
    </header>
    <div class="container_fluid">
    <div class="card">
        <div class="card_header">
            <h1>Cửa hàng điện thoại của Bảo</h1>
        </div>
        <div class="card_body">
            <table border="1" class="table">
                <thead class="thead_dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1; 
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['productname'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td>
                                    <img style="width: 150px" src="img/<?php echo $row['image'] ?>">
                                </td>
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa sản phẩm</a> 
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['productname'];?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xoá sản phẩm</a> 
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            <a class="btn btn_primary" href="index.php?page_layout=them">Thêm sản phẩm</a>
        </div>
    </div>
</div>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>
</html>

