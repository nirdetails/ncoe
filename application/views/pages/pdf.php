<?php
require_once __DIR__ . '/vendor/autoload.php';

//grab variables
//AL page
$index = $_POST['index'];
$sel1 = $_POST['sel1'];
//AL Pirivena page
$pyear = $_POST['pyear'];
$pindex = $_POST['pindex'];
$psel1 = $_POST['psel1'];
$medium = $_POST['medium'];
$generaltest = $_POST['generaltest'];
$zcore = $_POST['zcore'];
$subjectname1 = $_POST['subjectname1'];
$grade1 = $_POST['grade1'];
$subjectname2 = $_POST['subjectname2'];
$grade2 = $_POST['grade2'];
$subjectname3 = $_POST['subjectname3'];
$grade3 = $_POST['grade3'];
$subjectname4 = $_POST['subjectname4'];
$grade4 = $_POST['grade4'];

//AL Result Page
$alattempt= $_GET['attempt'];
$almedium = $_GET['medium'];
$alsub1 = $_GET['sub1'];
$algrade1 = $_GET['grade1'];
$alsub2 = $_GET['sub2'];
$algrade2 = $_GET['grade2'];
$alsub3 = $_GET['sub3'];
$algrade3 = $_GET['grade3'];
$algentst = $_GET['gentst'];
$alzscore = $_GET['zscore'];

//OL page
$olsel1 = $_POST['olsel1'];
$index1 = $_POST['index1'];
$index2 = $_POST['index2'];
$index3 = $_POST['index3'];

//OL Results page
$olindex = $_GET['olindex'];
$olyear = $_GET['olyear'];//from database, not in form
$olsub1 = $_GET['sub1'];
$olgrade1 = $_GET['grade1'];
$olsub2 = $_GET['sub2'];
$olgrade2 = $_GET['grade2'];
$olsub3 = $_GET['sub3'];
$olgrade3 = $_GET['grade3'];
$olsub4 = $_GET['sub4'];
$olgrade4 = $_GET['grade4'];
$olsub5 = $_GET['sub5'];
$olgrade5 = $_GET['grade5'];
$olsub6 = $_GET['sub6'];
$olgrade6 = $_GET['grade6'];
$olsub7 = $_GET['sub7'];
$olgrade7 = $_GET['grade7'];
$olsub8 = $_GET['sub8'];
$olgrade8 = $_GET['grade8'];
$olsub9  = $_GET['sub9'];
$olgrade9 = $_GET['grade9'];


//course select page
$course1 = $_POST['course1'];
$course2 = $_POST['course2'];
$course3 = $_POST['course3'];
$marks = $_POST['marks'];
$marks2 = $_POST['marks2'];
$marks3 = $_POST['marks3'];
$myfile = $_POST['myfile'];

//Sripada page
$sri1 = $_POST['sri1'];
$sri2 = $_POST['sri2'];

//personal details pages
$fullname = $_POST['fullname'];
$initials = $_POST['initials'];
$dob = $_POST['dob'];
$addressline1 = $_POST['addressline1'];
$addressline2 = $_POST['addressline2'];
$addressline3 = $_POST['addressline3'];
$addressline4 = $_POST['addressline4'];
$district = $_POST['district'];
$nic = $_POST['nic'];
$gender = $_POST['gender'];
$title = $_POST['title'];
$ethnicity = $_POST['ethnicity'];
$mobile = $_POST['mobile'];
$home = $_POST['home'];
$email = $_POST['email'];


//Create new pdf instance
$mpdf = new \Mpdf\Mpdf();

//create our pdf
$data ='';

$data .= '<h1>National Colleges of Education (NCoE) Admission </h1> ';

//Add data
//Personal Details
$data .= '<h4>Personal Details: </h4> ';
$data .= '<strong>Full Name: </strong>' . $fullname . '<br/>';
$data .= '<strong>Name with Initials: </strong>' . $initials . '<br/>';
$data .= '<strong>Date of Birth: </strong>' . $dob . '<br/>';
$data .= '<strong>Address: </strong>' . $addressline1 . '<br/>' .$addressline2 . '<br/>'. $addressline3 .'<br/>' . $addressline4 .'<br/>';
$data .= '<strong>District: </strong>' . $district . '<br/>';
$data .= '<strong>NIC: </strong>' . $nic . '<br/>';
$data .= '<strong>Gender: </strong>' . $gender . '<br/>';
$data .= '<strong>Title: </strong>' . $title . '<br/>';
$data .= '<strong>Ethnicity: </strong>' . $ethnicity . '<br/>';
$data .= '<strong>Mobile Number: </strong>' . $mobile . '<br/>';
$data .= '<strong>Home Number: </strong>' . $home . '<br/>';
$data .= '<strong>Email: </strong>' . $email . '<br/>';

//sripada page details
$data .= '<strong>Are you applying for Sripada NCoE? </strong>' . $sri1 . '<br/>';
if($sri2){
    $data .= '<strong>Are your parents are State Workers? </strong>' . $sri2 . '<br/>';
}

