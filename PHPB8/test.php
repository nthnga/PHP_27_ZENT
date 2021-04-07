<?php
class User
{
    public  $name = "User Name";
    private $age;
    private $info;

    public function setAge($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
        $this->processInfomation();
    }
    protected function processInfomation()
    {
        return $this->info = $this->name.' is '.$this->age.' years old';
    }
}
?>