<?php

    //connecting
    $conn = mysqli_connect('localhost', 'id13266721_root', 'XDAnZij9NE8N(2{1', 'id13266721_coaching_institute');




    //creating query
    $query1 = 'SELECT * FROM faculty';          //from faculty database
    $query2 = 'SELECT * FROM student';          //from student database

    //get result
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);

    //fetch data
    $faculty = mysqli_fetch_all($result1, MYSQLI_ASSOC);            //MYSQLI_(type of array)    Associative array means ['indexName'=>'value']  eg. ['Name'=>'Vinod']
    $student = mysqli_fetch_all($result2, MYSQLI_ASSOC);        

    //free result i.e. clearing data from result variable
    mysqli_free_result($result1);
    mysqli_free_result($result2);

    //closing connection
    mysqli_close($conn);

    


    //if faculty try to log in
    if($_POST['formtype'] == 'Faculty')
    {
        $FUsername = $_POST['FUsername'];
        $FPassword = $_POST['FPassword'];
        $Fcount =0;
        foreach($faculty as $data1)
        {
            if($data1['username'] == $FUsername  &&  $data1['password'] == $FPassword)
            {
                $Fcount ++;
                break;
            }
        }
        if($Fcount===1)
        {
            header("Location: ../Faculty/Home.html");
        }
        else
        {
            header("Location: FalseLogin.html");  
        } 
    }




    //if students try to login
    if($_POST['formtype'] == 'Student')
    {
        $SUsername = $_POST['SUsername'];
        $SPassword = $_POST['SPassword'];
        $Scount =0;
        foreach($student as $data2)
        {
            if($data2['username'] == $SUsername  &&  $data2['password'] == $SPassword)
            {
                $Scount ++;
                break;
            }
        }
        if($Scount===1)
        {
            header("Location: ../Students Zone/HomePage.html");
        }
        else
        {
            header("Location: FalseLogin.html");
        }
    }
    

?>