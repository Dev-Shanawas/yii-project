<?php 

class testForm extends CFormModel{


    public $email;
    public $amount ;
    public $interest ; 
    public $months ; 


    public function rules(){
        return array(  
                array('email , amount ,interest, months' , 'required'),
                array('amount, interest, months', 'numerical', 'integerOnly' => true),

        );
    }
    
}