<?php
    $tipoCombustivel = 3;
    $vPago = 20;
    $litros;
    // $tipoCombustivel = 1 P/ Álcool e 2 P/ Gasolina

    switch($tipoCombustivel){
        case 1:
            $litros = $vPago / 2.8;
            echo 'Combustível: Álcool<br>' . 
            'Valor Pago: R$ ' . $vPago . '<br>' . 
            'Total Litros: ' .  number_format($litros, 2);
        break;
        
        case 2:
            $litros = $vPago / 4.4;
            echo 'Combustível: Gasolina<br>' . 
            'Valor Pago: R$ ' . $vPago . '<br>' . 
            'Total Litros: ' . number_format($litros, 2);
        break;

        default:
        echo 'Tipo de combustível inválido';
        }