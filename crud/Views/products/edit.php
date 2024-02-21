<?php
include_once("./../../App/Config.php");

include_once(MAIN_PATH . "/Views/layouts/header.php");
?>
<div class="container m-auto mt-5">
  <div class="card">
    <a href="<?php echo URL . 'Views/products/index.php' ?>" class="btn btn-success">Back</a>
    <h1 class="text-center bg-body-secondary">Update Product</h1>

   
    <form action="" method="post" class=" p-3">
      <input type="text" hidden name="id" value="">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NAME</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value="">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">URL</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="url" value="">
      </div>
      <div class="mb-3 text-end">

        <button type="submit" class="btn btn-primary px-5">Update</button>
      </div>
    </form>




  </div>
</div>



<?php


include_once(MAIN_PATH . "/Views/layouts/footer.php");
?>