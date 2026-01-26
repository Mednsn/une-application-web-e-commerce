<?php

return [
    '/'                => ['FrontSwitchController'     ,            'index'],
    '/home'            => ['FrontSwitchController'     ,            'index'],
    '/panier'          => ['FrontSwitchController'     ,           'panier'],
    '/product'         => ['FrontSwitchController'     ,          'product'],
    '/profile'         => ['FrontSwitchController'     ,          'profile'],

    '/dashboard'       => ['BackSwitchController'      ,            'index'],
    '/commandes'       => ['BackSwitchController'      ,        'commandes'],
    '/products'        => ['BackSwitchController'      ,         'products'],
    '/users'           => ['BackSwitchController'      ,            'index'],

    '/login'           => ['AuthController'            ,            'login'],
    '/logout'          => ['AuthController'            ,          'destroy'],
    '/signeUp'         => ['AuthController'            ,          'signeUp'],
    '/createAccounte'  => ['AuthController'            ,           'create'],
    '/inscrire'        => ['AuthController'            ,       'connecxion'],
    '/modifierAccounte'=> ['DashboardController'            , 'updateRoleUser'],
    '/deleteAccounte'  => ['DashboardController'            ,   'deleteUser'],

    '/addToPanier'     => ['ProductController'         ,      'addToPanier'],
    '/deleteInPanier'  => ['ProductController'         ,   'deleteInPanier'],
    '/processPanier'   => ['ProductController'         ,    'proccesPanier'],

    '/createCommande'  => ['CommandController'         ,           'create']

];
