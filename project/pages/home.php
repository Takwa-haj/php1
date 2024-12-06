<?php
require_once 'data/systems.php';
require_once 'data/podcasts.php';
require_once 'data/modelPoints.php';
?>

<div class="bg-gray-50">
    <main class="container mx-auto px-4 py-8">
        <!-- Interactive Model Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-blue-800 mb-6">Modèle Interactif</h2>
            <div class="relative w-full h-[600px] bg-gray-100 rounded-lg overflow-hidden">
                <img
                    src="https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&fit=crop&q=80"
                    alt="Modèle interactif"
                    class="w-full h-full object-cover"
                />
                
                <?php foreach ($modelPoints as $point): ?>
                    <button
                        class="absolute w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition-colors transform hover:scale-110"
                        style="left: <?php echo $point['x']; ?>%; top: <?php echo $point['y']; ?>%"
                        onclick="showPointDetails('<?php echo $point['id']; ?>')"
                    >
                        <i data-lucide="info" class="w-4 h-4"></i>
                    </button>
                <?php endforeach; ?>

                <div id="pointDetails" class="hidden absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                    <h3 id="pointTitle" class="font-bold text-lg mb-2"></h3>
                    <p id="pointDescription" class="text-gray-700"></p>
                    <button onclick="hidePointDetails()" class="mt-2 text-blue-600 hover:text-blue-800">
                        Fermer
                    </button>
                </div>
            </div>
        </section>

        <!-- Systems Grid -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-blue-800 mb-6">Systèmes Parallèles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($systems as $system): ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative h-48">
                            <img
                                src="<?php echo htmlspecialchars($system['imageUrl']); ?>"
                                alt="<?php echo htmlspecialchars($system['title']); ?>"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3"><?php echo htmlspecialchars($system['title']); ?></h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-semibold text-blue-600">Système Humain</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($system['humanSystem']); ?></p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-600">Système Océanique</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($system['oceanSystem']); ?></p>
                                </div>
                                
                                <button
                                    onclick="toggleSystemDetails('<?php echo $system['id']; ?>')"
                                    class="flex items-center text-blue-500 hover:text-blue-700"
                                    data-system="<?php echo $system['id']; ?>"
                                >
                                    <i data-lucide="chevron-down" class="w-4 h-4 mr-1"></i>
                                    <span>En savoir plus</span>
                                </button>

                                <div id="details-<?php echo $system['id']; ?>" class="hidden space-y-4">
                                    <div>
                                        <h4 class="font-semibold text-green-600">Bénéfices</h4>
                                        <p class="text-gray-600"><?php echo htmlspecialchars($system['benefits']); ?></p>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-red-600">Conséquences</h4>
                                        <p class="text-gray-600"><?php echo htmlspecialchars($system['consequences']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Podcast Section -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-blue-800 mb-6">Podcasts Éducatifs</h2>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-blue-800">Nos Podcasts</h2>
                <div class="space-y-4">
                    <?php foreach ($podcastEpisodes as $episode): ?>
                        <div class="border-b border-gray-200 pb-4 last:border-b-0">
                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-lg"><?php echo htmlspecialchars($episode['title']); ?></h3>
                                    <p class="text-gray-600 text-sm"><?php echo htmlspecialchars($episode['description']); ?></p>
                                    <span class="text-gray-500 text-xs"><?php echo htmlspecialchars($episode['duration']); ?></span>
                                </div>
                                <button
                                    onclick="togglePodcast('<?php echo $episode['id']; ?>')"
                                    class="ml-4 p-2 rounded-full bg-blue-100 hover:bg-blue-200 transition-colors"
                                >
                                    <i data-lucide="play" class="w-6 h-6 text-blue-600"></i>
                                </button>
                            </div>
                            <div id="podcast-<?php echo $episode['id']; ?>" class="hidden mt-4">
                                <audio
                                    src="<?php echo htmlspecialchars($episode['audioUrl']); ?>"
                                    controls
                                    class="w-full"
                                ></audio>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
function showPointDetails(pointId) {
    const point = <?php echo json_encode($modelPoints); ?>.find(p => p.id === pointId);
    if (point) {
        document.getElementById('pointTitle').textContent = point.title;
        document.getElementById('pointDescription').textContent = point.description;
        document.getElementById('pointDetails').classList.remove('hidden');
    }
}

function hidePointDetails() {
    document.getElementById('pointDetails').classList.add('hidden');
}

function toggleSystemDetails(systemId) {
    const detailsElement = document.getElementById(`details-${systemId}`);
    const button = document.querySelector(`button[data-system="${systemId}"]`);
    const icon = button.querySelector('i');
    
    if (detailsElement.classList.contains('hidden')) {
        detailsElement.classList.remove('hidden');
        icon.setAttribute('data-lucide', 'chevron-up');
        button.querySelector('span').textContent = 'Voir moins';
    } else {
        detailsElement.classList.add('hidden');
        icon.setAttribute('data-lucide', 'chevron-down');
        button.querySelector('span').textContent = 'En savoir plus';
    }
    lucide.createIcons();
}

function togglePodcast(episodeId) {
    const audioContainer = document.getElementById(`podcast-${episodeId}`);
    const allAudioContainers = document.querySelectorAll('[id^="podcast-"]');
    
    allAudioContainers.forEach(container => {
        if (container.id !== `podcast-${episodeId}`) {
            container.classList.add('hidden');
            container.querySelector('audio')?.pause();
        }
    });
    
    audioContainer.classList.toggle('hidden');
}
</script>