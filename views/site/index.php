<?php

/** @var yii\web\View $this */

$this->title = 'Strzałkowski Patryk - Zarządzanie Książkami';
?>
<div class="site-index" style="background: linear-gradient(to right, #74ebd5, #acb6e5); min-height: 100vh; padding-top: 100px;">

    <div class="text-center text-white mb-5">
        <h1 class="display-3 fw-bold">Witaj w aplikacji do zarządzania książkami!</h1>

        <p class="lead mt-4 mb-4">Prosta i wygodna aplikacja w Yii2 do tworzenia, edycji i przeglądania książek w lokalnej bazie danych.</p>

        <p><a class="btn btn-lg btn-light shadow" href="<?= \yii\helpers\Url::to(['/book/index']) ?>">📚 Przejdź do listy książek</a></p>
    </div>

    <div class="container bg-white rounded shadow p-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="text-primary">O aplikacji</h2>
                <p>Projekt został wykonany w ramach nauki frameworka Yii2. Pozwala na pełne zarządzanie bazą książek poprzez intuicyjny panel administracyjny. Umożliwia dodawanie nowych pozycji, edytowanie istniejących oraz usuwanie niepotrzebnych wpisów.</p>
            </div>
            <div class="col-lg-6 mb-4">
                <h2 class="text-primary">Technologie</h2>
                <p>Aplikacja oparta jest na architekturze MVC (Model-View-Controller) z wykorzystaniem PHP (Yii2), bazy danych MySQL oraz Bootstrap 5 do stylizacji. Kod został częściowo wygenerowany przy pomocy narzędzia Gii.</p>
            </div>
        </div>
    </div>

</div>
