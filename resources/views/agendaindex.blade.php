<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<br>
<h2 style="text-align:center">Listagem de todos os Contatos</h2>

<br>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th id="th1">Excluir</th>
            <p>
                <th id="th2">Alterar</th>
            <p>
                <th id="th3">Id</th>
            <p>
                <th id="th4">Nome</th>
            <p>
                <th id="th5">Telefone</th>
            <p>
                <th id="th6">Celular</th>
            <p>
                <th id="th7">Data Nascimento</th>
            <p>
        </tr>
        <?php
        $aCONTATOS  = session()->get('CONTATOS');
        ?>
        <?php if ($aCONTATOS != null) {
            foreach ($aCONTATOS as $aArray) { ?>
                <tr id=linha<?php echo $aArray['txtId']; ?>>
                    <td id="td1">
                        <form action="<?php echo $aArray['txtId'] ?>" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" style="background-color:#ff0000" href="#" onclick="this.parentNode.submit();" style="color:black">Excluir</button>
                        </form>
                    </td>
                    <td id="td2">
                        <form action="<?php echo $aArray['txtId'] ?>/edit" method="post">
                            @csrf
                            @method('GET')
                            <button type="button" style="background-color:#6666ff" href="#" onclick="this.parentNode.submit();" style="color:black">Alterar</button>
                        </form>
                    </td>
                    <td id="td3"><?php echo $aArray['txtId'] ?></td>
                    <p>
                        <td id="td4"><?php echo $aArray['txtNome'] ?></td>
                    <p>
                        <td id="td5"><?php echo $aArray['txtTelefone'] ?></td>
                    <p>
                        <td id="td6"><?php echo $aArray['txtCelular'] ?></td>
                    <p>
                        <td id="td7"><?php echo date_format(new DateTime($aArray['txtData']), 'd/m/Y') ?></td>

                    <p>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>

<br><br>
<a href='http://localhost:8000/'>Voltar ao Menu</a>