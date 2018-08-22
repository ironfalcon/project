<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->increments('id');
            //Текст о компании
            $table->text('AboutCompany')->nullable();
            //Текст о продукции
            $table->text('AboutProduction')->nullable();
            //Адрес
            $table->text('MainAdress')->nullable();
            //Эл почта
            $table->text('Email')->nullable();
            //Основной номер телефона
            $table->text('MainPhone')->nullable();
            //Остальные номера
            $table->text('SecondPhone')->nullable();
            $table->text('PhoneThree')->nullable();
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
        Schema::dropIfExists('main_pages');
    }
}
