<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
$aCONTATOS  = session()->get('CONTATOS');
if (isset($aCONTATOS)) {
    $iSize = end($aCONTATOS)['txtId'] + 1;
} else {
    $iSize = 1;
}
?>

<body style="margin: 20px">
    <form action="{{route('agenda.store')}}" method='post'>
        @csrf
        @method('POST')
        <h2 style="text-align:center">Inserção de novos contatos</h2>
        <br><br>
        <div class="row">
            <div id="id" class="col-lg-2">
                <legend> Id </legend>
                <input name="txtId" type="text" id="txtId" placeholder="Id..." value="<?php echo $iSize; ?>" readonly>
            </div>
            <br><br>
            <div id="nome" class="col-lg-2">
                <legend> Nome</legend>
                <input name="txtNome" type="text" id="txtNome" placeholder="NOME...">
                <br><br>
            </div>
            <div id="celular" class="col-lg-2">
                <legend> Celular</legend>
                <input name="txtCelular" type="text" id="txtCelular" placeholder="CELULAR...">
                <br><br>
            </div>
            <div id="telefone" class="col-lg-2">
                <legend> Telefone</legend>
                <input name="txtTelefone" type="text" id="txtTelefone" placeholder="TELEFONE...">
                <br><br>
            </div>
            <div id="data" class="col-lg-2">
                <legend> Data Nascimento</legend>
                <input name="txtData" type="date" id="txtData">
            </div>
        </div>
        <br><br>
        <input type='submit' value='Salvar'>
    </form>
</body>
<a href='http://localhost:8000/'>Voltar ao Menu</a>