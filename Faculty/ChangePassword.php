<?php

    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');




    //creating query
    $query1 = 'SELECT * FROM faculty';          //from faculty database

    //get result
    $result1 = mysqli_query($conn, $query1);

    //fetch data
    $faculty = mysqli_fetch_all($result1, MYSQLI_ASSOC);            //MYSQLI_(type of array)    Associative array means ['indexName'=>'value']  eg. ['Name'=>'Vinod']        

    //free result i.e. clearing data from result variable
    mysqli_free_result($result1);

    //closing connection
    //mysqli_close($conn);




    //check for submit
    if(isset($_POST['submit']))
    {
        $FUsername = $_POST['username'];
        $CurrentPassword = $_POST['CPassword'];
        $NewPassword = $_POST['NPassword'];
        $ConfirmPassword = $_POST['CoPassword'];

        foreach($faculty as $data1)
        {
            if($data1['username'] == $FUsername  &&  $data1['password'] == $CurrentPassword)
            {
                $MyPassword = $data1['password'];
                $id =$data1['id'];
                break;
            }
        }



        if($CurrentPassword == $MyPassword && $NewPassword == $ConfirmPassword )
        {
            // syntax  $VariableName = 'INSERT INTO tableName (coloum1, coloum2, coloum3, ......) VALUES(?, ?, ?, .......)';
            $query = "UPDATE faculty SET password = $NewPassword WHERE id = $id";


            if( $conn->query($query) === TRUE )
            {
                header('Location: TruePassChange.html'); 
            }
            else
            {
                echo "Error in updating password";
            }   
        }
        else
        {
            header("Location: FalsePassChange.html");
        }

    }    
    $conn->close();

?>