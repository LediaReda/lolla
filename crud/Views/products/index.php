<?php
include_once("./../../App/Config.php");
include_once(MAIN_PATH . "/Views/layouts/header.php");
include_once(MAIN_PATH . "/App/Database.php");
include_once(MAIN_PATH . "/App/Session.php");
?>
<div class="container m-auto mt-5">
  <div class="card">
    <div class="py-2 text-end">
      <a href="<?php echo URL . 'Views/products/create.php' ?>" class="btn btn-success">Add Product</a>
    </div>
    <?php

    if (Session::has("success")) : ?>
      <div class="alert alert-success">
        <p><?= Session::get("success") ?></p>

      </div>
    <?php
      Session::remove("success");

    endif;
    if (Session::has("error")) : ?>
      <div class="alert alert-danger">
        <p><?= Session::get("error") ?></p>

      </div>


    <?php
      Session::remove("error");

    endif;

    $database = new Database();
    $products = $database->getAll("products") ?? [];
    ?>
    <h1 class="text-center bg-body-secondary">All Product</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">price</th>
          <th scope="col">image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $index = 1;
        foreach ($products as $product) :
        ?>
          <tr>
            <th scope="row bg-info"></th>
            <td><?= $index ?></td>
            <td><?= $product['name'] ?></td>
            <td>
              <?= $product['price'] ?>$
            </td>
            <td>
              <img src="<?= $product['url'] ?>" alt="" srcset="" style="width:50px; height:50px">

            </td>
            <td class="d-flex justify-content-between">
              <a href="<?php echo URL . 'Views/products/edit.php?id=' . $product['id'] ?>" class="btn btn-info">edit</a>
              <a href="<?php echo URL . 'Controllers/Products/delete.php?id=' . $product['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>



<?php


include_once(MAIN_PATH . "/Views/layouts/footer.php");
?>