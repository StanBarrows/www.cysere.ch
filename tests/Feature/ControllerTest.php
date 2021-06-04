<?php

use App\Models\Service;

test('test start.index page', function () {
    $service = Service::factory()->published()->create();
    $route = route('start.index');
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSeeText($service->title);
});

test('test service.show page', function () {
    $service = Service::factory()->published()->create();
    $route = route('services.show', $service);
    $response = $this->get($route);
    $response->assertOk();
    $response->assertSeeText($service->title);
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

test('test assessment.finish page', function () {
    $route = route('assessment.finish');
    $response = $this->get($route);
    $response->assertOk();
});

