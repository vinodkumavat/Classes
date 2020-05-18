<?php
    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');

    //check if submit is done from home page and enquiry form
    if(isset($_POST['enquiryform']))
    {
        //get data
        $EFname = $_POST['YourName'];
        $EFcontact = $_POST['ContactNumber'];
        $EFfield = $_POST['Field'];
        $EFemail = $_POST['Email'];
        

        $query = "INSERT INTO enquirylist (name, contact, email, field, subject, message) VALUES('$EFname', '$EFcontact', '$EFemail', '$EFfield', '-', '-')";
        if( mysqli_query($conn, $query) )
        {
            header('Location: ../Enquiry Form/EnquirySubmission.html');
        }
        else
        {
            echo "Error in filling enquiryform";
        }
    }


    //check if submit is done from contact us 
    if(isset($_POST['contactus']))
    {
        //get data
        $CUname = $_POST['YourName'];
        $CUcontact = $_POST['ContactNumber'];
        $CUemail = $_POST['Email'];
        $CUsubject = $_POST['Subject'];
        $CUmessage = $_POST['Message'];
        

        $query = "INSERT INTO enquirylist (name, contact, email, field, subject, message) VALUES('$CUname', '$CUcontact', '$CUemail', '-', '$CUsubject', '$CUmessage')";
        if( mysqli_query($conn, $query) )
        {
            header('Location: ../Enquiry Form/EnquirySubmission.html');
        }
        else
        {
            echo "Error in filling contactform";
        }
    }

    $conn->close();
?>