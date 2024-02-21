<?php require_once 'Functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include("Nav.php"); 
                    $Employees = GetData();
                if(!empty($Employees)):
    ?>;
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Department Name</th>
                <th scope="col">Registration Date</th>
                <th scope="col">#</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Employees as $id => $Employee):
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $id; ?>
                    </th>
                    <td>
                        <?php echo $Employee['Ename'] ?>
                    </td>
                    <td>
                        <?php echo $Employee['Eemail'] ?>
                    </td>
                    <td>
                        <?php echo $Employee['Eage'] ?>
                    </td>
                    <td>
                        <?php echo $Employee['Dname'] ?>
                    </td>
                    <td>
                        <?php echo $Employee['Enroled_at'] ?>
                    </td>
                    <td>
                    <form method="POST"  action="Delete&Update.php" >
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        <input type="hidden"  name="delete" value="<?php echo $id ;?>">
                    </form>
                    <form method="POST"  action="Delete&Update.php" >
                        <button type="submit" class="btn btn-outline-warning">Update</button>
                        <input type="hidden"  name="update" value="<?php echo $id ;?>">
                    </form>
                    </td>
                </tr>
            <?php endforeach;
            else:
                echo 'There is no data to show';
            endif;
            ?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>
