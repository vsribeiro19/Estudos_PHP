<?php
    $vAlcool = 2.80;
    $vGasolina = 3.4;
    $vPago = 30;
    //recebe o valor pago e divide com o valor do combustivel (total de litros)
    $litros;
    //km que o carro faz com 1L
    $kmL = 7.5;
    //Recebe o total de litros e multiplica com o KM por litros que o carro faz
    $total;
        echo '<br><h3 style="T">ÁLCOOL</h3>
        ------------------------------<br>';
    if($vAlcool){
        $litros = $vPago / $vAlcool;
        $total = $kmL * $litros;
        echo "Combustível: Álcool<br>" . 
        'Valor Pago: R$ ' . number_format($vPago, 2) . '<br>' . 
        ' Km com 1L: ' . $kmL . '<br>' . 
        'Total Km: ' . number_format($total, 2) . ' km';

        echo '<br><h3>GASOLINA</h3>
        ------------------------------<br>';
    }if($vGasolina){
        $litros = $vPago / $vGasolina;
        $total = $kmL * $litros;
        echo "Combustível: Gasolina<br>" . 
        'Valor Pago: R$ ' . number_format($vPago, 2) . '<br>' . 
        ' Km com 1L: ' . $kmL . '<br>' . 
        'Total Km: ' . number_format($total, 2) . ' km';
    }
