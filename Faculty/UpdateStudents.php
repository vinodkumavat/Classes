<?php
    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');


    //check for update button in faculty MakeAdmission
    if(isset($_POST['update']))
    {

        //get data from update
        $id = $_POST['id'];
        $name = $_POST['name'];
        $admissionNo = $_POST['admissionNo'];
        $email = $_POST['email'];
        $Snumber = $_POST['SelfNumber'];
        $Pnumber = $_POST['ParentNo'];
        $add = $_POST['address'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
    }

    //check for submit in same page
    if( isset($_POST['submit']) )
    {
        //get data from updatestudents.php
        $Newid = $_POST['Newid'];
        $NewName = $_POST['Newname'];
        $NewadmissionNo = $_POST['NewadmissionNo'];
        $Newemail = $_POST['Newemail'];
        $NewSnumber = $_POST['NewSelfNumber'];
        $NewPnumber = $_POST['NewParentNo'];
        $Newadd = $_POST['Newaddress'];
        $Newuser = $_POST['Newusername'];
        $Newpass = $_POST['Newpassword'];


        //updating data
        $update = "UPDATE student SET Full_Name = '$NewName', Admission_No = '$NewadmissionNo', email = '$Newemail', self_No = '$NewSnumber', parent_No = '$NewPnumber', Address = '$Newadd', username = '$Newuser', password = '$Newpass' WHERE id = '$Newid'";
        
        //cheching updated or not
        if( mysqli_query($conn, $update) )
        {
            header('Location: MakeAdmission.php');
        }
        else
        {
            echo "Error in updating data";
        }  
    }
    $conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Kumavat Science Classes
        </title>
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
        <div class="heading">
            <header> 
                <a href="../index.html"> <h1> KUMAVAT </h1> </a>
                <h2> The PATH OF SUCCESS </h2> 
            </header>
        </div>
        <br><br>

        <div class="ChangeData">
            <form action="UpdateStudents.php" method="POST">
                <input type="hidden" name="Newid" value="<?php echo $id ?>">
                <label> Name: </label>
                <input type="text" placeholder="<?php echo $name; ?>" name="Newname" required> <br><br>

                <label> Admission Number: </label>
                <input type="text" placeholder="<?php echo $admissionNo; ?>" name="NewadmissionNo" required> <br><br>

                <label> Email: </label>
                <input type="email" placeholder="<?php echo $email; ?>" name="Newemail" required> <br><br>

                <label> Sudent's Number: </label>
                <input type="number" placeholder="<?php echo $Snumber; ?>" name="NewSelfNumber" required> <br><br>

                <label> Parent's Number: </label>
                <input type="number" placeholder="<?php echo $Pnumber; ?>" name="NewParentNo" required> <br><br>


                <label> Address: </label>
                <input type="text" placeholder="<?php echo $add; ?>" name="Newaddress" required> <br><br>

                <label> Username: </label>
                <input type="text" placeholder="<?php echo $user; ?>" name="Newusername" required> <br><br>

                <label> Password: </label>
                <input type="text" placeholder="<?php echo $pass; ?>" name="Newpassword" required> <br><br>

                <button type="submit" name="submit"> Update </button> <br><br>
            </form>
        </div>
        <br><br>

        <div class="Buttom">
            <b> OUR BRANCHES </b> <br><br>
            <div class="Address">
                <div class="Address1">
                    <strong> Vasai West </strong> <br>
                    1st & 2nd Floor Vighneshwar Apt., Vijaynagar, Vasai(W), Maharashtra <br> 401203 <br><br>
                    Call @8830313146
                </div>
                <div class="Address2">
                    <strong> Virar East </strong> <br>
                    2nd Floor Jai bhole Niwas, Alkapuri Road, Virar(E), Maharashtra <br> 401302 <br><br>
                    Call @9167638951
                </div>
                <div class="Address3">
                    <strong> Nallasopara East </strong> <br>
                    4th & 5th floor Laxmi Niwas, Tulinj Road, Nallasopara(E), Maharashtra <br> 401209 <br><br>
                    Call @9892009840
                </div>
            </div>
            <br><br>
            <div class="Follow">
                <h4> FOLLOW KUMAVAT ON </h4>
                <a href="https://m.facebook.com/vinod.kumawat.589100"> FaceBook </a> &nbsp;
                <a href="https://www.instagram.com/kumavatvinod_1128/?fbclid=IwAR2HTveKXnJhgAE7_Q-K2yk1sCWyLPvwvv3wZ9ohtfc8WA3rr3jbDHM0Mec"> InstaGram </a> &nbsp;
                <a href="https://www.youtube.com/"> YouTube </a> &nbsp;
            </div>
            <br>
            <div class="ButtomOfPage">
                <p>
                    2020 Kumavat All Rights Reserved.<br>
                    Designed and Marketed by Vinod
                </p>
            </div>    
        </div>

    </body>
</html>