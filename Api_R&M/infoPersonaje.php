<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
    require("funciones.php");
    createHeader();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="container-fluid justify-content-center">
                <?php
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        characterDetails($id);
                    }
                ?>
            </div>
        </div>
        <div class="col-4">
            <?php
                randomCharacter(3);
            ?>
        </div>
    </div>
</div>
<?php
    createFooter();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>