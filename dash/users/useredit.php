<?php 

$ul = '../';

require_once "../../help.php";
  // 1-  connect
  $statment = "SELECT * FROM users WHERE id = $_GET[id]";
  // 2- statment
  $query = mysqli_query($connection , $statment);

  $user = mysqli_fetch_assoc($query);


  if(isset($_POST['email'])){
    $statment = "UPDATE users SET username='$_POST[username]' ,email='$_POST[email]',password='$_POST[password]' WHERE id =  $_GET[id]";
    mysqli_query($connection , $statment);
    header('location:users.php');
  }
?>

<?php include "../layouts/header.php" ?>

<div class="col-12">
<div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form method="post" >
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" value="<?= $user['email']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text"  name="username" value="<?= $user['username']?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text"  name="password" value="<?= $user['password']?>" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>
<?php include "../layouts/footer.php" ?>