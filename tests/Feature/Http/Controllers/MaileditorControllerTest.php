<?php

it('can access the maileditor page', function () {
    $this->get('/maileditor')->assertOk();
})->group('maileditor');
