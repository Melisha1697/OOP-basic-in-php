<?php
class Address{
//private attributes
    private $address;
    private $country;
    private $state;
    private $district;
    private $city_or_village;
    private $street;
    private $wardno;
    private $house_no;
    private $tole;

    public function getaddress(){
        return $this->address;
    }  
    public function setaddress($param_address){
    $this->address=$param_address;
    }  
    public function getcountry(){
    return $this->country;
    }  
    public function setcountry($param_country){
    $this->Temporary_address=$param_country;
    }  
    public function getstate(){
    return $this->state;
    }  
    public function setstate($param_state){
    $this->state=$param_state;
    }  
    public function getdistrict(){
    return $this->district;
    }  
    public function setdistrict($param_district){
    $this->district=$param_district;
    }  
    public function getcity_or_village(){
    return $this->city_or_village;
    }  
    public function setcity_or_village($param_city_or_village){
    $this->city_or_village=$param_city_or_village;
    } 

    public function getstreet(){
    return $this->street;
    }  
    public function setstreet($param_street){
    $this->street=$param_street;
    } 
    public function getwardno(){
    return $this->wardno;
    }  
    public function setwardno($param_wardno){
    $this->wardno=$param_wardno;
    } 
    public function gethouse_no(){
    return $this->house_no;
    }  
    public function sethouse_no($param_house_no){
    $this->house_no.=$param_house_no;
    } 
    public function gettole(){
    return $this->tole;
    }  
    public function settole($param_tole){
        $this->tole=$param_tole;
        } 
        }
        $add =new Address();
        $add->setaddress("Imadol");
        echo $add->getaddress();
        echo "<br>";
        $add->setcountry("Nepal");
        echo $add->getcountry();
        echo "<br>";
        $add->setstate("state_no_3");
        echo $add->getstate();
        echo "<br>";
        $add->setdistrict("Lalitpur");
        echo $add->getdistrict();
        echo "<br>";
        $add->setcity_or_village("Mahalaxmistha");
        echo $add->getcity_or_village();
        echo "<br>";
        $add->setstreet("3");
        echo $add->getstreet();
        echo "<br>";
        $add->setwardno("1");
        echo $add->getwardno();
        echo "<br>";
        $add->sethouse_no("123");
        echo $add->gethouse_no();
        echo "<br>";
        $add->settole("Santi");
        echo $add->gettole();
