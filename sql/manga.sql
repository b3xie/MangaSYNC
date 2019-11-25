-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Nov-2019 às 05:16
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `chapterID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `manga_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chapter_name` text COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_by` text COLLATE utf8_unicode_ci NOT NULL,
  `upload_date` date NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`chapterID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `chapters`
--

INSERT INTO `chapters` (`chapterID`, `ID`, `manga_name`, `chapter_name`, `uploaded_by`, `upload_date`, `link`, `num`) VALUES
(1, 6, 'Neon Genesis Evangelion: The Shinji Ikari Raising Project', 'Stage 67', 'Gabi Braga', '2019-11-24', '/assets/chapters/Neon Genesis Evangelion The Shinji Ikari Raising Project/67/', 67);

-- --------------------------------------------------------

--
-- Estrutura da tabela `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `manga_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `Author` text COLLATE utf8_unicode_ci,
  `Chapters` int(11) DEFAULT NULL,
  `Ranking` float DEFAULT NULL,
  `Released` date DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `last` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `manga`
--

INSERT INTO `manga` (`ID`, `manga_name`, `Description`, `Author`, `Chapters`, `Ranking`, `Released`, `link`, `last`) VALUES
(1, 'Neon Genesis Evangelion', 'In 1999, a meteorite crashed into Antarctica. The impact melted the continental ice mass and drastically raised sea levels, damaging the world\'s climate and causing the deaths of over half its population. Now in 2015, devastating creatures of unknown origin—referred to as \"Angels\"—ravage what remains of the planet.\r\n\r\nIn the heavily fortified city of Tokyo-3, 14-year-old Shinji Ikari is destined to halt the Angels\' onslaught. Recruited by his father\'s secret organization NERV, Shinji is enlisted as a pilot of an Evangelion, a massive bioorganic android created solely to defeat the Angels.\r\n\r\nSuddenly with the weight of the world upon his shoulders, Shinji must find the courage and drive to stand up for the future—and himself. But as skirmishes between the Evangelions and Angels become recurrent, the horrifying truth of the world is slowly revealed.', 'Sadamoto, Yoshiyuki ', 97, 8.55, '1994-12-26', 'evangelion.jpg', NULL),
(2, 'Oyasumi Punpun', 'Punpun Onodera is a normal 11-year-old boy living in Japan. Hopelessly idealistic and romantic, Punpun begins to see his life take a subtle—though nonetheless startling—turn to the adult when he meets the new girl in his class, Aiko Tanaka. It is then that the quiet boy learns just how fickle maintaining a relationship can be, and the surmounting difficulties of transitioning from a naïve boyhood to a convoluted adulthood. When his father assaults his mother one night, Punpun realizes another thing: those whom he looked up to were not as impressive as he once thought.\r\n\r\nAs his problems increase, Punpun\'s once shy demeanor turns into voluntary reclusiveness. Rather than curing him of his problems and conflicting emotions, this merely intensifies them, sending him down the dark path of maturity in this grim coming-of-age saga.', 'Inio Asano', 147, 8.99, '2007-03-15', 'oyasumi punpun.jpg', NULL),
(3, 'Battle Angel Alita', 'The people and cyborgs of the Scrapyard live beneath the floating city of Tiphares, whose inhabitants dump their junk in the Scrapyard and rule above its inhabitants. One day Ido, a former Tipharean citizen and doctor specializing in cyborg repairs, finds the intact head of young cyborg-girl in a vast pile of scrap. He takes her in, gives her a body and the name Alita. Alita then discovers long forgotten fighting techniques hidden in her body and decides to become a hunter-warrior; a bounty collector employed by the factories of Tiphares.', 'Kishiro, Yukito', 53, 8.48, '1990-11-01', 'gunnm.jpg', NULL),
(4, 'Kimetsu no Yaiba', 'Since ancient times, rumors have abounded of man-eating demons lurking in the woods. Because of this, the local townsfolk never venture outside at night. Legend has it that a demon slayer also roams the night, hunting down these bloodthirsty demons. For young Tanjirou, these rumors will soon to become his harsh reality...\r\n\r\nEver since the death of his father, Tanjirou has taken it upon himself to support his family. Although their lives may be hardened by tragedy, they\'ve found happiness. But that ephemeral warmth is shattered one day when Tanjirou finds his family slaughtered and the lone survivor, his sister Nezuko, turned into a demon. To his surprise, however, Nezuko still shows signs of human emotion and thought...\r\n\r\nThus begins Tanjirou\'s quest to fight demons and turn his sister human again.', 'Gotouge, Koyoharu', 206, 8.64, '2016-02-15', 'kimetsu.jpg', NULL),
(5, 'Berserk', 'Guts, a former mercenary now known as the \"Black Swordsman,\" is out for revenge. After a tumultuous childhood, he finally finds someone he respects and believes he can trust, only to have everything fall apart when this person takes away everything important to Guts for the purpose of fulfilling his own desires. Now marked for death, Guts becomes condemned to a fate in which he is relentlessly pursued by demonic beings.\r\n\r\nSetting out on a dreadful quest riddled with misfortune, Guts, armed with a massive sword and monstrous strength, will let nothing stop him, not even death itself, until he is finally able to take the head of the one who stripped him—and his loved one—of their humanity.', 'Miura, Kentarou', 357, 9.3, '1989-08-25', 'bersek.jpg', NULL),
(6, 'NGE: The Shinji Ikari Raising Project', 'Stunning, hotheaded Asuka Langley Soryu has been friends with Shinji Ikari since they were little. And she always sort of assumed they\'d stay together-until the day the beautiful, brilliant Rei Ayanami showed up in class! When Shinji starts to get curious about Rei, Asuka needs to figure out if she wants to be just friends with Shinji, or something more. But why are so many people keeping an eye on these relationships-people like homeroom teacher Misato, school nurse Ritsuko, and Shinji\'s mother-NERV\'s chief scientist, Yui Ikari...?', 'Takahashi, Osamu', 133, 6.76, '2005-04-26', '6.jpg', NULL),
(7, 'Fullmetal Alchemist', 'Alchemists are knowledgeable and naturally talented individuals who can manipulate and modify matter due to their art. Yet despite the wide range of possibilities, alchemy is not as all-powerful as most would believe. Human transmutation is strictly forbidden, and whoever attempts it risks severe consequences. Even so, siblings Edward and Alphonse Elric decide to ignore this great taboo and bring their mother back to life. Unfortunately, not only do they fail in resurrecting her, they also pay an extremely high price for their arrogance: Edward loses his left leg and Alphonse his entire body. Furthermore, Edward also gives up his right arm in order to seal his brother\'s soul into a suit of armor.\r\n\r\nYears later, the young alchemists travel across the country looking for the Philosopher\'s Stone, in the hopes of recovering their old bodies with its power. However, their quest for the fated stone also leads them to unravel far darker secrets than they could ever imagine.', 'Arakawa, Hiromu', 116, 9.1, '2001-06-12', 'fma.jpg', '2010-09-11'),
(8, 'Shingeki no Kyojin', 'Hundreds of years ago, horrifying creatures which resembled humans appeared. These mindless, towering giants, called \"titans,\" proved to be an existential threat, as they preyed on whatever humans they could find in order to satisfy a seemingly unending appetite. Unable to effectively combat the titans, mankind was forced to barricade themselves within large walls surrounding what may very well be humanity\'s last safe haven in the world.\r\n\r\nIn the present day, life within the walls has finally found peace, since the residents have not dealt with titans for many years. Eren Yeager, Mikasa Ackerman, and Armin Arlert are three young children who dream of experiencing all that the world has to offer, having grown up hearing stories of the wonders beyond the walls. But when the state of tranquility is suddenly shattered by the attack of a massive 60-meter titan, they quickly learn just how cruel the world can be. On that day, Eren makes a promise to himself that he will do whatever it takes to eradicate every single titan off the face of the Earth, with the hope that one day, humanity will once again be able to live outside the walls without fear.', ' Isayama, Hajime', 125, 8.55, '2009-09-09', 'shingeki.jpg', NULL),
(9, 'Made in Abyss', 'The Abyss, a hole of unprecedented depth—one young girl and a robot brave its dangers to find the truth.\r\n\r\nThe town of Orth is a special one, as it is built around the edges of the massive Abyss, a wonder which has never been fully explored. Those who venture too far down never return, but those brave enough to traverse its territories are known as \"Cave Raiders\" and are heralded as legends. Within this town lives a young girl called Riko, the child of one of the most famous Cave Raiders of all time who disappeared on an expedition many years ago.\r\n\r\nOne day, Riko\'s life changes when she meets a strange robot called Regu, who seems to appear from within the Abyss. Believing this to be a sign from her mother stuck at the bottom of the Abyss, Riko descends into its depths with Regu, ready to confront all the dangers within it.', ' Tsukushi, Akihito', NULL, 8.93, '2012-10-12', 'madeinabyss.jpg', NULL),
(10, 'Solo Leveling', 'Ten years ago, after \"the Gate\" that connected the real world with the monster world opened, some of the ordinary, everyday people received the power to hunt monsters within the Gate. They are known as \"Hunters.\" However, not all Hunters are powerful. My name is Sung Jin-Woo, an E-rank Hunter. I\'m someone who has to risk his life in the lowliest of dungeons, the \"World\'s Weakest.\" Having no skills whatsoever to display, I barely earned the required money by fighting in low-leveled dungeons... at least until I found a hidden dungeon with the hardest difficulty within the D-rank dungeons! In the end, as I was accepting death, I suddenly received a strange power, a quest log that only I could see, a secret to leveling up that only I know about! If I trained in accordance with my quests and hunted monsters, my level would rise. Changing from the weakest Hunter to the strongest S-rank Hunter!', 'Chugong (Story), Jang, Sung-rak (Art)', NULL, 8.93, '2018-03-04', '10.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Subtitle` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Author` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Text` text COLLATE utf8_unicode_ci NOT NULL,
  `Published` date NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`newsID`, `ID`, `Name`, `Subtitle`, `Author`, `Text`, `Published`, `img`, `video`) VALUES
(1, NULL, 'Website is up and running!!!', 'Read now the first release notes!', 'Gabi Braga', '', '2019-11-24', 'test.png', ''),
(2, NULL, 'First titles!', 'Check what will go into our library', 'Gabi Braga', 'Nothing lol', '2019-11-24', 'shingeki.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
