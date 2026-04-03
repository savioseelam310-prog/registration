<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn=Mysqli_connect("127.0.0.1","root","","student_db");
if($conn){
    echo "successfull<br>";
}
$name = htmlspecialchars($_POST['name']);
$pin = htmlspecialchars($_POST['pin']);
Mysqli_select_db($conn,"student_db");

$query="insert into student_details values('$name',$pin)";
if(Mysqli_query($conn,$query)){
     header("Location: registration.html?status=success");
            exit;
}else{
    header("Location: registration.html?status=failure");
            exit;
}
}
 header("Location: registration.html?status=success");
            exit;

?>