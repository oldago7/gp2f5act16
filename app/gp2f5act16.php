<!--Aplicació Versió 1.0-->
<?php
        function PreuMaquina($cpu,$cpu_tipus,$ram,$ssd,$sistema_operatiu,$ip,$acces) {
                $suma = $cpu_tipus+$sistema_operatiu+$ip+$cpu+$ram+$ssd+$acces;
                echo "El preu total és: $suma €/mes";
                        // $fp = fopen("comandes.txt", "a");
                        // $fa = $_GET['codi'];
                        // $fb = $_GET['cpu'];
                        // $fc = $_GET['cpu_tipus'];
                        // $fd = $_GET['ram'];
                        // $fe = $_GET['ssd'];
                        // $ff = $_GET['sistema_operatiu'];
                        // $fg = $_GET['ip'];
                        // $fh = $_GET['acces'];

                        // fwrite($fp, $fa.", ");
                        // fwrite($fp, $fb.", ");
                        // fwrite($fp, $fc.", ");
                        // fwrite($fp, $fd.", ");
                        // fwrite($fp, $fe.", ");
                        // fwrite($fp, $ff.", ");
                        // fwrite($fp, $fg.", ");
                        // fwrite($fp, $fh."\n");
                        // fclose($fp);
        }
        echo PreuMaquina($_GET['cpu'],$_GET['cpu_tipus'],$_GET['ram'],$_GET['ssd'],$_GET['sistema_operatiu'],$_GET['ip'],$_GET['acces']);
?> 