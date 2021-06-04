<?php

use App\Models\Service;

test('test start.index page', function () {
    $route = route('start.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('test service.show page', function () {

    $service = \App\Models\Service::factory()->published()->create();

    $route = route('services.show', $service);
    $response = $this->get($route);
    $response->assertOk();
});

test('test checklist.index page', function () {
    $route = route('checklist.index');
    $response = $this->get($route);
    $response->assertOk();
});

test('test team.index page', function () {
    $route = route('team.index');
    $response = $this->get($route);
    $response->assertOk();
});
