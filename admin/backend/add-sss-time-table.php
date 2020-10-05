

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp; JSS Time Table</p>
        </h3>

       <ul class="nav nav-tabs">
         <li class="modal-scrollbar-measures"><a href="index.php?sss-time-table">View Time-Table</a></li>
         <li class="active"><a href="index.php?add-sss-time-table">Add Time-Table</a></li>
         <li class="rolls"><a href="index.php?update-sss-time-table">Update Time-Table</a></li>
         
       </ul>


       <div class="myboxxm">
         
            <h4 class="jsstable" style="text-align: center;">SSS TIMETABLE</h4>

              <?php 

                             if(isset($_POST['timeTableArray1'])){

                             
                               foreach ($_POST['timeTableArray1'] as $checkValue) {
                                 
                                   $bulk_options = $_POST['bulk_options'];


                                   switch($bulk_options){

                                     case 'add':
                                   
                                   
                                   $subject1a = $_POST['subject1a'];
                                   $subject1b = $_POST['subject1b'];
                                   $subject1c = $_POST['subject1c'];
                                   $subject1d = $_POST['subject1d'];
                                   $subject1e = $_POST['subject1e'];
                                   $subject1f = $_POST['subject1f'];
                                   $subject1g = $_POST['subject1g'];

                                   // $class1a = $_POST['class1a'];
                                   $subject1h = $_POST['subject1h'];
                                   $subject1i = $_POST['subject1i'];
                                   $subject1j = $_POST['subject1j'];
                                   
                                   $subject1k = $_POST['subject1k'];
                                   $subject1l = $_POST['subject1l'];
                                   $subject1m = $_POST['subject1m'];
                                   $subject1n = $_POST['subject1n'];
                                   $subject1o = $_POST['subject1o'];

                                   // $class1b = $_POST['class1b'];
                                   $subject1p = $_POST['subject1p'];
                                   $subject1q = $_POST['subject1q'];
                                   $subject1r = $_POST['subject1r'];
                                   $subject1s = $_POST['subject1s'];
                                   $subject1t = $_POST['subject1t'];
                                   $subject1u = $_POST['subject1u'];
                                  
                                   

                                   
                                    $sql = "INSERT INTO day11 (subject1a, subject1b, subject1c, subject1d, subject1e, subject1f, subject1g,subject1h,subject1i, subject1j, subject1k, subject1l, subject1m, subject1n, subject1o,subject1p,subject1q, subject1r, subject1s, subject1t,subject1u) VALUES ('$subject1a', '$subject1b', '$subject1c', '$subject1d', '$subject1e', '$subject1f', '$subject1g','$subject1h','$subject1i','$subject1j','$subject1k','$subject1l','$subject1m','$subject1n','$subject1o','$subject1p','$subject1q','$subject1r','$subject1s','$subject1t','$subject1u')";
                                   
                                     $get_info = "SELECT * FROM day11 WHERE id = 1";

                                     $query_info = mysqli_query($conn,$get_info);
                                     
                                     $count_table = mysqli_num_rows( $query_info );

                                     if($count_table == 1){
                             
                                        die("<h3 class='text-center text-danger'>Subject already Inserted please select the update option! <a href='add-jss-time-table.php'>back>></a></h3>
                                         ");
                                         
                                     }

                                     $result = mysqli_query($conn,$sql);

                                     if(!$result ){
                                        
                                        echo "<h3 class='text-center text-danger'>Subject Not Inserted!</h3>  error".mysqli_error($conn).$sql;
                                     }
                                     else{

                                      // echo "<h3 class='text-center text-success'>Subject Inserted!</h3>";

                                        echo "<script>alert('Subject has been Inserted!')</script";
                                     }

                                     break;



                                   }
                               }

                             }

                             if(isset($_POST['timeTableArray2'])){

                             
                               foreach ($_POST['timeTableArray2'] as $checkValue) {
                                 
                                   $bulk_options = $_POST['bulk_options'];


                                   switch($bulk_options){

                                     case 'add1':
                                   
                                   
                                   $subject2a = $_POST['subject2a'];
                                   $subject2b = $_POST['subject2b'];
                                   $subject2c = $_POST['subject2c'];
                                   $subject2d = $_POST['subject2d'];
                                   $subject2e = $_POST['subject2e'];
                                   $subject2f = $_POST['subject2f'];
                                   $subject2g = $_POST['subject2g'];

                                   // $class1a = $_POST['class1a'];
                                   $subject2h = $_POST['subject2h'];
                                   $subject2i = $_POST['subject2i'];
                                   $subject2j = $_POST['subject2j'];
                                   
                                   $subject2k = $_POST['subject2k'];
                                   $subject2l = $_POST['subject2l'];
                                   $subject2m = $_POST['subject2m'];
                                   $subject2n = $_POST['subject2n'];
                                   $subject2o = $_POST['subject2o'];

                                   // $class1b = $_POST['class1b'];
                                   $subject2p = $_POST['subject2p'];
                                   $subject2q = $_POST['subject2q'];
                                   $subject2r = $_POST['subject2r'];
                                   $subject2s = $_POST['subject2s'];
                                   $subject2t = $_POST['subject2t'];
                                   $subject2u = $_POST['subject2u'];
                                   $subject2v = $_POST['subject2v'];
                                   
                                   

                                   
                                    $sql = "INSERT INTO day22 (subject2a, subject2b, subject2c, subject2d, subject2e, subject2f, subject2g,subject2h,subject2i, subject2j, subject2k, subject2l, subject2m, subject2n, subject2o,subject2p,subject2q, subject2r, subject2s, subject2t, subject2u,subject2v) VALUES ('$subject2a', '$subject2b', '$subject2c', '$subject2d', '$subject2e', '$subject2f', '$subject2g','$subject2h','$subject2i','$subject2j','$subject2k','$subject2l','$subject2m','$subject2n','$subject2o','$subject2p','$subject2q','$subject2r','$subject2s','$subject2t','$subject2u','$subject2v')";
                                   
                                     $get_info = "SELECT * FROM day2 WHERE id = 2";

                                     $query_info = mysqli_query($conn,$get_info);
                                     
                                     $count_table = mysqli_num_rows( $query_info );

                                     if($count_table == 1){
                             
                                        die("<h3 class='text-center text-danger'>Subject already Inserted please select the update option! <a href='add-jss-time-table.php'>back>></a></h3>
                                         ");
                                         
                                     }

                                     $result = mysqli_query($conn,$sql);

                                     if(!$result ){
                                        
                                        echo "<h3 class='text-center text-danger'>Subject Not Inserted!</h3>  error".mysqli_error($conn).$sql;
                                     }
                                     else{

                                      // echo "<h3 class='text-center text-success'>Subject Inserted!</h3>";

                                        echo "<script>alert('Subject has been Inserted!')</script";
                                     }

                                     break;



                                   }
                               }

                             }


                             if(isset($_POST['timeTableArray3'])){

                             
                               foreach ($_POST['timeTableArray3'] as $checkValue) {
                                 
                                   $bulk_options = $_POST['bulk_options'];


                                   switch($bulk_options){

                                     case 'add2':
                                   
                                   
                                   $subject3a = $_POST['subject3a'];
                                   $subject3b = $_POST['subject3b'];
                                   $subject3c = $_POST['subject3c'];
                                   $subject3d = $_POST['subject3d'];
                                   $subject3e = $_POST['subject3e'];
                                   $subject3f = $_POST['subject3f'];
                                   $subject3g = $_POST['subject3g'];

                                   // $class1a = $_POST['class1a'];
                                   $subject3h = $_POST['subject3h'];
                                   $subject3i = $_POST['subject3i'];
                                   $subject3j = $_POST['subject3j'];
                                   
                                   $subject3k = $_POST['subject3k'];
                                   $subject3l = $_POST['subject3l'];
                                   $subject3m = $_POST['subject3m'];
                                   $subject3n = $_POST['subject3n'];
                                   $subject3o = $_POST['subject3o'];

                                   // $class1b = $_POST['class1b'];
                                   $subject3p = $_POST['subject3p'];
                                   $subject3q = $_POST['subject3q'];
                                   $subject3r = $_POST['subject3r'];
                                   $subject3s = $_POST['subject3s'];
                                   $subject3t = $_POST['subject3t'];
                                   
                                   
                                   
                                   

                                   
                                    $sql = "INSERT INTO day33 (subject3a, subject3b, subject3c, subject3d, subject3e, subject3f, subject3g,subject3h,subject3i, subject3j, subject3k, subject3l, subject3m, subject3n, subject3o,subject3p,subject3q, subject3r, subject3s, subject3t) VALUES ('$subject3a', '$subject3b', '$subject3c', '$subject3d', '$subject3e', '$subject3f', '$subject3g','$subject3h','$subject3i','$subject3j','$subject3k','$subject3l','$subject3m','$subject3n','$subject3o','$subject3p','$subject3q','$subject3r','$subject3s','$subject3t')";
                                   
                                     $get_info = "SELECT * FROM day33 WHERE id = 3";

                                     $query_info = mysqli_query($conn,$get_info);
                                     
                                     $count_table = mysqli_num_rows( $query_info );

                                     if($count_table == 1){
                             
                                        die("<h3 class='text-center text-danger'>Subject already Inserted please select the update option! <a href='add-jss-time-table.php'>back>></a></h3>
                                         ");
                                         
                                     }

                                     $result = mysqli_query($conn,$sql);

                                     if(!$result ){
                                        
                                        echo "<h3 class='text-center text-danger'>Subject Not Inserted!</h3>  error".mysqli_error($conn).$sql;
                                     }
                                     else{

                                      // echo "<h3 class='text-center text-success'>Subject Inserted!</h3>";

                                        echo "<script>alert('Subject has been Inserted!')</script";
                                     }

                                     break;



                                   }
                               }

                             }


                             if(isset($_POST['timeTableArray4'])){

                             
                               foreach ($_POST['timeTableArray4'] as $checkValue) {
                                 
                                   $bulk_options = $_POST['bulk_options'];


                                   switch($bulk_options){

                                     case 'add3':
                                   
                                   
                                   $subject4a = $_POST['subject4a'];
                                   $subject4b = $_POST['subject4b'];
                                   $subject4c = $_POST['subject4c'];
                                   $subject4d = $_POST['subject4d'];
                                   $subject4e = $_POST['subject4e'];
                                   $subject4f = $_POST['subject4f'];
                                   $subject4g = $_POST['subject4g'];

                                   // $class1a = $_POST['class1a'];
                                   $subject4h = $_POST['subject4h'];
                                   $subject4i = $_POST['subject4i'];
                                   $subject4j = $_POST['subject4j'];
                                   
                                   $subject4k = $_POST['subject4k'];
                                   $subject4l = $_POST['subject4l'];
                                   $subject4m = $_POST['subject4m'];
                                   $subject4n = $_POST['subject4n'];
                                   $subject4o = $_POST['subject4o'];

                                   // $class1b = $_POST['class1b'];
                                   $subject4p = $_POST['subject4p'];
                                   $subject4q = $_POST['subject4q'];
                                   $subject4r = $_POST['subject4r'];
                                   $subject4s = $_POST['subject4s'];
                                   $subject4t = $_POST['subject4t'];
                                   $subject4u = $_POST['subject4u'];
                                  
                                   
                                   
                                   

                                   
                                    $sql = "INSERT INTO day44 (subject4a, subject4b, subject4c, subject4d, subject4e, subject4f, subject4g,subject4h,subject4i, subject4j, subject4k, subject4l, subject4m, subject4n, subject4o,subject4p,subject4q, subject4r, subject4s, subject4t,subject4u) VALUES ('$subject4a', '$subject4b', '$subject4c', '$subject4d', '$subject4e', '$subject4f', '$subject4g','$subject4h','$subject4i','$subject4j','$subject4k','$subject4l','$subject4m','$subject4n','$subject4o','$subject4p','$subject4q','$subject4r','$subject4s','$subject4t','$subject4u')";
                                   
                                     $get_info = "SELECT * FROM day44 WHERE id = 4";

                                     $query_info = mysqli_query($conn,$get_info);
                                     
                                     $count_table = mysqli_num_rows( $query_info );

                                     if($count_table == 1){
                             
                                        die("<h3 class='text-center text-danger'>Subject already Inserted please select the update option! <a href='add-jss-time-table.php'>back>></a></h3>
                                         ");
                                         
                                     }

                                     $result = mysqli_query($conn,$sql);

                                     if(!$result ){
                                        
                                        echo "<h3 class='text-center text-danger'>Subject Not Inserted!</h3>  error".mysqli_error($conn).$sql;
                                     }
                                     else{

                                       // echo "<h3 class='text-center text-success'>Subject Inserted!</h3>";

                                        echo "<script>alert('Subject has been Inserted!')</script";
                                     }

                                     break;



                                   }
                               }

                             }


                             if(isset($_POST['timeTableArray5'])){

                             
                               foreach ($_POST['timeTableArray5'] as $checkValue) {
                                 
                                   $bulk_options = $_POST['bulk_options'];


                                   switch($bulk_options){

                                     case 'add4':
                                   
                                   
                                   $subject5a = $_POST['subject5a'];
                                   $subject5b = $_POST['subject5b'];
                                   $subject5c = $_POST['subject5c'];
                                   $subject5d = $_POST['subject5d'];
                                   $subject5e = $_POST['subject5e'];
                                   $subject5f = $_POST['subject5f'];
                                   $subject5g = $_POST['subject5g'];

                                   // $class1a = $_POST['class1a'];
                                   $subject5h = $_POST['subject5h'];
                                   $subject5i = $_POST['subject5i'];
                                   $subject5j = $_POST['subject5j'];
                                   
                                   $subject5k = $_POST['subject5k'];
                                   $subject5l = $_POST['subject5l'];
                                   $subject5m = $_POST['subject5m'];
                                   $subject5n = $_POST['subject5n'];
                                  
                                  
                                   

                                   
                                    $sql = "INSERT INTO day55 (subject5a, subject5b, subject5c, subject5d, subject5e, subject5f, subject5g,subject5h,subject5i, subject5j, subject5k, subject5l, subject5m, subject5n) VALUES ('$subject5a', '$subject5b', '$subject5c', '$subject5d', '$subject5e', '$subject5f', '$subject5g','$subject5h','$subject5i','$subject5j','$subject5k','$subject5l','$subject5m','$subject5n')";
                                   
                                     $get_info = "SELECT * FROM day55 WHERE id = 5";

                                     $query_info = mysqli_query($conn,$get_info);
                                     
                                     $count_table = mysqli_num_rows( $query_info );

                                     if($count_table == 1){
                             
                                        die("<h3 class='text-center text-danger'>Subject already Inserted please select the update option! <a href='add-jss-time-table.php'>back>></a></h3>
                                         ");
                                         
                                     }

                                     $result = mysqli_query($conn,$sql);

                                     if(!$result ){
                                        
                                        echo "<h3 class='text-center text-danger'>Subject Not Inserted!</h3>  error".mysqli_error($conn).$sql;
                                     }
                                     else{

                                       // echo "<h3 class='text-center text-success'>Subject Inserted!</h3>";

                                        echo "<script>alert('Subject has been Inserted!')</script";
                                     }

                                     break;



                                   }
                               }

                             }

                 ?>


                      <form action="" method="post">

                            <div class="row">
                                
                                <div class="  col-xs-4" id = "bulkOptionsContainer">
                                 <select  id="" class="form-control" name="bulk_options">
                                    
                                    <option value="">-- Select options--</option>
                                    
                                    <option value="add">Mon </option>

                                    <option value="add1">Tue </option>

                                    <option value="add2">Wed </option>
                                    <option value="add3">Thur </option>

                                    <option value="add4">Fri </option>
                                    

                                </select>
                                </div>
                                <div class="col-xs-4">
                                    <input type="submit" class="btn btn-success" value="Apply">
                                   
                                </div>


                             </div>
                                          
                                        
                          <table class=" table table-responsive sss1 table-bordered">
                               <thead>
                                   <tr>
                                     <th></th>
                                     <th>Class</th>
                                     <th>8.00-8.40AM</th>
                                     <th>8.40-9.20AM</th>
                                     <th>9.20-10AM</th>
                                     <th >10 MINS</th>
                                     <th>10.10-10.50AM</th>
                                     <th>10.50-11.30AM</th>
                                     <th>30 MINS</th>
                                     <th>12.00-12.40PM</th>
                                     <th>12.40-1.20PM</th>
                                     <th>1.20-2.00PM</th>
                                     

                                   </tr>
                                   <tr>
                                     <th>Days/Period</th>
                                     <th></th>
                                     <th>1</th>
                                     <th>2</th>
                                     <th>3</th>
                                     <th>SHORT BREAK</th>
                                     <th>4</th>
                                     <th>5</th>
                                     <th>LUNCH BREAK</th>
                                     <th>6</th>
                                     <th>7</th>
                                     <th>8</th>
                                     
                                     

                                   </tr>
                                   

                                   
                               </thead>

                               
                               <tbody>
                                    <tr>
                                      
                                      <th rowspan="3">
                                        <input type="checkbox" name="timeTableArray1[]" value="1">
                                        
                                          Mon
                                         
                                      </th>

                                      <td>S.S.1</td>
                                      <td colspan="2">
                                         <select name="subject1a" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>

                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                         </select>
                                       </td>
                                      <td>
                                         <select name="subject1b" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject1c" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject1d" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject1e" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject1f" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject1g" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td>
                                          <select name="subject1h" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject1i" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject1j" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td></td>
                                      <td>
                                        <select name="subject1k" id="" >
                                          <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                        </select>
                                      </td>
                                      <td>
                                          <select name="subject1l" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td></td>
                                      <td>
                                        <select name="subject1m" id="" >
                                         <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td colspan="2">
                                        <select name="subject1n" id="" >
                                         <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td colspan="2">
                                        <select name="subject1o" id="" >
                                         <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                        <select name="subject1p" id="" >
                                         <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                        </select>
                                      </td>
                                      <td></td>
                                      <td>
                                          <select name="subject1q" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                        
                                          <select name="subject1r" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                          </select>
                                      </td>
                                      <td></td>
                                      <td>
                                        <select name="subject1s" id="" >
                                          <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>

                                        </select>
                                      </td>
                                      <td>
                                         <select name="subject1t" id="" >
                                           <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject1u" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      
                                    </tr>





                                    <!--------------------------------------->



                                    <tr>
                                      <th rowspan="3">
                                       <input type="checkbox" name="timeTableArray2[]" value="2">
                                                                               
                                          Tue
                                      </th>
                                      <td>S.S.1</td>
                                      <td colspan="2">
                                         <select name="subject2a" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject2b" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                          <select name="subject2c" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject2d" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      
                                      <td></td>
                                      <td>
                                         <select name="subject2e" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                        <select name="subject2f" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>

                                      <td>
                                         <select name="subject2g" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td>
                                        <select name="subject2h" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                        <select name="subject2i" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                         <select name="subject2j" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject2k" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject2l" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject2m" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject2n" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject2o" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td>
                                         <select name="subject2p" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject2q" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                          <select name="subject2r" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td></td>
                                      <td>
                                          <select name="subject2s" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                          <select name="subject2t" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td></td>
                                      <td colspan="2">
                                          <select name="subject2u" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject2v" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      
                                    </tr>




                                    <!----------------------------------------------->



                                    <tr>
                                      <th rowspan="3">
                                         <input type="checkbox" name="timeTableArray3[]" value="3">
                                                                                
                                            Wed
                                                
                                      </th>
                                      <td>S.S.1</td>
                                      <td>
                                         <select name="subject3a" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3b" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3c" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      
                                      <td>SHORT BREAK</td>
                                      <td>
                                         <select name="subject3d" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                          <select name="subject3e" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>LUNCH BREAK</td>
                                      <td colspan="2">
                                         <select name="subject3f" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3g" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                     
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td colspan="2">
                                          <select name="subject3h" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                      </td>
                                      <td>
                                         <select name="subject3i" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td colspan="2">
                                         <select name="subject3j" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject3k" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3l" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3m" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td colspan="2">
                                        <select name="subject3n" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                         <select name="subject3o" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject3p" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3q" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject3r" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3s" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject3t" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                    </tr>


                  <!---------------------------------------------------------->


                                 <tr>
                                      <th rowspan="3">
                                        
                                         <input type="checkbox" name="timeTableArray4[]" value="4">
                                        
                                          Thur
                                         
                                      </th>
                                      <td>S.S.1</td>
                                      <td>
                                         <select name="subject4a" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td colspan="2">
                                         <select name="subject4b" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      <td>
                                         <select name="subject4c" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4d" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td></td>
                                      
                                      <td>
                                         <select name="subject4e" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4f" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4g" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                     
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td>
                                         <select name="subject4h" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                        <select name="subject4i" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                        <select name="subject4j" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td></td>
                                      <td>
                                        <select name="subject4k" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td>
                                        <select name="subject4l" id="" >
                                          <option value="">--Select--</option>
                                         <option value="ENGISH LANG">ENGISH LANG</option>
                                         <option value="ICT">ICT</option>
                                         <option value="GEOG/ECONS">GEOG/ECONS</option>
                                         <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                         <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                         <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                         <option value="MATH">MATH</option>
                                         <option value="CIVIC EDU">CIVIC EDU</option>
                                         <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                         <option value="IRK/CRK">IRK/CRK</option>
                                         <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                         <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                         <option value="COM/LIT">COM/LIT</option>
                                        
                                         <option value="BIO/ACCT">BIO/ACCT</option>
                                          <option value="P.H.E">P.H.E</option>
                                         <option value="AGRIC SC">AGRIC SC</option>
                                         <option value="BASIC SC">BASIC SC</option>


                                        </select>
                                      </td>
                                      <td></td>
                                      <td colspan="2">
                                         <select name="subject4m" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>   <select name="subject4n" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select></td>
                                      
                                    </tr>

                                    <tr>
                                      <td>S.S.3</td>
                                      <td>
                                         <select name="subject4o" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                       </td>
                                      <td>
                                         <select name="subject4p" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4q" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>SHORT BREAK</td>
                                      <td colspan="2">

                                          <select name="subject4r" id="" >
                                            <option value="">--Select--</option>
                                           <option value="ENGISH LANG">ENGISH LANG</option>
                                           <option value="ICT">ICT</option>
                                           <option value="GEOG/ECONS">GEOG/ECONS</option>
                                           <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                           <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                           <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                           <option value="MATH">MATH</option>
                                           <option value="CIVIC EDU">CIVIC EDU</option>
                                           <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                           <option value="IRK/CRK">IRK/CRK</option>
                                           <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                           <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                           <option value="COM/LIT">COM/LIT</option>
                                          
                                           <option value="BIO/ACCT">BIO/ACCT</option>
                                            <option value="P.H.E">P.H.E</option>
                                           <option value="AGRIC SC">AGRIC SC</option>
                                           <option value="BASIC SC">BASIC SC</option>


                                          </select>
                                       </td>
                                      <td>LUNCH BREAK</td>
                                      <td>
                                         <select name="subject4s" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4t" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                      <td>
                                         <select name="subject4u" id="" >
                                           <option value="">--Select--</option>
                                          <option value="ENGISH LANG">ENGISH LANG</option>
                                          <option value="ICT">ICT</option>
                                          <option value="GEOG/ECONS">GEOG/ECONS</option>
                                          <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                          <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                          <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                          <option value="MATH">MATH</option>
                                          <option value="CIVIC EDU">CIVIC EDU</option>
                                          <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                          <option value="IRK/CRK">IRK/CRK</option>
                                          <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                          <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                          <option value="COM/LIT">COM/LIT</option>
                                         
                                          <option value="BIO/ACCT">BIO/ACCT</option>
                                           <option value="P.H.E">P.H.E</option>
                                          <option value="AGRIC SC">AGRIC SC</option>
                                          <option value="BASIC SC">BASIC SC</option>


                                         </select>
                                      </td>
                                              
                                    
                                    </tr>


                                    <tr>
                                         <th rowspan="3">
                                           
                                           <input type="checkbox" name="timeTableArray5[]" value="5">
                                           
                                            Fri
                                         </th>
                                         <td>J.S.1</td>
                                         <td>
                                            <select name="subject5a" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5b" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                             <select name="subject5c" id="" >
                                               <option value="">--Select--</option>
                                              <option value="ENGISH LANG">ENGISH LANG</option>
                                              <option value="ICT">ICT</option>
                                              <option value="GEOG/ECONS">GEOG/ECONS</option>
                                              <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                              <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                              <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                              <option value="MATH">MATH</option>
                                              <option value="CIVIC EDU">CIVIC EDU</option>
                                              <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                              <option value="IRK/CRK">IRK/CRK</option>
                                              <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                              <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                              <option value="COM/LIT">COM/LIT</option>
                                             
                                              <option value="BIO/ACCT">BIO/ACCT</option>
                                               <option value="P.H.E">P.H.E</option>
                                              <option value="AGRIC SC">AGRIC SC</option>
                                              <option value="BASIC SC">BASIC SC</option>


                                             </select>
                                         </td>
                                         <td></td>
                                         <td>
                                            <select name="subject5d" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5e" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td></td>
                                         <td rowspan="3" colspan="3">EXTRA CURRICULAR</td>
                                         
                                        
                                        
                                       </tr>

                                       <tr>
                                        
                                         <td>S.S.2</td>
                                         <td>
                                            <select name="subject5f" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5g" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5h" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td></td>
                                         <td colspan="2">
                                            <select name="subject5i" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         
                                        
                                         
                                         
                                       </tr>


                                       <td>S.S.3</td>
                                         <td>
                                            <select name="subject5j" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5k" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td>
                                            <select name="subject5l" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         <td></td>
                                         <td>
                                            <select name="subject5m" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                          </td>
                                         <td>
                                            <select name="subject5n" id="" >
                                              <option value="">--Select--</option>
                                             <option value="ENGISH LANG">ENGISH LANG</option>
                                             <option value="ICT">ICT</option>
                                             <option value="GEOG/ECONS">GEOG/ECONS</option>
                                             <option value="PHYSICS/GOVT">PHYSICS/GOVT</option>
                                             <option value="CHEM/COM/LIT">CHEM/COM/LIT</option>
                                             <option value="YORUBA/AGRIC">YORUBA/AGRIC</option>
                                             <option value="MATH">MATH</option>
                                             <option value="CIVIC EDU">CIVIC EDU</option>
                                             <option value="CHEM/COM/CRK">CHEM/COM/CRK</option>
                                             <option value="IRK/CRK">IRK/CRK</option>
                                             <option value="BIO/LIT/ACCT">BIO/LIT/ACCT</option>
                                             <option value="F.MATHS/IRK/CRK">F.MATHS/IRK/CRK</option>
                                             <option value="COM/LIT">COM/LIT</option>
                                            
                                             <option value="BIO/ACCT">BIO/ACCT</option>
                                              <option value="P.H.E">P.H.E</option>
                                             <option value="AGRIC SC">AGRIC SC</option>
                                             <option value="BASIC SC">BASIC SC</option>


                                            </select>
                                         </td>
                                         
                                         
                                                

                                       
                                    



                               </tbody>
                            </table>
                                       
                                     
                                            
                      </form>

       </div>

       
      
    </div>
</div>
<!-- /.row -->