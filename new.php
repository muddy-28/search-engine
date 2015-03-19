<?php
function Bold($result, $findme) {
    return str_replace($result, "<strong>".$result."</strong>", $findme);
	echo Bold($result, $findme);
}

$connect = mysql_connect('localhost', 'root', '') 
 or die(mysql_error());
mysql_select_db("farhan");

$ip = "malik";
$ip=strtolower($ip);
$len=strlen($ip);
echo 'Searched Content ';?><strong><?php echo $ip;?></$ip;></strong><?php
    $query1=("SELECT COUNT(id) FROM files;" );
$result1=mysql_query($query1,$connect) or die (mysql_error());
 while($row=mysql_fetch_assoc($result1))
{
     $id1=$row['COUNT(id)'];
}
$iparr = explode(' ',$ip);
$c=count($iparr);

    $search=$iparr[0];
    $search2=$iparr[$i+1].' '.$iparr[i+2];
    //echo $search2;
    $query=("SELECT Distinct files_data,Title FROM files where files_data like '%$search%'" );
$result=mysql_query($query,$connect) or die (mysql_error());
$i=0;    while($row=mysql_fetch_assoc($result))
{
     
     $title[$i]=$row['Title'];
   $data2[$i]=$row['files_data'];
      $count[$i]=substr_count($data2[$i],$search);
    $i++;
    $multiArray = Array( 
        Array("count" => $count[0], "title" => $title[0], "data" => $data2[0]),
        Array("count" => $count[1], "title" => $title[1], "data" => $data2[1]),
        Array("count" => $count[2], "title" => $title[2], "data" => $data2[2]),
        Array("count" => $count[3], "title" => $title[3], "data" => $data2[3]),
        Array("count" => $count[4], "title" => $title[4], "data" => $data2[4]),
        Array("count" => $count[5], "title" => $title[5], "data" => $data2[5]),
        Array("count" => $count[6], "title" => $title[6], "data" => $data2[6]),
        Array("count" => $count[7], "title" => $title[7], "data" => $data2[7]),
        Array("count" => $count[8], "title" => $title[8], "data" => $data2[8]),
        Array("count" => $count[9], "title" => $title[9], "data" => $data2[9]),
        Array("count" => $count[10], "title" => $title[10], "data" => $data2[10])
    );
}
    $tmp = Array(); 
    foreach($multiArray as &$ma) 
        $tmp[] = &$ma["count"];
    array_multisort($tmp, $multiArray); 
    $count_no=count($tmp);
    echo $count_no."<br>";
    for($o=10;$o>-1;$o--) 
    {
        if($multiArray[$o]["count"]!=0)
        {
            echo $multiArray[$o]["title"]."<br/>";
            echo "count of search words:- ".$multiArray[$o]["count"]."<br/>";
        }
    }
?>