<?php   
    $array = array(1,16,9,24,7,55,2,3,44);
    $arrayPar = array();
    $arrayImpar = array();

    for ($i=0; $i < count($array); $i++) { 
        if (($array[$i] % 2) == 0) {
            $arrayPar[] = $array[$i];
        } else {
            $arrayImpar[] = $array[$i];
        }
    }

    $arrayPar = ordena($arrayPar);
    $arrayImpar = ordena($arrayImpar,'desc');

    $nPar = 0;
    $nImpar = 0;

    for ($i=0; $i < count($array); $i++) { 
        if ($nPar < count($arrayPar)) {
            $novoArray[$i] = $arrayPar[$nPar];
            $nPar++;
        } else {
            $novoArray[$i] = $arrayImpar[$nImpar];
            $nImpar++;
        }


    }

    echo "Array Original: " . json_encode($array) . "<br><br>";
    
    echo "Array ordenado em par e impar: " . json_encode($novoArray);

    function ordena($array, $ordem = 'asc') {
        $posicao = 0;
        $tamanho =  count($array);

        for ($i=0; $i < $tamanho-1; $i++) { // 
            
            $posicao = $i;
            for ($j=$i+1; $j < $tamanho; $j++) { // oara no elemento $i e percorre todo o array a partir dele. para fazer as comparações
                switch ($ordem) {
                    case 'asc':
                        if ($array[$j] < $array[$posicao]) {
                            $posicao = $j;
                        }
                        break;
                    case 'desc':
                        if ($array[$j] > $array[$posicao]) {
                            $posicao = $j;
                        }
                        break;
                }
            }
            
            $aux = $array[$i]; // aqui ocorre as trocas de posições para ordenar de fato
            $array[$i] = $array[$posicao];
            $array[$posicao] = $aux;
        }

        return $array;
    }


    // echo json_encode($array) . "<br><br>";
    // echo json_encode(ordena($arrayImpar,'desc')) . "<br><br>";
    // echo json_encode(ordena($arrayPar)) . "<br><br>";
?>