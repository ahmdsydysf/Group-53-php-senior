<?php 

$ul = '../';

require_once "../../help.php";
  // 1-  connect
  $statment = 'SELECT * FROM users';
  // 2- statment
  $query = mysqli_query($connection , $statment);
?>

<?php include "../layouts/header.php" ?>

<div class="col-12">
<div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">users Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                          
                                            <th scope="col">Email</th>
                                            <th scope="col">password</th>
                                        
                                            <th scope="col">option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php while($user = mysqli_fetch_assoc($query)) : ?>
                                        <tr>
                                            <th scope="row"><?= $user['id'] ?></th>
                                            <td><?= $user['username'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['password'] ?></td>
                                            <td style="display: flex;">
                                            <a href="useredit.php?id=<?= $user['id'] ?>" class="btn btn-info rounded-pill m-2">edit</a>
                                            <form action="userdelete.php?id=<?= $user['id'] ?>" method="post">
                                              <input type="hidden" name="user" value="<?= $user['id'] ?>">
                                              <button  class="btn btn-primary rounded-pill m-2">delete</button>
                                            </form>
                                            </td>

                                        </tr>
            <?php endwhile ;?>                
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
<?php include "../layouts/footer.php" ?>