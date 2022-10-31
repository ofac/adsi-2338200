<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instance</title>
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
            Instance
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php 
                class Bike {
                    protected $brand;
                    protected $price;
                    protected $type;

                    public function __construct($brand, $price) {
                        $this->brand = $brand;
                        $this->price = $price;
                    }

                    public function setBike($type) {
                        if ($type instanceof Road)   $this->type = 'Road';
                        if ($type instanceof Mtb)    $this->type = 'Mtb';
                        if ($type instanceof Enduro) $this->type = 'Enduro';
                    }

                    public function getInfoBike() {
                        return "<li class='mb-2 p-2 ring-1 ring-white/50 rounded list-none'>".
                                    $this->brand." | $".$this->price." | ".
                                    $this->type.
                                "</li>";
                    }
                }

                class Road extends Bike { }
                class Mtb extends Bike { }
                class Enduro extends Bike { }

                $bk = new Road('Specialized', 4000);
                $bk->setBike($bk);
                echo $bk->getInfoBike();

                $bk = new Mtb('Trek', 3200);
                $bk->setBike($bk);
                echo $bk->getInfoBike();

                $bk = new Enduro('SantaCruz', 5200);
                $bk->setBike($bk);
                echo $bk->getInfoBike();

			?>
        </section>
    </main>
    
</body>
</html>