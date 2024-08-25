<?php

it('returns a successful response', function () {
    $response = $this->get('/podcasts');

    $response->assertStatus(200);
});
