<?php

use Illuminate\Support\Facades\Auth;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('user connexion', function () {
   $user = \App\Models\User::factory()->create([
       'email' => 'test@gmail.com',
       'password' => bcrypt('password'),
   ]);

   $response = $this->post('/login',
       [
           'email' => 'test@gmail.com',
           'password' => 'password',
       ]
   );

   $response->assertRedirect('/tasks');

   expect(Auth::check())->toBeTrue();
   expect(Auth::user())->is($user)->toBeTrue();


});
