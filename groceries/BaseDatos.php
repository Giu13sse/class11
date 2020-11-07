<?php 

class BaseDatos {

//atributos == variables
public $usuarioBD="root";
public $passwordBD="";



//funcion especial que se llama constructor
public function __construct(){}


//metodos== funciones

    public function conectarBD(){   

            try{
       
            $infoDB="mysql:host=localhost;dbname=tienda";
            $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);

            }   catch(PDOException $error){

            echo($error->getMessage());
            }
            }
    public function addData($searchSQL){
            $conexionBD=$this->conectarBD();

            $consultingData= $conexionBD->prepare($searchSQL);

            $output=$consultingData->execute();

            if ($output){
                echo("Data sent successfully");
                   }
            else{
                echo("Something went wrong");
            }       
            }   
    public function searchData($searchSQL){
        $conexionBD=$this->conectarBD();
        $consultingData=$conexionBD->prepare($searchSQL);
        $consultingData->setFetchMode(PDO::FETCH_ASSOC);
        $consultingData->execute();


        return($consultingData->fetchAll());
    }
    }
  





?>