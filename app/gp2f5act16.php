<!--app_gp2f5act16-->
<!--Aplicació Versió 2.4-->
<?php
        function PreuMaquina($cpu,$cpu_tipus,$ram,$ssd,$sistema_operatiu,$ip,$acces,$tipus_maquina,$banda_maxima,$compromis) {
                $suma = $cpu_tipus+$sistema_operatiu+$ip+$cpu+$ram+$ssd+$acces+$tipus_maquina+$banda_maxima;
		if ($compromis){
			$porcentaje=$suma*10/100;
                        $preu=$suma-$porcentaje;
			echo "El preu total és: $preu €/mes";
			}
		else{
			echo "El preu total és: $suma €/mes";
			}
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
        PreuMaquina($_GET['cpu'],$_GET['cpu_tipus'],$_GET['ram'],$_GET['ssd'],$_GET['sistema_operatiu'],$_GET['ip'],$_GET['acces'],$_GET['tipus_maquina'],$_GET['banda_maxima'],empty($_GET['compromis'])?false:true);
?> 
