<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Prgayman\Fcm\Models\FcmToken;

class CreateFcmTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcm_tokens', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("token");
            $table->enum("platform", [
                FcmToken::PLATFORM_ANDROID,
                FcmToken::PLATFORM_IOS,
                FcmToken::PLATFORM_WEB
            ])->nullable();
            $table->string("model_type")->nullable();
            $table->unsignedBigInteger("model_id")->nullable();
            $table->string("locale")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fcm_tokens');
    }
}
