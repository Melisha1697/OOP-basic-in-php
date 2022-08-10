<?php
class Address{
        //protected attributes
        protected $permanent_address_code;
        protected $temporary_address_code;
        //private attributes
        private $permanent_address;
        private $temporary_address;
        private $country;
        private $tole;
        private $street;
        private $district;

        public function getPermanent_code(){
            return $this->permanent_address_code;
        }
        public function setPermanent_code($param_permanent_address_code){
            $this->permanent_address_code = $param_permanent_address_code;
        }
        public function getTemporary_code(){
            return $this->temporary_address_code;
        }
        public function setTemporary_code($param_temporary_address_code){
            $this->temporary_address_code = $param_temporary_address_code;
        }
        public function getPermanent_address(){
            return $this->permanent_address;
        }
        public function setPermanent_address($param_permanent_address){
            $this->permanent_address = $param_permanent_address;
        }
        public function getTemporary_address(){
            return $this->temporary_address;
        }
        public function setTemporary_address($param_temporary_address){
            $this->temporary_address = $param_temporary_address;
        }
        public function getCountry(){
            return $this->country;
        }
        public function setCountry($param_country){
            $this->country = $param_country;
        }
        public function getTole(){
            return $this->tole;
        }
        public function setTole($param_tole){
            $this->tole = $param_tole;
        }
        public function getStreet(){
            return $this->street;
        }
        public function setStreet($param_street){
            $this->street = $param_street;
        }
        public function getDistrict(){
            return $this->district;
        }
        public function setDistrict($param_district){
            $this->district = $param_district;
        }       
}
$add = new Address();
$add->setPermanent_code(108);
echo $add->getPermanent_code();
echo "<br>";
$add->setTemporary_code(266);
echo $add->getTemporary_code();
echo "<br>";
$add->setPermanent_address("Lagankhel");
echo $add->getPermanent_address();
echo "<br>";
$add->setTemporary_address("Lalitpur");
echo $add->getTemporary_address();
echo "<br>";
$add->setCountry("Nepal");
echo $add->getCountry();
echo "<br>";
$add->setTole("Thaina");
echo $add->getTole();
echo "<br>";
$add->setStreet("Sugal");
echo $add->getStreet();
echo "<br>";
$add->setDistrict("Lalitpur");
echo $add->getDistrict();
?>