<?php
if ($_SESSION[$user->getUserRole() = "1"]) {
    echo '<div class="flex border-b mt-5">
    <div id="dashboardAccueil" onclick=" dashboardAccueil()" class="-mb-px mr-1 ml-5">
        <button class="bg-white mx-2 p-2 inline-block border-l border-t border-r">Accueil</buttonp>
    </div>
    <div id="dashboardPromotions" onclick="dashboardPromotions()" class="mr-1 ">
        <button class=" bg-white mx-2 p-2 inline-block ">Promotions</button>
    </div>
</div>'
;
} elseif ($_SESSION[$user->getUserRole() = "2"]) {
    echo '<div class="flex border-b">
    <div class="-mb-px mr-1 ml-5">
        <p class="bg-white mx-2 p-2 inline-block border-l border-t border-r">Accueil</p>
    </div>
</div>';
}
