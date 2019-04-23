<?php
    function BMI ($peso, $altura){
        $total = $peso / $altura * $altura;
         return $total;
     }

    echo BMI (80, 180);

 ?>