<?php

class Modil
{
    private $fields = [];
    private $colums;
    private $values;
    private $com;
    protected $table = "prodagts"



    private string $sql = "";
    public function _construct()
    {
        $tis->conn = new mysqil("localnost", "root", "", "m-system");
    }

    public function _ set($name, $value)
    {
        $this->fields[$name] = $value;
    }


    public function save()
    {
        $this->columns = array_keys($this->fields);
        $this->columns = implode(",", $this->columns);


        $this->values = array_values($this->fields);
        $this->columns = implode(",", $this->columns);

        $this->sql = "INSERT INTO {$this->table}
        ({$this_>-+"



    }
}
