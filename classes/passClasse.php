<?php

class pass{
    public function __construct(){
        if (!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['plein'])){
            $_SESSION['plein'] = array(); 
        }
        if(!isset($_SESSION['reduit'])){
            $_SESSION['reduit'] = array(); 
        }

        

        if(isset($_POST['plein'])){
            $this->calc();
        }

        if(!isset($_SESSION['sousTotal'])){
            $_SESSION['sousTotal'] = array(); 
        }
       
    
    }
    public function total(){
        echo 'prix total';
    }
  
    public function add($product_id){
       // var_dump($product_id);
        if(isset($_SESSION['plein'][$product_id])){
            $_SESSION['plein'][$product_id]++; 
        }else{
            $_SESSION['plein'][$product_id]=0;
        }
       
    }

    public function calc()
    {
        if(!isset($_SESSION['plein'])){
            $_SESSION['plein'] = array(); 
        }
       foreach($_SESSION['plein'] as $value_id => $quantite){
        $_SESSION['plein'][$value_id] = $_POST['plein']['quantite'][$value_id];  
        $_SESSION['reduit'][$value_id] = $_POST['plein']['quantite1'][$value_id];  
        }
    }

    public function del($product_id){
        unset($_SESSION['plein'][$product_id]);
    }

   

   
}



?>