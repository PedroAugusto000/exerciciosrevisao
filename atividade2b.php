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

//Função com as condições
    function determinarSituacao($media) {
        if ($media < 2) {
            return "Reprovado";
        } elseif ($media >= 2 && $media < 6) {
            return "Exame Final";
        } else {
            return "Aprovado";
        }
    }

//Aqui vai começar a colocar as informações da situação do aluno
for ($i = 1; $i < count($dados); $i++) { // Iterar sobre as linhas do array $dados
    $media = $dados[$i][2]; //Extrair a média do indice 2 (#Achar uma forma melhor de fazer, mais simples#)
    $situacao = determinarSituacao($media); //Obter a situação do aluno
    $dados[$i][3] = $situacao; //Armazenar a situação no indice 3 - Atualiza o array (#Achar uma forma melhor de fazer#)
}
?>

<table>

    <?php
    foreach ($dados as $linha) {
        echo "<tr>";
        foreach ($linha as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
