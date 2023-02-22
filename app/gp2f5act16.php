<!--app_gp2f5act16-->
<!--Aplicació Versió 2.1-->
<?php
        function PreuMaquina($cpu,$cpu_tipus,$ram,$ssd,$sistema_operatiu,$ip,$acces,$maquina) {
                $suma = $cpu_tipus+$sistema_operatiu+$ip+$cpu+$ram+$ssd+$acces+$maquina;

		echo "El preu total és: $suma €/mes";

        }
        PreuMaquina($_GET['cpu'],$_GET['cpu_tipus'],$_GET['ram'],$_GET['ssd'],$_GET['sistema_operatiu'],$_GET['ip'],$_GET['acces'],$_GET['tipus_maquina']);
?> 
