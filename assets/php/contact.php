<?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['mail'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "k.2003mio@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
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