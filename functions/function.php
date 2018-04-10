<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new Mysqli ("localhost", "root", "", "mysitebase");
		$mysqli->query("SET NAMES 'UTF-8'");
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close();
	}
	function getNews ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
			closeDB();
		return resultToArray ($result);
	}
		function resultToArray ($result) {
			$array = array();
			while (($row = $result->fetch_assoc())  != false)
				$array [] = $row;
			return $array;
		}
?>