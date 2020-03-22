<?php
    //s = salário
    $s = 2500;
    $sMinimo = 1045;
    // $number determina quantas casas decimais após a virgula
    
    if($s < $sMinimo){
        $sMinimo = $sMinimo - $s;
        echo "O seu salário é R$ $sMinimo reais menor que o salário mínimo";
    }elseif($s > $sMinimo){
        $sMinimo = $s / $sMinimo;
        echo 'Você recebe ' . number_format($sMinimo, 1 , ',', ' ') . ' salário(s) mínimo(s)';
    }


