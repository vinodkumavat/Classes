
<?php

    include('../Login Page/LoginValidation.php');

    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');




    //creating query
    $query = 'SELECT * FROM student';          //from student database

    //get result
    $result = mysqli_query($conn, $query);

    //fetch data
    $student = mysqli_fetch_all($result, MYSQLI_ASSOC);            //MYSQLI_(type of array)    Associative array means ['indexName'=>'value']  eg. ['Name'=>'Vinod']
            

    //free result i.e. clearing data from result variable
    mysqli_free_result($result);

    //closing connection
    mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Kumavat Science Classes
        </title>
        <link rel="stylesheet" type="text/css" href="MyInformation+Attendance+Result+FeesPaid+ClassSchedule+Notice.css">
    </head> 
    
    <body>
        <div class="heading">
            <header> 
                <a href="../index.html"> <h1> KUMAVAT </h1> </a>
                <h2> The PATH OF SUCCESS </h2> 
            </header>
        </div>

        <h3> Welcome,XYZ </h3>



        <div class="Informtion">
            <table>
                <tr> 
                    <td> Name:- </td> 
                    <td> <?php echo $data['Full_Name']; ?> </td>
                </tr> 
                <tr> 
                    <td> Admission No. </td> 
                    <td> <?php echo $data['Admission_No']; ?> </td>
                </tr>
                <tr> 
                    <td> Your Contact No. </td>
                    <td> <?php echo $data['self_No']; ?> </td>
                </tr>
                <tr> 
                    <td> Prent's Contact No. </td>
                    <td> <?php echo $data['parent_No']; ?> </td> 
                </tr>
                <tr> 
                    <td> Address </td>
                    <td> <?php echo $data['Address']; ?> </td>
                </tr>
            </table>
            <br>
        </div>


        
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