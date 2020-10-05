

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
           
            <p class="resett"><i class="fa fa-edit"></i>&nbsp;&nbsp; SSS Time Table</p>
        </h3>

       <ul class="nav nav-tabs">
         <li class="active"><a href="index.php?sss-time-table">View Time-Table</a></li>
         <li class="rolls"><a href="index.php?add-sss-time-table">Add Time-Table</a></li>
         <li class="rolls"><a href="index.php?update-sss-time-table">Update Time-Table</a></li>
         
       </ul>


       <div class="myboxxm">
         
            <h4 class="jsstable" style="text-align: center;">JSS TIMETABLE</h4>
 
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

                              <?php 

                                   $sql = "SELECT * FROM day11";

                                   $result = mysqli_query($conn,$sql);

                                   $row = mysqli_fetch_assoc($result);
                                     
                                       $subject1a = $row['subject1a'];
                                       $subject1b = $row['subject1b'];
                                       $subject1c = $row['subject1c'];
                                       $subject1d = $row['subject1d'];
                                       $subject1e = $row['subject1e'];
                                       $subject1f = $row['subject1f'];
                                       $subject1g = $row['subject1g'];
                                       $subject1h = $row['subject1h'];
                                       $subject1i = $row['subject1i'];
                                       $subject1j = $row['subject1j'];
                                       $subject1k = $row['subject1k'];
                                       $subject1l = $row['subject1l'];
                                       $subject1m = $row['subject1m'];
                                       $subject1n = $row['subject1n'];
                                       $subject1o = $row['subject1o'];
                                       $subject1p = $row['subject1p'];
                                       $subject1q = $row['subject1q'];
                                       $subject1r = $row['subject1r'];
                                       $subject1s = $row['subject1s'];
                                       $subject1t = $row['subject1t'];
                                       $subject1u = $row['subject1u'];
                                      
                                   
                               ?>



                               <tbody>
                                    <tr>
                                      <th rowspan="3">Mon</th>
                                      <td>S.S.1</td>
                                      <td colspan="2"><?php echo $subject1a; ?></td>
                                      <td><?php echo $subject1b; ?></td>
                                      <td></td>
                                      <td><?php echo $subject1c; ?></td>
                                      <td><?php echo $subject1d; ?></td>
                                      <td></td>
                                      <td><?php echo $subject1e; ?></td>
                                      <td><?php echo $subject1f; ?></td>
                                      <td><?php echo $subject1g; ?></td>
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td><?php echo $subject1h; ?></td>
                                      <td><?php echo $subject1i; ?></td>
                                      <td><?php echo $subject1j; ?></td>
                                      <td></td>
                                      <td><?php echo $subject1k; ?></td>
                                      <td><?php echo $subject1l; ?></td>
                                      <td></td>
                                      <td><?php echo $subject1m; ?></td>
                                      <td colspan="2"><?php echo $subject1n; ?></td>
                                      
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td colspan="2"><?php echo $subject1o; ?></td>
                                      <td><?php echo $subject1p; ?></td>
                                      <td></td>
                                      <td><?php echo $subject1q; ?></td>
                                      <td></td>
                                      <td></td>
                                      <td><?php echo $subject1s; ?></td>
                                      <td><?php echo $subject1t; ?></td>
                                      <td><?php echo $subject1u; ?></td>
                                      
                                    </tr>





                                    <!--------------------------------------->
                                    

                                    <?php 

                                         $sql = "SELECT * FROM day22";

                                         $result = mysqli_query($conn,$sql);

                                         $row = mysqli_fetch_assoc($result);
                                           
                                             $subject2a = $row['subject2a'];
                                             $subject2b = $row['subject2b'];
                                             $subject2c = $row['subject2c'];
                                             $subject2d = $row['subject2d'];
                                             $subject2e = $row['subject2e'];
                                             $subject2f = $row['subject2f'];
                                             $subject2g = $row['subject2g'];
                                             $subject2h = $row['subject2h'];
                                             $subject2i = $row['subject2i'];
                                             $subject2j = $row['subject2j'];
                                             $subject2k = $row['subject2k'];
                                             $subject2l = $row['subject2l'];
                                             $subject2m = $row['subject2m'];
                                             $subject2n = $row['subject2n'];
                                             $subject2o = $row['subject2o'];
                                             $subject2p = $row['subject2p'];
                                             $subject2q = $row['subject2q'];
                                             $subject2r = $row['subject2r'];
                                             $subject2s = $row['subject2s'];
                                             $subject2t = $row['subject2t'];
                                             $subject2u = $row['subject2u'];
                                             $subject2v = $row['subject2v'];
                                            
                                         
                                     ?>



                                    <tr>
                                      <th rowspan="3">TUE</th>
                                      <td>S.S.1</td>
                                      <td colspan="2"><?php echo $subject2a; ?></td>
                                      <td><?php echo $subject2b ?></td>
                                      <td></td>
                                      <td><?php echo $subject2c ?></td>
                                      <td><?php echo $subject2d ?></td>
                                      
                                      <td></td>
                                      <td><?php echo $subject2e ?></td>
                                      <td><?php echo $subject2f ?></td>
                                      <td><?php echo $subject2g ?></td>
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td><?php echo $subject2h ?></td>
                                      <td><?php echo $subject2i ?></td>
                                      <td><?php echo $subject2j ?></td>
                                      <td></td>
                                      <td><?php echo $subject2k ?></td>
                                      <td><?php echo $subject2l ?></td>
                                      <td></td>
                                      <td><?php echo $subject2m ?></td>
                                      <td><?php echo $subject2n ?></td>
                                      <td><?php echo $subject2o ?></td>
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td><?php echo $subject2p ?></td>
                                      <td><?php echo $subject2q ?></td>
                                      <td><?php echo $subject2r ?></td>
                                      <td></td>
                                      <td><?php echo $subject2s ?></td>
                                      <td><?php echo $subject2t ?></td>
                                      <td></td>
                                      <td colspan="2"><?php echo $subject2u ?></td>
                                      <td><?php echo $subject2v ?></td>
                                      
                                    </tr>




                                    <!----------------------------------------------->

                                     <?php 

                                          $sql = "SELECT * FROM day33";

                                          $result = mysqli_query($conn,$sql);

                                          $row = mysqli_fetch_assoc($result);
                                            
                                              $subject3a = $row['subject3a'];
                                              $subject3b = $row['subject3b'];
                                              $subject3c = $row['subject3c'];
                                              $subject3d = $row['subject3d'];
                                              $subject3e = $row['subject3e'];
                                              $subject3f = $row['subject3f'];
                                              $subject3g = $row['subject3g'];
                                              $subject3h = $row['subject3h'];
                                              $subject3i = $row['subject3i'];
                                              $subject3j = $row['subject3j'];
                                              $subject3k = $row['subject3k'];
                                              $subject3l = $row['subject3l'];
                                              $subject3m = $row['subject3m'];
                                              $subject3n = $row['subject3n'];
                                              $subject3o = $row['subject3o'];
                                              $subject3p = $row['subject3p'];
                                              $subject3q = $row['subject3q'];
                                              $subject3r = $row['subject3r'];
                                              $subject3s = $row['subject3s'];
                                              $subject3t = $row['subject3t'];
                                             
                                             
                                             
                                          
                                      ?>



                                    <tr>
                                      <th rowspan="3">WED</th>
                                      <td>S.S.1</td>
                                      <td><?php echo $subject3a ?></td>
                                      <td><?php echo $subject3b ?></td>
                                      <td><?php echo $subject3c ?></td>
                                      
                                      <td>SHORT BREAK</td>
                                      <td><?php echo $subject3d ?></td>
                                      <td><?php echo $subject3e ?></td>
                                      <td>LUNCH BREAK</td>
                                      <td colspan="2"><?php echo $subject3f ?></td>
                                      <td><?php echo $subject3g ?></td>
                                     
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td colspan="2"><?php echo $subject3h ?></td>
                                      <td><?php echo $subject3i ?></td>
                                      <td></td>
                                      <td colspan="2"><?php echo $subject3j ?></td>
                                      <td></td>
                                      <td><?php echo $subject3k ?></td>
                                      <td><?php echo $subject3l ?></td>
                                      <td><?php echo $subject3m ?></td>
                                      
                                    </tr>


                                    <tr>
                                     
                                      <td>S.S.3</td>
                                      <td colspan="2"><?php echo $subject3n ?></td>
                                      <td><?php echo $subject3o ?></td>
                                      <td></td>
                                      <td><?php echo $subject3p ?></td>
                                      <td><?php echo $subject3q ?></td>
                                      <td></td>
                                      <td><?php echo $subject3r ?></td>
                                      <td><?php echo $subject3s ?></td>
                                      <td><?php echo $subject3t ?></td>
                                    </tr>


                  <!---------------------------------------------------------->
                                  
                                  <?php 

                                       $sql = "SELECT * FROM day44";

                                       $result = mysqli_query($conn,$sql);

                                       $row = mysqli_fetch_assoc($result);
                                         
                                           $subject4a = $row['subject4a'];
                                           $subject4b = $row['subject4b'];
                                           $subject4c = $row['subject4c'];
                                           $subject4d = $row['subject4d'];
                                           $subject4e = $row['subject4e'];
                                           $subject4f = $row['subject4f'];
                                           $subject4g = $row['subject4g'];
                                           $subject4h = $row['subject4h'];
                                           $subject4i = $row['subject4i'];
                                           $subject4j = $row['subject4j'];
                                           $subject4k = $row['subject4k'];
                                           $subject4l = $row['subject4l'];
                                           $subject4m = $row['subject4m'];
                                           $subject4n = $row['subject4n'];
                                           $subject4o = $row['subject4o'];
                                           $subject4p = $row['subject4p'];
                                           $subject4q = $row['subject4q'];
                                           $subject4r = $row['subject4r'];
                                           $subject4s = $row['subject4s'];
                                           $subject4t = $row['subject4t'];
                                           $subject4u = $row['subject4u'];
                                          
                                          
                                       
                                   ?>



                                 <tr>
                                      <th rowspan="3">THRU</th>
                                      <td>S.S.1</td>
                                      <td><?php echo $subject4a ?></td>
                                      <td colspan="2"><?php echo $subject4b ?></td>
                                      <td></td>
                                      <td><?php echo $subject4c ?></td>
                                      <td><?php echo $subject4d ?></td>
                                      <td></td>
                                      
                                      <td><?php echo $subject4e ?></td>
                                      <td><?php echo $subject4f ?></td>
                                      <td><?php echo $subject4g ?></td>
                                     
                                    </tr>

                                    <tr>
                                     
                                      <td>S.S.2</td>
                                      <td><?php echo $subject4h ?></td>
                                      <td><?php echo $subject4i ?></td>
                                      <td><?php echo $subject4j ?></td>
                                      <td></td>
                                      <td><?php echo $subject4k ?></td>
                                      <td><?php echo $subject4l ?></td>
                                      <td></td>
                                      <td colspan="2"><?php echo $subject4m ?></td>
                                      <td><?php echo $subject4n ?></td>
                                      
                                    </tr>

                                    <tr>
                                      <td>S.S.3</td>
                                      <td><?php echo $subject4o ?></td>
                                      <td><?php echo $subject4p ?></td>
                                      <td><?php echo $subject4q ?></td>
                                      <td>SHORT BREAK</td>
                                      <td colspan="2"><?php echo $subject4r ?> </td>
                                      <td>LUNCH BREAK</td>
                                      <td><?php echo $subject4s ?></td>
                                      <td><?php echo $subject4t ?></td>
                                      <td><?php echo $subject4u ?></td>
                                              
                                    
                                    </tr>

