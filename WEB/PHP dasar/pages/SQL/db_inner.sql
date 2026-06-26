-- 1. Membuat Tabel Kabupaten (Tabel Master)
CREATE TABLE kabupaten (
    id_kabupaten INT AUTO_INCREMENT PRIMARY KEY,
    nama_kabupaten VARCHAR(100) NOT NULL,
    ibukota VARCHAR(100) NOT NULL
);

-- 2. Membuat Tabel Kecamatan (Tabel yang Berelasi)
CREATE TABLE kecamatan (
    id_com INT AUTO_INCREMENT PRIMARY KEY,
    id_kabupaten INT NOT NULL, -- Kolom Penghubung (Foreign Key)
    nama_kecamatan VARCHAR(100) NOT NULL,
    jumlah_desa INT NOT NULL,
    -- Membuat relasi resmi di database
    FOREIGN KEY (id_kabupaten) REFERENCES kabupaten(id_kabupaten) ON DELETE CASCADE
);