import React from 'react';
import { motion } from 'framer-motion';
import { Heart, Lungs, Droplets, Brain, Shield, Thermometer } from 'lucide-react';

const systems = [
  {
    id: 'circulatory',
    title: 'Système Circulatoire',
    icon: <Heart className="w-8 h-8" />,
    humanTitle: 'Le Cœur Humain',
    humanDescription: 'Le cœur pompe le sang à travers le corps via un réseau complexe de vaisseaux sanguins, transportant l\'oxygène et les nutriments essentiels.',
    oceanTitle: 'La Circulation Océanique',
    oceanDescription: 'Les courants océaniques, comme le Gulf Stream, distribuent la chaleur et les nutriments à travers les océans du monde, régulant le climat global.',
    imageUrl: 'https://images.unsplash.com/photo-1589825743636-e3c2f7f12ed5?auto=format&fit=crop&q=80',
    details: [
      'Transport des nutriments',
      'Régulation de la température',
      'Distribution de l\'oxygène',
      'Élimination des déchets'
    ]
  },
  {
    id: 'respiratory',
    title: 'Système Respiratoire',
    icon: <Lungs className="w-8 h-8" />,
    humanTitle: 'Les Poumons',
    humanDescription: 'Les poumons permettent l\'échange d\'oxygène et de dioxyde de carbone avec l\'environnement à travers la respiration.',
    oceanTitle: 'Les "Poumons" de l\'Océan',
    oceanDescription: 'Le phytoplancton et les algues marines produisent plus de 50% de l\'oxygène de la Terre à travers la photosynthèse.',
    imageUrl: 'https://images.unsplash.com/photo-1580894894513-541e068a3e2b?auto=format&fit=crop&q=80',
    details: [
      'Production d\'oxygène',
      'Absorption du CO2',
      'Échanges gazeux',
      'Purification de l\'air/eau'
    ]
  },
  {
    id: 'filtration',
    title: 'Système de Filtration',
    icon: <Droplets className="w-8 h-8" />,
    humanTitle: 'Les Reins',
    humanDescription: 'Les reins filtrent le sang, éliminant les déchets et maintenant l\'équilibre des fluides dans le corps.',
    oceanTitle: 'Écosystèmes Filtrants',
    oceanDescription: 'Les mangroves, les herbiers marins et les récifs coralliens agissent comme des filtres naturels, purifiant l\'eau de l\'océan.',
    imageUrl: 'https://images.unsplash.com/photo-1621451537084-482c73073a0f?auto=format&fit=crop&q=80',
    details: [
      'Filtration des toxines',
      'Maintien de l\'équilibre',
      'Purification naturelle',
      'Protection de l\'écosystème'
    ]
  },
  {
    id: 'nervous',
    title: 'Système Nerveux',
    icon: <Brain className="w-8 h-8" />,
    humanTitle: 'Le Cerveau',
    humanDescription: 'Le système nerveux coordonne les fonctions du corps et répond aux changements environnementaux.',
    oceanTitle: 'Réseaux Océaniques',
    oceanDescription: 'Les courants et les gradients chimiques créent des "réseaux de communication" complexes entre les écosystèmes marins.',
    imageUrl: 'https://images.unsplash.com/photo-1581093458791-9d42cc030549?auto=format&fit=crop&q=80',
    details: [
      'Communication complexe',
      'Adaptation aux changements',
      'Coordination des systèmes',
      'Réponse aux stimuli'
    ]
  },
  {
    id: 'immune',
    title: 'Système Immunitaire',
    icon: <Shield className="w-8 h-8" />,
    humanTitle: 'Défenses Immunitaires',
    humanDescription: 'Le système immunitaire protège le corps contre les maladies et les infections.',
    oceanTitle: 'Défenses Océaniques',
    oceanDescription: 'Les récifs coralliens et la biodiversité marine créent des barrières naturelles protégeant les écosystèmes.',
    imageUrl: 'https://images.unsplash.com/photo-1546026423-cc4642628d2b?auto=format&fit=crop&q=80',
    details: [
      'Protection naturelle',
      'Réponse aux menaces',
      'Maintien de l\'équilibre',
      'Résilience écologique'
    ]
  },
  {
    id: 'regulation',
    title: 'Régulation Thermique',
    icon: <Thermometer className="w-8 h-8" />,
    humanTitle: 'Thermorégulation',
    humanDescription: 'Le corps maintient une température constante à travers divers mécanismes de régulation.',
    oceanTitle: 'Régulation Climatique',
    oceanDescription: 'Les océans régulent la température globale de la Terre en absorbant et redistribuant la chaleur.',
    imageUrl: 'https://images.unsplash.com/photo-1527100673774-cce25eafaf7f?auto=format&fit=crop&q=80',
    details: [
      'Équilibre thermique',
      'Distribution de la chaleur',
      'Adaptation climatique',
      'Stabilité environnementale'
    ]
  }
];

