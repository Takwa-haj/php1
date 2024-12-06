<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corps Humain et Océan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/lucide-icons/dist/umd/lucide-icons.js" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-50 flex flex-col">
    <?php 
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    include_once 'includes/header.php';
    
    switch($page) {
        case 'about':
            include_once 'pages/about.php';
            break;
        case 'contact':
            include_once 'pages/contact.php';
            break;
        case 'systems':
            include_once 'pages/systems.php';
            break;
        case 'report':
            include_once 'pages/report.php';
            break;
        default:
            include_once 'pages/home.php';
    }
    
    include_once 'includes/footer.php';
    ?>

    <script src="https://unpkg.com/lucide-icons"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>