<?php
use Illuminate\Support\Facades\Schema;
Artisan::command('my-first-package:install', function () {
    if (!Schema::hasTable('sample_skeleton')) {
        Schema::create('sample_skeleton', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['ENABLED', 'DISABLED'])->default('ENABLED');
            $table->timestamps();
        });
    }
    Artisan::call('vendor:publish', [
        '--tag' => 'my-first-package',
        '--force' => true
    ]);

    $this->info('My First Package has been installed');
})->describe('Installs the required js files and table in DB');


