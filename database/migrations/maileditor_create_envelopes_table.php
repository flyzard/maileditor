<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('maileditor_envelopes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('identifier')->unique()->nullable();
            $table->string('subject');
            $table->json('from')->default(new Expression('(JSON_ARRAY())'));
            $table->json('to')->default(new Expression('(JSON_ARRAY())'));
            $table->json('cc')->default(new Expression('(JSON_ARRAY())'));
            $table->json('bcc')->default(new Expression('(JSON_ARRAY())'));
            $table->json('reply_to')->default(new Expression('(JSON_ARRAY())'));
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mail_templates');
    }
};
