membuat tabel pelanggan
CREATE TABLE pelanggan (
    ID_pelanggan INT(10) NOT NULL,
    nama VARCHAR(15),
    alamat VARCHAR(15),
    tanggal_lahir DATE,
    nomor_telepon VARCHAR(15),
    status_keanggotaan VARCHAR(20),
    tanggal_bergabung DATE,
    PRIMARY KEY (ID_pelanggan)
);

membuat tabel bus
CREATE TABLE bus (
    ID_bus CHAR(15) NOT NULL,
    nomor_plat VARCHAR(20),
    kapasitas INT(10),
    merek VARCHAR(20),
    PRIMARY KEY (ID_bus)
);

membuat tabel jadwal
CREATE TABLE jadwal (
    ID_jadwal CHAR(10) NOT NULL,
    ID_bus VARCHAR(15),
    tujuan VARCHAR(15),
    tanggal_berangkat DATE,
    waktu_berangkat TIME,
    PRIMARY KEY (ID_jadwal)
);

membuat tabel pemesanan
CREATE TABLE pemesanan (
    ID_pemesanan CHAR(10) NOT NULL,
    ID_pelanggan VARCHAR(15),
    ID_jadwal VARCHAR(15),
    tanggal_pemesanan DATE,
    jumlah_tiket VARCHAR(15),
    PRIMARY KEY (ID_pemesanan)
);

membuat tabel detail_pemesanan
CREATE TABLE detail_pemesanan (
    ID_pemesanan CHAR(10) NOT NULL,
    ID_bus VARCHAR(15),
    nomor_kursi VARCHAR(15),
    PRIMARY KEY (ID_pemesanan)
);



