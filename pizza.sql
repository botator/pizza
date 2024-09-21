CREATE DATABASE `pizza`; 

CREATE TABLE `pizzak` (
  `id` int(11) NOT NULL,
  `nev` text NOT NULL,
  `feltet` text NOT NULL,
  `ar` int(11) NOT NULL,
  `akcios` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;



INSERT INTO `pizzak` (`id`, `nev`, `feltet`, `ar`, `akcios`) VALUES
(1, 'Margherita', 'paradicsom, mozzarella, bazsalikom', 1200, 0),
(2, 'Songoku', 'sonka, gomba, kukorica', 1400, 1),
(3, 'Nutella', 'nutella, banánkarikák', 1600, 0),
(4, 'Bolognai', 'bolognai ragu, sajt', 1400, 1),
(5, 'Gombás', 'gomba, sajt', 1200, 0),
(6, 'Hawaii', 'sonka, ananász, sajt', 1200, 1),
(7, 'Húsimádó', 'bolognai ragu, szalámi, sonka, gomba, bacon, sajt', 1800, 0),
(8, 'Magyaros', 'paprikás szalámi, hagyma, TV paprika, bacon, sajt', 1800, 0),
(9, 'Mexikói', 'bolognai ragu, bab, kukorica, sajt', 1600, 0),
(10, 'Négy évszak', 'sonka, gomba, kukorica, bacon, kagyló, olívabogyó, szalámi, zöldborsó, sajt', 1800, 0),
(11, 'Palermo', 'bacon, sonka, hagyma, gomba, tükörtojás, sajt', 1800, 0),
(12, 'Tengergyümölcse', 'garnélarák, kagyló, tintahal, polip, olívabogyó, sajt', 1800, 0),
(13, 'Vegetáriánus', 'gomba, kukorica, borsó, paprika, sajt', 1400, 1),
(14, 'Kolbi', 'parasztkolbász, lilahagyma, főtt tojás, mozzarella sajt', 1800, 1),
(15, 'Négysajtos', 'paradicsomkarika, füstölt sajt, camembert sajt, feta sajt, mozzarella sajt', 1400, 0),
(16, 'Mackó', 'sonka, paprikás szalámi, medve sajt, mozzarella sajt', 1600, 0),
(17, 'Texas', 'bacon, szalámi, jalapeno, mozzarella sajt', 1800, 0),
(18, 'Maffiózó', 'sonka, tarja, vöröshagyma, füstölt sajt', 1800, 0),
(19, 'Extra húsimádó', 'tarja, bacon, virsli, paprikás szalámi, gyros hús, kolbász, vöröshagyma, mozzarella sajt', 2200, 0),
(20, 'Piedone', 'bacon, vöröshagyma, bab, mozzarella sajt', 1800, 0);


ALTER TABLE `pizzak`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `pizzak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;
