@extends(backpack_view('blank'))
    
@php
    $widgets['before_content'][] = [
        'type' => 'jumbotron',
        'heading' => 'Welcome back, Admin',
        'class' => 'mb-4 text-white',
        'style' => 'color: white !important'
    ];
    
    // Add a card to display the number of registered users
    $progressWidget = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-success mb-2 py-3',
        'value'       => \App\Models\User::count(),
        'wrapperClass' => 'row',
        'description' => 'Registered users.',
        'hint'        => '44 more until next milestone.',
        'tab'         => 'Stats',
        'progress'    => 12
    ];

    $widgets['before_content'][] = $progressWidget;

    // Add a card to display the total number of donations
    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-warning mb-2 py-3',
        'wrapperClass' => 'row',
        'value'       => \App\Models\Donation::count(),
        'description' => 'Number of donations',
        'hint'        => '43 more until next milestone.',
        'tab'         => 'Stats',
        'progress'    => 14
    ];

    // Add a card to display the total amount of donations
    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-danger mb-2 py-3',
        'value'       => 'RM' . number_format(\App\Models\Donation::sum('amount'), 2),
        'wrapperClass' => 'row',
        'description' => 'Number of donations',
        'hint'        => 'RM3500 more until next milestone.',
        'tab'         => 'Stats',
        'progress'    => 30
    ];
@endphp