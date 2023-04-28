<?php

use Illuminate\Support\Facades\Route;
use Flyzard\Maileditor\Http\Controllers\MaileditorController;

Route::get('maileditor', [MaileditorController::class, 'index']);