<!--------------------------------------------------------------------------------->
                                    
                                    <?php 

                                         $sql = "SELECT * FROM day55";

                                         $result = mysqli_query($conn,$sql);

                                         $row = mysqli_fetch_assoc($result);
                                           
                                             $subject5a = $row['subject5a'];
                                             $subject5b = $row['subject5b'];
                                             $subject5c = $row['subject5c'];
                                             $subject5d = $row['subject5d'];
                                             $subject5e = $row['subject5e'];
                                             $subject5f = $row['subject5f'];
                                             $subject5g = $row['subject5g'];
                                             $subject5h = $row['subject5h'];
                                             $subject5i = $row['subject5i'];
                                             $subject5j = $row['subject5j'];
                                             $subject5k = $row['subject5k'];
                                             $subject5l = $row['subject5l'];
                                             $subject5m = $row['subject5m'];
                                             $subject5n = $row['subject5n'];
                                             
                                             
                                            
                                         
                                     ?>



                                   <tr>
                                        <th rowspan="3">FRI</th>
                                        <td>J.S.1</td>
                                        <td><?php echo $subject5a ?></td>
                                        <td><?php echo $subject5b ?></td>
                                        <td><?php echo $subject5c ?></td>
                                        <td></td>
                                        <td><?php echo $subject5d ?></td>
                                        <td><?php echo $subject5e ?></td>
                                        <td></td>
                                        <td rowspan="3" colspan="3">EXTRA CURRICULAR</td>
                                        
                                       
                                       
                                      </tr>

                                      <tr>
                                       
                                        <td>S.S.2</td>
                                        <td><?php echo $subject5f ?></td>
                                        <td><?php echo $subject5g ?></td>
                                        <td><?php echo $subject5h ?></td>
                                        <td></td>
                                        <td colspan="2"><?php echo $subject5i ?></td>
                                        
                                       
                                        
                                        
                                      </tr>



                                    <tr>
                                      <td>S.S.3</td>
                                        <td><?php echo $subject5j ?> </td>
                                        <td><?php echo $subject5k ?></td>
                                        <td><?php echo $subject5l ?></td>
                                        <td></td>
                                        <td><?php echo $subject5m ?> </td>
                                        <td><?php echo $subject5n ?></td>
                                        
                                        
                                    </tr>           

                                      
                                   

                                   
                               </tbody>
                            </table>   

       </div>

       
      
    </div>
</div>
<!-- /.row -->