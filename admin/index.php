<?php include "frontend/header.php" ?>

    <div id="wrapper">

       <?php include "frontend/nav.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">


                <?php 

                    if($_SERVER['REQUEST_URI'] == "/school_management/admin/" || $_SERVER['REQUEST_URI'] == "/school_management/admin/index.php"){
 
                        include"backend/admin_content.php";

                    }


                    if(isset($_GET['admin_dashboard'])){
                      
                        include"backend/admin_dashboard.php";
                    }


                    if(isset($_GET['create_user'])){
                      
                        include"backend/create_user.php";
                    }

                    if(isset($_GET['view_users'])){
                      
                        include"backend/view_users.php";
                    }

                    if(isset($_GET['reset_password'])){
                      
                        include"backend/reset_password.php";
                    }

                    if(isset($_GET['edit_user'])){
                      
                        include"backend/edit_user.php";
                    }

                    if(isset($_GET['profile'])){
                      
                        include"backend/profile.php";
                    }

                    if(isset($_GET['admin_settings'])){
                      
                        include"backend/admin_settings.php";
                    }

                    if(isset($_GET['edit_settings'])){
                      
                        include"backend/edit_settings.php";
                    }

                    if(isset($_GET['create_teacher'])){
                      
                        include"backend/create_teacher.php";
                    }

                    if(isset($_GET['delete_user'])){
                      
                        include"backend/delete_user.php";
                    }

                    if(isset($_GET['view_teachers'])){
                      
                        include"backend/view_teachers.php";
                    }

                    if(isset($_GET['edit_teacher'])){

                        include "backend/edit_teacher.php";
                    }

                    if(isset($_GET['delete_teacher'])){
                        
                        include"backend/delete_teacher.php";
                    }

                    if(isset($_GET['create_class'])){
                        
                        include"backend/create_class.php";
                    }

                    if(isset($_GET['view_class'])){
                        
                        include"backend/view_class.php";
                    }


                    if(isset($_GET['edit_class'])){
                        
                        include"backend/edit_class.php";
                    }

                    if(isset($_GET['delete_class'])){
                        
                        include"backend/delete_class.php";
                    }
                     
                    if(isset($_GET['jss_one'])){
                        
                        include"backend/jss_one.php";
                    }
                    if(isset($_GET['view_subject_one'])){
                        
                        include"backend/view_subject_one.php";
                    }

                    if(isset($_GET['edit_subject'])){
                        
                        include"backend/edit_subject.php";
                    }

                    if(isset($_GET['delete_subject'])){
                        
                        include"backend/delete_subject.php";
                    }

                    if(isset($_GET['jss_two'])){
                        
                        include"backend/jss_two.php";
                    }

                    if(isset($_GET['view_subject_two'])){
                        
                        include"backend/view_subject_two.php";
                    }

                    if(isset($_GET['edit_subject_two'])){
                        
                        include"backend/edit_subject_two.php";
                    }

                    if(isset($_GET['delete_subject_two'])){
                        
                        include"backend/delete_subject_two.php";
                    }

                    if(isset($_GET['jss_three'])){
                        
                        include"backend/jss_three.php";
                    }

                    if(isset($_GET['view_subject_three'])){
                        
                        include"backend/view_subject_three.php";
                    }

                    if(isset($_GET['edit_subject_three'])){
                        
                        include"backend/edit_subject_three.php";
                    }

                    if(isset($_GET['delete_subject_three'])){
                        
                        include"backend/delete_subject_three.php";
                    }

                    if(isset($_GET['sss_one'])){
                        
                        include"backend/sss_one.php";
                    }

                    if(isset($_GET['view_subject_sss_one'])){
                        
                        include"backend/view_subject_sss_one.php";
                    }

                    
                    
                    if(isset($_GET['edit_subject_ss_one'])){
                        
                        include"backend/edit_subject_ss_one.php";
                    }


                    if(isset($_GET['delete_subject_ss_one'])){
                        
                        include"backend/delete_subject_ss_one.php";
                    }



                    if(isset($_GET['sss_two'])){
                        
                        include"backend/sss_two.php";
                    }

                    if(isset($_GET['view_subject_sss_two'])){
                        
                        include"backend/view_subject_sss_two.php";
                    }

                    if(isset($_GET['edit_subject_ss_two'])){
                        
                        include"backend/edit_subject_ss_two.php";
                    }

                    if(isset($_GET['delete_subject_ss_two'])){
                        
                        include"backend/delete_subject_ss_two.php";
                    }

                    if(isset($_GET['sss_three'])){
                        
                        include"backend/sss_three.php";
                    }

                    if(isset($_GET['view_subject_sss_three'])){
                        
                        include"backend/view_subject_sss_three.php";
                    }

                    if(isset($_GET['edit_subject_ss_three'])){
                        
                        include"backend/edit_subject_ss_three.php";
                    }

                    if(isset($_GET['delete_subject_ss_three'])){
                        
                        include"backend/delete_subject_ss_three.php";
                    }

                //////////////////////////////////////////////////////

                    if(isset($_GET['create_student_js_one'])){

                         include "backend/create_student_js_one.php";
                    }

                    if(isset($_GET['view_students_js_one'])){

                         include "backend/view_students_js_one.php";
                    }

                    if(isset($_GET['edit_student_js_one'])){

                         include "backend/edit_student_js_one.php";
                    }

                    if(isset($_GET['delete_student_js_1'])){

                         include "backend/delete_student_js_1.php";
                    }

                    //////////////////////////////////////////////////////
                    

                    if(isset($_GET['create_student_ss_one'])){

                         include "backend/create_student_ss_one.php";
                    }

                    if(isset($_GET['view_students_ss_one'])){

                         include "backend/view_students_ss_one.php";
                    }

                    if(isset($_GET['edit_student_ss_one'])){

                         include "backend/edit_student_ss_one.php";
                    }

                    if(isset($_GET['delete_student_ss_1'])){

                         include "backend/delete_student_ss_1.php";
                    }


                    if(isset($_GET['take-teacher-attendance'])){
                      
                        include "backend/take-teacher-attendance.php";
                    }
                    

                    if(isset($_GET['add_attendance_teacher'])){
                      
                        include "backend/add_attendance_teacher.php";
                    }
                    

                    if(isset($_GET['all-teacher-attendance'])){
                      
                        include "backend/all-teacher-attendance.php";
                    }

                    if(isset($_GET['view_attendance_teacher_date'])){
                      
                        include "backend/view_attendance_teacher_date.php";
                    }


