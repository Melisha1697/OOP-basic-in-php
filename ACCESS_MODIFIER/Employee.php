<!-- public -->
<!-- protected -->
<!-- private -->
<?php
class Employee{
    //public attributes
    public $name;
    public $address;
    public $joined_at;
    
    //protected attributes
    protected $salary;
    protected $emp_code;
    //private attributes
    private $email;
    private $contact;

    //creating public method for private and public
    //attributes
    //note: getter method is to access data
    //setter method are used to store data
    //getter methods are of return type whereas
    //setter method are of non return type
    //getter method takes no arguments
    //setter methods takes arguments
    
    public function getSalary(){//return salary
        return $this->salary;
    }
    //setter method for salary
    public function setSalary($param_salary){
        $this->salary = $param_salary;
    }

    public function getEmpCode(){
        return $this->emp_code;
    }
    public function setEmpCode($param_emp_code){
        $this->emp_code = $param_emp_code;
    }
    public function getContact(){
        return $this->contact;
    }
    public function setContact($param_contact){
        $this->contact = $param_contact;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($param_email){
        $this->email = $param_email;
    }
}
$emp = new Employee();
//accessing public attributes
$emp->name = "Melisha Shakya";
echo $emp->name;
echo "<br>";
//accessing protected attributes
//we cannot access private and public attributes
//directly therefore to access such attributes
//we must go through public method
//which are known as access modifier
//eg. getter(for accessing) and setter(for storing data) method
$emp->setSalary(90000);
echo $emp->getSalary();
echo "<br>";
//Accessing private attributes
$emp->setContact(9813601697);
echo $emp->getContact();
echo "<br>";
//accessing private attributes
$emp->setEmail("melissashkaya@gmail.com");
echo $emp->getEmail();
?>