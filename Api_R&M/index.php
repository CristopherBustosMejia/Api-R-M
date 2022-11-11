<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
<?php 
    require("funciones.php");
    createHeader();
?>
<div class="container-fluid row">
    <div class="container col">
        <div class="row">
            <p class="fs-3">
                Hola, soy Cristopher Bustos Mejia, estudiante de Ingenieria en Software de la Universidad Politecnica de Tecamac.
            </p>
            <p>
                Este proyecto fue realizado para la materia de Programacion Web, en el cual se utilizo la API de Rick and Morty.
                <br>
                Estos son los personajes del episodio 1 de la temporada 1:
            </p>
        </div>
        <div class="row">
            <?php
                $episode = getCharacterByEpisode(1);
                foreach($episode->characters as $link){
                    $character = consultAPI($link);
                    createCard($character->name,$character->image,$character->id);
                }
            ?>
        </div>
    </div>
    <div class="container col-auto bg-dark">
        <p class="fs-3 text-center">Leer mas:</p>
        <?php
            randomCharacter(3);
        ?>
    </div>
</div>
<?php
    createFooter();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>