//A/L Details
$data .= '<h4>A/L Details: </h4> ';
if($index || $sel1){
    $data .= '<strong>A/L Index No:</strong>' . $index . '<br/>';
    $data .= '<strong>Stream: </strong>' . $sel1 . '<br/>';
    $data .= '<strong>Medium: </strong>' . $almedium . '<br/>';//from A/L Results Table
    $data .= '<strong>Attempt: </strong>' . $alattempt . '<br/>';//from A/L Results Table
}else{
    $data .= '<strong>A/L Index No: </strong>' . $pindex . '<br/>';
    $data .= '<strong>A/L Year: </strong>' . $pyear . '<br/>';
    $data .= '<strong>Stream: </strong>' . $psel1 . '<br/>';
    $data .= '<strong>Medium: </strong>' . $medium . '<br/>';   
    $data .= '<h4>A/L Results: </h4> <br/>';
    $data .= '<h6>Subject</h6> . <span>          </span> . <h6>Grade> . <br/>';
    $data .= $subjectname1 . '<span>         </span>' . $grade1 . '<br/>';
    $data .= $subjectname2 . '<span>         </span>' . $grade2 . '<br/>';
    $data .= $subjectname3 . '<span>         </span>' . $grade3 . '<br/>';
    $data .= '<strong>General Test Marks: </strong>' . $generaltest . '<br/>';
    $data .= '<strong>Z-Core: </strong>' . $zcore . '<br/>';
    if($subjectname4 || $grade4){
        $data .= $subjectname4 . '<span>         </span>' . $grade4 . '<br/>';
    }
    
}
$data .= '<h4>A/L Results: </h4> <br/>';
$data .= '<h6>Subject</h6> . <span>          </span> . <h6>Grade> . <br/>';
$data .= $alsub1 . '<span>         </span>' . $algrade1 . '<br/>';
$data .= $alsub2 . '<span>         </span>' . $algrade2 . '<br/>';
$data .= $alsub3 . '<span>         </span>' . $algrade3 . '<br/>';
$data .= '<strong>General Test Marks: </strong>' . $algentst . '<br/>';
$data .= '<strong>Z-Core: </strong>' . $alzscore . '<br/>';

//O/L Details
$data .= '<h4>O/L Details: </h4> ';
$data .= '<strong>Number of Attempts: </strong>' . $olsel1 . '<br/>';
$data .= '<strong>O/L Index No of First Attempt: </strong>' . $index1 . '<br/>';
if($index2){
    $data .= '<strong>O/L Index No of Second Attempt: </strong>' . $index2 . '<br/>';
}
if($index3){
    $data .= '<strong>O/L Index No of Third Attempt: </strong>' . $index3 . '<br/>';
}
$data .= '<h6>O/L Results: </h6> <br/>';
$data .= '<h6>Subject</h6> . <span>          </span> . <h6>Grade> . <br/>';
$data .= $olsub1 . '<span>         </span>' . $olgrade1 . '<br/>';
$data .= $olsub2 . '<span>         </span>' . $olgrade2 . '<br/>';
$data .= $olsub3 . '<span>         </span>' . $olgrade3 . '<br/>';
$data .= $olsub4 . '<span>         </span>' . $olgrade4 . '<br/>';
$data .= $olsub5 . '<span>         </span>' . $olgrade5 . '<br/>';
$data .= $olsub6 . '<span>         </span>' . $olgrade6 . '<br/>';
$data .= $olsub7 . '<span>         </span>' . $olgrade7 . '<br/>';
$data .= $olsub8 . '<span>         </span>' . $olgrade8 . '<br/>';
$data .= $olsub9 . '<span>         </span>' . $olgrade9 . '<br/>';

//Selected Courses Details
$data .= '<h4>Selected Courses: </h4> ';
$data .= '<strong>1. </strong>' . $course1 . '<br/>';
$data .= '<strong>1. </strong>' . $course2 . '<br/>';
$data .= '<strong>1. </strong>' . $course3 . '<br/>';
if($marks){
    $data .= '<strong>' .$course1. '</strong>' . $marks . '<br/>';
}
if($marks){
    $data .= '<strong>' .$course2. '</strong>' . $marks2 . '<br/>';
}
if($marks){
    $data .= '<strong>' .$course3. '</strong>' . $marks3 . '<br/>';
}
if($myfile){
    $data .= '<strong>Certificates: </strong>' . $myfile . '<br/>';//can recheck the uploaded certificates 
}

//Declaration 
$data .= '<h6>Declaration: </h6> <br/>';
$data .= '<p>01. I am aware that I have forwarded my application in accordance with paragraph10.0 of the Gazette Notification, after reading and comprehending the Gazette Notification well.</p> <br/>';
$data .= '<p>02. I certify that I have already acquired the qualifications mentioned in the Gazette Notification relevant to the Courses that have been applied by me.</p> <br/>';
$data .= '<p>03. I am aware that the particulars furnished in the application by me are true and correct. I am aware that if any particulars given by me in this application are found to be false or incorrect or contradictory to the Gazette Notification, I am liable to be disqualified before selection or to be discontinued after selection.</p> <br/>';
$data .= '<p>04. I certify that I have not registered to follow a course in a University/University Institute/any other Higher Education Institute/ I am not currently following a relevant course in an afore mentioned institute. I further certify that I agree to be discontinued from the course if It is found that the section 8.4 of the Gazette Notification has been/is violated by me.</p><br/>';
$data .= '<p>05. I declare that I agree to accept any punishment pronounced by the disciplinary board of the National College of Education and the Ministry of Education if I am found and proven to have been engaged in any action against the code of conduct of National Colleges of Education.</p><br/>';
$data .= '<strong> Agreed </strong> <br/>';


//Write pdf
$mpdf -> WriteHTML($data);

//Output to browser
$mpdf->Output('myapplication.pdf', 'D');
 