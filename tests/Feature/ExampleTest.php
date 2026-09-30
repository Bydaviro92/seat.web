<?php

use Illuminate\Support\Facades\Vite;

test('the public pages return successful responses', function () {
    foreach (['/', '/modelos', '/contacto'] as $path) {
        $response = $this->get($path);

        $response->assertStatus(200);
    }
});

test('the model page displays the matching car images', function () {
    $response = $this->get('/modelos');

    foreach ([
        'resources/images/Leon XTR.jpg',
        'resources/images/Ibiza R.jpg',
        'resources/images/Arona GT.jpg',
    ] as $image) {
        $response->assertSee(Vite::asset($image), false);
    }
});
