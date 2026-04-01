<?php
$displayUser = isset($nomeUsuario) ? (string) $nomeUsuario : 'Guest';
?>
<div class="footer-inner">
    <p class="status-bar">User: <?php echo htmlspecialchars($displayUser, ENT_QUOTES, 'UTF-8'); ?></p>
    <p class="status-meta">ZoftMec</p>
</div>
