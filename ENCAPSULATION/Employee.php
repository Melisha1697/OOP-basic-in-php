
<!--public-->
<!--private-->
<!--protected-->
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
    
public function getSalary(){
    return $this->salary;
}

public function setsalary($param_salary){
$this->salary =$param_salary;
}

public function getEmpCode(){
return $this->emp_code;
}
public function setEmpCode($param_emp_code){
    $this->emp_code=$param_emp_code;
    }  
    
    public function getContact(){
        return $this->Contact;
        }  
        public function setContact($param_contact){
            $this->Contact=$param_contact;
            }  
            public function getemail(){
                return $this->email;
                }  
                public function setemail($param_email){
                    $this->email=$param_email;
                    }  
}

$emp =new Employee();
//accessing public attributes
$emp->name ="Mohan Lal";
echo $emp->name;
//accessing protected attributes
//we  cannot access the private and protected attributes.
//directly therefore to access such attributes
//we must go through public method
//which are known as access modiier
//e.g. geeter and setter method
$emp->setsalary(25000.00);
echo $emp->getsalary();
echo "<br>";
//accessing private attributes
$emp->setemail("mohan123@gmail.com");
echo $emp->getemail();

//creating public methods for private and public 
//attributes
//note:-getter method to acess data
//setter method to store the data
//getter method are of return type whereas
//setter method are of non return type
//getter method takes no arguments
//setter method takes arguments


?>