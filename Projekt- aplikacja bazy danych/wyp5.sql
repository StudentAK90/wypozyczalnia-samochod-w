

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `wyp5`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faktury`
--

CREATE TABLE IF NOT EXISTS `faktury` (
  `id_faktury` int(11) NOT NULL AUTO_INCREMENT,
  `nr_faktury` varchar(45) DEFAULT NULL,
  `data_wyst` datetime DEFAULT NULL,
  `ilosc_sztuk` int(11) DEFAULT NULL,
  `wartosc_szkody` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_faktury`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `firma`
--

CREATE TABLE IF NOT EXISTS `firma` (
  `id_firma` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(10) DEFAULT NULL,
  `nazwa_firma` varchar(45) DEFAULT NULL,
  `tel_kom` varchar(15) DEFAULT NULL,
  `klient_id_klient` int(11) NOT NULL,
  PRIMARY KEY (`id_firma`,`klient_id_klient`),
  KEY `fk_firma_klient1_idx` (`klient_id_klient`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE IF NOT EXISTS `klient` (
  `id_klient` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `ulica` varchar(45) DEFAULT NULL,
  `miasto` varchar(45) DEFAULT NULL,
  `kod_pocztowy` varchar(6) DEFAULT NULL,
  `nr_tel` varchar(15) DEFAULT NULL,
  `nr_konta_bank` varchar(35) DEFAULT NULL,
  `PESEL` varchar(11) DEFAULT NULL,
  `Nrdom` varchar(7) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_klient`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient_zag`
--

CREATE TABLE IF NOT EXISTS `klient_zag` (
  `id_klien_zag` int(11) NOT NULL AUTO_INCREMENT,
  `nr_paszport` varchar(8) DEFAULT NULL,
  `nr_serii_paszport` varchar(11) DEFAULT NULL,
  `obywatelstwo` varchar(45) DEFAULT NULL,
  `kraj_pochodzenia` varchar(45) DEFAULT NULL,
  `plec` varchar(45) DEFAULT NULL,
  `klient_id_klient` int(11) NOT NULL,
  PRIMARY KEY (`id_klien_zag`,`klient_id_klient`),
  KEY `fk_klient_zag_klient1_idx` (`klient_id_klient`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE IF NOT EXISTS `pracownik` (
  `id_pracownik` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `data_zatr` datetime DEFAULT NULL,
  `Adres_zameldowania` varchar(45) DEFAULT NULL,
  `nr_tel` varchar(15) DEFAULT NULL,
  `PESEL` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_pracownik`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`id_pracownik`, `imie`, `nazwisko`, `data_zatr`, `Adres_zameldowania`, `nr_tel`, `PESEL`) VALUES
(1, 'Natalia', 'Kowalska', '2015-12-01 12:00:00', 'Sosnowiec, ul. staszica 8', '663029202', '90072650751');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochod`
--

CREATE TABLE IF NOT EXISTS `samochod` (
  `id_samochod` int(11) NOT NULL AUTO_INCREMENT,
  `Data_rejestracji` date DEFAULT NULL,
  `nr_rejestracyjnego` varchar(45) DEFAULT NULL,
  `ubezpieczenie` date DEFAULT NULL,
  `nr_VIN` varchar(45) DEFAULT NULL,
  `Marka_sam` varchar(45) DEFAULT NULL,
  `Model_sam` varchar(45) DEFAULT NULL,
  `kolor_sam` varchar(45) DEFAULT NULL,
  `kaucja` decimal(25,0) DEFAULT NULL,
  `dostepna_ilość` varchar(45) DEFAULT NULL,
  `cena` int(11) NOT NULL,
  PRIMARY KEY (`id_samochod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Zrzut danych tabeli `samochod`
--

INSERT INTO `samochod` (`id_samochod`, `Data_rejestracji`, `nr_rejestracyjnego`, `ubezpieczenie`, `nr_VIN`, `Marka_sam`, `Model_sam`, `kolor_sam`, `kaucja`, `dostepna_ilość`, `cena`) VALUES
(1, '2013-10-08', 'SO565656', '2016-03-31', '789456', 'Volkswagen', 'Golf', 'Niebieski', '1000', '1', 200),
(2, '2015-12-01', 'SO565657', '2016-01-28', '789456', 'Skoda', 'Fabia', 'Czerwony', '200', '1', 350),
(3, '2016-01-03', 'SO45896J', '2016-01-30', '895432', 'Volvo', 'S60', 'Złoty', '690', '1', 299),
(4, '2013-10-08', 'SO565657', '2016-02-16', '781453', 'Seat', 'Toledo', 'Grafitowy', '100', '1', 99),
(5, '2015-09-24', 'SK6341225', '2016-02-25', '114554', 'Alfa Romeo', '159', 'Granatowy', '99', '1', 59),
(6, '2016-02-14', 'SO12345', '2016-02-10', '45652236987896333', 'Peugot', '107', 'Brązowy', '49', '1', 19),
(7, '2012-02-02', 'SO19875', '2014-06-03', '78546563662366666', 'Fiat', 'Tipo', 'Czerwony', '100', '2', 35);

-- --------------------------------------------------------


--
-- Struktura tabeli dla tabeli `uszkodzenia`
--

CREATE TABLE IF NOT EXISTS `uszkodzenia` (
  `id_uszkodzenia` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `rodzaj` varchar(45) DEFAULT NULL,
  `wartoscs_szkody` varchar(45) NOT NULL,
  `wyporzyczenia_faktury_id_faktury` int(11) NOT NULL,
  PRIMARY KEY (`id_uszkodzenia`,`wartoscs_szkody`,`wyporzyczenia_faktury_id_faktury`),
  KEY `fk_uszkodzenia_wyporzyczenia1_idx` (`wyporzyczenia_faktury_id_faktury`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyposażenie`
--

CREATE TABLE IF NOT EXISTS `wyposażenie` (
  `id_wyposażenie` int(11) NOT NULL AUTO_INCREMENT,
  `klimatyzacja` tinyint(1) DEFAULT NULL,
  `centralny_zamek` tinyint(1) DEFAULT NULL,
  `elektryczne_ot_okien` tinyint(1) DEFAULT NULL,
  `poduszki_powietrzne` tinyint(1) DEFAULT NULL,
  `czujnik_parkowania` tinyint(1) DEFAULT NULL,
  `nawigacja` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_wyposażenie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE IF NOT EXISTS `wypozyczenia` (
  `id_wyporzyczenia` int(11) NOT NULL AUTO_INCREMENT,
  `data_wpl` date DEFAULT NULL,
  `data_od` date DEFAULT NULL,
  `wartosc_brutto` varchar(45) NOT NULL,
  `klient_id_klient` int(11) NOT NULL,
  `pracownik_id_pracownik` int(11) NOT NULL,
  `faktury_id_faktury` int(11) NOT NULL,
  `Samochod_id_samochod` int(11) NOT NULL,
  PRIMARY KEY (`id_wyporzyczenia`,`klient_id_klient`,`pracownik_id_pracownik`,`faktury_id_faktury`,`Samochod_id_samochod`),
  KEY `fk_wyporzyczenia_klient1_idx` (`klient_id_klient`),
  KEY `fk_wyporzyczenia_pracownik1_idx` (`pracownik_id_pracownik`),
  KEY `fk_wyporzyczenia_faktury1_idx` (`faktury_id_faktury`),
  KEY `fk_wypozyczenia_Samochod1_idx` (`Samochod_id_samochod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



--
-- Ograniczenia dla tabeli `firma`
--
ALTER TABLE `firma`
  ADD CONSTRAINT `fk_firma_klient1` FOREIGN KEY (`klient_id_klient`) REFERENCES `klient` (`id_klient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `klient_zag`
--
ALTER TABLE `klient_zag`
  ADD CONSTRAINT `fk_klient_zag_klient1` FOREIGN KEY (`klient_id_klient`) REFERENCES `klient` (`id_klient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `uszkodzenia`
--
ALTER TABLE `uszkodzenia`
  ADD CONSTRAINT `fk_uszkodzenia_wyporzyczenia1` FOREIGN KEY (`wyporzyczenia_faktury_id_faktury`) REFERENCES `wypozyczenia` (`faktury_id_faktury`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `wyposażenie`
--
ALTER TABLE `wyposażenie`
  ADD CONSTRAINT `` FOREIGN KEY (`id_wyposażenie`) REFERENCES `samochod` (`id_samochod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `fk_wyporzyczenia_faktury1` FOREIGN KEY (`faktury_id_faktury`) REFERENCES `faktury` (`id_faktury`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wyporzyczenia_klient1` FOREIGN KEY (`klient_id_klient`) REFERENCES `klient` (`id_klient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wyporzyczenia_pracownik1` FOREIGN KEY (`pracownik_id_pracownik`) REFERENCES `pracownik` (`id_pracownik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wypozyczenia_Samochod1` FOREIGN KEY (`Samochod_id_samochod`) REFERENCES `samochod` (`id_samochod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
