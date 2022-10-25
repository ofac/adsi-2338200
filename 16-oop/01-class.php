<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class (Attributes/Methods)</title>
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
            Class (Attributes/Methods)
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php
                class Vehicle {
                    // Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    // Methods 
                    public function setAttributes($brand, $refer, $model, $color) {
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }
                    public function getAttributes() {
                        return '<ul class="flex justify-center items-center gap-2 ring-1 ring-white/25 rounded p-2 mb-4">
                                    <li> Brand: '.    $this->brand.' </li>
                                    <li> Reference: '.$this->refer.' </li>
                                    <li> Model: '.    $this->model.' </li>
                                    <li> Color: '.    $this->color.' </li>
                                </ul>';
                    }
                }
                $vh1 = new Vehicle;
                $vh1->setAttributes('Toyota', 'Prado', '2022', 'Black');
                echo $vh1->getAttributes();

                $vh2 = new Vehicle;
                $vh2->setAttributes('Volkswagen', 'Golf', '2020', 'Green');
                $vh2->refer = 'Tiguan';
                echo $vh2->getAttributes();

                $vh3 = new Vehicle;
                $vh3->setAttributes('Renault', 'Twingo', '2012', 'Pink');
                $vh3->brand = 'Bugatti';
                $vh3->refer = 'Veiron';
                echo $vh3->getAttributes();

            ?>
        </section>
    </main>
    
</body>
</html>