<?php
include_once __DIR__ . '/../../partials/bootstrap.php';
$pageTitle = 'Customers';
$pageStyles = ['clientes.css'];
?>
<!doctype html>
<html lang="en">
    <?php include_once __DIR__ . '/../../partials/head.php'; ?>
    <body class="site-shell page-clientes">
        <header class="site-header">
            <?php include_once __DIR__ . '/../../partials/navbar.php'; ?>
        </header>

        <main class="page-main">
            <section class="clientes-shell" data-reveal>
                <p class="clientes-kicker">Administrative area</p>
                <h1>Customers</h1>
                <p class="clientes-description">A minimal layout shell ready for your customer listing and operations.</p>
                <div class="clientes-frame" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <?php include_once __DIR__ . '/../../partials/footer.php'; ?>
        </footer>

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
    </body>
</html>
