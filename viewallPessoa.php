<?php
    include 'connect.php';
?>


<h1> Pessoa </h1>
        <form method="POST" action="addPessoa.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome da Pessoa: 
                        <input type="text" name="nomePessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        E-mail da Pessoa: 
                        <input type="email" name="mailPessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        Idade da Pessoa: 
                        <input type="number" name="idadePessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>   




<table border='2'>
    <tr>
        <th>
            Nome
        </th>
        <th>
            Email
        </th>
        <th>
            Idade
        </th>
        <th>
            
        </th>
    </tr>

<?php
$sq="select * from PESSOA";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['nomePessoa']?>
        </td>
        <td>
            <?php echo $f['mailPessoa']?>
        </td>
        <td>
            <?php echo $f['idadePessoa']?>
        </td>

        <td>
            <a href="deletePessoa.php?idPessoa=<?php echo $f['IdPessoa']?>">Deletar</a>
        </td>
        <td>
            <a href="editPessoa.php?idPessoa=<?php echo $f['IdPessoa']?>">Alterar</a>
        </td>
    </tr>
    <?php
}