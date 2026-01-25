<?php

use App\Controllers\ProductController;


if (isset($_SESSION['email'])) {
    $k = 1;
} else {
    $k = 0;
}

$productController = new ProductController();
$produits = $productController->selectAllProducts();
// var_dump($produits);exit;
?>


<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore - Le Futur à Portée de Main</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .display-font {
            font-family: 'Outfit', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hero-pattern {
            background-color: #ffffff;
            background-image: radial-gradient(#6366f1 0.5px, transparent 0.5px), radial-gradient(#6366f1 0.5px, #ffffff 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.1;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5', // Indigo 600
                        secondary: '#7C3AED', // Violet 600
                    },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05)',
                        'glow': '0 0 15px rgba(79, 70, 229, 0.3)',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-800 antialiased selection:bg-indigo-100 selection:text-indigo-700">

    <!-- Navbar -->
    <nav class="glass sticky top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/index" class="flex-shrink-0 flex items-center gap-2 group">
                        <div
                            class="bg-gradient-to-tr from-indigo-600 to-purple-600 p-2 rounded-lg text-white transform group-hover:rotate-3 transition-transform duration-300">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span
                            class="font-bold text-2xl tracking-tight text-gray-900 group-hover:text-indigo-600 transition-colors">TechStore</span>
                    </a>
                </div>

                <!-- Search -->
                <div class="flex-1 flex items-center justify-center px-8 hidden md:flex">
                    <div class="w-full max-w-lg relative group">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full opacity-30 group-hover:opacity-100 transition duration-500 blur">
                        </div>
                        <div class="relative flex items-center">
                            <input type="text"
                                class="w-full pl-5 pr-12 py-3 rounded-full bg-white border-0 text-sm ring-1 ring-gray-200 focus:ring-2 focus:ring-indigo-500 transition-all shadow-sm"
                                placeholder="Rechercher le produit de vos rêves...">
                            <button
                                class="absolute right-2 p-2 bg-indigo-50 rounded-full text-indigo-600 hover:bg-indigo-600 hover:text-white transition-all duration-300">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Icons -->
                <div class="flex items-center gap-5">
                    <a href="/panier"
                        class="relative p-2 text-gray-500 hover:text-indigo-600 transition-colors group">
                        <svg class="h-6 w-6 transform group-hover:scale-110 transition-transform duration-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span
                            class="absolute top-0 right-0 h-5 w-5 flex items-center justify-center text-xs font-bold text-white bg-gradient-to-r from-red-500 to-pink-500 rounded-full border-2 border-white transform translate-x-1/4 -translate-y-1/4 shadow-sm">2</span>
                    </a>
                    <?php if ($k != 1): ?>
                        <a href="/login"
                            class="sm:inline-flex items-center gap-2 px-5 py-2.5 border border-transparent text-sm font-semibold rounded-full text-white bg-gray-900 hover:bg-indigo-600 hover:shadow-glow transition-all duration-300">
                            <span>Connexion</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    <?php else: ?>
                        <a href="/logout"
                            class="sm:inline-flex items-center gap-2 px-5 py-2.5 border border-transparent text-sm font-semibold rounded-full text-white bg-gray-900 hover:bg-indigo-600 hover:shadow-glow transition-all duration-300">
                            <span>deconnecter</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-white mb-12">
        <div class="absolute inset-0 hero-pattern"></div>
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-indigo-50 rounded-full blur-3xl opacity-50 mix-blend-multiply filter animate-blob">
        </div>
        <div
            class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[600px] h-[600px] bg-purple-50 rounded-full blur-3xl opacity-50 mix-blend-multiply filter animate-blob animation-delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative pt-16 pb-24 lg:pt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-6 text-center lg:text-left">
                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full border border-indigo-100 bg-indigo-50 text-indigo-700 text-sm font-medium mb-6">
                        <span class="flex h-2 w-2 relative mr-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                        </span>
                        Nouveautés 2026 Disponibles
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight text-gray-900 mb-6 leading-tight">
                        La technologie <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">réinventée.</span>
                    </h1>
                    <p class="mt-4 text-xl text-gray-500 mb-10 max-w-2xl mx-auto lg:mx-0">
                        Découvrez une sélection exclusive des dernières innovations. Du son immersif à la puissance de
                        calcul ultime.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#catalogue"
                            class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            Explorer le catalogue
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-4 border border-gray-200 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-300 transition-all duration-300">
                            Voir les promos
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block lg:col-span-6 lg:mt-0 relative">
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500 ring-1 ring-gray-900/5">
                        <img src="https://images.unsplash.com/photo-1611186871348-648470d230f2?auto=format&fit=crop&q=80&w=1000"
                            alt="Hero Device" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <p class="font-bold text-lg">MacBook Air M3</p>
                            <p class="text-sm opacity-90">Design ultra-fin, puissance décuplée.</p>
                        </div>
                    </div>
                    <!-- Floating Card -->
                    <div class="absolute -bottom-10 -left-10 bg-white p-4 rounded-xl shadow-xl animate-bounce"
                        style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 p-2 rounded-full">
                                <svg class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">En stock</p>
                                <p class="text-xs text-gray-500">Livraison 24h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visual Categories -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-2">
            <span class="w-1.5 h-8 bg-indigo-600 rounded-full"></span>
            Catégories Populaires
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <!-- Category Item -->
            <a href="#"
                class="group flex flex-col items-center gap-4 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div
                    class="w-16 h-16 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    💻
                </div>
                <span class="font-medium text-gray-700 group-hover:text-indigo-600">Ordinateurs</span>
            </a>
            <a href="#"
                class="group flex flex-col items-center gap-4 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div
                    class="w-16 h-16 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300">
                    📱
                </div>
                <span class="font-medium text-gray-700 group-hover:text-indigo-600">Smartphones</span>
            </a>
            <a href="#"
                class="group flex flex-col items-center gap-4 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div
                    class="w-16 h-16 rounded-full bg-pink-50 text-pink-600 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-pink-600 group-hover:text-white transition-all duration-300">
                    🎧
                </div>
                <span class="font-medium text-gray-700 group-hover:text-indigo-600">Audio</span>
            </a>
            <a href="#"
                class="group flex flex-col items-center gap-4 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div
                    class="w-16 h-16 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-orange-600 group-hover:text-white transition-all duration-300">
                    ⌚
                </div>
                <span class="font-medium text-gray-700 group-hover:text-indigo-600">Montres</span>
            </a>
            <a href="#"
                class="group flex flex-col items-center gap-4 p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:border-indigo-100 transition-all duration-300 md:col-span-4 lg:col-span-1">
                <div
                    class="w-16 h-16 rounded-full bg-gray-50 text-gray-600 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-gray-800 group-hover:text-white transition-all duration-300">
                    🎮
                </div>
                <span class="font-medium text-gray-700 group-hover:text-indigo-600">Gaming</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div id="catalogue" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar (Refined) -->
            <aside class="w-full lg:w-72 flex-shrink-0">
                <div class="bg-white p-6 rounded-2xl shadow-soft border border-gray-100 sticky top-28">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-gray-900">Filtres</h3>
                        <button class="text-xs text-indigo-600 hover:underline">Réinitialiser</button>
                    </div>

                    <!-- Categories -->
                    <div class="mb-8">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3 uppercase tracking-wider">Rayons</h4>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center group cursor-pointer">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <span
                                        class="ml-3 text-gray-600 group-hover:text-indigo-600 transition-colors">Ordinateurs</span>
                                    <span class="ml-auto text-xs text-gray-400">45</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center group cursor-pointer">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <span
                                        class="ml-3 text-gray-600 group-hover:text-indigo-600 transition-colors">Smartphones</span>
                                    <span class="ml-auto text-xs text-gray-400">32</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center group cursor-pointer">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-3 text-gray-600 group-hover:text-indigo-600 transition-colors">Audio
                                        & Son</span>
                                    <span class="ml-auto text-xs text-gray-400">18</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Price Slider (Visual) -->
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900 mb-3 uppercase tracking-wider">Prix</h4>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="relative flex-1">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">€</span>
                                <input type="number" placeholder="Min"
                                    class="w-full pl-8 pr-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                            </div>
                            <span class="text-gray-400">-</span>
                            <div class="relative flex-1">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">€</span>
                                <input type="number" placeholder="Max"
                                    class="w-full pl-8 pr-3 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                            </div>
                        </div>
                        <button
                            class="w-full bg-gray-900 text-white py-2.5 rounded-lg text-sm font-medium hover:bg-indigo-600 hover:shadow-lg transition-all duration-300">
                            Appliquer les filtres
                        </button>
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <main class="flex-1">
                <div class="flex flex-col sm:flex-row items-center justify-between mb-8 gap-4">
                    <h2 class="text-2xl font-bold text-gray-900">Tous les produits</h2>
                    <div class="flex items-center gap-3">
                        <span class="text-sm text-gray-500">Trier par:</span>
                        <select
                            class="border-gray-300 bg-white text-gray-900 font-medium py-2 pl-4 pr-10 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 shadow-sm cursor-pointer">
                            <option>Recommandés</option>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                            <option>Nouveautés</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Premium Product Card 1 -->
                    <?php if ($produits):
                        foreach ($produits as $produit): ?>
                            <div
                                class="group bg-white rounded-2xl p-3 shadow-soft hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-transparent hover:border-indigo-50">
                                <div class="relative h-64 bg-gray-100 rounded-xl overflow-hidden mb-4">
                                    <img src="./assets/images/<?php echo $produit->getImage() ?>"
                                        alt="Laptop"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">

                                    <!-- Badges -->
                                    <div class="absolute top-3 left-3 flex gap-2">
                                        <span
                                            class="bg-indigo-600 text-white text-[10px] font-bold px-2 py-1 rounded-md uppercase tracking-wide">Nouveau</span>
                                    </div>

                                    <!-- Quick Actions Overlay -->
                                    <div
                                        class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 flex justify-center gap-3 bg-gradient-to-t from-black/50 to-transparent">
                                        <a href="/panier"
                                            class="bg-white text-gray-900 p-2.5 rounded-full hover:bg-indigo-600 hover:text-white shadow-lg transition-colors"
                                            title="Ajouter au panier">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                        </a>
                                        <button
                                            class="bg-white text-gray-900 p-2.5 rounded-full hover:bg-red-500 hover:text-white shadow-lg transition-colors"
                                            title="Favoris">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="px-2 pb-2">
                                    <h3 class="text-lg font-bold text-gray-900 mb-1 leading-tight"><a href="/product"
                                            class="hover:text-indigo-600 transition-colors"><?php echo $produit->getName() ?></a></h3>

                                    <div class="flex items-center gap-1 mb-3">
                                        <div class="flex text-yellow-400 text-sm">★★★★</div>
                                    </div>

                                    <div class="flex items-center justify-between mt-4">
                                        <div>
                                            <span class="block text-2xl font-bold text-gray-900"><?php echo $produit->getPrice() ?> €</span>
                                            <?php if ($produit->getStock() == 0): ?>
                                                <span class="text-xs text-red-600 font-medium"><?php echo $produit->getStatus() ?></span>
                                            <?php else: ?>
                                                <span class="text-xs text-green-600 font-medium"><?php echo $produit->getStatus() ?></span>

                                            <?php endif; ?>
                                        </div>
                                        <form action="/product" method="POST">
                                            <input type="hidden" name="product_id" value="<?php echo $produit->getId() ?>">
                                            <input type="hidden" name="product_id" value="<?php echo $produit->getId() ?>">
                                            <button type="submit"
                                            class="px-4 py-2 bg-gray-100 text-gray-900 text-sm font-semibold rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">

                                            Voir
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach;
                    endif; ?>
                    <!-- Premium Product Card 2 -->

                    <!-- Pagination (Modern) -->
                    <div class="mt-16 flex justify-center">
                        <nav class="flex items-center gap-2 p-2 bg-white rounded-full shadow-sm border border-gray-100">
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-transparent hover:bg-gray-50 text-gray-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-indigo-600 text-white font-bold shadow-lg shadow-indigo-200">1</a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-transparent hover:bg-gray-50 text-gray-600 font-medium transition-colors">2</a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-transparent hover:bg-gray-50 text-gray-600 font-medium transition-colors">3</a>
                            <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-transparent hover:bg-gray-50 text-gray-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </nav>
                    </div>
            </main>
        </div>
    </div>

    <!-- Footer (Dark & Clean) -->
    <footer class="bg-gray-900 text-gray-300 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="bg-gradient-to-tr from-indigo-600 to-purple-600 p-1.5 rounded-lg text-white">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span class="font-bold text-xl text-white tracking-tight">TechStore</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Redéfinissez votre expérience technologique. <br>
                        Qualité premium, garantie étendue et support expert.
                    </p>
                    <div class="flex gap-4 pt-2">
                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-800 hover:bg-indigo-600 hover:text-white transition-all text-gray-400">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-800 hover:bg-indigo-600 hover:text-white transition-all text-gray-400">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-800 hover:bg-indigo-600 hover:text-white transition-all text-gray-400">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Liens rapides</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Accueil</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Nouveautés</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Promotions</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Support</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Retours</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Livraison</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">CGV</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-sm text-gray-400 mb-4">Recevez nos meilleures offres en avant-première.</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Votre email"
                            class="w-full bg-gray-800 border-none text-white px-4 py-2.5 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500">
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">→</button>
                    </div>
                </div>
            </div>
            <div
                class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4">
                <p>&copy; 2026 TechStore. Conception Premium.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition-colors">Confidentialité</a>
                    <a href="#" class="hover:text-white transition-colors">Mentions légales</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>