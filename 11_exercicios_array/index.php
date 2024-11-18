<?php

$arr = ['Modelo' => 'onix' , 'rodas' => 4 , 'cor' => 'vermelha', 'velocidade_max' => 170];

echo $arr['Modelo'];
echo '<br>';
echo $arr['cor'];
echo '<br>';
echo $arr['velocidade_max'];
echo '<br>';

$modelo = $arr['Modelo'];
$velocidade_max = $arr['velocidade_max'];

echo "O modelo do carro é $modelo e a velocidade que ele atinge é $velocidade_max km/hr";



echo '<br>';
print_r($arr);