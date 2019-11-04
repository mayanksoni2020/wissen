<?php
session_start();
include('config.php');
if(!isset($_SESSION['success']))
{
	header("Location:login.php");
}

if(isset($_GET['chat']))
{
    $id=$_SESSION['id'];
    $chat=strtolower($_GET['chat']);
    $text="";

    $query = $connection->prepare("INSERT INTO chatdata(id,bot,chattime,chat) VALUES (:id,0,now(),:chat)");
    $query->bindParam("id", $id, PDO::PARAM_STR);
    $query->bindParam("chat",$chat, PDO::PARAM_STR);
    $query->execute();

    $query = $connection->prepare("SELECT * FROM options WHERE opt=:opt");
    $query->bindParam("opt", $chat, PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()==0)
    {
        $text="Sorry, Try Again!";
    }
    else
    {
        $text=$result['text'];
    }

    $query = $connection->prepare("INSERT INTO chatdata(id,bot,chattime,chat) VALUES (:id,1,now(),:chat)");
    $query->bindParam("id", $id, PDO::PARAM_STR);
    $query->bindParam("chat",$text, PDO::PARAM_STR);
    $query->execute();
}
?>