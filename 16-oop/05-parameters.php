<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameters (Mandatory/Optional)</title>
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
                   text-2xl 
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
            Parameters (Mandatory/Optional)
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php
                class Country {
                    public $name;

                    public function __construct($name) {
                        $this->name = $name;
                    }
                }
                class FifaWorldCup {
                    private $country;
                    private $year;
                    private $winner;

                    public function __construct($country, $year, $winner = 'Brazil') {
                        $this->country = $country;
                        $this->year    = $year;
                        $this->winner  = $winner;
                    }

                    public function showEvent() {
                        echo '<ul>';
                        echo '<li class="p-2 py-4 rounded grid grid-cols-3 gap-2 ring-1 ring-white/50 mb-4"> 
                                <span><b>Country:</b> '.$this->country->name.'</span>  
                                <span><b>year:</b> '.   $this->year.'   </span> 
                                <span><b>Winner:</b> '. $this->winner.' </span> 
                              </li>';
                        echo '</ul>';
                    }
                }

                $country = new Country('Italy');
                $wc      = new FifaWorldCup($country, 1990, 'Germany');
                $wc->showEvent();

                $country = new Country('USA');
                $wc      = new FifaWorldCup($country, 1994);
                $wc->showEvent();
                
                $country = new Country('France');
                $wc      = new FifaWorldCup($country, 1998, 'France');
                $wc->showEvent();
            ?>
        </section>
    </main>
    
</body>
</html>