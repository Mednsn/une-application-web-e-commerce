<?php



// var_dump(count($users));
// var_dump($articles);exit;


?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard – MVC App</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen relative bg-gray-100">

  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Dashboard Background" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  <!-- Main Layout -->
  <div class="relative z-10 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900/80 text-white flex flex-col backdrop-blur-lg">
      <div class="p-6 text-2xl font-extrabold">Admin Panel</div>
      <nav class="flex-1 px-4 space-y-2">
        <a href="#" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Dashboard</a>
        <a href="#users" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Users</a>
        <a href="#" class="block px-4 py-3 rounded-lg hover:bg-black/40 transition">Settings</a>
      </nav>
      <div class="p-4">
        <a href="/destroy" class="block text-center bg-red-500 hover:bg-red-600 py-2 rounded-lg transition">Logout</a>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">

      <!-- Header -->
      <header class="flex justify-between items-center mb-10">
        <h1 class="text-3xl font-bold text-white">Dashboard</h1>
        <div class="flex items-center gap-4">
          <span class="text-gray-200">Admin</span>
          <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center font-bold">A</div>
        </div>
      </header>

      <!-- Stats Cards -->
      <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
        <div class="bg-black/40 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
          <h3 class="text-gray-200">Users</h3>
          <p class="text-4xl font-bold text-indigo-400"><?php echo count($users); ?></p>
        </div>
        <div class="bg-black/40 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
          <h3 class="text-gray-200">Articles</h3>
          <p class="text-4xl font-bold text-purple-400"></p>
        </div>
        <div class="bg-black/40 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
          <h3 class="text-gray-200">Admins</h3>
          <p class="text-4xl font-bold text-green-400">3</p>
        </div>
        <div class="bg-black/40 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
          <h3 class="text-gray-200">Status</h3>
          <p class="text-xl font-semibold text-green-400">Online</p>
        </div>
      </section>

      <!-- Users Table -->
      <section id="users" class="bg-black/40 rounded-2xl shadow p-6 backdrop-blur-md mb-10">
        <h2 class="text-xl font-bold text-gray-200 mb-4">Derniers utilisateurs</h2>
        <table class="w-full text-left text-gray-100">
          <thead>
            <tr class="border-b border-gray-400">
              <th class="py-2">Nom</th>
              <th>Email</th>
              <th>Rôle</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($users):
              foreach ($users as $user): ?>
                <tr class="border-b border-gray-400 hover:bg-black/10 transition">
                  <td class="py-2"><?php echo $user->name ?></td>
                  <td><?php echo $user->email ?></td>
                  <td><span class="text-indigo-400 font-semibold"><?php echo $user->role ?></span></td>
                  <td class="flex justify-center">

                    <form action="/modifierAccounte" method="post">
                      <input type="hidden" name="modified_email" value="<?php echo $user->email; ?>">
                      <button type="submit" class=" rounded-xl py-1 px-3 text-bold"><i class="fa fa-pencil" style="font-size:24px;color:green"></i></button>
                    </form>
                    <form action="/deleteAccounte" method="post">
                      <input type="hidden" name="supprimer_id" value="<?php echo $user->id; ?>">
                      <button type="submit" class="  rounded-xl py-1 px-3 text-bold"><i class="fa fa-trash" style="font-size:24px;color:red"></i></button>
                    </form>
                  </td>
                </tr>
            <?php endforeach;
            endif; ?>

          </tbody>
        </table>
      </section>

      <!-- Articles Table -->
     

    </main>
  </div>

</body>

</html>