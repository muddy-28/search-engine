<style>
strong{
    text-align: center;
	text-decoration: underline;
	text-transform: uppercase;
    color: red;
}
</style>
<?php
/*$str = "    hello World hello World this is hello World    ";
$arr=str_word_count(strtoupper($str),2);
echo "<pre>";
foreach($arr as $value)
{
	$finalarr[$value]++;
}
echo print_r($finalarr);
echo "</pre>";
$str = "This weather is like el ninã.";
echo str_word_count($str, 0, 'àáã');
$words = 'Hello world hello world this is hello world';
$words = explode(' ', $words);
$frequency = array();
foreach($words as $word) {
    $word = strtolower($word);
    if(isset($frequency[$word]))
        $frequency[$word] += 1;
    else
        $frequency[$word] = 1;
}
echo '<pre>'; print_r($words); echo '</pre>';
?>
<?php
$text = 'This is a        test';
echo 'This is a test: and test word comes :';
echo substr_count($text,'test');
?>
<form action="" method="get" >
    <input type="text" name="un"> 
    <input type="password" name="un2" />
    <input type="submit" value="submit" name="submit" />
</form>*/
function Bold($result, $findme) {
    return str_replace($result, "<strong>".$result."</strong>", $findme);
	echo Bold($result, $findme);
}
$connect = mysql_connect('localhost', 'root', '') 
 or die(mysql_error());
mysql_select_db("farhan");

$ip = "Faisalabad ahmad malik";
$ip=strtolower($ip);
$len=strlen($ip);
echo 'Searched Content ';?><strong><?php echo $ip;?></$ip;></strong><?php
    $query1=("SELECT COUNT(id) FROM files;" );
$result1=mysql_query($query1,$connect) or die (mysql_error());
 while($row=mysql_fetch_assoc($result1))
{
     $id1=$row['COUNT(id)'];
}
$iparr = split(' ',$ip);
$c=count($iparr);
$i=0; while($i < $c)
{

    $search=$iparr[$i];
    $search2=$iparr[$i+1].' '.$iparr[i+2];
    echo $search2;
    $query=("SELECT Distinct files_data,Title FROM files where files_data like '%$search%'" );
$result=mysql_query($query,$connect) or die (mysql_error());
$j=$id1+1; while($row=mysql_fetch_assoc($result))
{
     
     $title[$j]=$row['Title'];
   $data2[$j]=$row['files_data'];
       echo '<br />';
 $pos[$j] = strpos($data2[$j], $search);
     $count[$j]=substr_count($data2[$j],$search);
   // $count1[$x]=substr_count(strtoupper($data2[$x]),strtoupper($search));
      $data1[$j] = substr($data2[$j], $pos[$j]-100, $pos[$j]+200);
  //   $data3[$j] = substr($data1[$j], $pos[$j]-1, $pos[$j]+2);
   // echo "<a href=#>'$data3[$j]'</a>";
    //echo '<br />';echo  '<br />'; 
/*Adnan Shafique*/
$array=array();
    $array['count']=$count[$j];
    $array['title']=$title[$j];
    $array['data']=$data2[$j];
/*Adnan Shafique*/
    
//    echo  Bold($search,$data1[$j]);
  //  echo '<br />';
//    echo 'the word of '.$search.' are present in ' .$count[$j]. ' times'; //it tell us the number of words in pdf
    $j++;
}
  
    $i++;

}
var_dump($array);

 $search[$i]=$iparr[$i]; 
    $search2=$iparr[1].' '.$iparr[2];
 $query=("SELECT Distinct files_data ,Title FROM files where files_data like '%$search2%'" );
$result=mysql_query($query,$connect) or die (mysql_error());
$j=0; while($row=mysql_fetch_assoc($result))
{
     
     $title[$j]=$row['Title'];
   $data[$j]=$row['files_data'];
    $j++;
}
 /* 
$x=0; while($x <= $id1) {
      echo '<br>';
    $pos = strpos($data2[$x], $search2);
     $count=substr_count($data2[$x],$search2);
   // $count1[$x]=substr_count(strtoupper($data2[$x]),strtoupper($search));
      $data4[$x] = substr($data[$x], $pos-500, $pos+500);
     $data5[$x] = substr($data4[$x], $pos-100, $pos+200);
    echo "<a href=#>'$data5[$x]'</a>";
    echo '<br />';
      
    echo  Bold($search2,$data4[$x]);
    echo "The total $count[$x] word of $search in that pdf"; echo '<br>';
    $x++;
} 
?>
<style>
    input
{margin_top=100px;
}
</style><input type="submit" value="click"/>
<?php

  $search[$i]=$iparr[$i]; 
    $search3=$iparr[0].' '.$iparr[1];
 $query=("SELECT Distinct(files_data),Title FROM files where files_data like '%$search3%'" );
$result=mysql_query($query,$connect) or die (mysql_error());
$j=0; while($row=mysql_fetch_assoc($result))
{
     
     $title1[$j]=$row['Title'];
   $data1[$j]=$row['files_data'];
    $j++;
}
  
$y=0; while($y <= $id1) {
      echo '<br>'; echo '<br>';
    ?><strong><?php echo $title1[$y]?></strong><?php
    echo '<br>';echo  '<br>'; 
     $pos[$y] = strpos($data[$y], $search3);
     $count[$y]=substr_count($data1[$y],$search3);
   //  $count1[$x]=substr_count(strtoupper($data2[$x]),strtoupper($search));
      $data3[$y] = substr($data[$y], $pos[$y]-200, $pos[$y]+200);   
echo  Bold($search2,$data3[$y]);
     echo '<br>';echo '<br>';
    // echo "The total $count[$y] word of $search3 in that pdf"; echo '<br>';
    $y++;
}*/

$tmp = Array(); 
foreach($array as &$ma) 
    $tmp[] = &$ma["count"]; 
array_multisort($tmp, $array); 
foreach($array as &$ma) 
    echo $ma["count"]."<br/>"; 

?>
<?php 
    $users1 = $_GET["un"];
    $id     = $_GET["un2"];
    echo $users1;
?>