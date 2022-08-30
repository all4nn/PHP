<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <style type="text/css">
        table, tr, td{
            border: 1px solid;
        }
    </style>
    
    <meta charset="UTF-8">
    <title>aula 2</title>
</head>
<body>
    <a href="#">Home</a>
    <a href="./exemplo.php">Exemplo</a>
<hr>
<h1> Página Home</h1>

<table id="Tabela1" style="border: 1px solid;"> <!-- Inicia a Tabela -->
    <tr> <!-- Inicia a Linha -->
        <td> <!-- Inicia a Coluna -->
            Coluna 1x1
        </td> <!-- Finaliza a Coluna -->
        <td>
            Coluna 2x1
        </td>
        <td rowspan="2" class="Coluna32">
            Coluna 3x1
        </td>
        <td class="Coluna4">
           <b> 4x1</b>
        </td>
    </tr> <!-- Finaliza a Linha -->
    <tr>
        <td colspan="2">Coluna 1 e 2 x2 </td>
        <td  class="Coluna4">
            <p>Coluna 4 x2
                <b>Coluna</b>
            </p>
         </td>
    </tr>   
</table> <!-- Finaliza a Tabela -->

<hr>
    <form>
        <label> Nome: </label>
        <input type="text" value="Allan" disabled>
        Sobrenome:
        <input type="text" placeholder="Poem aqui o sobrenome"> <br>
        <input type="button" value="Start"> 
        <input type="reset" value="Reset">
        <input type="submit" value="Enviar">
    </form>
    <?php

        echo "<hr>";
        print"hello word <br>";

        $var = "texto da variavel";
        print $var;

        echo "<hr>";

        $var2 = "variavel 2";
        print $var2;

        echo "<hr>";

        $var3 = print"Print em variavel";
        print $var3;

        echo "<hr>";

        $var5 = 1.4. "meu num";
        echo gettype($var5);

        echo $var5;

        echo '<hr>';
        
        $a = 10;
        $b = 5;

        echo $a + $b;
    ?>
</body>