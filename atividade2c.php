<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 35%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
$dados = array(
    array("Nome", "Curso", "Média", "Situação"),
    array("Maria", "ADS", 7.0, ""),
    array("João", "CD", 5.0, ""),
    array("José", "CD", 8.0, ""),
    array("Pedro", "ADS", 1.5, ""),
    array("Paulo", "ADS", 6.0, ""),
);

function determinarSituacao($media) {
    if ($media < 2) {
        return "Reprovado";
    } elseif ($media >= 2 && $media < 6) {
        return "Exame Final";
    } else {
        return "Aprovado";
    }
}

for ($i = 1; $i < count($dados); $i++) {
    $media = $dados[$i][2];
    $situacao = determinarSituacao($media);
    $dados[$i][3] = $situacao;
}

//Inicializar as variáveis
$aprovadosADS = 0;
$exameFinalADS = 0;
$reprovadosADS = 0;

$aprovadosCD = 0;
$exameFinalCD = 0;
$reprovadosCD = 0;

//Loop para percorrer o array $dados
for ($i = 1; $i < count($dados); $i++) {
    $curso = $dados[$i][1]; //Extrair curso
    $situacao = $dados[$i][3]; //Extrair situação
    
    if ($curso === "ADS") {
        if ($situacao === "Aprovado") {
            $aprovadosADS++; //Atualiza a variável de contagem ADS
        } elseif ($situacao === "Exame Final") {
            $exameFinalADS++; //Atualiza a variável de contagem ADS
        } elseif ($situacao === "Reprovado") {
            $reprovadosADS++; //Atualiza a variável de contagem ADS
        }
    } elseif ($curso === "CD") {
        if ($situacao === "Aprovado") {
            $aprovadosCD++; //Atualiza a variável de contagem CD
        } elseif ($situacao === "Exame Final") {
            $exameFinalCD++; //Atualiza a variável de contagem CD
        } elseif ($situacao === "Reprovado") {
            $reprovadosCD++; //Atualiza a variável de contagem CD
        }
    }
}
?>

<table>
    <?php
    //Primeira tabela
    foreach ($dados as $linha) {
        echo "<tr>";
        foreach ($linha as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<br><br>

<table>
    <!--Segunda tabela-->
    <tr>
        <td>Curso</td>
        <td>Aprovados</td>
        <td>Exame Final</td>
        <td>Reprovados</td>
    </tr>
    <tr>
        <td>ADS</td>
        <!--Só colocar os nomes das variáveis pra fazer aparecer as contagens-->
        <td><?php echo $aprovadosADS; ?></td>
        <td><?php echo $exameFinalADS; ?></td>
        <td><?php echo $reprovadosADS; ?></td>
    </tr>
    <tr>
        <td>CD</td>
        <td><?php echo $aprovadosCD; ?></td>
        <td><?php echo $exameFinalCD; ?></td>
        <td><?php echo $reprovadosCD; ?></td>
    </tr>
</table>
</body>
</html>
