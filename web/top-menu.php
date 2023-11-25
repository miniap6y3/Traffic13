<?php

$menu = [
    "main" => "Главная",
    "services" => "Услуги",
    "projects" => "Кейсы",
    "about" => "О нас",
    "faq" => "FAQ",
    "news" => "Дайджест",
    "#" => "Контакты",
    "partners" => "Партнерам",
];

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php foreach($menu as $href => $title) {
                    echo "<li class='nav-item'><a class='nav-link' href='$href'>$title</a>
                    </li>";
                } ?>
            </ul>
            <a class="navbar-brand" href="#"><img src="img/button_menu.svg" alt="="></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
