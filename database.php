<?php

class DB {

	private $pdo;

	function __construct() {
		if (true) {
			$conn = "pgsql:host=ec2-174-129-197-200.compute-1.amazonaws.com port=5432 user=ldphxungmtlhvu password=te9bZEW2Xhemc8EDFsMQ3VbhZt dbname=dfi2fr0b3mm56t";
		} else {
			$conn = "sqlite:db/database.sqlite3";
		}
		$this->pdo = new PDO($conn);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}

	function loadInfos($id) {
		$exec = $this->pdo->prepare("SELECT * FROM infos WHERE instituicao_id = $id;");
		$exec->execute();
		return (array) $exec->fetch(true);
	}

	function update_attributes($id, $attributes) {
		$sql = "UPDATE infos SET ";
		foreach ($attributes as $attr => $value) {
			$sql .= $attr . " = '" . $value . "',";
		}
		$sql = substr($sql, 0, -1);
		$sql .= " WHERE instituicao_id = $id;";
		echo $sql;
		$stmt = $this->pdo->prepare($sql)->execute();
		if (!$stmt) {
			echo $stmt->errorInfo();
		}
	}

	function create() {
		$sql = <<<COMECA
		PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
DROP TABLE infos;
CREATE TABLE infos (
	id INTEGER NOT NULL PRIMARY KEY,
	instituicao_id INTEGER NOT NULL,
	instituicao_nome VARCHAR(255),
	missao TEXT,
	visao TEXT,
	objetivos TEXT,
	swot_pforte TEXT,
	swot_pfraco TEXT,
	swot_oportunidades TEXT,
	swot_ameacas TEXT
);
INSERT INTO "infos" VALUES(1,1,'Algum Município','missao da empresa','visao da empresa', 'objetivos', 'ponto forte',	'pontos fracos', 'oportunidades', 'ameacas');
COMMIT;
COMECA;

		$stmt = $this->pdo->prepare($sql)->execute();
		if (!$stmt)
			echo $stmt->errorInfo();
	}
}
?>