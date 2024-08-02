<?php 

$ul = '../';

require_once "../../help.php";



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
    }else{
      $file_name = 'default_product.png';
    }

    $statment = "Insert into products ( name , price , image , discount) values ('$_POST[name]' , '$_POST[price]' , '$file_name' , '$_POST[discount]' )";
    $query = mysqli_query($connection , $statment);

    header('location:products.php');
  }
?>

<?php include "../layouts/header.php" ?>

<div class="col-12">
<div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form method="post" enctype="multipart/form-data" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">product name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">product price</label>
                    <input type="text"  name="price" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">upload image</label>
                    <input type="file"  name="image" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">discount</label>
                    <input type="number"  name="discount" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">add</button>
                <a href="products.php" type="submit" class="btn btn-primary">cancel</a>
            </form>
        </div>
    </div>
</div>
<?php include "../layouts/footer.php" ?>