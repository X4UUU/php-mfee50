<?php
class Person
{
    public $name;
    public $moblie;
    private $sno;
    function __construct($name, $moblie, $sno)
    {
        $this->name = $name;
        $this->moblie = $moblie;
        $this->sno = $sno;
    }
    function getInfo()
    {
        return [
            "name" => $this->name,
            "moblie" => $this->moblie,
        ];
    }
    //getter 讀取器
    function getsno()
    {
        return $this->sno;
    }
    // setter 設定器
    function setSno($v)
    {
        $this->sno = $v;
    }
}
$p1 = new Person('David', '0918123123', 'abcd');

echo "$p1->name<br>";
echo "$p1->moblie<br>";
$p1->name = '皮卡丘';
echo json_encode($p1->getsno(), JSON_UNESCAPED_UNICODE);
echo '<br>';
echo $p1->getSno();
