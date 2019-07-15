<?php

$app->group('/dashboard', function () use ($app, $container) {

    // Dashboard Home
    $app->map(['GET', 'POST'], '', 'Admin:dashboard')
        ->setName('dashboard');
    // Contact Requests
    $app->map(['GET'], '/contact', 'Admin:contact')
        ->setName('admin-contact');
    // Contact Requests
    $app->map(['GET'], '/contact/datatables', 'Admin:contactDatatables')
        ->setName('admin-contact-datatables');
})
->add(new Dappur\Middleware\Auth($container))
->add(new Dappur\Middleware\Admin($container))
->add($container->get('csrf'))
->add(new Dappur\Middleware\TwoFactorAuth($container))
->add(new Dappur\Middleware\RouteName($container));
