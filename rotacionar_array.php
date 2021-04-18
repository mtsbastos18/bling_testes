<?php 
    $array = array(1,2,3,4,5,6);
    $k =2 ;

    echo "Array original: <br>";  
    echo json_encode($array) . '<br><br>'; 

    for ($i=0; $i < $k; $i++) { // laço vai rodar conforme o numero de rotações enviado
        $array = rotaciona($array);
    }

    echo "Array rotacionado: <br>";  
    echo json_encode($array);

    function rotaciona($array) {
        $primeiro = $array[0]; // salva o primeiro item do array
        $tamanho = count($array); 

        for ($j=0; $j < $tamanho - 1; $j++) { // laço para percorrer o array e enviado os numeros para a esquerda.
            $array[$j] = $array[$j + 1]; // o indice 0 recebe o valor do indice 1, o indice 1 recebe o valor do indice 2, e assim vai. Por isso o laço percorre até tamanho-1.
        }

        $array[$j] = $primeiro; // ultimo indice do array recebe o valor do primeiro indice original.

        return $array;
    }
?>