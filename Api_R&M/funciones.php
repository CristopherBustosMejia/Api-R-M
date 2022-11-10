<?php
    function getEpisodes($page){
        $episodes = consultAPI("https://rickandmortyapi.com/api/episode/?page=".$page);
        foreach($episodes->results as $episode){
            echo"<li>
                    <a class='nav-link' href='infoEpisodio.php?num=".$episode->id."'>Capitulo ".$episode->id.": ".$episode->name."</a>
                </li><br>";
        }
    }
    function getCharacters($page){
        $characters = consultAPI("https://rickandmortyapi.com/api/character/?page=".$page);
        foreach($characters->results as $character){
            createCard($character->name,$character->image,$character->id);
        }
    }
    function consultAPI($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);
        curl_close($ch);
        return $json = json_decode($head);
    }
    function getCharacterByEpisode($episodeNum){
        return $episode = consultAPI("https://rickandmortyapi.com/api/episode/".$episodeNum);
    }
    function getCharacter(){

    }
    function createCard($name,$pic,$id){
        echo"<div class='col mb-5'>
        <div class='card mt-5 ' style='width: 18rem;'>
        <img src='".$pic."' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>".$name."</h5>
          <a href='infoPersonaje.php?id=".$id."' class='card-link'>Mas info...</a>
        </div>
      </div>
      </div>";
    }
    function randomCharacter($cardNum){
        for($i=0;$i<$cardNum;$i++){
            $random = rand(1,671);
            $character = consultAPI("https://rickandmortyapi.com/api/character/".$random);
            createCard($character->name,$character->image,$character->id);
        }
    }
    function createHeader(){
        echo"<body>
        <header>
        <nav class='navbar navbar-expand-lg bg-light'>
            <div class='container-fluid' style='background-color: greenyellow;'>
                <a class='navbar-brand' href='index.php'>Api R&M</a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
                    aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav'>
                        
                        <li class='nav-item'>
                            <a class='nav-link' href='capitulos.php'>Capitulos</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='personajes.php'>Personajes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>";
    }
    function createFooter(){
        echo"<footer>
        <div class='container-fluid' style='background-color: greenyellow;'>
            <div class='row justify-content-between'>
               <div class='col'>
                    <div class='row'>
                        <img src='Resources/Rick_and_Morty.png' style='width: 12rem; height: 4rem;'>
                    </div>
                    <div class='row'>
                        <p>
                            Creditos de la API: Axel Fuhrmann & Talita
                        </p>
                    </div>
               </div>
               <div class='col align-self-end'>
                    <p>
                        Creada por: Cristopher Bustos Mejia
                    </p>
               </div>
            </div>
        </div>
    </footer>";
    }
    function characterDetails($id){
        $character = consultAPI("https://rickandmortyapi.com/api/character/".$id);
        echo"<p class='fs-5'>".$character->name."</p>
        <img src='".$character->image."' alt=''>
        <p>Estado: ".$character->status."</p>
        <p>Especie: ".$character->species."</p>
        <p>Genero: ".$character->gender."</p>
        <p>Origen: ".$character->origin->name."</p>
        <p>Ubicacion: ".$character->location->name."</p>";
    }
?>