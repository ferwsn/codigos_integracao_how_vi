	CREATE LOGIN integracao_php WITH PASSWORD = 'php123';
	GO
	CREATE USER integracao_php FOR LOGIN integracao_php;
	GO
	ALTER ROLE db_datareader ADD MEMBER integracao_php;
	GO
	ALTER ROLE db_datawriter ADD MEMBER integracao_php;
	GO