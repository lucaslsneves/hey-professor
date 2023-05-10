<?php

use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseCount, assertDatabaseHas, post};

it('should be able to create a new question bigger than 255 characters', function () {
    $user = User::factory()->create();
    actingAs($user);

    $response = post(route('question.store'), [
        'question' => str_repeat('a', 256) . '?',
    ]);

    $response->assertRedirect(route('dashboard'));
    assertDatabaseCount('questions', 1);
    assertDatabaseHas('questions', [
        'question' => str_repeat('a', 256) . '?',
    ]);
});

it('should check if the question ends with mark ?', function () {

})->todo();

it('should have at least 10 characters', function () {

})->todo();
