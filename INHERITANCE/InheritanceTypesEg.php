<?php
//multiple inheritance
class  Gadget{
    public $brand;
    public $price;

    public function  getGadgetInfo(){
        echo"Gadget Info";
    
    }
}
class Materials{
    public $materia_type;
    public function getMaterial(){
        echo "Material Info";
    }
}
class Manufacture{
    public $manufacture;
    public function getManufacturerInfo(){
        echo "Manufacture Info";
    }
}

//class  Band extends gadget,Materials,Manufacture {
    //public $type;
    //public $price;
}
?>