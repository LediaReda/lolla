<?php

function GetData()
{
    $Employees = [];

    if (file_exists("Employees.json")) {
        $Employees = json_decode(file_get_contents("Employees.json"), true);
    }

    return $Employees;
}

function SaveEmployee($Employees)
{
    $json = json_encode($Employees, JSON_PRETTY_PRINT);
    file_put_contents("Employees.json", $json);
}

function AddEmployee($employee)
{
    $Employees = GetData();
    $Employees[] = $employee;

    SaveEmployee($Employees);
}

function RemoveEmployee($employeeID)
{
    $Employees = GetData();
    $employeeID = (int) $employeeID; // Ensure it's an integer

    if (isset($Employees[$employeeID])) {
        unset($Employees[$employeeID]);
        SaveEmployee($Employees);

    }

}

function UpdateEmployee($EmployeeID, $NewEmployee)
{
    $Employees = GetData();
    if (isset($Employees[$EmployeeID])) {
     $Employees[$EmployeeID]  ['Ename'] = $NewEmployee['Ename'];
      $Employees[$EmployeeID] ['Eemail'] = $NewEmployee['Eemail'];
      $Employees[$EmployeeID] ['Eage'] = $NewEmployee['Eage'];
       $Employees[$EmployeeID]['Dname'] = $NewEmployee['Dname'];
    }
     
    SaveEmployee($Employees);

}
?>