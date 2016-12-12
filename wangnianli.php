<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
     
      ini_set("error_reporting",E_ALL ^ E_NOTICE);
      $y=$_GET['Y']?$_GET['Y']:date('Y');//当前年
      $m=$_GET['m']?$_GET['m']:date('m');//当前月
      $d=$_GET['d']?$_GET['d']:date('d');//当前日
    
      echo $y;
      echo $m;
      echo $d;
      $days=  date('t', strtotime("{$y}-{$m}-1"));//当前月天数
      $week=  date('w', strtotime("{$y}-{$m}-1"));//当前1号周几 
      $day=  date('d',strtotime("{$y}-{$m}-{$d}"));
        echo" <table width='700px' border='1px' align='center'>";
         echo" <h2 align='center'> {$y}年{$m}月</h2>";
         echo "<tr>";
             echo " <th>日</th>";
             echo " <th>一</th>";
             echo " <th>二</th>";
             echo " <th>三</th>";
             echo " <th>四</th>";
             echo " <th>五</th>";
             echo " <th>六</th>";
          
                
        echo"</tr>";
     
        for($i=1-$week;$i<=$days;){//1-$week是一号在星期几显示
            
            echo "<tr>";
            for($j=0;$j<7;$j++){
             
               if ($i>$days||$i<1) {
                 echo "<td> </td>"  ;
               }
                elseif($i==$day)
                {
                    echo"<td bgcolor='red'> $i</td>";
                }
               else {
                     echo"<td> $i</td>";
               }
                $i++;
            }
        }
        echo"</tr>";
        
        echo "</table>";
        
        echo "<table width='700px' align='center'>";
         echo "<form method='get' name='YAM'action=''>";
         echo "<br>";
        echo"<input type='text' name='Y' value='' />";
                 echo "<br>";
        echo"<input type='text' name='m' value=''/>";
                 echo "<br>";
        
        
         echo"<input type='text' name='d' value=''/>";
         echo"<input type='submit' value='YAM' onclick='YAM()' />";
        echo "</from>";
           echo "</table>";
              ?>
    </body>

