<?php


        $validation = new Validation();
    
        $validation->check(
            [
                "name" => "required|min:3",
                "price" => "required|numric",
                "url" => "required|url"
            ]
            );