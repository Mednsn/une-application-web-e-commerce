<?php

return [
    '/'                => ['FrentSwitchController'     ,            'index'],
    '/home'            => ['FrentSwitchController'     ,            'index'],
    '/panier'          => ['FrentSwitchController'     ,           'panier'],
    '/product'         => ['FrentSwitchController'     ,          'product'],
    '/profile'         => ['FrentSwitchController'     ,          'profile'],

    '/dashboard'       => ['BackSwitchController'      ,            'index'],
    '/commandes'       => ['BackSwitchController'      ,        'commandes'],
    '/products'        => ['BackSwitchController'      ,         'products'],
    '/users'           => ['BackSwitchController'      ,            'users'],

    '/login'           => ['AuthController'            ,            'login'],
    '/logout'          => ['AuthController'            ,          'destroy'],
    '/signeUp'         => ['AuthController'            ,          'signeUp'],
    '/createAccounte'  => ['AuthController'            ,           'create'],
    '/inscrire'        => ['AuthController'            ,       'connecxion'],
    '/modifierAccounte'=> ['AuthController'            , 'modifierAccounte'],
    '/deleteAccounte'  => ['AuthController'            ,   'deleteAccounte'],

    '/addToPanier'     => ['ProductController'         ,      'addToPanier'],
    '/deleteInPanier'  => ['ProductController'         ,   'deleteInPanier'],
    '/passerCommande'  => ['CommandController'         ,   'passerCommande']
];
