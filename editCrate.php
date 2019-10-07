<?php
    include 'header.php';
?>
<!--  Test 2 PHP options. 1 enter operator as variable in sql query and set to != if field is empty. 2 form to autofill based upon sql data, test using value tag for input. Also see about preselct option for select input-->
<div class="containerFluid">
<?php
    $crateEdit = $_POST['crateEdit'];
    settype($crateEdit, 'integer');
    $sql = "SELECT * FROM newcrate WHERE crateNum = $crateEdit;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
  
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <form method=\"POST\" action=\"edit.php\">
            <div class=\"container\">
                <h1>Crate Info</h1>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \">Crate #</span>
                     </div>
                    <input name=\"crateNum\" type=\"number\" class=\"form-control \" placeholder=\"".$row['crateNum']."\" value=\"".$row['crateNum']."\">
                    </div>
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \">1-Side</span>
                     </div>
                    <input name=\"sideOne\" type=\"number\" class=\"form-control \" placeholder=\"".$row['sideOne']."\" value=\"".$row['sideOne']."\">
                    </div>
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \" >2-Side</span>
                     </div>
                    <input name=\"sideTwo\" type=\"number\" class=\"form-control \" placeholder=\"".$row['sideTwo']."\" value=\"".$row['sideTwo']."\">
                    </div>
        
                    </div>
                    <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \">Qty</span>
                     </div>
                    <input name=\"qty\" type=\"number\" class=\"form-control \" placeholder=\"".$row['qty']."\" value=\"".$row['qty']."\">
                    </div>
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \">Type</span>
                     </div>
                     <select name=\"type\" id=\"\" class=\"custom-select \" placeholder=\"\" value\"\">
                       <option selected value=\"".$row['kind']."\">".$row['kind']."</option>
                       <option value=\"Splices\">Splices</option>
                       <option value=\"Cut & Clean\">Cut & Clean</option>
                    </select>
                    </div>
                    <div class=\"input-group mb-3 \" >
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width\">Material</span>
                     </div>
                     <select name=\"material\" id=\"\" class=\"custom-select \">
                       <option selected value=\"".$row['material']."\">".$row['material']."</option>  
                       <option value=\"H\">H</option>
                       <option value=\"NH\">NH</option>
                    </select>
                    </div>
                    </div>
                </div>
            
            <h1>Edit Rejects</h1>
            <p>Note: enter all counts as piece counts. For example, one TIR = 2 pieces, therefore you would enter 2 into the TIR field for 1 TIR handle reject.</p>
            <div class=\"row\">
                    <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend \">
                     <span class=\"input-group-text prepend-width \">TIR</span>
                     </div>
                    
                    <input name=\"tir\" type=\"number\" class=\"form-control \" placeholder=\"\" value=\"".$row['tir']."\">
                    </div>
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend\">
                     <span class=\"input-group-text prepend-width\">Bend</span>
                     </div>
                    <input name=\"bend\" type=\"number\" class=\"form-control\" placeholder=\"".$row['bend']."\" value=\"".$row['bend']."\">
                    </div>
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend\">
                     <span class=\"input-group-text prepend-width\">Crack</span>
                     </div>
                    <input name=\"crack\" type=\"number\" class=\"form-control\" placeholder=\"".$row['crack']."\" value=\"".$row['crack']."\">
                    </div>
                </div>
                    
                    <div class=\"col-sm-6\">
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend\">
                     <span class=\"input-group-text prepend-width\">Color</span>
                     </div>
                    <input name=\"color\" type=\"number\" class=\"form-control\" placeholder=\"".$row['color']."\" value=\"".$row['color']."\">
                    </div>
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend\">
                     <span class=\"input-group-text prepend-width\">Ding</span>
                     </div>
                    <input name=\"ding\" type=\"number\" class=\"form-control\" placeholder=\"".$row['ding']."\" value=\"".$row['ding']."\">
                    </div>
                    <div class=\"input-group mb-3\">
                     <div class=\"input-group-prepend\">
                     <span class=\"input-group-text prepend-width\">Short</span>
                     </div>
                    <input name=\"short\" type=\"number\" class=\"form-control\" placeholder=\"".$row['short']."\" value=\"".$row['short']."\">
                    </div>
            </div>
            
            </div>
            <input style=\"display:none\" name=\"crateEdit\" value=\"".$row['crateNum']."\" type=\"checkbox\" checked>
            <input type=\"submit\" name=\"update\" value=\"Update\" class=\"btn btn-primary btn-md\">
            <input type=\"submit\" value=\"delete\" class=\"btn btn-danger btn-md\"> 
               
             
            </form>
        ";
        }
    }
?>

    
 


<?php
    include 'footer.php';
?>