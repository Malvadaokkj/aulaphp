<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>

<style>
    body{
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
        flex-direction: column;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 200px;
   
    }
    input[type="text"]{
        width: 200px;
        height: 30px;
        background-color: #f4f4f4;
        border: 1px solid black;
        border-radius: 15px;
        padding: 5px 5px;
        margin: 10px;
    }
    input[type="submit"]{
        width: 150px;
        height: 30px;
        justify-content: center;
        align-self: end;
    }
</style>

<body>
    <form action="auxcadastrarUsuario.php" method="POST">
        <h1>Cadastrar Usuarios</h1>
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="text" name="senha" placeholder="Senha">
        <input type="text" name="confirma" placeholder="Confirma">
        <input type="text" name="nome" placeholder="Nome">

        <input type="submit" name ="submit" value="Cadastrar">
    </form>
</body>
</html>