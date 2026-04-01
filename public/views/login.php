<?php
$pageTitle = 'Login';
$pageStyles = ['login.css'];
?>
<!doctype html>
<html lang="en">
    <?php include_once __DIR__ . '/../partials/head.php'; ?>
    <body class="site-shell page-login">
        <main class="page-main login-main">
            <section class="login-card" data-reveal>
                <p class="login-kicker">ZoftMec</p>
                <h1>Sign in</h1>
                <p class="login-subtitle">Access your workspace with a cleaner and distraction-free interface.</p>

                <form id="form-login" method="POST" action="./../../src/api/verificaLogin.php">
                    <label for="inpEmail">Email</label>
                    <input id="inpEmail" required type="email" name="email" placeholder="yourname@domain.com">

                    <label for="inpSenha">Password</label>
                    <input id="inpSenha" required type="password" name="senha" placeholder="**********">

                    <button type="submit">Sign in</button>
                </form>
            </section>
        </main>

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
        <script src="/ZoftMec/public/assets/js/login.js"></script>
    </body>
</html>
