<?php   
    session_start();
    $count="";
    $note=array();  
    $noteErr=array();  
    $errorMessage="Бележката не трябва да е празна!";
    
    function CheckInput($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
     if($_SERVER["REQUEST_METHOD"] == "POST")
     {       
        $count=$_SESSION["count"]["notes"];
        $valid=TRUE;
        for($i=0;$i<$count;$i++)
        {
            $noteErr[$i]="";          
            $note[$i] = CheckInput($_POST["note"][$i]);     
            if(empty($note[$i]))  
            {
                $noteErr[$i]=$errorMessage;
                $valid=FALSE;
            }
        }
        if($valid)
        {
            for($i=0;$i<$count;$i++)
            {
                $_SESSION["notes"][$i]=$note[$i];           
            }
            if (array_key_exists("end", $_POST))
            {              
                header("Location: printForms.php");            
            }
            else
            {
                $count++;
                $_SESSION["count"]["notes"]=$count;
                $note[$count-1]="";  
                $noteErr[$count-1]="";            
            }         
        }
     }
     else
     {
         if(empty($_SESSION["count"]["notes"]))
         {
            $_SESSION["count"]["notes"]=1;
         } 
        $count=$_SESSION["count"]["notes"];
        for($i=0;$i<$count;$i++)
        {
            $note[$i]="";
            $noteErr[$i]="";
            if(!empty($_SESSION["notes"][$i]))
            {
                $note[$i]=$_SESSION["notes"][$i];
            }          
        }
     }
?>

