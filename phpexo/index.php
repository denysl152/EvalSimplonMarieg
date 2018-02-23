<?php 
//exo 1
'<p>Exo 1</p><br />';
$nbr = 0;

while ($nbr <= 100)
{
    echo $nbr .'.<br />';
    $nbr++; // $nbr = $nbr + 1
}
?><br>
<p>Exo 2</p>
<?php 
 
 $dev = "back";
 $technos = ["Php", "Ruby", "Javascript", "Html"];

 if($technos >="front" ){
echo "Je suis un dev front et je connais le Javascript et l'Html";
 }
elseif($technos>="back"){
echo "Je suis un dev back et je connais le Php, le Ruby et le Javascript";
}
else{
    echo "Pametres indefini";
}
?>
<p>exo 3</p>

<?php 

print_r($technos).'<br />';
$technos['4'] ='Python';
print_r($technos);

?>
