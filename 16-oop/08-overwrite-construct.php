<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwrite Construct</title>
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
            Overwrite Construct
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php
              class VideoGame {
                    protected $name;
                    protected $platform;
                    protected $year;

                    public function __construct($name, $platform) {
                        $this->name     = $name;
                        $this->platform = $platform;
                    }
                }

                class Game extends VideoGame {
                    public function __construct($name, $platform, $year) {
                        parent::__construct($name, $platform);
                        $this->year = $year;
                    }

                    public function showVideoGame() {
                        echo '<p class="mb-2 grid grid-cols-3 p-4 ring-1 ring-white/50 rounded"> 
                                <span><b>Name:</b> '.$this->name.'</span> 
                                <span><b>Platform:</b> '.$this->platform.'</span>
                                <span><b>Year:</b> '.$this->year.'</span>
                              </p>';
                    }
                }
                $gm = new Game('Mario Oddysey', 'Nintendo Switch', 2017);
                $gm->showVideoGame();

                $gm = new Game('Halo Infinite', 'Xbox Series X', 2021);
                $gm->showVideoGame();

                $gm = new Game('God of War Ragnarok', 'Play Station 5', 2022);
                $gm->showVideoGame();
            ?>
        </section>
    </main>
    
</body>
</html>