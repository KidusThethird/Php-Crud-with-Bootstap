<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "phpcrud");


if(isset($_POST['insertdata']))
{
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    
    $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) VALUES ('$fnamee' , '$lname', '$course', '$contact')";

    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script> alert('Data saved'); </script>";
        header('Location: index.php');

    }
else{
    echo "<script> alert'Data Not Saved'; <script/>";
}
}
?>