<?php
require_once "Functions.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $deleteIndex = $_POST['delete'];
    RemoveEmployee($deleteIndex);
    header("location:AllEmployees.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
$ID = $_POST['update'];
    $_SESSION['id'] = $ID;
    header("location:Update.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $Dname = trim(htmlspecialchars(htmlentities($_POST['Dname'])));
    $Ename = trim(htmlspecialchars(htmlentities($_POST['Ename'])));
    $Eemail = trim(htmlspecialchars(htmlentities($_POST['Eemail'])));
    $Age = $_POST['Eage'];
    // validations 
    // name => required , min:3 , max:15
    // email => required , max:30 , email

    if (empty($Dname)) {
        $_SESSION['error'] = 'Please write department name';
    } elseif (strlen($Dname) < 3) {

        $_SESSION['error'] = 'Department Name must be grater than 3 ';

    } elseif (strlen($Dname) > 30) {

        $_SESSION['error'] = 'Department Name must be Shorter than 30 ';

    }
    if (empty($Ename)) {
        $_SESSION['error'] = 'Please write your name';
    } elseif (strlen($Ename) < 3) {

        $_SESSION['error'] = 'Name must be grater than 3 ';

    } elseif (strlen($Ename) > 30) {

        $_SESSION['error'] = 'Name must be Shorter than 30 ';

    }
    if (empty($Age)) {
        $_SESSION['error'] = 'Please write your Age';
    } elseif ($Age < 20 || $Age > 60) {

        $_SESSION['error'] = 'Your Age Should be between 20 to 60 ';

    }
    if (empty($Eemail)) {
        $_SESSION['error'] = 'Please write your email';
    } elseif (!filter_var($Eemail, FILTER_VALIDATE_EMAIL)) {

        $_SESSION['error'] = 'Enter a Correct Email  ';

    } elseif (strlen($Eemail) > 30) {

        $_SESSION['error'] = 'Your email must be Shorter than 30 ';

    }

    if (!isset($_SESSION['error'])) {
        $_SESSION['success'] = 'Done';
        $Employee = [
            'Ename' => $Ename,
            'Dname' => $Dname,
            'Eemail' => $Eemail,
            'Eage' => $Age,
            'Enroled_at' => date('Y-m-d H:i:s')

        ];
        UpdateEmployee($ID,$Employee);
        header('location:Update.php');
    }

}