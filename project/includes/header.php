<?php
$navItems = [
    ['id' => 'home', 'label' => 'Accueil', 'icon' => 'home'],
    ['id' => 'systems', 'label' => 'Systèmes', 'icon' => 'book-open'],
    ['id' => 'about', 'label' => 'À Propos', 'icon' => 'info'],
    ['id' => 'contact', 'label' => 'Contact', 'icon' => 'mail'],
    ['id' => 'report', 'label' => 'Rapport', 'icon' => 'file-text']
];
?>

<header>
    <nav class="bg-blue-700">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <button id="menuButton" class="md:hidden text-white">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>

                <div class="hidden md:flex space-x-8">
                    <?php foreach ($navItems as $item): ?>
                        <a href="?page=<?php echo $item['id']; ?>" 
                           class="flex items-center text-white hover:text-blue-200 transition-colors duration-200 
                           <?php echo $page === $item['id'] ? 'text-blue-200' : ''; ?>">
                            <i data-lucide="<?php echo $item['icon']; ?>" class="w-5 h-5"></i>
                            <span class="ml-2"><?php echo $item['label']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobileMenu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <?php foreach ($navItems as $item): ?>
                        <a href="?page=<?php echo $item['id']; ?>"
                           class="flex items-center text-white hover:bg-blue-600 block px-3 py-2 rounded-md w-full
                           <?php echo $page === $item['id'] ? 'bg-blue-600' : ''; ?>">
                            <i data-lucide="<?php echo $item['icon']; ?>" class="w-5 h-5"></i>
                            <span class="ml-2"><?php echo $item['label']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center">
                <i data-lucide="waves" class="w-10 h-10 mr-3"></i>
                <h1 class="text-4xl font-bold">Corps Humain et Océan</h1>
            </div>
            <p class="text-center mt-4 text-xl text-blue-100 max-w-2xl mx-auto">
                Découvrez les parallèles fascinants entre notre corps et les océans
            </p>
        </div>
    </div>
</header>

<script>
document.getElementById('menuButton').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});
</script>