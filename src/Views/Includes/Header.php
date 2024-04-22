<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon we sign </title>
</head>

<body>
    <div class="flex flex-col h-lvh">
        <div class="flex w-full h-12 bg-gray-200 p-3 justify-between font-semibold">

            <p class="uppercase">simplon</p>
            <?php
            if (!empty($_SESSION)) {
                echo "<p class='capitalize'>deconnexion</p>";
            } else {
                echo "<p class='capitalize'>connexion</p>";
            }

            ?>

        </div>