<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 32px;
        }

        body {
            background: #707070;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            text-align: center;
        }
    </style>

    <title>Produtos</title>
</head>

<body>
    <p>
        <label>Nome do Produto:</label><br>
        <strong>{{ $produto->nome }}</strong>
    </p>

    <p>
        <label>Velor do Produto:</label><br>
        <input type="text" name="valor" value={{ $produto->valor }}>
    </p>

    <p>
        <label>Quantidade em Estoque:</label>
        <br>
        <input type="text" name="estoque" value={{ $produto->estoque }}>
    </p>

</body>

</html>