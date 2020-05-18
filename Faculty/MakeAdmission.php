<?php

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
        <link rel="stylesheet" type="text/css" href="UpdateAdmission.css">
    </head> 
    
    <body>
        <div class="heading">
            <header> 
                <a href="../index.html"> <h1> KUMAVAT </h1> </a>
                <h2> The PATH OF SUCCESS </h2> 
            </header>
        </div>
        <br><br>


        <div>
            <h2> Make student registration </h2>  
            <form method="POST" action="MakeStudents.php">
                <input type="text" placeholder="Name" name="name"> &nbsp;
                <input type="text" placeholder="Admission No." name="admissionNo"> &nbsp;
                <input type="email" placeholder="Email" name="email"> &nbsp;
                <input type="number" placeholder="Self Number" name="SelfNumber"> &nbsp;
                <input type="number" placeholder="Parent's No." name="ParentNo"> &nbsp;
                <input type="text" placeholder="Address" name="address"> &nbsp;
                <input type="text" placeholder="Username" name="username"> &nbsp;
                <input type="text" placeholder="Password" name="password"> &nbsp;
                <button type="submit" name="submit"> Submit </button>
            </form>   
            <br><br>
        </div>




        <div class="data">
            <table id="table">
                <h2> Student already registered </h2>
                  
                <thead>
                    <th>  </th>
                    <th> <input type="text" placeholder="Search Name" id="filterName"> </th>
                    <th> <input type="text" placeholder="Search Admission" id="filterAdmission"> </th>
                    <th> <input type="text" placeholder="Search Email" id="filterEmail"> </th>
                    <th> <input type="text" placeholder="Search Self Number" id="filterSelf"> </th>
                    <th> <input type="text" placeholder="Search Parent's Number" id="filterParent"> </th>
                    <th> <input type="text" placeholder="Search Address" id="filterAddress"> </th>
                    <th> <input type="text" placeholder="Search username" id="filterUser"> </th>
                    <th>  </th>
                    <th>  </th>
                    <th>  </th>
                </thead>
    
                <thead>
                    <th> Sr.No. </th>
                    <th> Name </th>
                    <th> Admission No. </th>
                    <th> Email </th>
                    <th> Self Number </th>
                    <th> Parent's Number </th>
                    <th> Address </th>
                    <th> Username </th>
                    <th> Password </th>
                    <th> Delete data </th>
                    <th> Update data </th>
                </thead>
                <?php foreach($student as $data): ?>
                    <tr class="collection-item">
                        <td> <?php echo $data['id']; ?> </td>
                        <td> <?php echo $data['Full_Name']; ?> </td>
                        <td> <?php echo $data['Admission_No']; ?></td>
                        <td> <?php echo $data['email']; ?></td>
                        <td> <?php echo $data['self_No']; ?></td>
                        <td> <?php echo $data['parent_No']; ?></td>
                        <td> <?php echo $data['Address']; ?></td>
                        <td> <?php echo $data['username']; ?></td>
                        <td> <?php echo $data['password']; ?></td>
                        <td> 
                            <form method="POST" action="MakeStudents.php">
                                <button type="submit" name="delete" value="<?php echo $data['id']; ?>" > Delete </button>
                            </form> 
                        </td>
                        <td> 
                            <form method="POST" action="UpdateStudents.php">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="hidden" name="name" value="<?php echo $data['Full_Name']; ?>">
                                <input type="hidden" name="admissionNo" value="<?php echo $data['Admission_No']; ?>">
                                <input type="hidden" name="email" value="<?php echo $data['email']; ?>">
                                <input type="hidden" name="SelfNumber" value="<?php echo $data['self_No']; ?>">
                                <input type="hidden" name="ParentNo" value="<?php echo $data['parent_No']; ?>">
                                <input type="hidden" name="address" value="<?php echo $data['Address']; ?>">
                                <input type="hidden" name="username" value="<?php echo $data['username']; ?>">
                                <input type="hidden" name="password" value="<?php echo $data['password']; ?>">
                                <button type="submit" name="update"> Update </button>
                            </form> 
                        </td> 
                    </tr>
                    <?php $id = $data['id']; ?>
                <?php endforeach; ?>            
            </table>
            <br><br>
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

        <script>
            // Get input element
            let filterName = document.getElementById('filterName');
            let filterAdmission = document.getElementById('filterAdmission');
            let filterEmail = document.getElementById('filterEmail');
            let filterSelf = document.getElementById('filterSelf');
            let filterParent = document.getElementById('filterParent');
            let filterAddress = document.getElementById('filterAddress');
            let filterUser = document.getElementById('filterUser');

            // add event listener for Name, Admission, Email, SelfContact, Parent, Address, Username
            filterName.addEventListener('keyup', Name);
            filterAdmission.addEventListener('keyup', Admission);
            filterEmail.addEventListener('keyup', Email);
            filterSelf.addEventListener('keyup', Self);
            filterParent.addEventListener('keyup', Parent);
            filterAddress.addEventListener('keyup', Address);
            filterUser.addEventListener('keyup', User);

            // for name
            function Name()
            {
                // get values of input
                let filterValue = document.getElementById('filterName').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[1];
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            //for admission no.
            function Admission()
            {
                // get values of input
                let filterValue = document.getElementById('filterAdmission').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[2];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            //for email
            function Email()
            {
                // get values of input
                let filterValue = document.getElementById('filterEmail').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[3];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            //for self contact number
            function Self()
            {
                // get values of input
                let filterValue = document.getElementById('filterSelf').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[4];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            //for parent number
            function Parent()
            {
                // get values of input
                let filterValue = document.getElementById('filterParent').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[5];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            // for address
            function Address()
            {
                // get values of input
                let filterValue = document.getElementById('filterAddress').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[6];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }

            //for username
            function User()
            {
                // get values of input
                let filterValue = document.getElementById('filterUser').value.toUpperCase();
                
                // get names from table
                let table = document.getElementById('table');
                //get list from table
                let tr = table.querySelectorAll('tr.collection-item');

                //loop through collection-item list
                for(let i=0; i<tr.length; i++)
                {
                    //getting 'td' tag
                    let td = tr[i].getElementsByTagName('td')[7];
                    
                    console.log(td.innerHTML.toUpperCase());
                    if(td.innerHTML.toUpperCase().indexOf(filterValue) > -1)
                    {
                        //matched
                        tr[i].style.display = '';
                    }
                    else
                    {
                        tr[i].style.display = 'none';
                    }
                }
            }
        </script>
    </body>
</html>