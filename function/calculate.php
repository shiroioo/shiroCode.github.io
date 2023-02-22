<?php



require_once 'DB/connect.php';


/* sem 1*/
$sql = "SELECT * FROM pelajar;";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    $n1=0;
    while ($row = mysqli_fetch_assoc($result)){
        $hadir = $row['BilHadir'];
        $n1 = $n1 + $hadir;

        
    }
    
}
/* sem 2 */
$sql = "SELECT * FROM pelajar2;";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    $n2=0;
    while ($row = mysqli_fetch_assoc($result)){
        $hadir = $row['BilHadir'];
        $n2 = $n2 + $hadir;

        
    }
    
}

/* sem 3 */
$sql = "SELECT * FROM pelajar3;";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    $n3=0;
    while ($row = mysqli_fetch_assoc($result)){
        $hadir = $row['BilHadir'];
        $n3 = $n3 + $hadir;

        
    }
    
}

$n = $n1+$n2+$n3;

