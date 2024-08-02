<?php 

$ul = '../';

require_once "../../help.php";

$product_id = $_GET['id'];
$statmentOFSelect = "select * from products where id = $product_id";
$queryOfProd = mysqli_query($connection , $statmentOFSelect);
$Product_data = mysqli_fetch_assoc($queryOfProd);

  if(isset($_POST['price'])){

    if($_FILES['image'] && $_FILES['image']['error'] != 4){
      $file = $_FILES['image'];
      $file_name = uniqid() . $file['name'];
      $file_path = $file['tmp_name'];
      $file_size = $file['size'];
      
      $allwed_ext =['png', 'jpg','jpeg'];
      
      $file_ext = explode('.' ,$file_name);
      $file_ext_in_array = end($file_ext);
      $final_ext = strtolower($file_ext_in_array);
      
      if(! in_array($final_ext, $allwed_ext)){
          $all_errors['ext_type'] = "plz make sure file type is png jpg  jpeg";
      }
      
      if($file_size > 2097152){
          $all_errors['file_size']="plz make sure your file size lower than2 mega ";
      }
      
      move_uploaded_file($file_path ,"uploads/" .$file_name);
      if($Product_data['image'] != 'default_product.png'){
        unlink('uploads/' . $Product_data['image']);
      }
    }else{
        $file_name = $Product_data['image'] ;
    }

    $statment = "UPDATE products set name='$_POST[name]' , price='$_POST[price]' , image='$file_name' , discount='$_POST[discount]' where id = $Product_data[id]";
    $query = mysqli_query($connection , $statment);

    header('location:products.php');
  }
?>

<?php include "../layouts/header.php" ?>

<div class="col-12 row">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form method="post" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">product name</label>
                    <input type="text" name="name" value="<?= $Product_data['name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">product price</label>
                    <input type="text"  name="price"  value="<?= $Product_data['price'] ?>"  class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">upload image</label>
                    <input onchange="showPreview(event)" type="file"  name="image" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">discount</label>
                    <input type="number"  name="discount"  value="<?= $Product_data['discount'] ?>"  class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">save</button>
                <a href="products.php" type="submit" class="btn btn-primary">cancel</a>
            </form>
        </div>
    </div>
    <div class="col-sm-12 col-xl-6">
        <img id="img-prv" src="uploads/<?=$Product_data['image']?>" class=" img-thumbnail" alt="" srcset="">
    </div>
    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                let src = URL.createObjectURL(event.target.files[0]);
                let prv =document.getElementById('img-prv');
                prv.src = src;
            }
        }
    </script>
</div>
<?php include "../layouts/footer.php" ?>