
<?php header('Content-Type: text/html; iso-8859-1');?>
<?php
$conecta = mysql_connect("localhost", "root", "F@bio102030")or die("Erro ao conectar!");
$banco = mysql_select_db("db-gbi")or die("Erro ao selecionar BD!");
//fim da conexão com o banco de dados


$palavra = $_POST['palavra'];

$sql = "SELECT * FROM cliente WHERE nome_cliente LIKE '%$palavra%'";
$query = mysql_query($sql);
$qtd = mysql_num_rows($query);
?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if($qtd>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i> CPF</th>
            </tr>
            <?php 
            while($linha = mysql_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$linha['codcliente'];?></td>
                <td><?=$linha['nome_cliente'];?></td>
                <td><?=$linha['cpf_cliente'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>