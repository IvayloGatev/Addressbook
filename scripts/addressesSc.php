<?php   
    session_start();
    $count="";
    $address1=$address2=$postCode=$populatedPlace=$area=$country=array();  
    $address1Err=$postCodeErr=$populatedPlaceErr=$areaErr=array();  
    $errorMessage="Полето е задължително!";
    
    function CheckInput($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
     if($_SERVER["REQUEST_METHOD"] == "POST")
     {       
        $count=$_SESSION["count"]["addresses"];
        $valid=TRUE;
        for($i=0;$i<$count;$i++)
        {
            $address1Err[$i]=$postCodeErr[$i]=$populatedPlaceErr[$i]=$areaErr[$i]="";
            $address1[$i]=CheckInput($_POST["address1"][$i]);
            $address2[$i] = CheckInput($_POST["address2"][$i]);
            $postCode[$i]= CheckInput($_POST["postCode"][$i]);
            $populatedPlace[$i]= CheckInput($_POST["populatedPlace"][$i]);
            $area[$i]= CheckInput($_POST["area"][$i]);
            $country[$i] = CheckInput($_POST["country"][$i]);     
            if(empty($address1[$i]))
            {
                $address1Err[$i]=$errorMessage;
                $valid=FALSE;
            }
            if(empty($postCode[$i]))
            {
                $postCodeErr[$i]=$errorMessage;
                $valid=FALSE;
            }
            if(empty($populatedPlace[$i]))
            {
                $populatedPlaceErr[$i]=$errorMessage;
                $valid=FALSE;
            }
            if(empty($area[$i]))
            {
                $areaErr[$i]=$errorMessage;
                $valid=FALSE;
            }
        }
        if($valid)
        {
            for($i=0;$i<$count;$i++)
            {
                $_SESSION["addresses"][$i]["address1"]=$address1[$i];
                $_SESSION["addresses"][$i]["address2"]=$address2[$i];
                $_SESSION["addresses"][$i]["postCode"]=$postCode[$i];
                $_SESSION["addresses"][$i]["populatedPlace"]=$populatedPlace[$i];
                $_SESSION["addresses"][$i]["area"]=$area[$i];
                $_SESSION["addresses"][$i]["country"]=$country[$i];
            }
            if (array_key_exists("nextStep", $_POST))
            {              
                header("Location: notes.php");            
            }
            else
            {
                $count++;
                $_SESSION["count"]["addresses"]=$count;
                $address1[$count-1]=$address2[$count-1]=$postCode[$count-1]=$populatedPlace[$count-1]=$area[$count-1]=$country[$count-1]="";  
                $address1Err[$count-1]=$postCodeErr[$count-1]=$populatedPlaceErr[$count-1]=$areaErr[$count-1]="";            
            }         
        }
     }
     else
     {
        if(empty($_SESSION["count"]["addresses"]))
        {
           $_SESSION["count"]["addresses"]=1;
        }   
        $count=$_SESSION["count"]["addresses"];   
        for($i=0;$i<$count;$i++)
        {
            $address1[$i]=$address2[$i]=$postCode[$i]=$populatedPlace[$i]=$area[$i]=$country[$i]="";
            $address1Err[$i]=$postCodeErr[$i]=$populatedPlaceErr[$i]=$areaErr[$i]="";
            if(!empty($_SESSION["addresses"][$i]["address1"]))
            {
                $address1[$i]=$_SESSION["addresses"][$i]["address1"];
            }
            if(!empty($_SESSION["addresses"][$i]["address2"]))
            {
                $address2[$i]=$_SESSION["addresses"][$i]["address2"];
            }
            if(!empty($_SESSION["addresses"][$i]["postCode"]))
            {
                $postCode[$i]=$_SESSION["addresses"][$i]["postCode"];
            }
            if(!empty($_SESSION["addresses"][$i]["populatedPlace"]))
            {
                $populatedPlace[$i]=$_SESSION["addresses"][$i]["populatedPlace"];
            }
            if(!empty($_SESSION["addresses"][$i]["area"]))
            {
                $area[$i]=$_SESSION["addresses"][$i]["area"];
            }
            if(!empty($_SESSION["addresses"][$i]["country"]))
            {
                $country[$i]=$_SESSION["addresses"][$i]["country"];
            }
        }
     }
?>