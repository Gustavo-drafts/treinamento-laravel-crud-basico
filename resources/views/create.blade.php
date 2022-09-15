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
    <form action="/cadastrar-produto" method="POST">
        @csrf
        <p>
            <label>Nome do Produto:</label><br>
            <input type="text" name="nome">
        </p>

        <p>
            <label>Velor do Produto:</label><br>
            <input type="text" name="valor">
        </p>

        <p>
            <label>Quantidade em Estoque:</label>
            <br>
            <input type="text" name="estoque">
        </p>

        <br>
        <button>Salvar Produto</button>
    </form>

</body>

</html>