

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_vote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id_calon` varchar(2) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto_calon` varchar(200) NOT NULL,
  `level` enum('Prodi','Fakultas','Universitas') NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data untuk tabel `tb_calon`
--

INSERT INTO `tb_calon` (`id_calon`, `nama_calon`, `foto_calon`, `keterangan`) VALUES
('1', 'Kandidat 1', 'Chrysanthemum.jpg', 'oke'),
('2', 'Kandidat 2', 'Tulips.jpg', 'oka'),
('3', 'Kandidat 3', 'Jellyfish.jpg', 'yups');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Pemilih') NOT NULL,
  `status` enum('1','0') NOT NULL,
  `jenis` enum('PAN','PST') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `status`, `jenis`) VALUES
(1, 'Novitasari', 'admin1', '1', 'Administrator', '1', 'PAN'),
(2, 'Zakiyah Hamidah', 'admin2', '2', 'Administrator', '1', 'PAN'),
(3, 'Lisa Arief', 'admin3', '3', 'Administrator', '1', 'PAN');
-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id_vote` int(11) NOT NULL,
  `id_calon` varchar(2) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data untuk tabel `tb_vote`
--

INSERT INTO `tb_vote` (`id_vote`, `id_calon`, `id_pemilih`, `date`) VALUES
(21, '2', 5, '2020-05-20 12:27:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_calon` (`id_calon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `tb_vote`
  ADD CONSTRAINT `tb_vote_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;