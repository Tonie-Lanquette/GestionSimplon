<?php
include __DIR__ . '/Includes/Header.php';

?>





<div class=" flex h-lvh justify-center items-center">

    <div class="flex flex-col justify-center w-full mx-5 h-1/2 px-14 bg-gray-200 justify-evenly sm:min-w-96 sm:w-1/4">
        <h1 class="capitalize font-semibold text-4xl text-center">bienvenue</h1>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Email *</label>

            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full bg-white border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400  placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6 indent-3 emailInput">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900 uppercase text-black text-s font-semibold">Mot de passe *</label>

            <input id="password" name="password" type="password" autocomplete="password" required class="block w-full bg-white border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6 indent-3 passwordInput">
        </div>

        <div id="error" class="flex h-10 bg-red-200 border-2 border-red-400 rounded-md justify-center items-center text-red-700 hidden"></div>
        <button onclick="loginAccount()" class="self-center w-1/2 justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 uppercase text-white text-s font-semibold">Connexion</button>



    </div>



    <?php

    include __DIR__ . '/Includes/Footer.php';
    ?>