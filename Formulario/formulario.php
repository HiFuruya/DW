<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="print.php" method="post">
        <label>Formulario Sem Botstrap</label>
        <br>
        <label>
            Nome:
            <input type="text" name="nome">
        </label>
        <br>
        <label>
            Email:
            <input type="email" name="email">
        </label>
        <br>
        <label>
            Telefone:
            <input type="text" name="telefone">
        </label>
        <br>
        <label>
            Cidaade:
            <input type="text" name="cidade">
        </label>
        <br>
        <input type="submit">
    </form>
    <a type="button" class="btn btn-primary" href="formularioB.html">Ir para fomulario com Bootstrap</a>
</body>
</html>