export function Systems() {
  const [selectedSystem, setSelectedSystem] = React.useState(systems[0]);

  return (
    <div className="container mx-auto px-4 py-12">
      <h1 className="text-4xl font-bold text-blue-800 mb-8 text-center">
        Parallèles Corps Humain - Océan
      </h1>

      {/* Navigation des systèmes */}
      <div className="flex flex-wrap justify-center gap-4 mb-12">
        {systems.map((system) => (
          <motion.button
            key={system.id}
            whileHover={{ scale: 1.05 }}
            whileTap={{ scale: 0.95 }}
            onClick={() => setSelectedSystem(system)}
            className={`flex items-center px-4 py-2 rounded-full ${
              selectedSystem.id === system.id
                ? 'bg-blue-600 text-white'
                : 'bg-blue-100 text-blue-600 hover:bg-blue-200'
            }`}
          >
            {system.icon}
            <span className="ml-2">{system.title}</span>
          </motion.button>
        ))}
      </div>

      {/* Détails du système sélectionné */}
      <motion.div
        key={selectedSystem.id}
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.5 }}
        className="grid md:grid-cols-2 gap-8"
      >
        {/* Image */}
        <div className="relative h-[400px] rounded-lg overflow-hidden">
          <img
            src={selectedSystem.imageUrl}
            alt={selectedSystem.title}
            className="w-full h-full object-cover"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent" />
          <h2 className="absolute bottom-4 left-4 text-2xl font-bold text-white">
            {selectedSystem.title}
          </h2>
        </div>

        {/* Comparaison */}
        <div className="space-y-8">
          <div className="bg-white p-6 rounded-lg shadow-lg">
            <h3 className="text-xl font-semibold text-blue-800 mb-4">
              {selectedSystem.humanTitle}
            </h3>
            <p className="text-gray-700 mb-4">{selectedSystem.humanDescription}</p>
            <h3 className="text-xl font-semibold text-blue-800 mb-4">
              {selectedSystem.oceanTitle}
            </h3>
            <p className="text-gray-700">{selectedSystem.oceanDescription}</p>
          </div>

          <div className="bg-blue-50 p-6 rounded-lg">
            <h3 className="text-xl font-semibold text-blue-800 mb-4">
              Points Communs
            </h3>
            <ul className="grid grid-cols-2 gap-4">
              {selectedSystem.details.map((detail, index) => (
                <motion.li
                  key={index}
                  initial={{ opacity: 0, x: -20 }}
                  animate={{ opacity: 1, x: 0 }}
                  transition={{ delay: index * 0.1 }}
                  className="flex items-center text-gray-700"
                >
                  <div className="w-2 h-2 bg-blue-500 rounded-full mr-2" />
                  {detail}
                </motion.li>
              ))}
            </ul>
          </div>
        </div>
      </motion.div>
    </div>
  );
}