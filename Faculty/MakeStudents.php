<?php
    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');

    //check for submit
    if(isset($_POST['submit']))
    {
        //get data
        $name = $_POST['name'];
        $admissionNo = $_POST['admissionNo'];
        $email = $_POST['email'];
        $Snumber = $_POST['SelfNumber'];
        $Pnumber = $_POST['ParentNo'];
        $add = $_POST['address'];
        $user = $_POST['username'];
        $pass = $_POST['password'];


        // syntax  $VariableName = 'INSERT INTO tableName (coloum1, coloum2, coloum3, ......) VALUES(?, ?, ?, .......)';
        $query = "INSERT INTO student (Full_Name, Admission_No, email, self_No, parent_No, Address, username, password) VALUES('$name', '$admissionNo', '$email', '$Snumber', '$Pnumber', '$add', '$user', '$pass')";
        if( mysqli_query($conn, $query) )
        {
            header('Location: MakeAdmission.php');
        }
        else
        {
            echo "Error in updating data";
        }
    }


    //checking for id to be deleted id clicked or not
    if(isset($_POST['delete']))
    {
        //getting id to delete
        $id = $_POST['delete'];

        $delete = "DELETE FROM student WHERE id = $id";

        //checking for delete
        if(mysqli_query($conn, $delete))
        {
            header('Location: MakeAdmission.php');
        }
        else
        {
            echo "Not deleted data";
        } 
    }



    //checking for id to be updated
    if(isset($_POST['update']))
    {
        //getting id to delete
        $id = $_POST['update'];

        $update = "UPDATE student /*WHERE  TableNAme = Value */ WHERE id = $id";

        //checking for delete
        if(mysqli_query($conn, $update))
        {
            echo "updated";
            //header('Location: UpdateAdmission.php');
        }
        else
        {
            echo "Not updated data";
        } 
    }

    $conn->close();
?>