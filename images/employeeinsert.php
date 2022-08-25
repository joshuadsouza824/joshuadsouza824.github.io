<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => employee registration form> 
        $conn = mysqli_connect("localhost", "root", "", "employee registration form");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $last_name = $_REQUEST['last_name'];
        $maiden_name =  $_REQUEST['maiden_name'];
        $fathers_name = $_REQUEST['fathers_name'];
        $mothers_name = $_REQUEST['mothers_name'];
        $birth_place =  $_REQUEST['birth_place'];
        $birth_date = $_REQUEST['birth_date'];
        $sex =  $_REQUEST['sex'];
        $driving_licence = $_REQUEST['driving_licence'];
        $marital_status = $_REQUEST['marital_status'];
        $nationality =  $_REQUEST['nationality'];
        $military_status = $_REQUEST['military_status'];
        $disability_perc =  $_REQUEST['disability_perc'];
        $blood_group = $_REQUEST['blood_group'];
        $company_name = $_REQUEST['company_name'];
        $home_address =  $_REQUEST['home_address'];
        $home_phone = $_REQUEST['home_phone'];
        $mobile_phone =  $_REQUEST['mobile_phone'];
        $email = $_REQUEST['email'];
        $profession = $_REQUEST['profession'];
        $experience =  $_REQUEST['experience'];
        $school = $_REQUEST['school'];
        $department =  $_REQUEST['department'];
        $hired_department = $_REQUEST['hired_department'];
        $hiring_date = $_REQUEST['hiring_date '];
        $contact_name =  $_REQUEST['contact_name'];
        $contact_address = $_REQUEST['contact_address'];
        $contact_phone_no =  $_REQUEST['contact_phone_no'];
        $contact_email = $_REQUEST['contact_email'];
        $relation = $_REQUEST['relation'];
  
        // Performing insert query execution
        // here our table name is employee
        $sql = "INSERT INTO employee  VALUES ('$name',
            '$last_name','$maiden_name','$fathers_name','$mothers_name',
            '$birth_place','$birth_date','$sex','$driving_licence','$marital_status','$nationality',
            '$military_status','$disability_perc','$blood_group','$company_name','$home_address','$home_phone',
            '$mobile_phone','$email','$profession','$experience','$school','$department','$hired_department',
            '$hiring_date','$contact_name','$contact_address','$contact_phone_no','$contact_email','$relation')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $last_name\n "
                . "$\n $\n $");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>