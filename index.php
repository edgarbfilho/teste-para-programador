<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Programador</title>
    <style>
        body {}
        .container { 
            width: 900px; 
            margin-left: auto;
            margin-right: auto; 
        }
    </style>
</head>
<body>
    <div class="container">
<?php
$quantidadeMeses = isset($_POST['quantidadeMeses'])? (int) $_POST['quantidadeMeses']:0;
$numeroNovoContratosPorMes = isset($_POST['numeroNovoContratosPorMes'])? (int)$_POST['numeroNovoContratosPorMes']:0;
$valorDeCadaContrato = isset($_POST['valorDeCadaContrato'])? (float)$_POST['valorDeCadaContrato'] : 0;
echo "<form method='post'>";
echo "<label>Quantidade de mês para simular: </label>";
echo "<input type='text' name='quantidadeMeses' value='{$quantidadeMeses}'/><br>";
echo "<label>Número de novos contratos: </label>";
echo "<input type='text' name='numeroNovoContratosPorMes' value='{$numeroNovoContratosPorMes}'/><br>";
echo "<label>Valor de cada contrato: </label>";
echo "<input type='number' name='valorDeCadaContrato' value='{$valorDeCadaContrato}'/><br>";
echo "<button type='submit'>Mostrar resultado</button>";
echo "</form>";
if(!isset($_POST['quantidadeMeses'])){
exit;
}
if(!$quantidadeMeses){
exit("Informe a quantidade de meses para simular");
}
$transacoes = [];
$dataInicio = $mesAtual = date('Y-01-01');
while ($mesAtual <= date('Y-m-d', strtotime("+" . ($quantidadeMeses - 1) . "months", strtotime($dataInicio)))) {
for ($cliente = 1; $cliente <= $numeroNovoContratosPorMes; $cliente++) {
$transacoes[] = [
'data' => $mesAtual,
'cliente' => 'cliente-' . date('MY', strtotime($mesAtual)) . '-' . $cliente,
'valor' => $valorDeCadaContrato
];
}
$mesAtual = date('Y-m-d', strtotime("+1months", strtotime($mesAtual)));
}
//Escreva seu código aqui, sem alterar o código acima
if($quantidadeMeses && $numeroNovoContratosPorMes && $valorDeCadaContrato) {
    
    function tabela($n, $quantidadeMeses, $numeroNovoContratosPorMes, $valorDeCadaContrato) {

        $tabela = "<table border='0' cellspacing='0' cellpadding='0' width='100%'>";

            $tabela .= "<tr>";
            $tabela .= "<td style='border: 1px solid black'><strong>Meses</strong></td>";
            for ($i=$n; $i <= $quantidadeMeses; $i++) { 
            $tabela .= "<td style='border: 1px solid black'><strong>".$i."&#176; Mês</strong></td>";
            }
            $tabela .= "</tr>";
            
            $tabela .= "<tr>";
            $tabela .= "<td style='border: 1px solid black'></td>";
            for ($i=$n; $i <= $quantidadeMeses; $i++) {                 
                $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";                
            }
            $tabela .= "</tr>";

            if ($quantidadeMeses > 1) {

                $tabela .= "<tr>";
                $tabela .= "<td style='border: 1px solid black'></td>";
                for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                    if($i != $n || $i >= 7) {
                        $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                    } else {
                        $tabela .= "<td style='border: 1px solid black'></td>";
                    }
                }
                $tabela .= "</tr>";

            }

            if ($quantidadeMeses > 2) {

                $tabela .= "<tr>";
                $tabela .= "<td style='border: 1px solid black'></td>";
                for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                    if($i != $n && $i != $n+1 || $i >= 7) {
                        $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                    } else {
                        $tabela .= "<td style='border: 1px solid black'></td>";
                    }
                }
                $tabela .= "</tr>";
        
            }

            if ($quantidadeMeses > 3) {

                $tabela .= "<tr>";
                $tabela .= "<td style='border: 1px solid black'></td>";
                for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                    if($i != $n && $i != $n+1 && $i != $n+2  || $i >= 7) {
                        $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                    } else {
                        $tabela .= "<td style='border: 1px solid black'></td>";
                    }
                }
                $tabela .= "</tr>";

            }

            if ($quantidadeMeses > 4) {


                $tabela .= "<tr>";
                $tabela .= "<td style='border: 1px solid black'></td>";
                for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                    if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3  || $i >= 7) {
                        $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                    } else {
                        $tabela .= "<td style='border: 1px solid black'></td>";
                    }
                }
                $tabela .= "</tr>";

            if ($quantidadeMeses > 5) {

                $tabela .= "<tr>";
                $tabela .= "<td style='border: 1px solid black'></td>";
                for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                    if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 7) {
                        $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                    } else {
                        $tabela .= "<td style='border: 1px solid black'></td>";
                    }
                }
                $tabela .= "</tr>";

            }

            if ($quantidadeMeses > 6) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 7) {
                    
                        $tabela .= "<tr>";
                        $tabela .= "<td style='border: 1px solid black'></td>";
                        for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                            if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 7) {
                                $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                            } else {
                                $tabela .= "<td style='border: 1px solid black'></td>";
                            }
                        }
                        $tabela .= "</tr>";
                }

            }

            if ($quantidadeMeses > 7) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 8) {
                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 8) {
                            $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                        } else {
                            $tabela .= "<td style='border: 1px solid black'></td>";
                        }
                    }
                    $tabela .= "</tr>";
                }

            }

            if ($quantidadeMeses > 8) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 9) {
                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 9) {
                            $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                        } else {
                            $tabela .= "<td style='border: 1px solid black'></td>";
                        }
                    }
                    $tabela .= "</tr>";
                }

            }

            if ($quantidadeMeses > 9) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 10) {
                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 10) {
                            $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                        } else {
                            $tabela .= "<td style='border: 1px solid black'></td>";
                        }
                    }
                    $tabela .= "</tr>";
                }

            }

            if ($quantidadeMeses > 10) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 11) {
                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 11) {
                            $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                        } else {
                            $tabela .= "<td style='border: 1px solid black'></td>";
                        }
                    }
                    $tabela .= "</tr>";
                }

            }

            if ($quantidadeMeses > 11) {

                if ($n < $quantidadeMeses && $quantidadeMeses >= 12) {
                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        if($i != $n && $i != $n+1 && $i != $n+2 && $i != $n+3 && $i != $n+4 || $i >= 12) {
                            $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                        } else {
                            $tabela .= "<td style='border: 1px solid black'></td>";
                        }
                    }
                    $tabela .= "</tr>";
                }
            
            }

        }

            if ($quantidadeMeses > 4) {
                $valcont = $valorDeCadaContrato * 2;
            } else {
                $valcont = $valorDeCadaContrato * 10;
            }
             
            $tabela .= "<tr>";
            $tabela .= "<td width='310' style='border: 1px solid black'><span style='color: green'>VALOR TOTAL ADESÕES NO MÊS</span></td>";
            for ($i=$n; $i <= $quantidadeMeses; $i++) {                 
                $tabela .= "<td style='border: 1px solid black'><span style='color: green'>R$ ".number_format($valcont, 2, ',', '.' )."</span></td>";                
            }
            $tabela .= "</tr>";

            $tabela .= "<tr>";
            $tabela .= "<td style='border: 1px solid black'><span style='color: green'>VALOR TOTAL ADESÕES ACUMULADO</span></td>";
            
            //echo $n;
            for ($i=$n; $i <= $quantidadeMeses; $i++) {

            switch ($i) {
                case 2:
                    if ($quantidadeMeses > 4) {
                        $valcalc = $valorDeCadaContrato * 4;
                    } else {
                        $valcalc = $valorDeCadaContrato * 20; 
                    }
                    break;
                case 3:
                    if ($quantidadeMeses > 4) {
                        $valcalc = $valorDeCadaContrato * 6;
                    } else {
                        $valcalc = $valorDeCadaContrato * 30; 
                    }
                    break;
                case 4:
                    if ($quantidadeMeses > 4) {
                        $valcalc = $valorDeCadaContrato * 8;
                    } else {
                        $valcalc = $valorDeCadaContrato * 40; 
                    }
                    break;
                case 5:
                    echo $i;
                    $valcalc = $valorDeCadaContrato * 10;
                    break;
                case 6:
                    echo $i;
                    $valcalc = $valorDeCadaContrato * 12;
                    break;
                case 7:
                    $valcalc = $valorDeCadaContrato * 14;
                    break;
                case 8:
                    $valcalc = $valorDeCadaContrato * 16;
                    break;
                case 9:
                    $valcalc = $valorDeCadaContrato * 18;
                    break;
                case 10:
                    $valcalc = $valorDeCadaContrato * 20;
                    break;
                case 11:
                    $valcalc = $valorDeCadaContrato * 22;
                    break;
                case 12:
                    $valcalc = $valorDeCadaContrato * 24;
                    break;
                default:
                    if ($quantidadeMeses > 4) {
                        echo $i;
                        $valcalc = $valorDeCadaContrato * 2;
                    } else {
                        $valcalc = $valorDeCadaContrato * 10; 
                    }
                }
           
                $tabela .= "<td style='border: 1px solid black'><span style='color: green'>R$ ".number_format($valcalc, 2, ',', '.' )."</span></td>";                
            }
            $tabela .= "</tr>";

        $tabela .= "</table><br>";

        echo $tabela;
    
    }

    $cabecalho = "<br><strong>DADOS DE ENTRADA</strong><br><br>";
    $cabecalho .= "<strong>Quantidade de mês para simular:</strong> ".$quantidadeMeses."<br>";
    $cabecalho .= "<strong>Número de novos contratos por mês:</strong> ".$numeroNovoContratosPorMes."<br>";
    $cabecalho .= "<strong>Valor de cada contrato:</strong> ".number_format($valorDeCadaContrato, 2, ',', '.' )."<br><br>";
    $cabecalho .= "<strong>SAÍDA: VISÃO GERAL DE CRESCIMENTO</strong><br><br>";

    if ($quantidadeMeses < 6) {
        echo $cabecalho;
        tabela(1, $quantidadeMeses, $numeroNovoContratosPorMes, $valorDeCadaContrato);
    } else if ($quantidadeMeses === 6){
        echo $cabecalho;
        tabela(1, 6, $numeroNovoContratosPorMes, $valorDeCadaContrato);
    } else if($quantidadeMeses > 6 && $quantidadeMeses <= 12) {
        echo $cabecalho;
        tabela(1, 6, $numeroNovoContratosPorMes, $valorDeCadaContrato);
        tabela(6+1, $quantidadeMeses, $numeroNovoContratosPorMes, $valorDeCadaContrato);
    } else {
        echo "A quantidade de meses deve ser no máximo doze meses. Para aumentar esse limite, entre em contato com o Administrador.";
    }

}
?>
</div>
</body>
</html>