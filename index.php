<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/701f20bb44.js" crossorigin="anonymous"></script>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
</head>

<body>
    <form action="process.php" method="post">
    <main>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h1 class="fw-bold mb-2 text-uppercase">To Do List</h1>
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Entre com seu email e senha!</p>

                                    <form action="#" class="needs-validation" novalidate>
                                        <div class="form-row">

                                            <div class="form-outline form-white mb-4">
                                                <input placeholder="E-mail:" type="text" name="login" id="typeEmailX"
                                                    class="form-control form-control-lg" required>

                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input placeholder="Senha:" type="password" name="senha" id="typePasswordX"
                                                    class="form-control form-control-lg" required>
                                            </div>

                                            <button class="btn btn-outline-light btn-lg px-5"
                                                type="submit">Login</button>

                                            </div>
                                        </div>
                                    </form>

                                <div>
                                    <p class="mb-0">N??o tem uma conta? <a href="cadastro.html"
                                            class="text-white-50 fw-bold">Se
                                            Inscreva!</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </form>



    <footer>
        <a class="mt-5 mb-3 text-muted fixarRodapeI" style=" text-decoration: none" title="Os alunos de ADS te convidam a conhecer
    a p??gina da faculdade Fatec de Presidente Prudente - SP" href="http://fatecpp.edu.br/" target="_blank">
            <small>&copy; 2022 Fatec Pres. Prudente</small></a>


    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>
