<?php 
    /** GET */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    include '../connection.php'; 

    $query = mysqli_query($conn, "SELECT r.idRegistro, r.fechaInicio, r.fechaFin, r.precio, r.descuento, r.compra, co.idCoche, co.marca, co.matricula, c.idCliente, c.nombre, c.dni 
                                FROM registros r, coches co, clientes c
                                WHERE r.idCoche = co.idCoche AND r.idCliente = c.idCliente 
                                ORDER BY r.idRegistro");

    $res=[];
    while($row = mysqli_fetch_assoc($query) ) {
        $res[] = $row;
    }
    
    echo json_encode($res);
?>