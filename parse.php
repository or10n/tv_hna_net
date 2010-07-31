<?php

//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";

$day = floor(date(U)/60/60/24);
$f = fopen("http://tv.yandex.ru/?day=$day&hour=6&period=24&channel=$channel&mode=print", "r");

$pattern = '{
              ^<div>(
                (\d+)
                    \s* : \s*
                (\d+)
                    \s*
                (.*)
              )</div>$
            }xs';


$data = array();

while(!feof($f)) {
    $str = fgets($f);


    if(strpos($str,"div") && !(strpos($str,"td"))) {

        $new = preg_match($pattern,$str,$values);

        $data[] = array(
                    "hour"  =>  $values[2],
                    "minute"=>  $values[3],
                    "title" =>  $values[4]
                  );
    }
}
fclose($f);

$i = 0;
foreach ($data as $program) {

    if (strlen($program["hour"])===1) {
        $program["hour"] = '&nbsp;&nbsp;'.$program["hour"];
    }

    //$ii = $i + 1;
    //if ( ($data["$i"]["hour"] < date(H)) and ($data["$ii"]["hour"] > date(H)) ) echo "***";


    echo '<p style="text-indent: -40px; margin-top: 0; margin-bottom: 0;">'.$program["hour"].':'.$program["minute"].' '.$program["title"].'</p>';



    $i++;
}

?>
