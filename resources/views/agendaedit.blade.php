<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php

$sURL = $_SERVER['REQUEST_URI'];
$aVal = explode("/", $sURL);
$iVal = $aVal[2];
$aCONTATO  = session()->get('CONTATOS')[$iVal];

?>

<body style="margin: 20px">
    <form action="../<?php echo $aCONTATO['txtId'] ?>" method='post'>
        @csrf
        @method('PUT')
        <h2 style="text-align:center">Alteração do item em específico</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> Id </legend>
                <input name="txtId" type="text" id="txtId" placeholder="Id..." readonly value="<?php echo($aCONTATO['txtId']);?>">
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> Nome</legend>
                <input name="txtNome" type="text" id="txtNome" placeholder="NOME..." value="<?php echo($aCONTATO['txtNome']);?>">
                <br><br>
            </div>
            <div id="celular" class="col-lg-2">
                <legend> Celular</legend>
                <input name="txtCelular" type="text" id="txtCelular" placeholder="CELULAR..." value="<?php echo($aCONTATO['txtCelular']);?>">
                <br><br>
            </div>
            <div id="telefone" class="col-lg-2">
                <legend> Telefone</legend>
                <input name="txtTelefone" type="text" id="txtTelefone" placeholder="TELEFONE..." value="<?php echo($aCONTATO['txtTelefone']);?>">
                <br><br>
            </div>
            <div id="data" class="col-lg-2">
                <legend> Data Nascimento</legend>
                <input name="txtData" type="date" id="txtData" value="<?php echo($aCONTATO['txtData']);?>">
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>
<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a><br><br>
<a href='http://localhost:8000/agenda/'>Voltar a tela anterior</a>