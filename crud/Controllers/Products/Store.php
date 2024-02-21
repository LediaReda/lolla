<?php
include_once("../../App/Config.php");
include_once(MAIN_PATH . "App/Database.php");
include_once(MAIN_PATH . "App/Session.php");
include_once(MAIN_PATH . "App/Validation.php");


if (isset($_POST['name'])) {



    $validation = new Validation();

    $validation->check(
        [
            "name" => "required|min:3",
            "price" => "required|numric",
            "url" => "required|url"
        ]
    );

    if ($validation->getErrors()) {
        Session::set("errors", $validation->getErrors());

        // print_r(Session::get("errors"));
        // die;
        header("Location:../../Views/products/create.php");
        die;
    }

    foreach ($_POST as $key => $value) {
        $$key = $validation->sanInput($value);
    }
    $database = new Database();


    $result =  $database->insert("products", [
        "name" => $name,
        "price" => $price,
        "url" => $url
    ]);

    if ($result) {
        Session::set("success", 'product stored successfully');
    } else {
        Session::set("error", 'failed');
    }

    header("Location:../../Views/products/index.php");
}
