<?php 
    /** GET */
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header('Content-Type: application/json');
    
    include '../connection.php'; 

    $query = mysqli_query($conn, "SELECT MONTH(fechaInicio) AS Mes, SUM(precio) As Total FROM registros
                                    GROUP BY Mes");

    $res=[];
    while($row = mysqli_fetch_assoc($query) ) {
        $res[] = $row;
    }
    
    echo json_encode($res);
?>