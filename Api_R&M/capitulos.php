<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
    require("funciones.php");
    createHeader();
    if(isset($_GET["counter"])){
        $counter = $_GET["counter"] += 1;
    }else{
        $counter = $_GET["conuter"] = 1;
    }
?>
<div class="container" >
    <div class="row">
            <ul>
                <?php
                getEpisodes($counter);
                ?>
            </ul>
    </div>
    <div class="row justify-content-center" >
        <?php
            if($counter > 1){
                $back = $counter-2;
                echo"<form class='col-auto' action='capitulos.php' method='get'>
                        <input type='submit' name='counter' value='$back'>
                </form>";
            }
            if($counter < 3){
                echo"<form class='col-auto' action='capitulos.php' method='get'>
                    <input type='submit' name='counter' value='$counter'>
                </form>";
            }
        ?>
    </div>
</div>
<?php
    createFooter();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
