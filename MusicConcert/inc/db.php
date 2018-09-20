<?php
class db {
	private $conn;//дискрипьор соединения с БД
	private $host;//хостинг localhost
	private $user;//пользовательroot
	private $password;//пароль
	private $baseName;//имя БД
	

    function __construct($params=array()) {
		$this->conn = false;
		$this->host = 'localhost'; //hostname
		$this->user = 'root'; //username
		$this->password = ''; //password
		$this->baseName = 'jktvr17_concert'; //name of your database
		
		$this->connect();// метод connect DB
	}

	function __destruct() {
		$this->disconnect();
	}
	
	function connect() {
		if (!$this->conn) {
			try {
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->baseName, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));  
			}
			catch (Exception $e) {
				die('Connection failed : ' . $e->getMessage());
			}

			
		}

		return $this->conn;
	}

	function disconnect() {
		if ($this->conn) {
			$this->conn = null;//разрыв соединения
		}
	}
//-------------------------------------запрос SELECT -> результат одна строка -fetch
	function getOne($query) {	
		try{
			$stmt = $this->conn->prepare($query);
			$stmt->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение	
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$response = $stmt->fetch();//массив из одной записи
			
			return $response;
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
//  запрос =SELECT - >результат массив таблица много строк - fetchAll	
	function getAll($query) {
		try{
			$stmt = $this->conn->prepare($query);
			$stmt->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение	
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$response = $stmt->fetchAll();//массив из всех записей
			
			return $response;
		}
		catch(PDOException $e) {// исключения ошибки ERROR
            echo "Error: " . $e->getMessage();
		}
	}
	//--------------------------------------------------------------------
	//http://php.net/manual/ru/pdo.exec.php
	//PDO::exec — Запускает SQL запрос на выполнение и возвращает количество строк, задействованных в ходе его выполнения
	//запросы действия INSERT   UPDATE    DELETE
	function executeRun($query) {
	
		try{
			$response = $this->conn->exec($query);//выполнение запроса
			
			return $response;//результат TRUE  или  FALSE
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		
	}
}