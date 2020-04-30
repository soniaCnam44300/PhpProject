<?php

class panier{
    public function __construct(){
        if (!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panierPlein'])){
            $_SESSION['panierPlein'] = array(); 
        }
        if(!isset($_SESSION['panierReduit'])){
            $_SESSION['panierReduit'] = array(); 
        }

        if(!isset($_SESSION['panierTest'])){
            $_SESSION['panierTest'] = array(); 
        }

        if(isset($_POST['panierPlein'])){
            $this->calc();
        }

        if(!isset($_SESSION['sousTotal'])){
            $_SESSION['sousTotal'] = array(); 
        }
       
    
    }
    public function total(){
        echo 'prix total';
    }
  
    public function add($product_id, $nom){
       // var_dump($product_id);
       if(isset($_SESSION['panierPlein'][$nom])){
            if(isset($_SESSION['panierPlein'][$nom][$product_id])){
                $_SESSION['panierPlein'][$nom][$product_id]++; 
            }else {
                $_SESSION['panierPlein'][$nom][$product_id]=0;
            } 
        }else {
                $_SESSION['panierPlein'][$nom][$product_id]=0;
            }     
        
        }

    public function calc()
    {
        if(!isset($_SESSION['panierPlein'])){
            $_SESSION['panierPlein'] = array(); 
        }
       foreach($_SESSION['panierPlein'] as $value_id => $quantite){
        $_SESSION['panierPlein'][$value_id] = $_POST['panierPlein']['quantite'][$value_id];  
        $_SESSION['panierReduit'][$value_id] = $_POST['panierPlein']['quantite1'][$value_id];  
        }
    }

    public function del($product_id){
        unset($_SESSION['panierPlein'][$product_id]);
    }

   

   
}



?>