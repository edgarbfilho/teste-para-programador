<?php
//TESTE PARA PROGRAMADOR
//EDGAR BARBOSA FILHO
//62 9.91691538

//ADICIONEI O HTML PARA FORMATAR A PÁGINA
//NÃO FOI ALTERADO O CÓDIGO PHP INICIAL. ELE SE INICIA NA LINHA 26 ATÉ A LINHA 56.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Programador</title>
    <style>
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

        //TESTE PARA PROGRAMADOR
        //EDGAR BARBOSA FILHO
        //62 9.91691538

        if($quantidadeMeses && $numeroNovoContratosPorMes && $valorDeCadaContrato) {
            
            function tabela($n, $quantidadeMeses, $numeroNovoContratosPorMes, $valorDeCadaContrato) {

                $q = $quantidadeMeses;
                settype($q, "integer");
                $n = $n;
                settype($n, "integer");

                if ($quantidadeMeses < 7) {
                    $quantidadeMeses = $q;
                } else {

                    if ($n == 1) {
                        $quantidadeMeses = 6;
                        // echo "Q => ".$q."<br>";
                        // echo "N => ".$n."<br>";
                        // echo "QT => ".$quantidadeMeses."<hr>";
                    } 
                    
                    
                    // else if ($n == 7 && $q >= 13) {
                    else if ($n == $n && $q >= $n+6) {
                        $quantidadeMeses = $n+5;
                        // echo "Q1 => ".$q."<br>";
                        // echo "N1 => ".$n."<br>";
                        // echo "QT => ".$quantidadeMeses."<hr>";
                    } else if ($n == 7) {
                        $quantidadeMeses = $q;
                        // echo "Q => ".$q."<br>";
                        // echo "N => ".$n."<br>";
                        // echo "QT => ".$quantidadeMeses."<hr>";
                    } 
   
                }

                $tabela = "<table border='0' cellspacing='0' cellpadding='0' width='100%'>";

                    $tabela .= "<tr>";
                    $tabela .= "<td style='border: 1px solid black'><strong>Meses</strong></td>";
                    for ($i=$n; $i <= $quantidadeMeses; $i++) { 
                        $tabela .= "<td style='border: 1px solid black'><strong>".$i."&#176; Mês</strong></td>";
                    }
                    $tabela .= "</tr>";

                    for ($b=1; $b <= $quantidadeMeses; $b++) { 

                        $tabela .= "<tr>";
                        $tabela .= "<td style='border: 1px solid black'></td>";
                        for ($z=$n; $z <= $quantidadeMeses; $z++) { 
                            if($z === $b || $z > $b) {
                                $tabela .= "<td style='border: 1px solid black'>".$numeroNovoContratosPorMes."</td>";
                            } else {
                                $tabela .= "<td style='border: 1px solid black'></td>";
                            }
                        }
                        $tabela .= "</tr>";

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

                    for ($i=$n; $i <= $quantidadeMeses; $i++) {
                       
                    switch ($i) {

                        case $i:
                            if ($quantidadeMeses > 4) {
                                $valcalc = $valorDeCadaContrato * ($i*2);
                            } else {
                                $valcalc = $valorDeCadaContrato * ($i*10);
                            }
                            break;
   
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
            
            echo $cabecalho;

            for ($y=1; $y <= $quantidadeMeses; $y+=6) {
                tabela($y, $quantidadeMeses, $numeroNovoContratosPorMes, $valorDeCadaContrato);
            }

        }
        ?>
    </div>
</body>
</html>