<?php
    include_once 'dbconnect.php';
        
        if(isset($_POST['update'])){
            $crateNum = $_POST['crateNum'];
        settype($crateNum, 'integer');
        $sideOne = (int)$_POST['sideOne'];
        $sideTwo = (int)$_POST['sideTwo'];
        $qty = (int)$_POST['qty'];
        $type = $_POST['type'];
        $material = $_POST['material'];
        $tir = (int)$_POST['tir'];
        $bend = (int)$_POST['bend'];
        $crack = (int)$_POST['crack'];
        $color = (int)$_POST['color'];
        $ding = (int)$_POST['ding'];
        $short = (int)$_POST['short'];
        (int)$rejects = $tir+$bend+$crack+$color+$ding+$short;
        $total = 48-$rejects;

       
        

        
        

        $sql = "UPDATE newcrate SET qty = $total, sideOne = $sideOne, sideTwo = $sideTwo, kind = '$type', material = '$material', tir = $tir, bend = $bend, crack = $crack, color = $color, ding = $ding, short = $short WHERE crateNum = $crateNum;";

        mysqli_query($conn, $sql);
        }else{
            (int)$crateNum = $_POST['crateEdit'];

            $sql2 = "DELETE FROM newcrate WHERE crateNum = $crateNum;";
            mysqli_query($conn, $sql2);
        }
        
    
  
    
        header('Location: ./viewCrate.php');
    
?>



