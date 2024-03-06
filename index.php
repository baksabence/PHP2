<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php2</title>
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
    echo "<h2>Véletlen pozitív egész szám</h2>";
    echo(rand() . "<br>");
    echo "<h3>Zárt intervallumban (10,20) véletlen szám</h3>";
    echo(rand() . "<br>");

    echo "A véletlen szám maximuma: <br>".getrandmax(). "<br>";

    echo "<h3>Globális változó használata</h3>";
    $x= 7;
    $y = 6;
    $k;
            function myTest0() {
              //nem működik:
                //$y = $x + $y;
                $x = 1;
                $y = 2;
                $z = $x + $y;
                echo "<br>";
                echo "Lokális változók összege: ".$z; 
              // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "<br>";
            echo "Az összeadás eredménye:   ".$GLOBALS['z'];
            }
            myTest0();

            myTest0();
            $nevKor = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            print_r($nevKor);
            echo "<br>";
            $nevKor["Peter"] = 56;
            echo "<br>";
            print_r($nevKor);
            echo"</br> Ben életkora:".$nevKor["Ben"]."<br>";
            echo"<h3>matematikai programcsalád</h3>";
            $adat1 = 8/3;
            echo"Két egész szám hányadosa: $adat1<br>";
            echo floor($adat1)."<br>";
            echo gettype($adat1);
            echo "<h3>Elágazások</h3>";
            
            echo "<h3>Ternary operator</h3>";
            $logikai = 3 > 5;
            echo ($logikai ? 'Ez igaz.' : 'Ez hamis. <br>');
            echo (0 != 5 ? 'Ez igaz' : 'Ez hamis');
            echo "<h3>Sima elágazás</h3>";
            if ($logikai)
                 {echo"Ez igaz<br>";}
            else{echo "Ez hamis<br>";}

            echo "<h3>Switch elágazás</h3>";
            $honap = rand(1,12);
            switch ($honap) {
                case 1:
                    echo "january";
                    break;
                case 2:
                    echo"february";
                    break;
                case 3:
                    echo"march";
                    break;
                case 4:
                    echo"april";
                    break;
                case 5:
                    echo"may";
                    break;
                case 6:
                    echo"june";
                    break;
                case 7:
                    echo"july";
                    break;
                case 8:
                    echo"august";
                    break;
                case 9:
                    echo"september";
                    break;
                case 10:
                    echo"october";
                    break;
                case 11:
                    echo"november";
                    break;
                case 12:
                    echo"december";
                    break;
                case $value2:
                }
                
                //feladatok

                echo "<br>";
                $otelemu = array();
                $ossz = 0;
                for($i = 0; $i < 6; $i++){
                    $otelemu[$i] = rand(20, 30);
                    $ossz += $otelemu[$i];
                }
                print_r($otelemu);
                echo "<br>";
                print_r("Számok összege: ".$ossz);




                //sakktabla

                echo "<table>";
                echo "<tr>";
                
                for($i = 97; $i < 106;$i++){
                    echo "<td>".chr($i)."</td>";
                }
                echo "</tr>";
                echo "</table>";

    ?>
</body>
</html>