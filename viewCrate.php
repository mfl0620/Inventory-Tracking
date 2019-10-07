<?php
    include 'header.php';
    
?>

<!-- For each in DB, display with php. Each card is a form with submit, leading to the edit window
with information from DB "Where number is = value in form -->
<div class="containerFluid">
<h3>Crate View</h3>
<div class="row">
    <!--Start SELECT-->
<?php
    $sql = "SELECT * FROM newcrate;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
           echo "
           <div class=\"col-md-3\">
           <form method=\"POST\" action=\"editCrate.php\">
            <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                    <h5>Crate #: ".$row['crateNum']."</h5>
                    <h5>Type: ".$row['kind']."</h5>
                    <h5>Material: ".$row['material']."</h5>
                    <h5>Qty: ".$row['qty']."</h5>
                    
                    </div>
                    <div class=\"col-sm-6\">
                        <h5>1-Side: ".$row['sideOne']."</h5>
                        <h5>2-Side: ".$row['sideTwo']."</h5>
                    </div>
                    <input style=\"display:none\" name=\"crateEdit\" value=\"".$row['crateNum']."\" type=\"checkbox\" checked>
                    <input class=\"btn btn-primary btn-md\" value=\"Edit\" type=\"submit\">
                    <a href=\"./editCrate.php\"><button class=\"btn btn-primary btn-md\">View</button></a>
                </div>
            
            </div> 
            </div>
            </form>
        </div>
        ";
        }
    }
?>

    
</div>
</div>
<?php
    include 'footer.php';
?>