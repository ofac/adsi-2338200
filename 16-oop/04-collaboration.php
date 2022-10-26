<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaboration</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t 
           from-indigo-900 
           to-indigo-500 
             min-h-screen">
    
    <main class="m-10 
                 mx-auto
                 max-w-lg 
                 p-5 
                 border-2 
               border-indigo-400 
               bg-white/5 
                 rounded">
        <h1 class="m-5 
                   text-center 
                   text-3xl 
                 text-white 
                   text-opacity-50 
                   font-medium">
            <a href="index.php" class="float-left
                                       transition
                                     hover:text-white
                                       hover:-translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            Collaboration
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php

            class Evolve {
                public function evolvePokemon($origin, $evolution) {
                  echo '<ul class="p-2 mb-4 rounded ring-1 ring-white/20">';
                  echo '<li><b>Origin:</b> '.$origin.' ➡️ <b>Evolution:</b> '.$evolution.'</li>';
                  echo '</ul>';
                }
            } 
            
            class Pokemon {
              private $origin;
              private $evolution;
              private $collaboration;

              public function __construct($origin, $evolution) {
                $this->origin    = $origin;
                $this->evolution = $evolution;
                // Collaboration
                $this->collaboration = new Evolve;
              }

              public function nextLevel() {
                  $this->collaboration->evolvePokemon($this->origin, $this->evolution);
              }
            }

            $pk1 = new Pokemon('Pichu', 'Pikachu');
            $pk1->nextLevel();
            $pk2 = new Pokemon('Pikachu', 'Raichu');
            $pk2->nextLevel();
            // - - -
            $pk3 = new Pokemon('Squirtle', 'Wartortle');
            $pk3->nextLevel();
            $pk4 = new Pokemon('Wartortle', 'Blastoise');
            $pk4->nextLevel();
            // - - -
            $pk5 = new Pokemon('Bulbasaur', 'Ivysaur');
            $pk5->nextLevel();
            $pk6 = new Pokemon('Ivysaur', 'Venusaur');
            $pk6->nextLevel();
            
            ?>
        </section>
    </main>
    
</body>
</html>