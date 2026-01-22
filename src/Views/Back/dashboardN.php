<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0 hidden lg:flex flex-col">
            <div class="h-16 flex items-center justify-center border-b border-gray-800">
                <span class="text-xl font-bold tracking-wider uppercase">TechAdmin</span>
            </div>

            <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
                <a href="/dashboard" class="flex items-center px-4 py-2 bg-gray-800 text-white rounded-md group">
                    <svg class="mr-3 h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    Dashboard
                </a>
                <a href="/products"
                    class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                    <svg class="mr-3 h-5 w-5 group-hover:text-indigo-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    Produits
                </a>
                <a href="/categories"
                    class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                    <svg class="mr-3 h-5 w-5 group-hover:text-indigo-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    Catégories
                </a>
                <a href="/commandes"
                    class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                    <svg class="mr-3 h-5 w-5 group-hover:text-indigo-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Commandes
                </a>
                <a href="/users"
                    class="flex items-center px-4 py-2 text-gray-400 hover:bg-gray-800 hover:text-white rounded-md transition-colors group">
                    <svg class="mr-3 h-5 w-5 group-hover:text-indigo-400 transition-colors" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Utilisateurs
                </a>
            </nav>

            <div class="p-4 border-t border-gray-800">
                <a href="/index"
                    class="flex items-center px-4 py-2 text-sm text-gray-400 hover:text-white transition-colors">
                    <svg class="mr-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Déconnexion
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6">
                <button class="lg:hidden text-gray-500 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                <div class="flex items-center gap-4">
                    <button class="p-2 text-gray-400 hover:text-gray-600 relative">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                    <div
                        class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                        A
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 truncate">Ventes Totales</p>
                                <p class="text-2xl font-bold text-gray-900">24 500 €</p>
                            </div>
                            <div class="p-3 bg-indigo-50 rounded-full">
                                <svg class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-500 text-sm font-semibold">↑ 12%</span>
                            <span class="text-gray-400 text-sm">vs mois dernier</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 truncate">Commandes</p>
                                <p class="text-2xl font-bold text-gray-900">45</p>
                            </div>
                            <div class="p-3 bg-green-50 rounded-full">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-green-500 text-sm font-semibold">↑ 5%</span>
                            <span class="text-gray-400 text-sm">vs mois dernier</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 truncate">Clients</p>
                                <p class="text-2xl font-bold text-gray-900">1,250</p>
                            </div>
                            <div class="p-3 bg-yellow-50 rounded-full">
                                <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-red-500 text-sm font-semibold">↓ 1%</span>
                            <span class="text-gray-400 text-sm">vs mois dernier</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 truncate">Produits (Faible Stock)</p>
                                <p class="text-2xl font-bold text-gray-900">3</p>
                            </div>
                            <div class="p-3 bg-red-50 rounded-full">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="text-gray-400 text-sm">Attention requise</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 mb-8">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-900">Commandes Récentes</h3>
                        <a href="commandes" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Tout
                            voir</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Client</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Montant</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Statut</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#839201</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jean Dupont</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20 Jan 2026</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1 299 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Livrée</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">#839202</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Marie Martin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">19 Jan 2026</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45 €</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En
                                            cours</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>

</html>