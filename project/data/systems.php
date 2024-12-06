<?php
$systems = [
    [
        'id' => 1,
        'title' => 'Circulation',
        'humanSystem' => 'Le système circulatoire transporte l\'oxygène et les nutriments à travers le corps via le sang.',
        'oceanSystem' => 'Les courants océaniques distribuent la chaleur, l\'oxygène et les nutriments à travers les océans.',
        'consequences' => 'Un mauvais flux sanguin peut causer des problèmes de santé, tout comme la perturbation des courants océaniques affecte la vie marine.',
        'benefits' => 'Une bonne circulation assure la santé des organes, comme les courants océaniques maintiennent l\'équilibre des écosystèmes marins.',
        'imageUrl' => 'https://images.unsplash.com/photo-1589825743636-e3c2f7f12ed5?auto=format&fit=crop&q=80'
    ],
    // ... Add other systems here
];

function getSystems() {
    global $systems;
    return $systems;
}
?>