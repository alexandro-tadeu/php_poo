<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Painel de Controle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #1E75DE;
            padding: 35px;
            text-align: center;
            font-size: 20px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 15%;
            height: 420px;
            /* only for demonstration, should be removed */
            background: #FBF8FC;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 10px;
            width: 84.8%;
            background-color: #f1f1f1;
            height: 550px;
            /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #1E75DE;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h2>Painel</h2>
        <?php
        header("Content-type: text/html; charset=utf-8");
        session_start();
        include('verifica_login.php');
        ?>

        <h2 style='text-align: right;'>Olá, <?php echo $_SESSION['usuario']; ?></h2>

    </header>

    <section>
        <nav class="nav flex-column">
            <a class="nav-link active" href="cadastro.php">Cadastrar Clientes</a>
            <a class="nav-link" href='crud.php?acao=consultar'>Consultar Clientes</a>
            <a class="nav-link" href="logout.php">Encerrar Sessão</a>
            <a class="nav-link disabled" href="#">Desativado</a>
        </nav>
        </nav>

        <article>
            <!--echo "<td>
            <a href='crud.php?acao=deletar&id=$id'><img src='delete_crud.png' alt='Deletar' title='Deletar registro'></a>
            <a href='crud.php?acao=montar&id=$id'><img src='update_crud.png' alt='Atualizar' title='Atualizar registro'></a>
            <a href='index.php'><img src='insert_crud.png' alt='Inserir' title='Inserir registro'></a>";-->

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Clientes</h5>
                            <p class="card-text">Esta sessão destina-se a cadastar os clientes</p>
                            <a href='cadastro.php' class="btn btn-primary">Cadastar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar usuários</h5>
                            <p class="card-text">Esta sessão destina-se a cadastar os usuários do sistema </p>
                            <a href="cadastro_login.php" class="btn btn-primary">Cadastar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consultar cadastro clientes</h5>
                            <p class="card-text">Esta sessão destina-se a consultar os clientes cadastrados no sistema </p>
                            <a href='crud.php?acao=consultar' class="btn btn-info">Consultar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consultar cadastro usuários</h5>
                            <p class="card-text">Esta sessão destina-se a consultar os usuários cadastrados no sistema </p>
                            <a href="select_login.php" class="btn btn-info">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1>Lorem ipsum</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nulla praesentium perferendis nisi repudiandae voluptatem, reprehenderit veniam beatae quibusdam cumque? Nam inventore, repellendus veniam totam eveniet adipisci esse tempore iusto!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto odio ipsum explicabo necessitatibus perspiciatis distinctio ipsam nesciunt excepturi tempore assumenda, debitis, recusandae, aliquam cumque temporibus hic voluptatem! Dolor, vitae ea.</p>
        </article>
    </section>

    <footer>
        <p>Footer/rodapé</p>
    </footer>

</body>

</html>