<?php
    /** POST */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    $json = file_get_contents('php://input');
    $params = json_decode($json);
    
    include '../connection.php'; 

    mysqli_query($conn,"UPDATE coches SET matricula = '$params->matricula',
                                            marca = '$params->marca',
                                            color = '$params->color',
                                            km = '$params->km' 
                                        WHERE idCoche = $params->idCoche");

    class Result {}
    $response = new Result();
    $response->resultado = 'OK';
    $response->mensaje = 'cliente actualizado';
    
    echo json_encode($response);  
    //echo json_encode($json);  
?>