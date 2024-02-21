<?php


class Validation
{

    private $errors = [];
    private $inputs = [];
    const PREFIX_FUNC = "Val";
    private $add_restrict = null;


    // define all fields 
    public function __construct()
    {
        $this->inputs();
    }


    // check and applay all the rules 
    public function check(array $data)
    {
        // print_r($data);
        // die;
        foreach ($data as $name => $rules) {
            $allRules = $this->getRules($rules);
      
          
            foreach ($allRules as $rule) {
//"min:2"
                if (str_contains($rule, ":")) {
                    $complex_rule = explode(":", $rule);
                    //         print_r($complex_rule);
                    // die;
                    $rule = $complex_rule[0];

                    //         print_r($rule);
                    // die;
                    $this->add_restrict = $complex_rule[1];
                    //         print_r($this->add_restrict);
                    // die;
                }
                // check if method with rule name is exist or not
            
                if (!method_exists($this, $rule . self::PREFIX_FUNC)) {

                    $this->errors = ["{$rule} is not exists"];
                    return false;
                } else {
                    // fire the method 
                    call_user_func_array([$this, $rule . self::PREFIX_FUNC], [$name]);
                }
            }
        }

        // check if any errors are exists
        if (empty($this->errors)) {
            return true;
        }
        return false;
    }


    // return all errors 
    public function getErrors()
    {
        return $this->errors;
    }


    // explode errors 
    public function getRules($rules)
    {
        $rules = explode("|", $rules);
        return $rules;
    }

    // get all inputs and sanitize these inputs 
    public function inputs()
    {//price=200
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            foreach ($_POST as $name => $value) {
                $this->inputs[$name] = $this->sanInput($value);
               
            }
        }
    }


    // sanitize input before validation
    public function sanInput($value)
    {
        return htmlspecialchars(htmlentities(trim($value)));
    }


    public function requiredVal($name)
    {

        
        $val = $this->inputs[$name];
        if (empty($val)) {
            $this->errors[] = "{$name} is required";
        }
    }

    public function emailVal($name)
    {
        $val = $this->inputs[$name];
        if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "{$name} must be a valid email";
        }
    }

    public function stringVal($name)
    {
        $val = $this->inputs[$name];

        if (!preg_match("/^[a-zA-Z .]+$/", $val)) {
            $this->errors[] = "{$name} must be an string";
        }
    }
    public function numricVal($name)
    {
        $val = $this->inputs[$name];

        if (!is_numeric($val)) {
            $this->errors[] = "{$name} must be numeric";
        }
    }

    public function urlVal($name)
    {
        $val = $this->inputs[$name];

        if (!filter_var($val, FILTER_VALIDATE_URL)) {
            $this->errors[] = "{$name} must be a valid URL";
        }
    }


    public function minVal($name)
    {
        $val = $this->inputs[$name];

        if (strlen($val) < $this->add_restrict) {
            $this->errors[] = "{$name} must be smaller than {$this->add_restrict} chars";
        }
    }


    public function maxVal($name)
    {
        $val = $this->inputs[$name];
        if (strlen($val) > $this->add_restrict) {
            $this->errors[] = "{$name} must be bigger than {$this->add_restrict} chars";
        }
    }
}

// if (isset($_POST['name'])) {

//     $validation = new Validation();

//     $validation->check([
//         'name' => 'required|string|min:5',
//         'email' => 'required|email'
//     ]);
//     echo "<pre>";
//     var_dump($validation->getErrors());
//}
