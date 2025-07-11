CREATE DATABASE kampus;

CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  nim VARCHAR(20),
  umur INT
);

INSERT INTO mahasiswa (nama, nim, umur)
VALUES ('Farhan Hamdallah', '12345678', 21);

SELECT * FROM mahasiswa;
