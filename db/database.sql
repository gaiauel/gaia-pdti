PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE infos (
	id INTEGER NOT NULL PRIMARY KEY,
	instituicao_id INTEGER NOT NULL,
	missao TEXT,
	visao TEXT
);
INSERT INTO "infos" VALUES(1,1,'teste144','teste2');
COMMIT;
