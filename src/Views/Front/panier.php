<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Panier</title>
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
                    <a href="/login"
                        class="hidden sm:inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition-colors shadow-sm">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Votre Panier</h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Cart Items -->
            <div class="flex-1 bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <ul class="divide-y divide-gray-100">
                    <!-- Item 1 -->
                    <li class="p-6 flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-24 h-24 bg-gray-100 rounded-lg flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca4?auto=format&fit=crop&q=80&w=200"
                                alt="MacBook" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 text-center sm:text-left">
                            <h3 class="text-lg font-bold text-gray-900"><a href="/product"
                                    class="hover:text-indigo-600">MacBook Pro M2</a></h3>
                            <p class="text-sm text-gray-500">Gris Sidéral, 256 Go</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button class="px-3 py-1 text-gray-500 hover:bg-gray-100">-</button>
                                <span class="px-3 py-1 text-gray-900 font-medium">1</span>
                                <button class="px-3 py-1 text-gray-500 hover:bg-gray-100">+</button>
                            </div>
                            <div class="text-lg font-bold text-gray-900 w-24 text-right">1 299 €</div>
                            <button class="text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </li>

                    <!-- Item 2 -->
                    <li class="p-6 flex flex-col sm:flex-row items-center gap-6">
                        <div class="w-24 h-24 bg-gray-100 rounded-lg flex-shrink-0 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?auto=format&fit=crop&q=80&w=200"
                                alt="Watch" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 text-center sm:text-left">
                            <h3 class="text-lg font-bold text-gray-900"><a href="/product"
                                    class="hover:text-indigo-600">Apple Watch Series 8</a></h3>
                            <p class="text-sm text-gray-500">Alu, Bracelet Sport</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button class="px-3 py-1 text-gray-500 hover:bg-gray-100">-</button>
                                <span class="px-3 py-1 text-gray-900 font-medium">1</span>
                                <button class="px-3 py-1 text-gray-500 hover:bg-gray-100">+</button>
                            </div>
                            <div class="text-lg font-bold text-gray-900 w-24 text-right">399 €</div>
                            <button class="text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </li>
                </ul>
                <div class="p-6 bg-gray-50 border-t border-gray-100">
                    <a href="/index" class="flex items-center text-indigo-600 font-medium hover:text-indigo-700">
                        <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Continuer mes achats
                    </a>
                </div>
            </div>

            <!-- Summary -->
            <div class="w-full lg:w-96">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 sticky top-24">
                    <h2 class="text-lg font-bold text-gray-900 mb-6">Résumé de la commande</h2>
                    <div class="space-y-4 text-sm text-gray-600">
                        <div class="flex justify-between">
                            <span>Sous-total</span>
                            <span class="font-medium text-gray-900">1 698 €</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Livraison</span>
                            <span class="font-medium text-green-600">Gratuite</span>
                        </div>
                        <div class="flex justify-between">
                            <span>TVA (20%)</span>
                            <span class="font-medium text-gray-900">339,60 €</span>
                        </div>
                        <div class="border-t border-gray-100 pt-4 flex justify-between items-center text-base">
                            <span class="font-bold text-gray-900">Total</span>
                            <span class="font-bold text-2xl text-indigo-600">1 698 €</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-bold hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-100 transition-all shadow-lg shadow-indigo-200">
                        Passer la commande
                    </button>
                    <div class="mt-4 flex gap-2 justify-center">
                        <div class="h-8 w-12 bg-gray-200 rounded"></div> <!-- Visa placeholder -->
                        <div class="h-8 w-12 bg-gray-200 rounded"></div> <!-- MC placeholder -->
                        <div class="h-8 w-12 bg-gray-200 rounded"></div> <!-- PayPal placeholder -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>