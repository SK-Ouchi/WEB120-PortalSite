<?php include "includes/header.php";?>
<h2 class="pageID">Contact Satoru</h2>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "satoru.ouchi@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Satoru Ouchi"; //place your client's name here
        $website = "Web 120 Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
<?php include "includes/footer.php";?>