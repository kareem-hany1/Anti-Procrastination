<?php

it('returns a successful response', function () {
    $response = $this->get('/tasks');

    $response->assertStatus(302);
});
