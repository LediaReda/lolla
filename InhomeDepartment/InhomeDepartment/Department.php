<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <?php include("Nav.php"); ?>
  <div class="container">
    <?php if (isset($_SESSION["error"])): ?>
      <div class="alert alert-danger">
        <?php
        echo "Error <br>" . $_SESSION["error"];
        unset($_SESSION["error"]); //To close the error alert after refressiong the page
        ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION["success"])): ?>
      <div class="alert alert-success">

        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
      </div>
    <?php endif; ?>
    <form method="POST" action="Validation.php" class="border p-3 my-5">
      <div class="mb-3">
        <label class="form-label"> Department Name</label>
        <input type="text" class="form-control" name="Dname">
      </div>
      <div class="mb-3">
        <label class="form-label">Employee Name</label>
        <input type="text" class="form-control" name="Ename">
      </div>
      <div class="mb-3">
        <label class="form-label">Employee Email</label>
        <input type="email" class="form-control" name="Eemail">
      </div>
      <div class="mb-3">
        <label class="form-label">Employee Age</label>
        <input type="number" class="form-control" name="Eage">
        <div class="mb-3">
          <input type="submit" class="form-control bg-primary" value="Save">
        </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>