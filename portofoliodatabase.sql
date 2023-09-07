-- Membuat Database
CREATE DATABASE portofolio;

-- Membuat tabel untuk Destinations, Hotels dan Bookings
CREATE TABLE IF NOT EXISTS Biodata(
    ID_Biodata INT AUTO_INCREMENT,
    Nama VARCHAR(100),
    Role VARCHAR(50),
    Availability VARCHAR(100),
    Usia INT,
    Lokasi VARCHAR(100),
    yearExperience INT,
    Email VARCHAR(50)
    PRIMARY KEY(ID_Biodata) 
);

-- Menambahkan value
INSERT INTO Biodata (Nama, Role, Availability, Usia, Lokasi, yearExperience, Email) 
VALUES 
	('Tan Karunia Dzikra','Back End Engineer','Full Time',20,'Bandung',3,'qwertyuiop@gmail.com');

-- Data Modification:
-- Update lokasi di Biodata
UPDATE Biodata
SET Lokasi = 'Yogyakarta'
WHERE ID_Biodata = 1;

-- Menampilkan biodata
SELECT
ID_Biodata,
Nama,
Role,
Availability,
Usia,
Lokasi,
yearExperience,
Email
FROM Biodata;

-- Delete Biodata
DELETE FORM Biodata
WHERE ID_Biodata = 1;