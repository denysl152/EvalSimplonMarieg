<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <div id="">
    <form action="form.php" method="POST" >
    <h3>LOGIN</h3>
    <div class="semi-contain">
    <table>
    <tr><td>Nom d'utilisateur</td><td>Mot de passe</td></tr>
   <tr><td><input type="text" name="username"></td><td><input type="text" name="z"></td></tr>
   <tr><td><button>Envoyer</button></td></tr> 
    </table>
    </div>
    </form> 
    
<?php 
if(isset($_POST) && isset($_POST['username']) && isset($_POST['Password']))
{        
    extract($_POST);
    if(!empty($username) && !empty($Password))
    { 
        echo $username;
        echo $Password;
        
       


    } 
    else { echo "Param Vide !";}
} 
?>
    </div>
</body>
</html>