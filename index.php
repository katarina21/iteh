<?php
//ucitava se katalog i korpa 
  $proizvodi = array(
    array(
        'id'=>1,
        'naziv'=>"Laptop",
        'cena'=>800
    ),
    array(
        'id'=>2,
        'naziv'=>"Mis",
        'cena'=>30
    ),
    array(
        'id'=>3,
        'naziv'=>"Slusalice",
        'cena'=>200
    ),

);
    session_start();
    if(!isset($_SESSION["korpa"])){
        $_SESSION["korpa"]=array();
        
    }

    if(isset($_POST["submit"]) && $_POST["submit"]=="Kupi"){
        $_SESSION["korpa"][]=$_POST["id"];
         header("Location: ."); //ostani na istoj strani
        exit();
    }
    if(isset($_POST["submit"]) && $_POST["submit"]=="Isprazni"){
         unset($_SESSION["korpa"]);
         header("Location: ?vidi_korpu"); //ostani na istoj strani
        exit();
    }
    if(isset($_GET["vidi_korpu"])){
        $korpa= array();
        $ukupno = 0;
        foreach($_SESSION["korpa"] as $id){
            foreach($proizvodi as $pr){
                if($pr['id']==$id){
                    $korpa[]=$pr;
                    $ukupno+=$pr['cena'];
                    break;
                }
            }

        }
        include("korpa.php");
         exit();
    }
    include("katalog.php");
?>