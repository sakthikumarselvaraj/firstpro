
<?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'usernanme';
            $dbpass = 'password';
            $dbname = 'applicant';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_connect_error());
            }
            
            }
            $firstName = $_POST['inputFirstname'];
            $lastName = $_POST['inputLastname'];
            $email = $_POST['inputEmail4'];
            $password = $_POST['inputPassword4'];
            $Address = $_POST['inputAddress'];
            $Address2 = $_POST['inputAddress2'];
            $City = $_POST['inputCity'];
            $State = $_POST['inputState'];
            $Zip = $_POST['inputZip'];
            
            
            
            $sql = "INSERT INTO applicant ( firstName, lastName, email, password, Address, Address2, City, State, Zip ) VALUES ( '$firstName', '$lastName', '$email', '$password', '$Address', '$Address2', '$City', '$State', '$Zip' )";
               
            mysqli_select_db('test_db');
            $retval = mysqli_query( $sql, $conn );
            
            if(! $retval ) {
               echo "Error:". $sql . "<br>" .mysqli_error($conn);
            }
            else{
               echo "Data Registered Successfully!"
            }
            
            mysqli_close($conn);
         }
      
 ?>