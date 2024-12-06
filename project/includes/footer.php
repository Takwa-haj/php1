<?php
function sanitize_email($email) {
    return filter_var($email, FILTER_SANITIZE_EMAIL);
}
?>

<footer class="bg-blue-900 text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Newsletter Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Restez Informé</h3>
                <form action="includes/subscribe.php" method="POST" class="space-y-2">
                    <input type="email" 
                           name="email" 
                           placeholder="Votre email"
                           class="w-full px-4 py-2 rounded bg-blue-800 border border-blue-700 focus:outline-none focus:border-blue-500"
                           required>
                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded transition-colors duration-200">
                        S'abonner
                    </button>
                </form>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Liens Rapides</h3>
                <ul class="space-y-2">
                    <?php foreach ($navItems as $item): ?>
                        <li>
                            <a href="?page=<?php echo $item['id']; ?>" 
                               class="hover:text-blue-300 flex items-center">
                                <i data-lucide="external-link" class="w-4 h-4 mr-2"></i>
                                <?php echo $item['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Suivez-nous</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-300 transition-colors duration-200" aria-label="Email">
                        <i data-lucide="mail" class="w-6 h-6"></i>
                    </a>
                    <a href="#" class="hover:text-blue-300 transition-colors duration-200" aria-label="GitHub">
                        <i data-lucide="github" class="w-6 h-6"></i>
                    </a>
                    <a href="#" class="hover:text-blue-300 transition-colors duration-200" aria-label="LinkedIn">
                        <i data-lucide="linkedin" class="w-6 h-6"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-8 border-t border-blue-800 text-center text-blue-300">
            <p>© <?php echo date('Y'); ?> Corps Humain et Océan. Tous droits réservés.</p>
        </div>
    </div>
</footer>