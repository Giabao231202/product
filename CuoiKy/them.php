<?php 
    

    if(isset($_POST['sbm'])){
        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $sql = "INSERT INTO product (productname, price, description, image)
        VALUES ('$productname', '$price', '$description', '$image');
    ";

    $query = mysqli_query($conn, $sql);
    
    move_uploaded_file($image_tmp, 'img/'.$image);
    header('location: index.php?page_layout=danhsach');
    }

    
?>


<div class="container_fluid">
    <div class="card">
        <div class="card_header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card_body">
            <form  method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="productname" class="forn_control" require>
                </div>

                <div class="form_group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="forn_control" require>
                </div>

                <div class="form_group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="forn_control" require>
                </div>

                <div class="form_group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" require>
                </div>
                <button type="submit" name="sbm" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>