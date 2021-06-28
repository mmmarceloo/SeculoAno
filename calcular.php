<?php


$ano = filter_input(INPUT_POST, 'ano');


function SeculoAno($ano){
   
    $ano_semCalculo=$ano;
    $ano_string = strval($ano);
    $ano_ultimos_caracteres = substr($ano_string,-2);
    $ano_int = intval($ano_ultimos_caracteres);
    
    if($ano <= 0){
        echo "Ano incompatível!";
    }
    elseif ( $ano_int==0){
        echo "Ano:".$ano_semCalculo.'<br/>';
        echo "Século: ".substr($ano,0,-2);
    } 
    elseif ($ano >=101){
        echo "Ano:".$ano_semCalculo.'<br/>';
        echo "Século: ".substr($ano,0,-2)+1;
    } 
    else {
        echo "Ano:".$ano_semCalculo.'<br/>';
        echo "Século: I";
    }

}

SeculoAno($ano);
