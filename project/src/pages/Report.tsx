import React from 'react';
import { FileText, Code, Users, Target, CheckCircle, AlertTriangle } from 'lucide-react';

export function Report() {
  return (
    <div className="container mx-auto px-4 py-12">
      <h1 className="text-4xl font-bold text-blue-800 mb-8 text-center">
        Rapport du Projet: Corps Humain et Océan
      </h1>

      {/* Introduction */}
      <section className="mb-12 bg-white p-8 rounded-lg shadow-lg">
        <h2 className="text-2xl font-semibold text-blue-700 mb-4">Introduction</h2>
        <p className="text-gray-700 leading-relaxed mb-4">
          Ce projet vise à créer une plateforme éducative interactive établissant des parallèles 
          fascinants entre le corps humain et les océans. L'objectif principal est de sensibiliser 
          le public à l'importance de la préservation des océans en démontrant leurs similitudes 
          avec nos propres systèmes biologiques.
        </p>
      </section>

      {/* Architecture Technique */}
      <section className="mb-12">
        <h2 className="text-2xl font-semibold text-blue-700 mb-6">Architecture Technique</h2>
        <div className="grid md:grid-cols-2 gap-6">
          <div className="bg-white p-6 rounded-lg shadow-lg">
            <div className="flex items-center mb-4">
              <Code className="w-6 h-6 text-blue-600 mr-2" />
              <h3 className="text-xl font-semibold">Technologies Utilisées</h3>
            </div>
            <ul className="space-y-2 text-gray-700">
              <li>• React avec TypeScript pour le développement frontend</li>
              <li>• Tailwind CSS pour le styling moderne et responsive</li>
              <li>• Framer Motion pour les animations fluides</li>
              <li>• Lucide React pour les icônes vectorielles</li>
              <li>• Vite comme outil de build performant</li>
            </ul>
          </div>

          <div className="bg-white p-6 rounded-lg shadow-lg">
            <div className="flex items-center mb-4">
              <FileText className="w-6 h-6 text-blue-600 mr-2" />
              <h3 className="text-xl font-semibold">Structure du Projet</h3>
            </div>
            <ul className="space-y-2 text-gray-700">
              <li>• Organisation modulaire des composants</li>
              <li>• Séparation claire des responsabilités</li>
              <li>• Gestion centralisée des états</li>
              <li>• Composants réutilisables</li>
              <li>• Données structurées et typées</li>
            </ul>
          </div>
        </div>
      </section>

      {/* Fonctionnalités */}
      <section className="mb-12">
        <h2 className="text-2xl font-semibold text-blue-700 mb-6">Fonctionnalités Principales</h2>
        <div className="grid md:grid-cols-3 gap-6">
          <div className="bg-white p-6 rounded-lg shadow-lg">
            <div className="flex items-center mb-4">
              <Target className="w-6 h-6 text-blue-600 mr-2" />
              <h3 className="text-lg font-semibold">Systèmes Interactifs</h3>
            </div>
            <ul className="space-y-2 text-gray-700">
              <li>• Comparaisons visuelles</li>
              <li>• Navigation intuitive</li>
              <li>• Animations réactives</li>
              <li>• Contenu détaillé</li>
            </ul>
          </div>

          <div className="bg-white p-6 rounded-lg shadow-lg">
            <div className="flex items-center mb-4">
              <Users className="w-6 h-6 text-blue-600 mr-2" />
              <h3 className="text-lg font-semibold">Expérience Utilisateur</h3>
            </div>
            <ul className="space-y-2 text-gray-700">
              <li>• Interface responsive</li>
              <li>• Navigation fluide</li>
              <li>• Design moderne</li>
              <li>• Accessibilité optimisée</li>
            </ul>
          </div>

          <div className="bg-white p-6 rounded-lg shadow-lg">
            <div className="flex items-center mb-4">
              <FileText className="w-6 h-6 text-blue-600 mr-2" />
              <h3 className="text-lg font-semibold">Contenu Éducatif</h3>
            </div>
            <ul className="space-y-2 text-gray-700">
              <li>• Podcasts intégrés</li>
              <li>• Descriptions détaillées</li>
              <li>• Illustrations pertinentes</li>
              <li>• Mises à jour régulières</li>
            </ul>
          </div>
        </div>
      </section>

      {/* Points Forts et Axes d'Amélioration */}
      <section className="grid md:grid-cols-2 gap-6">
        <div className="bg-white p-6 rounded-lg shadow-lg">
          <div className="flex items-center mb-4">
            <CheckCircle className="w-6 h-6 text-green-600 mr-2" />
            <h3 className="text-xl font-semibold text-green-700">Points Forts</h3>
          </div>
          <ul className="space-y-2 text-gray-700">
            <li>• Interface utilisateur intuitive et moderne</li>
            <li>• Contenu éducatif riche et bien structuré</li>
            <li>• Performance et temps de chargement optimisés</li>
            <li>• Design responsive adapté à tous les écrans</li>
            <li>• Architecture modulaire facilitant les évolutions</li>
          </ul>
        </div>

        <div className="bg-white p-6 rounded-lg shadow-lg">
          <div className="flex items-center mb-4">
            <AlertTriangle className="w-6 h-6 text-orange-600 mr-2" />
            <h3 className="text-xl font-semibold text-orange-700">Axes d'Amélioration</h3>
          </div>
          <ul className="space-y-2 text-gray-700">
            <li>• Ajout de plus de contenus multimédias</li>
            <li>• Implémentation de fonctionnalités interactives avancées</li>
            <li>• Intégration de quiz et exercices pratiques</li>
            <li>• Développement d'une version multilingue</li>
            <li>• Optimisation pour les connexions lentes</li>
          </ul>
        </div>
      </section>
    </div>
  );
}