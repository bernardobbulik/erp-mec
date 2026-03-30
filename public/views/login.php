<!doctype html>
<html lang="en">
    <head>
        <title>Login | ZoftMec</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="./../assets/style/general.css">
        <link rel="stylesheet" href="./../assets/style/login.css">
    </head>

    <body>
        <main>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="login-card">
                    <h2>Bem-vindo(a)!</h2>
                    <p>Realize seu login para acessar o ZoftMec</p>
                    <form id="form-login" method="POST" action="./../../src/api/verificaLogin.php">
                        <label for="email">E-mail</label><br>
                        <input id="inpEmail" required type="email" name="email" placeholder="seuemail@dominio.com.br...">
                        <br>
                        <label for="senha">Senha</label><br>
                        <input id="inpSenha" required type="password" name="senha" placeholder="**********"><br>
                        <button type="submit">Acessar</button>
                    </form> 
                </div>
            </div>
        </main>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="./../assets/js/login.js"></script>
    </body>
</html>
