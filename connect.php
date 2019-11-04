<?php
session_start();
include("config.php");
if(!isset($_SESSION['success']))
{
	header("Location:login.php");
}
if(isset($_GET['ldt']))
{
    $ldt=$_GET['ldt'];
    if($ldt==1)
    {
        $id=$_SESSION['id'];
        $chat="Hello There!<br>You can order the following services by simply typing the names:<br>1.wissen<br>2.people<br>3.past events<br>4.upcoming events<br>5.contact<br>6.location<br>7.feedback<br>8.join us<br><br>Please type the option you would like to select!";
        $query = $connection->prepare("INSERT INTO chatdata(id,bot,chattime,chat) VALUES (:id,1,now(),:chat)");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->bindParam("chat",$chat, PDO::PARAM_STR);
        $query->execute();
        $query = $connection->prepare("SELECT * FROM chatdata WHERE id=:id AND ID1>(SELECT MAX(ID1)  FROM chatdata WHERE id=:id)-20;");
        $query->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
        $query->execute();
        while($row = $query->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$row;
            }

    }
    else 
    {
        $query = $connection->prepare("SELECT * FROM chatdata WHERE id=:id AND ID1>:cht;");
        $query->bindParam("id", $_SESSION['id'], PDO::PARAM_INT);
        $query->bindParam("cht", $ldt,PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount()>0)
        {
            while($row = $query->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$row;
            }
            
        }
        else
        {
            $result=[];
        }
    }
        $query = $connection->prepare("SELECT max(ID1) FROM chatdata WHERE id=:id;");
        $query->bindParam("id", $_SESSION['id'], PDO::PARAM_INT);
        $query->execute();
        $ldt=($query->fetch(PDO::FETCH_ASSOC))['max(ID1)'];
        $result['ldt']=$ldt;
        $resjson=json_encode(array_values($result));
        echo($resjson);
}