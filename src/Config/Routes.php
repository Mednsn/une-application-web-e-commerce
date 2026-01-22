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
    '/signeUp'         => ['AuthController'            ,          'signeUp'],
    '/createAccounte'  => ['AuthController'            ,           'create'],
    '/inscrire'        => ['AuthController'            ,         'inscrire'],
    '/modifierAccounte'=> ['AuthController'            , 'modifierAccounte'],
    '/deleteAccounte'  => ['AuthController'            ,   'deleteAccounte'],
    '/destroy'         => ['AuthController'            ,          'destroy']
];
