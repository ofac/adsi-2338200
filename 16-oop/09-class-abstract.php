<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Abstract</title>
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
            Class Abstract
        </h1>
        <section class="bg-black/40
                          text-white
                          text-opacity-50
                          p-5
                          mt-10
                          min-h-[480px]
                          rounded">
            <table class="table mx-auto my-5 w-96 border-collapse">
					<thead>	
						<tr>	
							<th class="ring-1 ring-white/50 p-2 bg-black/50">Name</th>
							<th class="ring-1 ring-white/50 p-2 bg-black/50">Email</th>	
							<th class="ring-1 ring-white/50 p-2 bg-black/50">Role</th>	
						</tr>	
					</thead>	
					<tbody>	
            <?php 
				abstract class DataBase {
					protected $host;
					protected $user;
					protected $pass;
					protected $dbnm;
					protected $conx;

					public function __construct($host = '127.0.0.1', 
												$user = 'root',
												$pass = '',
												$dbnm = 'adsi2338200') {
						$this->host = $host;
						$this->user = $user;
						$this->pass = $pass;
						$this->dbnm = $dbnm;
						$this->connect();
					}
					private function connect() {
						$this->conx = mysqli_connect($this->host, $this->user, $this->pass, $this->dbnm );
					}
					protected function disconnect() {
						mysqli_close($this->conx);
					}
				}

				class Trainer extends DataBase {

					private $rs;

					public function listTrainers() {
						
						$this->rs = mysqli_query($this->conx, "SELECT * FROM trainers");
						while($row = mysqli_fetch_array($this->rs)) {
							echo "<tr class='odd:bg-white/10'>";
							echo "<td class='ring-1 ring-white/50 p-2'>".$row['name']."</td>";
							echo "<td class='ring-1 ring-white/50 p-2'>".$row['email']."</td>";
							echo "<td class='ring-1 ring-white/50 p-2'>".$row['role']."</td>";
							echo "</tr>";
						}
						parent::disconnect();
					}

				}

				$tr = new Trainer;
				$tr->listTrainers();

				?>
                </tbody>	
			</table>
        </section>
    </main>
    
</body>
</html>