<?php
$rawPageTitle = isset($pageTitle) ? trim((string) $pageTitle) : '';
$title = $rawPageTitle !== '' ? $rawPageTitle . ' | ZoftMec' : 'ZoftMec';
$assetBase = '/ZoftMec/public/assets';
$pageStyles = isset($pageStyles) && is_array($pageStyles) ? $pageStyles : [];
?>
<head>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="color-scheme" content="dark" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo $assetBase; ?>/style/general.css">
    <link rel="stylesheet" href="<?php echo $assetBase; ?>/style/footer.css">
    <?php foreach ($pageStyles as $style): ?>
        <link rel="stylesheet" href="<?php echo $assetBase; ?>/style/<?php echo htmlspecialchars(ltrim((string) $style, '/'), ENT_QUOTES, 'UTF-8'); ?>">
    <?php endforeach; ?>
</head>
