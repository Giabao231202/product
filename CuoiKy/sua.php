<?php 
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM product WHERE id=$id";
    $query_up= mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);


    if(isset($_POST['sbm'])){
        $productname = $_POST['productname'];

        if($_FILES['image']['name']==''){
            $image = $row_up['image'];
        } else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
        }

        $price = $_POST['price'];
        $description = $_POST['description'];
        

        $sql = "UPDATE product SET productname='$productname', price='$price', description='$description', image='$image'";

     $query = mysqli_query($conn, $sql);
    
    header('location: index.php?page_layout=danhsach');
    }

    
?>


<div class="container_fluid">
    <div class="card">
        <div class="card_header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card_body">
            <form  method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="productname" class="forn_control" require value="<?php echo $row_up['productname'];?>">
                </div>

                <div class="form_group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="forn_control" require value="<?php echo $row_up['price'];?>">
                </div>

                <div class="form_group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="forn_control" require value="<?php echo $row_up['description'];?>">
                </div>

                <div class="form_group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" require>
                </div>
                <button type="submit" name="sbm" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>