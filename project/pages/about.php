<?php
$teamMembers = [
    [
        'title' => 'Experts Passionnés',
        'description' => 'Une équipe multidisciplinaire de biologistes marins et d\'éducateurs.',
        'icon' => 'users'
    ],
    [
        'title' => 'Engagement',
        'description' => 'Dévoués à la protection des océans et à l\'éducation environnementale.',
        'icon' => 'heart'
    ]
];

$objectives = [
    [
        'title' => 'Éducation',
        'description' => 'Sensibiliser le public aux liens entre santé humaine et océanique'
    ],
    [
        'title' => 'Innovation',
        'description' => 'Développer des outils pédagogiques interactifs et engageants'
    ],
    [
        'title' => 'Action',
        'description' => 'Encourager des actions concrètes pour la protection des océans'
    ]
];
?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">À Propos de Notre Mission</h1>
    
    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-blue-700">Notre Vision</h2>
            <p class="text-gray-700 leading-relaxed">
                Notre projet vise à sensibiliser le public aux liens profonds qui existent entre le corps humain
                et les océans. En comprenant ces parallèles, nous pouvons mieux apprécier l'importance de
                préserver nos océans pour la santé de notre planète.
            </p>
            
            <div class="flex items-start space-x-4">
                <i data-lucide="globe" class="w-6 h-6 text-blue-600 mt-1"></i>
                <div>
                    <h3 class="font-semibold text-gray-900">Impact Global</h3>
                    <p class="text-gray-600">
                        Nos actions locales ont des répercussions globales sur la santé des océans.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-blue-50 p-8 rounded-lg">
            <h2 class="text-2xl font-semibold text-blue-700 mb-6">Notre Équipe</h2>
            <div class="space-y-4">
                <?php foreach ($teamMembers as $member): ?>
                    <div class="flex items-center space-x-4">
                        <i data-lucide="<?php echo $member['icon']; ?>" class="w-6 h-6 text-blue-600"></i>
                        <div>
                            <h3 class="font-semibold"><?php echo htmlspecialchars($member['title']); ?></h3>
                            <p class="text-gray-600"><?php echo htmlspecialchars($member['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-700 mb-6">Nos Objectifs</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($objectives as $objective): ?>
                <div class="p-4 border border-blue-100 rounded-lg">
                    <h3 class="font-semibold text-blue-600 mb-2">
                        <?php echo htmlspecialchars($objective['title']); ?>
                    </h3>
                    <p class="text-gray-600">
                        <?php echo htmlspecialchars($objective['description']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>