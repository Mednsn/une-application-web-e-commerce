<?php

return [
    '/'                => ['homeController'     ,            'index'],
    '/home'            => ['HomeController'     ,            'index'],
    '/dashboard'       => ['DashboardController',            'index'],
    '/login'           => ['AuthController'     ,            'login'],
    '/signeUp'         => ['AuthController'     ,          'signeUp'],
    '/createAccounte'  => ['AuthController'     ,           'create'],
    '/inscrire'        => ['AuthController'     ,         'inscrire'],
    '/modifierAccounte'=> ['AuthController'     , 'modifierAccounte'],
    '/deleteAccounte'  => ['AuthController'     ,   'deleteAccounte'],
    '/destroy'         => ['AuthController'     ,          'destroy']
];
