/*
Faça uma lista em HTML com PHP. Utilize um While para exibir dez itens de uma lista. 
*/

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $x = 1;
    while($x <= 5 ){
    echo"
    <ul>
        <li>o numero é: $x <br></li>
    </ul>";
    $x++;
    }
    ?>
    
</body>
</html>