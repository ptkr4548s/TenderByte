<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

$Email = $_POST['femail'];
$Password = $_POST['fpass'];

$sql = "SELECT * FROM `login` WHERE `Username`='$Email' AND `Password`='$Password'";

$rs = mysqli_query($con, $sql);

if($data = mysqli_fetch_array($rs, MYSQLI_ASSOC))   
{
    echo "<style>
    input[type='text'] {
        
        border-radius: 15px;
        background-repeat: no-repeat;
        background-size: 25px 25px;
        background-position: 10px;
        background-image: url(search.svg);
        background-color: #f7f8fa;
        height: 35px;
        width: 155px;
        font-size: 16px;
        padding-left: 45px;
    }
    </style>
    <center><br><h2>Correct Password<h2><br>  
    <h3>Confirm it again by typing your username<h3><br>
    <form action='dashb.php' method='post'>
    <tr>
        <input type='text' name='cisname'/><br><br>
        <a href='dashb.php'>
        <input type='submit' value='submit'/></a>
    </tr>
    </form></center>
    ";
    
    // header('Location: dashb.php?rn=$Email');
}
else
{
    header('Location: incorrect.html');
}
?>