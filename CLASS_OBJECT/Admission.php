<?php
class Admission {
          // attributes
    public $student;
    public $admission_fee;
    public $admit_at;
    public $discount;
    public $payment;
    public $processed_by;

    //parameterize constructor
    public function __construct($param_student,
    $param_admission_fee, $param_date, $param_dis,
     $param_payment, $param_processed_by)
    {
        $this->student = $param_student;
        $this->admission_fee = $param_admission_fee;
        $this->admin_at = $param_date;
        $this->discount = $param_dis;
        $this->payment= $param_payment;
        $this->processed_by = $param_processed_by;
    }
    //method
    public function showTotal($discount, $paid){
        $total_fee = $this->admission_fee;
        if($paid > $this->admission_fee){
            return "Fee exceeded";
        }else{
            $grand_total = $total_fee - $paid - $discount;
            return $grand_total;
        }
    }
}
$add = new Admission("Rohan", 30000, "2022-03-29", 500, 15000, "Rajendra Shakya");
echo "<br>";
echo $add->showTotal($add->discount, $add->payment);
?>