<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<br>
<h1 style="text-align:center"> Tela de Gerenciamento da Agenda de Contatos </h1>
<br>
<body>
    <div style="text-align:center">
        @csrf
        @method('GET')
        <button onclick="location.href='agenda/create'" type="button" class="btn btn-primary btn-block">Tela de inserção de dados</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='agenda/'" type="button" class="btn btn-primary btn-block">Lista todos Contatos</button>
        <br>
        @csrf
        @method('GET')
        <button onclick="location.href='agenda/0'" type="button" class="btn btn-primary btn-block">Busca Contato Específico</button>
    </div>
</body>