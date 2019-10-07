<?php
   include './header.php';
   ?>
   
   

   
   <div class="d-flex justify-content-center align-items-center">
   <h2 style="border-bottom: 1px black solid; margin-bottom: 15px;" class="">New Crate</h2>
   </div>
      <div class="form-group new-crate-form">
         <div class="container">
            
            
         <form method="POST" action="create.php">
            <!--Input-group mb-3 is where width should apply-->
            <div class="input-group mb-3 " >
             <div class="input-group-prepend ">
             <span class="input-group-text prepend-width ">Crate #</span>
             </div>
            <input type="number" name="crateNum" class="form-control">
            </div>
            

            
            
            <div class="input-group mb-3 " >
             <div class="input-group-prepend ">
             <span class="input-group-text prepend-width ">Qty</span>
             </div>
            <input type="number" name="qty" class="form-control " value="48">
            </div>
            <div class="input-group mb-3 " >
             <div class="input-group-prepend ">
             <span class="input-group-text prepend-width ">Type</span>
             </div>
             <select name="type" id="" class="custom-select ">
               <option value="Splice">Splices</option>
               <option value="Cut & Clean">Cut & Clean</option>
            </select>
            </div>
            <div class="input-group mb-3 " >
             <div class="input-group-prepend ">
             <span class="input-group-text prepend-width ">Material</span>
             </div>
             <select name="material" id="" class="custom-select ">
               <option value="H">H</option>
               <option value="NH">NH</option>
            </select>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-md">
            <button class="btn btn-danger btn-md">X Cancel</button>
            </form>
            </div>
            
            
            
         
      </div>
   

<?php
   include './footer.php';
   ?>