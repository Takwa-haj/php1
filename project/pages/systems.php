<?php
require_once 'data/systems.php';

$systemIcons = [
    'circulatory' => 'heart',
    'respiratory' => 'wind',
    'filtration' => 'droplets',
    'nervous' => 'brain',
    'immune' => 'shield',
    'regulation' => 'thermometer'
];

$systems = [
    [
        'id' => 'circulatory',
        'title' => 'Système Circulatoire',
        'humanTitle' => 'Le Cœur Humain',
        'humanDescription' => 'Le cœur pompe le sang à travers le corps via un réseau complexe de vaisseaux sanguins, transportant l\'oxygène et les nutriments essentiels.',
        'oceanTitle' => 'La Circulation Océanique',
        'oceanDescription' => 'Les courants océaniques, comme le Gulf Stream, distribuent la chaleur et les nutriments à travers les océans du monde, régulant le climat global.',
        'imageUrl' => 'https://images.unsplash.com/photo-1589825743636-e3c2f7f12ed5?auto=format&fit=crop&q=80',
        'details' => [
            'Transport des nutriments',
            'Régulation de la température',
            'Distribution de l\'oxygène',
            'Élimination des déchets'
        ]
    ],
    [
        'id' => 'respiratory',
        'title' => 'Système Respiratoire',
        'humanTitle' => 'Les Poumons',
        'humanDescription' => 'Les poumons permettent l\'échange d\'oxygène et de dioxyde de carbone avec l\'environnement à travers la respiration.',
        'oceanTitle' => 'Les "Poumons" de l\'Océan',
        'oceanDescription' => 'Le phytoplancton et les algues marines produisent plus de 50% de l\'oxygène de la Terre à travers la photosynthèse.',
        'imageUrl' => 'https://images.unsplash.com/photo-1580894894513-541e068a3e2b?auto=format&fit=crop&q=80',
        'details' => [
            'Production d\'oxygène',
            'Absorption du CO2',
            'Échanges gazeux',
            'Purification de l\'air/eau'
        ]
    ]
];
?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-800 mb-8 text-center">
        Parallèles Corps Humain - Océan
    </h1>

    <!-- Navigation des systèmes -->
    <div class="flex flex-wrap justify-center gap-4 mb-12">
        <?php foreach ($systems as $system): ?>
            <button
                onclick="selectSystem('<?php echo $system['id']; ?>')"
                class="flex items-center px-4 py-2 rounded-full transition-all duration-200 system-button"
                data-system="<?php echo $system['id']; ?>"
            >
                <i data-lucide="<?php echo $systemIcons[$system['id']]; ?>" class="w-8 h-8"></i>
                <span class="ml-2"><?php echo $system['title']; ?></span>
            </button>
        <?php endforeach; ?>
    </div>

    <!-- Détails des systèmes -->
    <?php foreach ($systems as $system): ?>
        <div class="system-details grid md:grid-cols-2 gap-8 hidden" data-system="<?php echo $system['id']; ?>">
            <!-- Image -->
            <div class="relative h-[400px] rounded-lg overflow-hidden">
                <img
                    src="<?php echo $system['imageUrl']; ?>"
                    alt="<?php echo $system['title']; ?>"
                    class="w-full h-full object-cover"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <h2 class="absolute bottom-4 left-4 text-2xl font-bold text-white">
                    <?php echo $system['title']; ?>
                </h2>
            </div>

            <!-- Comparaison -->
            <div class="space-y-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">
                        <?php echo $system['humanTitle']; ?>
                    </h3>
                    <p class="text-gray-700 mb-4"><?php echo $system['humanDescription']; ?></p>
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">
                        <?php echo $system['oceanTitle']; ?>
                    </h3>
                    <p class="text-gray-700"><?php echo $system['oceanDescription']; ?></p>
                </div>

                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4">Points Communs</h3>
                    <ul class="grid grid-cols-2 gap-4">
                        <?php foreach ($system['details'] as $detail): ?>
                            <li class="flex items-center text-gray-700">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                <?php echo $detail; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
function selectSystem(systemId) {
    // Hide all system details
    document.querySelectorAll('.system-details').forEach(el => {
        el.classList.add('hidden');
    });
    
    // Remove active class from all buttons
    document.querySelectorAll('.system-button').forEach(el => {
        el.classList.remove('bg-blue-600', 'text-white');
        el.classList.add('bg-blue-100', 'text-blue-600');
    });
    
    // Show selected system details
    const selectedDetails = document.querySelector(`.system-details[data-system="${systemId}"]`);
    if (selectedDetails) {
        selectedDetails.classList.remove('hidden');
    }
    
    // Highlight selected button
    const selectedButton = document.querySelector(`.system-button[data-system="${systemId}"]`);
    if (selectedButton) {
        selectedButton.classList.remove('bg-blue-100', 'text-blue-600');
        selectedButton.classList.add('bg-blue-600', 'text-white');
    }
}

// Select first system by default
window.addEventListener('load', () => {
    selectSystem('<?php echo $systems[0]['id']; ?>');
});
</script>