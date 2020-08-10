<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
    // var_dump($_SESSION);
    // var_dump($alresults);
?>    
    <body>
    <div class="container  mt-5">
            <h1>National Colleges of Education (NCoE) Admission</h1><br>
            <label for="fullname">01. Name in Full:  </label><?php echo $_SESSION['fullname']; ?><br>
            <label for="initials">02. Name with Initials:    </label><?php echo $_SESSION['namewithinitials']; ?><br>
            <label for="address">03. Permanent Address: </label><?php echo $_SESSION['addressline1']; ?>
            <?php echo $_SESSION['addressline2']; ?>
            <?php echo $_SESSION['addressline3']; ?>
            <?php echo $_SESSION['addressline4']; ?><br>
            <label for="district">04. Recendent District Name and Number: </label><?php echo $_SESSION['district']; ?><br>
            <label for="nic">05. NIC Number: </label><?php echo $_SESSION['nic']; ?><br>
            <label for="gender">06. Gender: </label><?php echo $_SESSION['gender']; ?><br>
            <label for="title">07. Title: </label><?php echo $_SESSION['title']; ?><br>
            <label for="ethnicity">08. Ethnicity: </label><?php echo $_SESSION['ethnicity']; ?><br>
            <label for="mobile">09. Mobile: </label><?php echo $_SESSION['mobile']; ?><br>
            <label for="home">10. Home Tel: </label><?php echo $_SESSION['home']; ?><br>
            <label for="email">11. Email: </label><?php echo $_SESSION['email']; ?><br>

            <!-- <label for="Sripada">12. Are you applying for Sripada NCoE? </label><br>
            <label for="state">13. Are your parents are State Workers? </label><br><br> -->


            <h5>A/L Details: </h5>
            <?php foreach($alresults as $alresult): ?>
            <label for="alindex">14. A/L Index No:</label><?php echo $_SESSION['alindex']; ?><br>
            <label for="alyear">15. A/L Year: </label>2018<br>
            <label for="alstream">16. Stream: </label><?php echo $alresult['stream'] ?><br>
            <label for="almedium">17. Medium: </label><?php echo $alresult['medium'] ?><br>
            <label for="alattempt">18. Attempt: </label><?php echo $alresult['attempt'] ?><br><br>
            <h5>A/L Results: </h5>
                <table>
                <tr>
                    <th></th>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $alresult['sub1'] ?></td>
                    <td><?php echo $alresult['grade1'] ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $alresult['sub2'] ?></td>
                    <td><?php echo $alresult['grade2'] ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $alresult['sub3'] ?></td>
                    <td><?php echo $alresult['grade3'] ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $alresult['sub4'] ?></td>
                    <td><?php echo $alresult['grade4'] ?></td>
                </tr>
                </table>
                

                <label for="gtest">19. General Test Marks: </label><?php echo $alresult['gentst'] ?><br>
                <label for="zcore">20. Z-Core: </label><?php echo $alresult['zscore'] ?><br><br>
                <?php endforeach; ?>

            <h5>O/L Details: </h5>
            <?php foreach($olresults1 as $olresult1): if( $olresult1["OL_index"] != "N/A"){?>
            <label for="olattempts">21. Number of Attempts: <br>
            <label for="olindex">22. Index Number: <br><br>
            <h5>O/L Results: </h5>
            <table>
                <tr>
                    <th></th>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $olresult1['sub1']; ?></td>
                    <td><?php echo $olresult1['grade1']; ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $olresult1['sub2']; ?></td>
                    <td><?php echo $olresult1['grade2']; ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $olresult1['sub3']; ?></td>
                    <td><?php echo $olresult1['grade3']; ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $olresult1['sub4']; ?></td>
                    <td><?php echo $olresult1['grade4']; ?></td>
                </tr>
                <tr>
                    <td>05. </td>
                    <td><?php echo $olresult1['sub5']; ?></td>
                    <td><?php echo $olresult1['grade5']; ?></td>
                </tr>
                <tr>
                    <td>06. </td>
                    <td><?php echo $olresult1['sub6']; ?></td>
                    <td><?php echo $olresult1['grade6']; ?></td>
                </tr>
                <tr>
                    <td>07. </td>
                    <td><?php echo $olresult1['sub7']; ?></td>
                    <td><?php echo $olresult1['grade7']; ?></td>
                </tr>
                <tr>
                    <td>08. </td>
                    <td><?php echo $olresult1['sub8']; ?></td>
                    <td><?php echo $olresult1['grade8']; ?></td>
                </tr>
                <tr>
                    <td>09. </td>
                    <td><?php echo $olresult1['sub9']; ?></td>
                    <td><?php echo $olresult1['grade9']; ?></td>
                </tr>
            </table><br>
            <?php }endforeach; ?>

            <?php foreach($olresults2 as $olresult2): if( $olresult2["OL_index"] != "N/A"){?>
            <label for="olattempts">21. Number of Attempts: <br>
            <label for="olindex">22. Index Number: <br><br>
            <h5>O/L Results: </h5>
            <table>
                <tr>
                    <th></th>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $olresults2['sub1']; ?></td>
                    <td><?php echo $olresults2['grade1']; ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $olresults2['sub2']; ?></td>
                    <td><?php echo $olresults2['grade2']; ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $olresults2['sub3']; ?></td>
                    <td><?php echo $olresults2['grade3']; ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $olresults2['sub4']; ?></td>
                    <td><?php echo $olresults2['grade4']; ?></td>
                </tr>
                <tr>
                    <td>05. </td>
                    <td><?php echo $olresults2['sub5']; ?></td>
                    <td><?php echo $olresults2['grade5']; ?></td>
                </tr>
                <tr>
                    <td>06. </td>
                    <td><?php echo $olresults2['sub6']; ?></td>
                    <td><?php echo $olresults2['grade6']; ?></td>
                </tr>
                <tr>
                    <td>07. </td>
                    <td><?php echo $olresults2['sub7']; ?></td>
                    <td><?php echo $olresults2['grade7']; ?></td>
                </tr>
                <tr>
                    <td>08. </td>
                    <td><?php echo $olresults2['sub8']; ?></td>
                    <td><?php echo $olresults2['grade8']; ?></td>
                </tr>
                <tr>
                    <td>09. </td>
                    <td><?php echo $olresults2['sub9']; ?></td>
                    <td><?php echo $olresults2['grade9']; ?></td>
                </tr>
            </table><br>
            <?php }endforeach; ?>

            <?php foreach($olresults3 as $olresult3): if( $olresult3["OL_index"] != "N/A"){?>
            <label for="olattempts">21. Number of Attempts: <br>
            <label for="olindex">22. Index Number: <?php echo $olresult3["OL_index"] ?><br><br>
            <h5>O/L Results: </h5>
            <table>
                <tr>
                    <th></th>
                    <th>Subject</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $olresults3['sub1']; ?></td>
                    <td><?php echo $olresults3['grade1']; ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $olresults3['sub2']; ?></td>
                    <td><?php echo $olresults3['grade2']; ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $olresults3['sub3']; ?></td>
                    <td><?php echo $olresults3['grade3']; ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $olresults3['sub4']; ?></td>
                    <td><?php echo $olresults3['grade4']; ?></td>
                </tr>
                <tr>
                    <td>05. </td>
                    <td><?php echo $olresults3['sub5']; ?></td>
                    <td><?php echo $olresults3['grade5']; ?></td>
                </tr>
                <tr>
                    <td>06. </td>
                    <td><?php echo $olresults3['sub6']; ?></td>
                    <td><?php echo $olresults3['grade6']; ?></td>
                </tr>
                <tr>
                    <td>07. </td>
                    <td><?php echo $olresults3['sub7']; ?></td>
                    <td><?php echo $olresults3['grade7']; ?></td>
                </tr>
                <tr>
                    <td>08. </td>
                    <td><?php echo $olresults3['sub8']; ?></td>
                    <td><?php echo $olresults3['grade8']; ?></td>
                </tr>
                <tr>
                    <td>09. </td>
                    <td><?php echo $olresults3['sub9']; ?></td>
                    <td><?php echo $olresults3['grade9']; ?></td>
                </tr>
            </table><br>
            <?php }endforeach; ?>
    <h5>Selected Courses: </h5>
    <ol>
        <li><?php echo $_SESSION['course1']; ?></li>
        <li><?php echo $_SESSION['course2']; ?></li>
        <li><?php echo $_SESSION['course3']; ?></li>
    </ol>
    <label for="pemarks">23. Physical Education Marks: <br><br>
    <h5>Declaration: </h5>
        <p style="text-align: justify">I am aware that I have forwarded my application in accordance with paragraph10.0 of the Gazette Notification, after reading and comprehending the Gazette Notification well. I certify that I have already acquired the qualifications mentioned in the Gazette Notification relevant to the Courses that have been applied by me. I am aware that the particulars furnished in the application by me are true and correct. I am aware that if any particulars given by me in this application are found to be false or incorrect or contradictory to the Gazette Notification, I am liable to be disqualified before selection or to be discontinued after selection. I certify that I have not registered to follow a course in a University/University Institute/any other Higher Education Institute/ I am not currently following a relevant course in an afore mentioned institute. I further certify that I agree to be discontinued from the course if It is found that the section 8.4 of the Gazette Notification has been/is violated by me. I declare that I agree to accept any punishment pronounced by the disciplinary board of the National College of Education and the Ministry of Education if I am found and proven to have been engaged in any action against the code of conduct of National Colleges of Education.</p>
        <div style="text-align:center">
            <strong> I Agreed </strong> <br/>
        </div>
    </div>
</body>
<?php
$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');
?>

<h1>This is it <?php var_dump($_SESSION); ?></h1>
