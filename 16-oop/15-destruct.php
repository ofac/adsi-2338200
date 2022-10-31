<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruct</title>
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
            Destruct
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <?php
            
            abstract class DataBase {
                protected $conx;

                public function __construct() {
                    $this->connect();
                }

                private function connect() {
                    $this->conx = mysqli_connect('127.0.0.1', 'root', '', 'adsi2338200');
                    if ($this->conx) {
                        echo "<div class='mb-2 bg-green-300 p-2 text-black/50 rounded'> 
                                Connection DataBase Successfully! 
                             </div>";
                    }
                }

                private function disconnect() {
                    if(mysqli_close($this->conx)) {
                        echo "<div class='my-2 mx-auto w-[440px] bg-red-300 p-2 text-black/50 rounded'> 
                                Disconnection DataBase Successfully! 
                             </div>";
                    }
                }

                public function __destruct() {
                    $this->disconnect();
                }

            }

            class Pokemon extends DataBase { }

            $db = new Pokemon;
            
            ?>
        </section>
    </main>
    
</body>
</html>