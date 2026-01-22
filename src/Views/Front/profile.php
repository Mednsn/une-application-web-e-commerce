<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Mon Compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/index" class="flex-shrink-0 flex items-center gap-2">
                        <svg class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="font-bold text-xl text-gray-900">TechStore</span>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="/pnaier" class="p-2 text-gray-600 hover:text-indigo-600 transition-colors relative">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    <div class="flex items-center gap-2">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=indigo&color=fff"
                            class="h-8 w-8 rounded-full">
                        <span class="hidden md:block font-medium text-gray-700">John Doe</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar Navigation -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                <nav class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 space-y-1">
                    <a href="#" class="flex items-center px-4 py-2 bg-indigo-50 text-indigo-700 rounded-md font-medium">
                        <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Mes commandes
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md transition-colors">
                        <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Informations personnelles
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-md transition-colors">
                        <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Sécurité
                    </a>
                    <a href="/index"
                        class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50 rounded-md transition-colors mt-4">
                        <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Déconnexion
                    </a>
                </nav>
            </aside>

            <!-- Main Content: Orders History (US-11) -->
            <main class="flex-1">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-900">Historique des commandes</h2>
                    </div>

                    <div class="divide-y divide-gray-100">

                        <!-- Order 1 -->
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <p class="text-sm text-gray-500">Commande passée le</p>
                                    <p class="font-bold text-gray-900">20 Janvier 2026</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-500">Total</p>
                                    <p class="font-bold text-gray-900">1 299 €</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">N° de commande</p>
                                    <p class="font-bold text-gray-900">CMD-839201</p>
                                </div>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold uppercase tracking-wide">Livrée</span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 rounded-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca4?auto=format&fit=crop&q=80&w=100"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900">MacBook Pro M2</h4>
                                    <p class="text-gray-500 text-sm">Quantité: 1</p>
                                </div>
                                <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Voir la
                                    facture</a>
                            </div>
                        </div>

                        <!-- Order 2 -->
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <p class="text-sm text-gray-500">Commande passée le</p>
                                    <p class="font-bold text-gray-900">15 Décembre 2025</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-500">Total</p>
                                    <p class="font-bold text-gray-900">299 €</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">N° de commande</p>
                                    <p class="font-bold text-gray-900">CMD-773210</p>
                                </div>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold uppercase tracking-wide">Expédiée</span>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-gray-100 rounded-md overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=100"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900">Sony WH-1000XM5</h4>
                                    <p class="text-gray-500 text-sm">Quantité: 1</p>
                                </div>
                                <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm">Suivre le
                                    colis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>