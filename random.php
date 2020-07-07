<!DOCTYPE html>
<html>
<head>
  <title>Randomly Generate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative;
  }
  #section1 {padding-top:50px;height:600px;color: #fff; background-color: #1E88E5;}

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<?php

    $baseline = (int)($_POST['baseline']);
	  $total = (int)($_POST['total']);
	  $start_date = $_POST['start_date'];
	  $end_date = $_POST['end_date'];


$outputArray=random_generate($baseline,$total,$start_date,$end_date);


function random_generate($baseline,$total,$start_date,$end_date){

  $date=date_range($start_date,$end_date);
   

for ($i = 0; $i < count($date); ++$i)
{
  print ("<br>");

    //$random_number = frand($baseline, $total, 2);

    //$random_number = round($random_number, 2);

    

    $checkRange=true;

    while($checkRange) {

        if((date('w',strtotime($date[$i]))==6) || (date('w',strtotime($date[$i])) == 0)){
        $outputArray["$date[$i]"]=0;
        }elseif($i==count($date)-1){
        $outputArray["$date[$i]"]=$total;
        //$random_number =$total-$outputArray[2000]-$outputArray[2001]-$outputArray[2002]-$outputArray[2003];
        }else{
            $outputArray["$date[$i]"] = frand($baseline, $total, 2);
        }

        $left=$total-$outputArray["$date[$i]"];
        if($left>=(count($date)-1-$i)*$baseline){
            $checkRange=false;
            
            }


    }

    //$outputArray[2000+i]=$random_number

    //array_push($outputArray,$random_number);
    

    $total=$total-$outputArray["$date[$i]"];

 }



print ("<br>");
print_r($outputArray);

}




function frand($min, $max, $decimals) {
  $scale = pow(10, $decimals);
  return mt_rand($min * $scale, $max * $scale) / $scale;
}


function date_range($date1,$date2){
    $timestamp1=strtotime($date1);
    $timestamp2=strtotime($date2);
    $days=($timestamp2-$timestamp1)/86400+1;
    $date=[];
    for($i=0;$i<$days;$i++){
        $date[]=date('Y-m-d',$timestamp1+(86400*$i));
    }
    return $date;
}


 ?>



  </body>
</html>