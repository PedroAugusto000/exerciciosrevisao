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
// Criação do array multidimensional
$dados = array(
    array("Nome", "Curso", "Média", "Situação"),
    array("Maria", "ADS", 7.0, ""),
    array("João", "CD", 5, ""),
    array("José", "CD", 8.0, ""),
    array("Pedro", "CD", 1.5, ""),
    array("Paulo", "CD", 6.0, ""),
);
?>

<table>
    <?php
    //Começar a "andar" pelos vetores
    foreach ($dados as $linha) {            //Aqui ele vai iterar sobre cada elemento do array $dados
        echo "<tr>";                        //Criar linha a cada volta
        foreach ($linha as $valor) {        // Itera sobre os elementos dentro de cada linha do array.
            echo "<td>" . $valor . "</td>"; //Criar coluna 
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>