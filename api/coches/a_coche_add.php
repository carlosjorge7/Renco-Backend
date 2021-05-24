<?php
    /** POST */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    $json = file_get_contents('php://input');
    $params = json_decode($json);
    
    include '../connection.php'; 

    mysqli_query($conn, "INSERT INTO coches(matricula, 
                                        marca, 
                                        color,
                                        km) 
                                        VALUES ('$params->matricula',
                                            '$params->marca',
                                            '$params->color',
                                            '$params->km')");

    class Result {}
    $response = new Result();
    $response->resultado = 'OK';
    $response->mensaje = 'coche guardado';
    
    // echo json_encode($response);  
    echo json_encode($json);  
?>