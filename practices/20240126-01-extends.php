<?php
class Person
{
    public $name;
    public $mobile;
    private $sno;
    function __construct($name, $mobile)
    {
        $this->name = $name;
        $this->mobile = $mobile;
    }
    function getInfo()
    {
        return [
            "name" => $this->name,
            "moblie" => $this->mobile,
        ];
    }
}
class Employee extends Person
{
    public $salary;
    function __construct($name, $mobile, $salary = 35000)
    {
        parent::__construct($name, $mobile);
        $this->salary = $salary;
    }
    function getInfo()
    {
        $info = parent::getInfo();
        $info['salary'] = $this->salary;
        return $info;
    }
}
$p1 = new Employee('David', '0918123123', 'abcd');
#繼承所有公開的

echo json_encode($p1->getInfo());
echo '<br>';
