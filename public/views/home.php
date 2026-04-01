<?php
include_once __DIR__ . '/../partials/bootstrap.php';
$pageTitle = 'Home';
$pageStyles = ['home.css'];
?>
<!doctype html>
<html lang="en">
    <?php include_once __DIR__ . '/../partials/head.php'; ?>
    <body class="site-shell page-home">
        <header class="site-header">
            <?php include_once __DIR__ . '/../partials/navbar.php'; ?>
        </header>

        <main class="page-main">
            <section class="home-hero" data-reveal>
                <p class="hero-tag">Dashboard</p>
                <h1>Workshop management, reduced to essentials.</h1>
                <p class="hero-copy">A clean monochrome interface with less friction, faster scanning, and better focus.</p>
                <div class="hero-grid">
                    <article class="hero-card">
                        <h2>Clear structure</h2>
                        <p>Simple navigation and calm spacing make each action immediate.</p>
                    </article>
                    <article class="hero-card">
                        <h2>Consistent rhythm</h2>
                        <p>Consistent hierarchy keeps the workflow readable on desktop and mobile.</p>
                    </article>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <?php include_once __DIR__ . '/../partials/footer.php'; ?>
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
