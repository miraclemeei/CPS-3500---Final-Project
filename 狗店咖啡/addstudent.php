<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    echo 'good';
    $conn = mysqli_connect('localhost','root','lntom1971','socialdog') or die("Connect Failed");
    if(isset($_POST['user'])&&isset($_POST['password'])&&isset($_POST['orders'])&&isset($_POST['note'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $note = $_POST['note'];
        $orders = $_POST['orders'];

        $sql = "INSERT INTO `order` (`user`,`password`,`orders`,`note`) VALUES ('$user','$password','$orders','$note')";
        $query= mysqli_query($conn,$sql);
        if($query){
            echo 'Entery Success';
        }else{
            echo 'Error Occurred';
        }
    }else{
        echo 'Bad';
    }
}

?>