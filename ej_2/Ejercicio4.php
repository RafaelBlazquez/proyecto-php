<?php 
    $usuarios = array(
        "user1" => array (
            "nombre" => 'Ane',
            "apellidos" => 'López',
            "password" => '123Abc'

        ),
        "user2" => array(
            "nombre" => 'Amaia',
            "apellidos" => 'Otsoa',
            "password" => '456Xyz'

        )
    );
    $usuario = $_GET["usuario"];
    $contrasena = $_GET["contrasena"];

        $inicioCorrecto = validarEntrada($usuario,$contrasena)? validarDatos($usuarios,$usuario,$contrasena) :"";
        if ($inicioCorrecto){
            $mensaje = "Login correcto ";
        }
    
    function validarEntrada($usuario,$contrasena){
        if (isset($usuario)&&(isset($contrasena))){
            if($usuario == "" || $contrasena == ""){
                return false;
            }
            else{
                return true;
            }
        }
        else
            return false;
    }
    function validarDatos($usuarios,$usuario,$contrasena){
        $posicion = array_search($usuario,$usuarios);
        if(isset($posicion)){
            if ($contrasena == $usuarios[$usuario]["password"]){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return true;
        }
    }



    
require "Ejercicio4.view.php";