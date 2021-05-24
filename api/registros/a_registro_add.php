<?php
    /** POST */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    $json = file_get_contents('php://input');
    $params = json_decode($json);
    
    include '../connection.php'; 

    mysqli_query($conn, "INSERT INTO registros(fechaInicio, 
                                        fechaFin, 
                                        precio,
                                        descuento,
                                        compra,
                                        idCoche,
                                        idCliente) 
                                        VALUES ('$params->fechaInicio',
                                            '$params->fechaFin',
                                            $params->precio,
                                            $params->descuento,
                                            '$params->compra',
                                            '$params->idCoche',
                                            '$params->idCliente')");

    class Result {}
    $response = new Result();
    $response->resultado = 'OK';
    $response->mensaje = 'registro guardado';
    
    //echo json_encode($response);  
    echo json_encode($json);  
?>