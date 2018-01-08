<?php
 date_default_timezone_set("Asia/Kolkata");
 $today =new DateTime();
print_r($today->format('Y, m, d'));
$hr=$today->format('H');
$min=$today->format('i');

$newmin=  (ceil(($min/5))*5)+10;
echo "<br>".$newmin."<br>";
$today->setTime($hr, $newmin);
print_r($today->format('Y, m, d h:i a'));
echo "<br><br>";

echo"<br><br>type1  DateTime()-----------------------------------------<br>";
$type1 =new DateTime();//rtn obj array
print_r($type1);
echo"<br>->format : ";
print_r($type1->format('Y, m, d h:i a'));
echo"<br><br>type2 date_create('2016-02-17')-----------------------------------------<br>";


$type2 =date_create("10/11/2016 19:00");//rtn obj array
print_r($type2);
echo'<br>by date string date_format($tempEndDate, "d-M-Y") : ';
print_r(date_format($type2, "d-m-Y H:i"));
echo"<br>-----------------------------------------<br>";
/*
 * diffrence between two days
 */
 $diff = date_diff($type2,$type1);//rtn obj array (t1-t2)
 print_r($diff);
echo "<br>".$days=$diff->format("%R%a days");
/*
 * add $days
 */
date_add($type2, date_interval_create_from_date_string($days));
print_r($type2);
echo"<br>-----------------------------------------<br>";
print_r(new DateTime('+1 month'));
echo"<br>-----------------------------------------<br>";
print_r((new DateTime('+2 hour'))->format('Y, m, d H:i'));
echo"<br>-----------------------------------------<br>";
print_r((new DateTime('-5 min'))->format('d m Y h:i:s p'));

$week=["Sun"=>1,"Mon"=>2,"Tue"=>3,"Wed"=>4,"Thu"=>5,"Fri"=>6,"Sat"=>7];
$day=date("D", strtotime("2016-11-13"));
echo "<br>--day of week".$week[$day];

?>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

<input id="tDate" value="2016-03-17">
<script>
            var start = new Date($("#tDate").val());//.datepicker("getDate");
            start.setHours(0, 0, 0, 0);

            var data ="<?= $time; ?>"; 
            var end =new Date('<?= $today; ?>'); 
            end.setHours(0, 0, 0, 0);
           
           alert(data);
           alert(start.getTime() - end.getTime());
//$('#pickupTime').timepicker('option','minTime',data);    
//  $('#pickupTime').val('');
</script>