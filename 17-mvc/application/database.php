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