///////////////////////////////////////////////////////////////////////////////////////   

                    
                    if(isset($_GET['take-employee-attendance'])){
                      
                        include "backend/take-employee-attendance.php";
                    }
                    

                    if(isset($_GET['add_attendance_employee'])){
                      
                        include "backend/add_attendance_employee.php";
                    }
                    

                    if(isset($_GET['all-employee-attendance'])){
                      
                        include "backend/all-employee-attendance.php";
                    }

                    if(isset($_GET['view_attendance_employee_date'])){
                      
                        include "backend/view_attendance_employee_date.php";
                    }

//////////////////////////////////////////////////////////////////////////////////////                 


                    if(isset($_GET['take-student-attendance'])){
                      
                        include "backend/take-student-attendance.php";
                    }

                     if(isset($_GET['all-student-attendance'])){
                      
                        include "backend/all-student-attendance.php";
                    }

                     if(isset($_GET['view_attendance_student_date'])){
                      
                        include "backend/view_attendance_student_date.php";
                    }


//////////////////////////////////////////////////////////////////////////////////////
                    
                    if(isset($_GET['take-exam-attendance'])){
                      
                        include "backend/take-exam-attendance.php";
                    }

                     if(isset($_GET['all-exam-attendance'])){
                      
                        include "backend/all-exam-attendance.php";
                    }

                     if(isset($_GET['view_attendance_exam_date'])){
                      
                        include "backend/view_attendance_exam_date.php";
                    }


/////////////////////////////////////////////////////////////////////////////////////                    




                     if(isset($_GET['create_employee'])){
                      
                        include "backend/create_employee.php";
                    }
                    
                     if(isset($_GET['view_employee'])){
                      
                        include "backend/view_employee.php";
                    }


                    if(isset($_GET['edit_employee'])){
                      
                        include "backend/edit_employee.php";
                    }



                     if(isset($_GET['delete_employee'])){
                      
                        include "backend/delete_employee.php";
                    }


                     if(isset($_GET['jss-time-table'])){
                      
                        include "backend/jss-time-table.php";
                    }

                     if(isset($_GET['add-jss-time-table'])){
                      
                        include "backend/add-jss-time-table.php";
                    }

                     if(isset($_GET['update-jss-time-table'])){
                      
                        include "backend/update-jss-time-table.php";
                    }


                     if(isset($_GET['sss-table'])){
                      
                        include "backend/sss-table.php";
                    }


                     if(isset($_GET['sss-time-table'])){
                      
                        include "backend/sss-time-table.php";
                    }

                     if(isset($_GET['add-sss-time-table'])){
                      
                        include "backend/add-sss-time-table.php";
                    }

                     if(isset($_GET['update-sss-time-table'])){
                      
                        include "backend/update-sss-time-table.php";
                    }




                     if(isset($_GET['create_exam_grade'])){
                      
                        include "backend/create_exam_grade.php";
                    }


                    
                     if(isset($_GET['view_exam_grade'])){
                      
                        include "backend/view_exam_grade.php";
                    }


                       if(isset($_GET['edit_exam_grade'])){
                      
                        include "backend/edit_exam_grade.php";
                    }
                    


                       if(isset($_GET['delete_exam_grade'])){
                      
                        include "backend/delete_exam_grade.php";
                    }


                       if(isset($_GET['create_subject_score'])){
                      
                        include "backend/create_subject_score.php";
                    }


                       if(isset($_GET['create_exam_score'])){
                      
                        include "backend/create_exam_score.php";
                    }


                       if(isset($_GET['view_exam_score'])){
                      
                        include "backend/view_exam_score.php";
                    }


                       if(isset($_GET['view_subjects_score'])){
                      
                        include "backend/view_subjects_score.php";
                    }
                    
                    
                       if(isset($_GET['exam_term'])){
                      
                        include "backend/exam_term.php";
                    }

                    
                    
 

                 ?>

               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
 <?php include "frontend/footer.php" ?>