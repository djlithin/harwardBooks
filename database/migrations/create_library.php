<?php

/**
 * @Author: predator
 * @Date:   2022-03-11 18:42:03
 * @Last Modified by:   predator
 * @Last Modified time: 2022-03-11 18:43:05
 */
public function up()
{
    Schema::create('library', function (Blueprint $table) {
        $table->id();
        $table->string('created');
        $table->string('modified');
        $table->string('baseUrl');
        $table->string('collectionUrn');
        $table->timestamps();
    });
}