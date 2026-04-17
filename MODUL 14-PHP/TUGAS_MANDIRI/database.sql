-- Database: db_ekskul
-- Table structure for tb_siswa

CREATE DATABASE IF NOT EXISTS db_ekskul DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE db_ekskul;

DROP TABLE IF EXISTS tb_siswa;

CREATE TABLE tb_siswa (
    nis VARCHAR(20) PRIMARY KEY COLLATE latin1_swedish_ci,
    nama VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci,
    kelas VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci,
    ttl DATE NOT NULL,
    alamat TEXT NOT NULL COLLATE latin1_swedish_ci,
    kota VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci,
    jk ENUM('L', 'P') NOT NULL,
    hobi VARCHAR(100) COLLATE latin1_swedish_ci,
    ekskul VARCHAR(100) COLLATE latin1_swedish_ci
) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
