<?php 

$ul = '../';

require_once "../../help.php";
  // 1-  connect
  $statment = 'SELECT * FROM categories';
  // 2- statment
  $query = mysqli_query($connection , $statment);
?>

<?php include "../layouts/header.php" ?>

<div class="col-12">
<div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">category Table</h6>
                            <a href="category_add.php"  class="btn btn-info rounded-pill m-2">add new</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">image</th>
                                            <th scope="col">option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php while($category = mysqli_fetch_assoc($query)) : ?>
                                        <tr>
                                            <th scope="row"><?= $category['id'] ?></th>
                                            <td><?= $category['name'] ?></td>
                                            
                                            <td><img src="uploads/<?= $category['img'] ?>" width="75" height="75" alt="" srcset=""></td>
                                        
                                            <td style="display: flex;">
                                                <a href="categoryedit.php?id=<?= $category['id'] ?>" class="btn btn-info rounded-pill m-2">edit</a>
                                                <form action="categorydelete.php?id=<?= $category['id'] ?>" method="post">
                                                <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
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