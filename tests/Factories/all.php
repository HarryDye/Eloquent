<?php

$factory('App\User', [
  'name' => $faker->name,
  'email' => $faker->email,
  'password' => $faker->work
]);

$factory('App\Post', [
  'user_id' => 'factory:App\User',
  'title' => $faker->sentence,
  'body' => $faker->paragraph
]);
