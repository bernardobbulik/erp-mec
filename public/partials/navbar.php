<?php
$viewsBase = '/ZoftMec/public/views';
$currentScript = $_SERVER['SCRIPT_NAME'] ?? '';

$isHome = substr($currentScript, -9) === '/home.php';
$isClientes = substr($currentScript, -13) === '/clientes.php';

$navItems = [
    ['label' => 'Home', 'href' => $viewsBase . '/home.php', 'active' => $isHome],
    ['label' => 'Customers', 'href' => $viewsBase . '/cliente/clientes.php', 'active' => $isClientes],
    ['label' => 'Work Orders', 'href' => $viewsBase . '/home.php', 'active' => false],
    ['label' => 'Finance', 'href' => $viewsBase . '/home.php', 'active' => false],
    ['label' => 'Settings', 'href' => $viewsBase . '/home.php', 'active' => false],
    ['label' => 'Sign Out', 'href' => $viewsBase . '../../../src/api/logout.php', 'active' => false],
];
?>
<nav class="site-nav" aria-label="Main navigation">
    <a class="nav-brand" href="<?php echo $viewsBase; ?>/home.php">
        <span>ZoftMec</span>
    </a>
    <ul class="nav-menu">
        <?php foreach ($navItems as $item): ?>
            <li>
                <a
                    class="nav-link<?php echo $item['active'] ? ' is-active' : ''; ?>"
                    href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>"
                >
                    <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
