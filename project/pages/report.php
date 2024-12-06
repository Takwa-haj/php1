<?php
$sections = [
    'introduction' => [
        'title' => 'Introduction',
        'content' => 'Ce projet vise à créer une plateforme éducative interactive établissant des parallèles 
                     fascinants entre le corps humain et les océans. L\'objectif principal est de sensibiliser 
                     le public à l\'importance de la préservation des océans en démontrant leurs similitudes 
                     avec nos propres systèmes biologiques.'
    ],
    'architecture' => [
        'title' => 'Architecture Technique',
        'technologies' => [
            'PHP pour le développement backend',
            'MySQL pour la base de données',
            'Tailwind CSS pour le styling moderne et responsive',
            'JavaScript pour les interactions dynamiques',
            'Lucide Icons pour les icônes vectorielles'
        ],
        'structure' => [
            'Organisation modulaire du code',
            'Séparation claire des responsabilités',
            'Gestion sécurisée des données',
            'Composants réutilisables',
            'Architecture MVC'
        ]
    ]
];
?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">
        Rapport du Projet: Corps Humain et Océan
    </h1>

    <!-- Introduction -->
    <section class="mb-12 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-700 mb-4">
            <?php echo $sections['introduction']['title']; ?>
        </h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            <?php echo $sections['introduction']['content']; ?>
        </p>
    </section>

    <!-- Architecture Technique -->
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-blue-700 mb-6">Architecture Technique</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i data-lucide="code" class="w-6 h-6 text-blue-600 mr-2"></i>
                    <h3 class="text-xl font-semibold">Technologies Utilisées</h3>
                </div>
                <ul class="space-y-2 text-gray-700">
                    <?php foreach ($sections['architecture']['technologies'] as $tech): ?>
                        <li>• <?php echo $tech; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i data-lucide="file-text" class="w-6 h-6 text-blue-600 mr-2"></i>
                    <h3 class="text-xl font-semibold">Structure du Projet</h3>
                </div>
                <ul class="space-y-2 text-gray-700">
                    <?php foreach ($sections['architecture']['structure'] as $item): ?>
                        <li>• <?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
</div>