<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
$aCONTATOS = [];
$sURL = $_SERVER['REQUEST_URI'];
$aVal = explode("/", $sURL);
$iVal = $aVal[2];

$aCONTATOS  = session()->get('CONTATOS');

?>


<body style="margin: 20px">
    <form method='post' action="/agenda/busca">
        @csrf
        @method('GET')
        <h2 style="text-align:center">Busca item em específico por descrição</h2>
        <br><br>
        <div class="row">
            <div id="nome" class="col-lg-2">
                <legend> Nome</legend>
                <input name="txtNome" type="text" id="txtNome" placeholder="NOME...">
                <br><br>
            </div>
        </div>
        <input type="submit" value="BUSCAR" id="action" name="action" style="background-color:#66ffff"></input>
    </form>
</body>


<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">Id</th>
            <p>
                <th id="th2">Nome</th>
            <p>
                <th id="th3">Telefone</th>
            <p>
                <th id="th4">Celular</th>
            <p>
                <th id="th5">Data Nascimento</th>
            <p>
        </tr>
        <?php if ($aCONTATOS != null) {
            foreach ($aCONTATOS as $aArray) {
                if(isset($_POST['txtNome'])){
                    $nome = $_POST['txtNome'];
            }else{
                $nome = "";
            }
                if (str_contains($aArray['txtNome'], $nome)) {
        ?>
                <tr id=linha<?php echo $aArray['txtId']; ?>>
                    <td id="td1"><?php echo $aArray['txtId'] ?></td>
                    <p>
                        <td id="td2"><?php echo $aArray['txtNome'] ?></td>
                    <p>
                        <td id="td3"><?php echo $aArray['txtTelefone'] ?></td>
                    <p>
                        <td id="td4"><?php echo $aArray['txtCelular'] ?></td>
                    <p>
                        <td id="td5"><?php echo date_format(new DateTime($aArray['txtData']), 'd/m/Y') ?></td>
                    <p>
                </tr>
        <?php
                }
            }
        } ?>
    </tbody>
</table>


<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>