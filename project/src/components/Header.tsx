import React from 'react';
import { Waves } from 'lucide-react';
import { Navbar } from './Navbar';

interface HeaderProps {
  onNavigate: (page: string) => void;
  currentPage: string;
}

export function Header({ onNavigate, currentPage }: HeaderProps) {
  return (
    <header>
      <Navbar onNavigate={onNavigate} currentPage={currentPage} />
      <div className="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-12">
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-center">
            <Waves className="w-10 h-10 mr-3" />
            <h1 className="text-4xl font-bold">Corps Humain et Océan</h1>
          </div>
          <p className="text-center mt-4 text-xl text-blue-100 max-w-2xl mx-auto">
            Découvrez les parallèles fascinants entre notre corps et les océans
          </p>
        </div>
      </div>
    </header>
  );
}