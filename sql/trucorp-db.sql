CREATE DATABASE Trucorp;
USE Trucorp;
CREATE TABLE users(
	ID int PRIMARY KEY,
	Nama char(255),
	Kantor char(255)
);
INSERT INTO users(ID, Nama, Kantor) VALUES (1, 'Budi', 'Telkom');
INSERT INTO users(ID, Nama, Kantor) VALUES (2, 'Toni', 'Telkom');
INSERT INTO users(ID, Nama, Kantor) VALUES (3, 'Satria', 'BizNet');
