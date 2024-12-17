CREATE DATABASE baza_4tig1

INSERT INTO rezerwacje (nr_stolika,data_rez,liczba_osob,telefon) VALUES ("1", "2017-07- 04", "4","111222333");

SELECT dania.nazwa, dania.cena FROM dania WHERE dania.typ = 2;

SELECT dania.nazwa FROM dania WHERE dania.cena < 15 AND dania.typ = 3;

UPDATE pracownicy SET pracownicy.stanowisko = 4 WHERE pracownicy.stanowisko = 3;