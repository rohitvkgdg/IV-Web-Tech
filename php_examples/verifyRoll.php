<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Verification</title>
</head>
<body>
    <form action="#" method="post">
        <center>
            <h3>Verify student Roll Number:</h3><br>
            <label for="">Enter the student Roll No.:</label>
            <input type="text" name="rollno">
            <button type="submit" name="btnsubmit">Verify</button>
        </center>
    </form>
</body>
</html>
<?php
    if(isset($_POST["btnsubmit"])){
        $rollNo = $_POST["rollno"];
        $studentRoll = [11,12,13,14];
        for($i=0;$i<count($studentRoll);$i++){
            if($studentRoll[$i]==($rollNo)){
                echo "<br><center>Student is verified </center><br>";
                return;
            }
        }
        echo "<br><center>Student not found</center>";
    }
    
?>