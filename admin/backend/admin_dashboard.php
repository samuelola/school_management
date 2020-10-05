<?php 

$sql = myQuery("SELECT * FROM access_student_js_1 ");

$all_jss_students = mysqli_num_rows($sql);


$sql = myQuery("SELECT * FROM access_student_ss_1 ");

$all_sss_students = mysqli_num_rows($sql);

$sql = myQuery("SELECT * FROM access_employee ");

$all_employee = mysqli_num_rows($sql);


$sql = myQuery("SELECT * FROM access_teacher");

$all_teachers = mysqli_num_rows($sql);


$count_total_students =  $all_jss_students + $all_sss_students;

$count_total_users = $all_jss_students+$all_sss_students+$all_teachers+$all_employee;

 ?>


<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
           
        </h1>

       <div class="row">
           
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">

                         
                         <div class='huge'><?php echo $count_total_users ?></div>
                               <div>Total Users</div>
                           </div>
                       </div>
                   </div>
                   <a href="posts.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>


           <div class="col-lg-3 col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">

                            

                            <div class='huge'><?php echo $all_teachers ?></div>
                             <div>Total Teachers</div>
                           </div>
                       </div>
                   </div>
                   <a href="comments.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>



           <div class="col-lg-3 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">

                         
                           <div class='huge'><?php echo $count_total_students ?></div>
                               <div>Total Students</div>
                           </div>
                       </div>
                   </div>
                   <a href="users.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>


           <div class="col-lg-3 col-md-6">
               <div class="panel panel-red">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-list fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <div class='huge'><?php echo $all_employee ?></div>
                                <div>Total Employees</div>
                           </div>
                       </div>
                   </div>
                   <a href="categories.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>


       </div>
      
    </div>
</div>
<!-- /.row1 -->



<!-- /.row2 -->

   <div class="row">
     <div class="col-sm-12">
         <div class="col-md-6">
             <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
         </div>
         <div class="col-md-6">
             <div class="caller">
                                         
                 <div class="main-example">
                     <div class="clock"></div>
                     <div class="message"></div>

                 </div>
             </div>
         </div>

          <div class="row">
              <div class="col-md-6">
                  
              </div>
              
          </div> 

          <div class="row">
              
              <div class="col-lg-6">
                  <div class="panel panel-default">
                       <div class="panel-heading">
                           <h3 class="panel-title"><i class="fa fa-dashboard fa-fw"></i>Dashboard Chart</h3>
                       </div>
                       <div class="panel-body">
                           <script type="text/javascript">
                                 google.charts.load('current', {'packages':['bar']});
                                 google.charts.setOnLoadCallback(drawChart);

                                 function drawChart() {
                                   var data = google.visualization.arrayToDataTable([
                                     ['Data', 'Count'],

                                     <?php 

                                       $element_text = ['All JSS Students','All SSS Students','Total Students','All Teachers','All Employees'];
                                       $element_count = [$all_jss_students,$all_sss_students,$count_total_students,$all_teachers,$all_employee,];

                                       for($i = 0 ; $i < 5 ; $i++){
                                          
                                            echo "['{$element_text[$i]}'" . " ," . "{$element_count[$i]}],";

                                           
                                       }

                                      ?>



                                     // ['Post', 1000],
                                    
                                   ]);

                                   var options = {
                                     chart: {
                                       title: '',
                                       subtitle: '',
                                     }
                                   };

                                   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                   chart.draw(data, google.charts.Bar.convertOptions(options));
                                 }
                           </script>

                               <div id="columnchart_material" style="width: auto; height: 500px;"></div>
                    </div>
                  </div>
              </div>

              <div class="col-lg-6">
               <!--  <a class="weatherwidget-io" href="https://forecast7.com/en/6d693d24/ota/" data-label_1="OTA" data-label_2="WEATHER" data-theme="original" >OTA WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script> -->
                <div class="panel panel-default">
                       <div class="panel-heading">
                           <h3 class="panel-title"><i class="fa fa-dashboard fa-fw"></i>Subject Statistics</h3>
                       </div>
                       <div class="panel-body">
                           <script type="text/javascript">
                                 google.charts.load("current", {packages:["corechart"]});
                                 google.charts.setOnLoadCallback(drawChart);
                                 function drawChart() {
                                   var data = google.visualization.arrayToDataTable([
                                     ['Task', 'Hours per Day'],
                                     ['SS1',     25],
                                     ['SS2',      15],
                                     ['SS3',  10],
                                     ['JS1', 20],
                                     ['JS2',    15],
                                     ['JS3',    8]
                                   ]);

                                   var options = {
                                     title: 'Subject Statistics',
                                     is3D: true,
                                   };

                                   var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                   chart.draw(data, options);
                                 }
                           </script>
                       </div>

                

                     <div id="piechart_3d" style=" width: 500px; height: 500px;"></div>
              </div>
              
          </div>       



     </div>
   </div>

<!-- /.row2 -->

