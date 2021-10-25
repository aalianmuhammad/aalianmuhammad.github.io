<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['FullName'];
       $Email = $_POST['E-mail'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "aalianmuhammad0001@gmail.com";

           if(mail($to,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>