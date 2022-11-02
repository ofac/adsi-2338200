<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Spaces</title>
    <script src="../public/js/tailwind-3.2.1.js"></script>
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
            <a href="../index.php" class="float-left
                                       transition
                                     hover:text-white
                                       hover:-translate-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            Name Spaces
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
			
			<ul class="p-2 flex flex-col gap-4">
				<?php 
					
					include 'electric/Pokemon.php';
					include 'fire/Pokemon.php';
					include 'water/Pokemon.php';

					use \electric\Pokemon as Pke;
					use \fire\Pokemon as Pkf;
					use \water\Pokemon as Pkw;

					$pk = new Pke('Pikachu', 'Yellow');
					echo $pk->getInfoPokemon();

					$pk = new Pkf('Charmander', 'Orange');
					echo $pk->getInfoPokemon();

					$pk = new Pkw('Squirtle', 'Aqua');
					echo $pk->getInfoPokemon();

				?>
			</ul>
            
        </section>
    </main>
    
</body>
</html>
