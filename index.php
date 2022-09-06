<DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Aula de PHP </title>
    </head>
<body>
<?php

print "Olá mundo.";
echo "Hello word.";

$var = "5";

print $var;

?>
<br>
<?php

echo $var;

echo "<br>";
$var2 = print "Variavel com print <br>";
print $var2;

//$var3

$var4 = "20";
$var5 = "2";
$total = $var4 + $var5;

echo "<br> O total é:".$total."!";
echo "<br> O total é:$total!"; 

echo "<br>";
echo $var4 + (int)$var;

echo "<hr>";

echo gettype($var5);

echo "<br>";

$var6 = "10 pessoas";
$var6 = (int)$var6;

echo $var4 + $var6;

echo "<br> $var6";

echo "<hr>";

$array = array(
"cinco" => "Pedro <br>", 
"pessoa_1" => "Aninha <br>",
"pessoa_2" => "Djulinha <br>", 
"pessoa_3" => "Euzinho <br>",
);

/*
$array = array(
1 => "Pedro <br>", 1 inteiro
1.5 => "Aninha <br>", dps do ponto não funciona ele ignora
"1" => "Djulinha <br>", 1 string
true => "Euzinho <br>", true é 1
);
*/

print_r ($array);
echo "<br>";
var_dump ($array);

echo "<hr>";

if ($var4 > $var5) {
    echo "Variavel 4 é maior<br>";
    if($var4 == "20"){
        echo "Variavel 4 é igual a 20<br>";
    }else {
        echo "Variavel 4 não é uma string<br>";
    }
}elseif ($var5 == 50){
    echo "Variavel 5 é 50<br>";
}else {
    echo "Variavel 5 é maior<br>";
}
/*
sem ; dps das chaves
=  atribuição
== sinal de igual
=== compara se é exatamente igual o tipo tem que ser igual string = string, int = int ...
*/ 
echo "<hr>";
$i=0; // sem isso da warnig 
while ($i <= 10){
    echo $i++; //acrescenta
    echo "<br>"; 
}
echo "<hr>";
$a=10; // sem isso da warnig 
while ($a > 0 ){
    echo $a--; //descrecenta
    echo "<br>"; 
}
echo "<hr>";

/*$i=10;
do{
    $i--;
    echo "$i";
     
}while ($i--10)
*/

for ($j = 0;$j < 10;$j++ ){
    echo"$j";
}
echo "<hr>";

for ($j = 0, $cont = 0;$j < 10; $cont++ ){
    echo"$j cont: $cont<br> ";
    $j++;
}

?>

</body>
</html>            