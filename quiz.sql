-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 apr 2020 kl 15:48
-- Serverversion: 10.4.10-MariaDB
-- PHP-version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `ingela333`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `quiz`
--

CREATE TABLE `quiz` (
  `ID` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `header` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `header2` varchar(100) NOT NULL,
  `category` varchar(20) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `run` int(11) NOT NULL,
  `result1` varchar(150) NOT NULL,
  `result2` varchar(150) NOT NULL,
  `result3` varchar(150) NOT NULL,
  `question1` varchar(150) NOT NULL,
  `answer1a` varchar(150) NOT NULL,
  `points1a` int(11) NOT NULL,
  `answer1b` varchar(150) NOT NULL,
  `points1b` int(11) NOT NULL,
  `answer1c` varchar(150) NOT NULL,
  `points1c` int(11) NOT NULL,
  `question2` varchar(150) NOT NULL,
  `answer2a` varchar(150) NOT NULL,
  `points2a` int(11) NOT NULL,
  `answer2b` varchar(150) NOT NULL,
  `points2b` int(11) NOT NULL,
  `answer2c` varchar(150) NOT NULL,
  `points2c` int(11) NOT NULL,
  `question3` varchar(150) NOT NULL,
  `answer3a` varchar(150) NOT NULL,
  `points3a` int(11) NOT NULL,
  `answer3b` varchar(150) NOT NULL,
  `points3b` int(11) NOT NULL,
  `answer3c` varchar(150) NOT NULL,
  `points3c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `quiz`
--

INSERT INTO `quiz` (`ID`, `author`, `header`, `header2`, `category`, `run`, `result1`, `result2`, `result3`, `question1`, `answer1a`, `points1a`, `answer1b`, `points1b`, `answer1c`, `points1c`, `question2`, `answer2a`, `points2a`, `answer2b`, `points2b`, `answer2c`, `points2c`, `question3`, `answer3a`, `points3a`, `answer3b`, `points3b`, `answer3c`, `points3c`) VALUES
(1, 'Quizmaniac', 'Landskap i Sverige', 'I vilket landskap finns staden?', 'Samhällsorientering', 48, 'Det gick inte riktigt så bra som du hade tänkt dig va? Men försök igen... ;-)', 'Bra jobbat! Inte alla rätt men nära. Försök en gång till.', 'Wow! Du är verkligen bra på det här. Alla rätt!', 'I vilket landskap ligger Luleå?', 'Södermanland', 0, 'Norrbotten', 9, 'Blekinge', 0, 'I vilket landskap ligger Örebro?', 'Uppland', 0, 'Halland', 0, 'Närke', 9, 'I vilket landskap ligger Ankeborg?', 'Skåne', 0, 'Lappland', 0, 'Inte i Sverige', 9),
(2, 'Quizmaniac', 'Är du bra på grammatik?', 'Substantiv, adjektiv och verb', 'Svenska', 24, 'Det gick inte riktigt så bra som du hade tänkt dig va? Men försök igen... ;-)', 'Bra jobbat! Inte alla rätt men nära. Försök en gång till.', 'Du är verkligen bra på det här. Alla rätt! Bra jobbat!', 'Vilket ord är ett substantiv?', 'Katt', 3, 'Jag', 0, 'Hej!', 0, 'Vad är ett verb?', 'Något man gör', 3, 'Något man säger', 0, 'Att man är verbal, bra på ord', 0, 'Vilket är ett adjektiv?', 'Bra', 3, 'Bättre', 3, 'Bäst', 3),
(3, 'Quizmaniac', 'Var bor du?', 'Hittar du hem?', 'Humor', 36, 'Du bor där du senast befinner dig... :-)', 'Hem kommer man alltid, frågan är bara när... :-)', 'Du hittar alltid hem var du än är, det är bra!', 'Hur brukar du hitta hem?', 'GPS', 9, 'Går ett steg i taget', 1, 'Jag går och går ända tills jag kommer fram till dörren', 5, 'Bor du i Sverige?', 'Ja', 0, 'Nej', 0, 'Ibland', 0, 'Vad?', 'Jaha', 0, 'Va??!!', 0, 'Orka...', 0),
(4, 'Quizze', 'I vilken världsdel...', 'finns...?', 'Samhällsorientering', 18, 'Nä...', 'Yes, ganska bra!', 'Tjohoo!! Alla rätt!', 'I vilken världsdel ligger Norge?', 'Grönland', 0, 'Europa', 9, 'Afrika', 0, 'I vilken världsdel ligger Egypten?', 'Afrika', 9, 'Nordpolen', 0, 'Sydafrika', 0, 'I vilken världsdel ligger Kina?', 'Afrika', 0, 'Asien', 9, 'Australien', 0),
(5, 'Quizzie Jones', 'Vilket kraftdjur har du?', 'Som hjälper dig...', 'Personligt', 82, 'Lejon eller varg!', 'Delfin eller haj!', 'Örn eller uggla! ', 'Vilket djur gillar du mest?', 'Katter eller hundar', 1, 'Fåglar', 9, 'Fiskar', 5, 'Vilket element gillar du mest?', 'Jord', 1, 'Vatten', 5, 'Luft', 9, 'Vilken färg gillar du mest?', 'Gul', 0, 'Blå', 0, 'Röd', 0),
(6, 'JK', 'Vad kan du om Harry Potter?', '', 'Underhållning', 14, 'Det var tyvärr inte många rätt... försök igen!', 'Du kan mycket om Harry Potter men inte allt...', 'Du kan din Harry Potter!!', 'I vilket elevhem bor Harry Potter?', 'Slytherin', 2, 'Gryffindor', 9, 'Hufflepuff', 0, 'Vem är Harry Potters ärkefiende?', 'Voldemort', 9, 'Batman', 0, 'Dumbledore', 2, 'Vilken horrokrux är den första som dyker upp?', 'Tom Dolders dagbok', 9, 'Harry Potter', 9, 'Ormen Nagini', 0),
(7, 'Testare1', 'Vad heter du?', 'Kan det gå att lista ut...', 'Personligt', 43, 'Troligtvis heter du Börje. Eller Ellen. Men jag är inte säker... faktiskt inte säker alls :)', 'Ganska stor chans att du heter Johanna eller Göran... Men jag är inte säker... faktiskt inte säker alls :)', 'Jag visste det! Du heter Sabina eller Tore. Men jag är inte säker... faktiskt inte säker alls :)', 'Vilken är din begynnelsebokstav?', 'Börjar på A-F', 1, 'Börjar på G-R', 2, 'Börjar på S-Ö', 3, 'Vad har du för skonummer?', '38', 0, '40', 0, '45', 0, 'Vilken färg gillar du mest?', 'Orange', 0, 'Blå', 0, 'Svart', 0),
(8, ':-)', 'Har du hört den om Bellman?', 'Kan du din roliga historia?', 'Humor', 13, 'Hahaha, du hade hört den om Bellman! Men mest var detta quiz ett test på hur långa meningar som går att skriva och om det räcker med 150 tecken ;-)', 'Hahaha, du hade hört den om Bellman! Men mest var detta quiz ett test på hur långa meningar som går att skriva och om det räcker med 150 tecken ;-)', 'Hahaha, du hade hört den om Bellman! Men mest var detta quiz ett test på hur långa meningar som går att skriva och om det räcker med 150 tecken ;-)', 'Det var en gång en tysk, en ryss och Bellman som skulle tävla om vem som kunde simma bort till andra sidan ön som låg 100 meter bort.', 'Tysken började och efter 10 meter orkade han inte längre så han drunknade.', 9, 'Sedan var det ryssens tur och efter 15 meter orkade han inte längre så han drunknade.', 9, 'Sen var det Bellmans tur, när han hade kommit halvvägs orkade han inte mer så han vände tillbaks igen...', 9, 'Bellman gick till drottningen och sa att han slog vad om femtio kronor att drottningen hade ett födelsemärke på vänstra skinkan.', 'På det svarade drottningen: - Det var lättförtjänta pengar! Drottningen drog upp klänningen och drog ner byxorna inför Bellman.', 9, '- Nu förlorade du femtio kronor Bellman!\r\n\r\n- Ja det gjorde jag sa Bellman, men titta i det där fönstret.', 9, 'Där står kungen. Och jag slog vad med honom om tusen kronor att drottningen skulle visa arslet för mig.', 9, 'En tysk, en ryss och Bellman satt och pratade om sin släkt.', 'Tysken sa stolt: - Min farbror är biskop och alla säger Ers högvördighet till honom.', 9, 'Ryssen sa ännu stoltare: - Min morbror är kardinal och folk kallar honom Ers Eminens.', 9, 'Då sa Bellman: - Haa... Det är väl inget Min moster väger 150 kilo och när folk ser henne säger de Herre Gud.', 9),
(9, 'Freja', 'Runor, runor, runor...', 'Den äldre futharken', 'Samhällsorientering', 9, 'Futhark, runstavar, lönnrunor, magiska runor... inte undra på att du inte håller reda på allt!', 'Snart full pott... nästan där...', 'Vid Odens skägg - det här kunde du som rinnande runor... vatten.. jag menar rinnande vatten.', 'Varför heter det futhark?', 'För att de första runorna i runalfabetet bildar ordet futhark: f, u, th, a, r, k.', 5, 'Varför inte?', 0, 'Ingen aning...', 0, 'Hur många runor finns det i den äldre futharken?', '20', 0, '24', 5, '28', 0, 'Vad användes runorna i den äldre futharken till? Vad betyder ordet ”runa”?', 'Magi. De kallas även för de magiska runorna. Runa betyder mysterium.', 5, 'Korta meddelanden ristade på träföremål, på stavar av bokträ. Runa betyder bokstav. Ordet vi använder för våra bokstäver syftar egentligen på runor.', 5, 'Runstenar. Ibland med hemliga meddelanden av lönnrunor. Runa betyder hemlighet.', 5);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `quiz`
--
ALTER TABLE `quiz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
