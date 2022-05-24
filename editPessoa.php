<?php
    include 'connect.php';


    $id = $_GET['idPessoa'];
    $sql="select * from pessoa where idPessoa={$id}";
    $query= mysqli_query($con, $sql);
    $pessoa=mysqli_fetch_assoc($query);
?>


<h1> Pessoa </h1>
        <form method="POST" action="returnViewall.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                       Id: 
                       <input readonly="readonly" type="number"  name="IdPessoa" value="<?php echo $pessoa['IdPessoa']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nome da Pessoa: 
                        <input type="text" name="nomePessoa" value="<?php echo $pessoa['nomePessoa']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail da Pessoa: 
                        <input type="email" name="mailPessoa" value="<?php echo $pessoa['mailPessoa']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Idade da Pessoa: 
                        <input type="number" name="idadePessoa" value="<?php echo $pessoa['idadePessoa']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
            
        </form>   

        