<?php

use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Illuminate\Support\Facades\Route;

Route::get('maileditor', [MaileditorController::class, 'index']);
