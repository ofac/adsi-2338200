<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Abstract</title>
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
            Method Abstract
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php 
					abstract class VideoGame {
						protected $name;
						protected $platform;
						protected $year;

						public function __construct($nm, $pt, $yr) {
							$this->name     = $nm;
							$this->platform = $pt;
							$this->year     = $yr;
						}

						public abstract function getInfoVideoGame();
					}

					class Zelda extends VideoGame {
						public function getInfoVideoGame() {
							return $this->name." | ".$this->platform." | ".$this->year;
						}
					}

					$vg1 = new Zelda('Zelda Ocarine of Time', 'Nintendo 64', 1998);
					echo "<li class='p-2 ring-1 ring-white/50 rounded list-none mb-2'>".$vg1->getInfoVideoGame()."</li>";

					$vg2 = new Zelda('Zelda Majora Mask', 'Nintendo 64', 2000);
					echo "<li class='p-2 ring-1 ring-white/50 rounded list-none mb-2'>".$vg2->getInfoVideoGame()."</li>";

					$vg3 = new Zelda('Zelda Twilight Princess', 'Nintendo Wii', 2006);
					echo "<li class='p-2 ring-1 ring-white/50 rounded list-none mb-2'>".$vg3->getInfoVideoGame()."</li>";

					$vg4 = new Zelda('Zelda Breath of the Wild', 'Nintendo Switch', 2017);
					echo "<li class='p-2 ring-1 ring-white/50 rounded list-none mb-2'>".$vg4->getInfoVideoGame()."</li>";
				?>
        </section>
    </main>
    
</body>
</html>