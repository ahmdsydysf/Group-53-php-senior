<?php 

$ul = '../';

// require_once "../../help.php";
require_once "../helper.php";
$statment = 'SELECT products.id , products.name , products.price , products.discount , products.image , categories.name AS category_name FROM products left JOIN categories ON categories.id = products.category_id';
$result = selectData($statment , 'test_gr_53');

// var_dump($result);
//   // 1-  connect
//   // 2- statment
//   $query = mysqli_query($connection , $statment);
?>

<?php include "../layouts/header.php" ?>

<div class="col-12">
<div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">products Table</h6>
                            <a href="products_add.php"  class="btn btn-info rounded-pill m-2">add new</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">category</th>
                                          
                                            <th scope="col">price</th>
                                            <th scope="col">image</th>
                                            <th scope="col">disc</th>
                                        
                                            <th scope="col">option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php while($products = mysqli_fetch_assoc($result['data'])) : ?>
                                        <tr>
                                            <th scope="row"><?= $products['id'] ?></th>
                                            <td><?= $products['name'] ?></td>
                                            <td><?= $products['category_name'] ?></td>
                                            <td><?= $products['price'] ?></td>
                                            <td><img src="uploads/<?= $products['image'] ?>" width="75" height="75" alt="" srcset=""></td>
                                            <td><?= $products['discount'] ?> % </td>
                                            <td style="display: flex;">
                                                <a href="productedit.php?id=<?= $products['id'] ?>" class="btn btn-info rounded-pill m-2">edit</a>
                                                <form action="productdelete.php?id=<?= $products['id'] ?>" method="post">
                                                <input type="hidden" name="product_id" value="<?= $products['id'] ?>">
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