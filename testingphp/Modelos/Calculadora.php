<?php
namespace    Modelos;
class Calculadora{
    public function __construct()
    {     
    }
    public function suma($a,$b){
        return $a+$b;
    }

    public function validardatos($x,$n){
        $flag = false;
        if(is_numeric($n) && is_numeric($x)){
            $flag = true;
        }
        return $flag;
    }
    public function calcularFactorial($n){
        if ($n == 0 || $n == 1) {
            return  1;
        }
        $result = 1;
        if($n<0){
            for ($i=$n; $i < 0; $i++) { 
              $result = $i*$result;  
            }
        }
        if($n>1){
            for ($i=1; $i >= $n; $i++) { 
              $result = $i*$result;  
            }
        }
        return $result;
    }
    public function calcularCombinatoria($x,$n){
        if($this->validardatos($x,$n)){
            $result = ($this->calcularFactorial($x))/$this->calcularFactorial($x)*$this->calcularFactorial($n-$x);
        }
        else{
            $result= false;
        }
        return $result;
    }

}