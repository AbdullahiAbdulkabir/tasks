<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Count;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Create;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Destroy;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Edit;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Show;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Options;
use LaravelEnso\Tasks\Http\Controllers\Tasks\ExportExcel;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Index;
use LaravelEnso\Tasks\Http\Controllers\Tasks\InitTable;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Store;
use LaravelEnso\Tasks\Http\Controllers\Tasks\TableData;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Update;
use LaravelEnso\Tasks\Http\Controllers\Tasks\Users;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/tasks')
    ->as('tasks.')
    ->group(function () {
        require __DIR__ . '/app/comments.php';
        require __DIR__ . '/app/tasks.php';
        require __DIR__ . '/app/checklistItems.php';
    });
