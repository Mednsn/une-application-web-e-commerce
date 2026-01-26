<?php

use App\Controllers\CommandController;

$user_controller = new CommandController();

$commandes = $user_controller->selectCommandWithUser();
// var_dump($commandes->date_creation);exit;

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore Admin - Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900/80 text-white flex flex-col backdrop-blur-lg">
            <div class="p-6 text-2xl font-extrabold">Admin Panel</div>
            <nav class="flex-1 px-4 space-y-2">
                <a href="/users" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Dashboard</a>
                <a href="/users" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Users</a>
                <a href="/products" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Category et des Produits</a>
                <a href="/commandes" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Commandes</a>
            </nav>
            <div class="p-4">
                <a href="/logout" class="block text-center bg-red-500 hover:bg-red-600 py-2 rounded-lg transition">Logout</a>
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
                <h2 class="text-xl font-semibold text-gray-800">Gestion des Commandes</h2>
                <div class="flex items-center gap-4">
                    <div
                        class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                        A</div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">

                <div class="flex justify-between items-center mb-6">
                    <div class="flex gap-4">
                        <input type="text" placeholder="Rechercher (ID, Client)..."
                            class="pl-4 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <select
                            class="border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>Tous les statuts</option>
                            <option>En cours</option>
                            <option>Expédiée</option>
                            <option>Livrée</option>
                            <option>Annulée</option>
                        </select>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID Commande</th>
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
                                <th
                                    class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php if ($commandes):
                                foreach ($commandes as $commande): ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-indigo-600">#83920-<?php echo $commande->id; ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $commande->name; ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $commande->date_creation; ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $commande->total_price; ?> €</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Livrée</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Détails</a>
                                        </td>
                                    </tr>
                                    
                            <?php endforeach;  endif; ?>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>
</body>

</html>