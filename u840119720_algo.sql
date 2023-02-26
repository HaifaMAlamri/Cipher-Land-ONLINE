-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2023 at 04:55 AM
-- Server version: 10.6.11-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u840119720_algo`
--

-- --------------------------------------------------------

--
-- Table structure for table `algorithm`
--

CREATE TABLE `algorithm` (
  `id` int(11) NOT NULL,
  `algorithmName` varchar(255) NOT NULL,
  `algorithmDescription` text NOT NULL,
  `algorithmImg` varchar(200) NOT NULL,
  `created_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `algorthimEncrypt` text NOT NULL,
  `algortihmDecrypt` text NOT NULL,
  `algorthimAdvantages` text NOT NULL,
  `algorthimDisadvantages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algorithm`
--

INSERT INTO `algorithm` (`id`, `algorithmName`, `algorithmDescription`, `algorithmImg`, `created_in`, `algorthimEncrypt`, `algortihmDecrypt`, `algorthimAdvantages`, `algorthimDisadvantages`) VALUES
(23, 'Caesar Cipher', 'One of the simplest and most well-known encryption methods is the Caesar cipher, often known as Caesar\'s cipher, Caesar shift ,the shift cipher or Caesar\'s code. Each letter in the plaintext is replaced by a letter that is located a certain number of places farther down the alphabet in this form of substitution cipher.\nThe Caesar cipher is named for Julius Caesar, who, according to Suetonius, employed it with a two-shift (A becoming C while encrypting, and C becoming A when decrypting) to safeguard military-related communications. Although Caesar\'s was the first instance of this technique that was noted, older instances of substitution ciphers are also known.\n', 'caesar2.jpg', '2023-02-17 18:33:56', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `algorthimadvantages`
--

CREATE TABLE `algorthimadvantages` (
  `algorthimAdvantagesID` int(11) NOT NULL,
  `algorthimAdvantages` varchar(255) NOT NULL,
  `algorthimID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algorthimadvantages`
--

INSERT INTO `algorthimadvantages` (`algorthimAdvantagesID`, `algorthimAdvantages`, `algorthimID`) VALUES
(1, 'Simple to use and install, making it appropriate for novices to learn about encryption', 23),
(2, 'May be physically implemented, such as with a deck of cards or a set of rotating disks, which is advantageous in some circumstances.', 23),
(3, 'simply needs a modest amount of previously given information.', 23),
(4, 'May be readily altered to provide a variation that is more secure, for example, by utilizing several shift values or keywords.', 23);

-- --------------------------------------------------------

--
-- Table structure for table `algorthimdisadvantages`
--

CREATE TABLE `algorthimdisadvantages` (
  `disadvantagesID` int(11) NOT NULL,
  `algorthimDisadvantages` varchar(255) NOT NULL,
  `algorthimID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algorthimdisadvantages`
--

INSERT INTO `algorthimdisadvantages` (`disadvantagesID`, `algorthimDisadvantages`, `algorthimID`) VALUES
(1, 'It is not resistant to cutting-edge decryption techniques.', 23),
(2, 'Susceptible to known-plaintext attacks, in which a perpetrator has access to both the encrypted and unencrypted copies of the same communications.', 23),
(3, 'Because there are so few potential keys, a brute force attack may easily be used to attempt all of the potential keys until the right one is identified', 23),
(4, 'Since it would be simple to decrypt, it is not appropriate for lengthy text encryption', 23),
(5, 'Since it may be compromised quickly, it is not ideal for secure communication.', 23),
(6, 'Does not give a message with secrecy, integrity, and authenticity', 23);

-- --------------------------------------------------------

--
-- Table structure for table `algorthimencrypt`
--

CREATE TABLE `algorthimencrypt` (
  `algorthimEncryptID` int(255) NOT NULL,
  `algorthimEncrypt` varchar(255) NOT NULL,
  `algorthimID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algorthimencrypt`
--

INSERT INTO `algorthimencrypt` (`algorthimEncryptID`, `algorthimEncrypt`, `algorthimID`) VALUES
(1, 'choose a number to move the letters by.', 23),
(2, 'Create a table with the new shifted alphabet in the bottom row and the letters in the top row in the traditional alphabetical sequence', 23),
(3, 'By replacing every letter in the message with its corresponding shifted letter, the message is encoded', 23),
(4, 'In order for the message\'s intended recipient to decode it, make sure they are aware of the shifting key you used to encrypt it', 23);

-- --------------------------------------------------------

--
-- Table structure for table `algortihmdecrypt`
--

CREATE TABLE `algortihmdecrypt` (
  `algortihmDecryptID` int(11) NOT NULL,
  `algortihmDecrypt` varchar(255) NOT NULL,
  `algorthimID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algortihmdecrypt`
--

INSERT INTO `algortihmdecrypt` (`algortihmDecryptID`, `algortihmDecrypt`, `algorthimID`) VALUES
(1, 'Just subtract the shift value from 26 to decode a message that has been encrypted with the Caesar cipher and apply the new value to shift the message to its initial format', 23);

-- --------------------------------------------------------

--
-- Table structure for table `algortihmexample`
--

CREATE TABLE `algortihmexample` (
  `imgAlgorthimID` int(11) NOT NULL,
  `algorthmImg` varchar(255) NOT NULL,
  `algorthimID` int(11) NOT NULL,
  `algorithmText` varchar(255) NOT NULL,
  `algorithmSubText` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `algortihmexample`
--

INSERT INTO `algortihmexample` (`imgAlgorthimID`, `algorthmImg`, `algorthimID`, `algorithmText`, `algorithmSubText`) VALUES
(14, 'caesar3.jpg', 23, 'Two alphabets can be aligned to indicate the transformation; the cipher letter is the plain letter moved left or right by a certain amount of places', 'The following Caesar cipher uses a Right rotation of two positions, which is equivalent to a left shift of 24 '),
(15, 'exam2.PNG', 23, 'Every letter of the text in the \"plain\" line is looked up during the encryption process, and the matching letter is then written in the \"cipher\" line.', ''),
(16, '', 23, 'Decryption is done in reverse, with a right shift of 24 or a lift shift of 2.', '');

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `key_w` varchar(100) DEFAULT NULL,
  `level` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `algorithm_id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `created_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `answer_a` text DEFAULT NULL,
  `answer_b` text DEFAULT NULL,
  `answer_c` text DEFAULT NULL,
  `answer_true_false` tinyint(1) DEFAULT NULL,
  `feedback_a` text DEFAULT NULL,
  `feedback_b` text DEFAULT NULL,
  `feedback_c` text DEFAULT NULL,
  `statues` int(11) NOT NULL DEFAULT 0,
  `correct_answer` text NOT NULL,
  `feedbackWriteTrue` text NOT NULL,
  `feedbackTrue` text NOT NULL,
  `feedbackFalse` text NOT NULL,
  `feedbackWriteFalse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `question`, `key_w`, `level`, `feedback`, `algorithm_id`, `type`, `created_in`, `answer_a`, `answer_b`, `answer_c`, `answer_true_false`, `feedback_a`, `feedback_b`, `feedback_c`, `statues`, `correct_answer`, `feedbackWriteTrue`, `feedbackTrue`, `feedbackFalse`, `feedbackWriteFalse`) VALUES
(118, 'Encrypt the word alphabet using a Caesar cipher with a shift of 3', NULL, '2', '', 1, 1, '2023-02-26 02:56:38', 'DVSDULQV', 'DOOFOHDU', 'DOSKDEHW', NULL, '(sorry, just the first shift is matching with the answer)', '(Oops! You started it well)', 'You are right', 0, ' 3', '', '', '', ''),
(119, 'A Caesar cipher is an example of a ______________________.', NULL, '1', '', 1, 1, '2023-02-26 03:00:47', 'transposition cipher', 'substitution cipher', 'bimodal cipher', NULL, '(try again , the Transposition Cipher Technique, each character&#39;s position is shifted to a different position. )', '(Great! You got it. Substitution ciphers encrypt the plaintext by swapping each letter or symbol in the plaintext by a different symbol as directed by the key.)', '(Sorry, bimodal cryptographic algorithm BAT. BAT provides a hash function BAT-H and a block cipher BAT-B. )', 0, ' 2', '', '', '', ''),
(120, 'The following word was encrypted using a Caesar cipher with a shift of -4: Wsaokia. What word is it?', NULL, '2', '', 1, 1, '2023-02-26 03:03:06', 'Ability', 'Puzzled', 'Awesome', NULL, '(You made a mistake, try again(', '(sorry=( try again)', '(good job=) )', 0, ' 3', '', '', '', ''),
(121, 'What is the Caesar Cipher? ', NULL, '1', '', 1, 1, '2023-02-26 03:06:54', 'A symmetric key encryption algorithm', 'A public key encryption algorithm', 'A simple substitution cipher ', NULL, '(is incorrect, try again you are closed) ', ' (is incorrect, try again)', ' (Excellent job, you got it right! The Caesar Cipher is one of the simplest and most widely known encryption techniques.) ', 0, ' 3', '', '', '', ''),
(122, 'How many possible keys are there in the Caesar Cipher?', NULL, '1', '', 1, 1, '2023-02-26 03:08:38', '26', '25', '256', NULL, ' (Excellent job, you got it right! The Caesar Cipher has a fixed number of possible keys because there are only 26 letters in the English alphabet) ', '(is incorrect, try again you are closed)  ', ' (is incorrect, try again) ', 0, ' 1', '', '', '', ''),
(123, 'What is the shift value used in the Caesar Cipher? ', NULL, '1', '', 1, 1, '2023-02-26 03:10:26', 'The number of places each letter is shifted', 'The number of letters in the plaintext', 'The number of letters in the key', NULL, ' (Great job, you got it right!)', ' (is incorrect, because the number of letters in the plaintext message is not directly related to the shift value) ', ' (is incorrect, because the Caesar Cipher does not use a key in the same way that other encryption methods do.) ', 0, ' 1', '', '', '', ''),
(124, 'Decrypt the word cat with shift key 3 ', NULL, '1', '', 1, 1, '2023-02-26 03:11:42', 'fdw', 'wdf  ', 'gjm  ', NULL, '(That&#39;s correct! You got the answer) ', '(You are close! The letters are similar to the correct answer, but try to find out)', '(Incorrect answer! You are too far) ', 0, ' 1', '', '', '', ''),
(125, 'Encrypt the word Lagoon with a shift of -3 ', NULL, '2', '', 1, 1, '2023-02-26 03:14:55', 'hwckkj  ', 'odjrrq ', 'jyemml  ', NULL, '(Incorrect, focus while you solve!) ', '(You are amazing! You answered it) ', '(Opps! Try again and don&#39;t forget the key is -3) ', 0, ' 2', '', '', '', ''),
(127, 'Decrypt &#39;fvb hyl nylha&#39; with shift key 7', NULL, '2', '', 1, 1, '2023-02-26 03:20:15', 'this is good. ', 'you are good. ', 'you are great.   ', NULL, '(No, try again)', '(Unfortunately, but you are very close. Try again!) ', '(Excellent correct answer) ', 0, ' 3', '', '', '', ''),
(128, 'Decrypt &#39;fvb hyl nylha&#39; with shift key 7 ', NULL, '2', '', 1, 1, '2023-02-26 03:22:49', 'this is good.', 'you are good. ', 'you are great.   ', NULL, '(No, try again) ', '(Unfortunately, but you are very close. Try again!) ', '(Excellent correct answer) ', 0, ' 3', '', '', '', ''),
(129, 'Encrypt &#39;defend the east wall of the castle&#39;, with a shift (key) of 1', NULL, '2', '', 1, 1, '2023-02-26 03:26:24', 'efgfoe uif fbtu xbmm pg uif dbtumf   ', 'efgfoe uif fbtu xbmm ls uif wufbgp ', 'sjfktns ijs fbtu xbmm pg ijs shfjen ', NULL, '(Wow, you are amazing, your answer is correct) ', '(Not true, but you are close. Try to change a few letters) ', '(Sorry, try again) ', 0, ' 1', '', '', '', ''),
(130, 'How does the Caesar Cipher compare to a modern encryption algorithm in terms of security?', NULL, '2', '', 1, 1, '2023-02-26 03:32:21', 'More secure', 'Less secure', 'Equally secure', NULL, ' (is incorrect, because the Caesar Cipher is not more secure to modern encryption algorithms) ', ' (Great job, you got it right!)', '(is incorrect, try again) ', 0, ' 2', '', '', '', ''),
(132, 'How can the Caesar Cipher be broken?', NULL, '3', '', 1, 1, '2023-02-26 03:38:08', 'By guessing the key', 'By using frequency analysis ', 'By using a man-in-the-middle attack', NULL, ' (is incorrect, because guessing the key is a very time-consuming and unlikely method of breaking the Caesar Cipher, especially for longer messages)', '(Great job, you got it right! where the frequency of each letter in the ciphertext) ', ' (is incorrect, because the Caesar Cipher is not vulnerable to man-in-the-middle attacks) ', 0, ' 2', '', '', '', ''),
(133, 'test write', '6', '1', 'feedback', 1, 2, '2023-02-26 03:38:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'ab', '', '', '', ''),
(134, 'What is a variant of the Caesar Cipher called when the shift value is not fixed? ', NULL, '3', '', 1, 1, '2023-02-26 03:41:43', 'Vigenere Cipher', 'Playfair Cipher', 'Polyalphabetic Cipher', NULL, ' (is incorrect, because it’s also a type of Polyalphabetic Cipher, but it specifically uses a repeating keyword to determine the shift values.) ', ' (is incorrect, because it’s a different type of encryption technique altogether that uses a 5x5 matrix of letters to encrypt pairs of plaintext letters)', ' (Great job, you got it right! is a variant of the Caesar Cipher where the shift value is not fixed and varies throughout the encryption process.) ', 0, ' 3', '', '', '', ''),
(135, 'Who was the first known user of the Caesar Cipher? ', NULL, '2', '', 1, 1, '2023-02-26 03:45:50', 'Caesar Romanus ', 'Julius Caesar. ', 'Alan Turing ', NULL, '(Sorry, try again) ', 'Great job, Caesar Cipher was Developed around 100 BC, it was used by Julius Caesar to send secret messages to his generals in the field.  ', 'Incorrect, Alan Mathison Turing was an English mathematician, computer scientist, logician, cryptanalyst, philosopher, and theoretical biologist. ', 0, ' 2', '', '', '', ''),
(136, 'Decrypt the following : Gbgb V unir n srryvat jr ner abg va Xnafnf nalzber. ', '13', '3', 'the answer is (Toto, I have a feeling we are not in Kansas anymore  )', 1, 2, '2023-02-26 03:48:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Toto, I have a feeling we are not in Kansas anymore  ', '', '', '', ''),
(137, 'Decrypt the following :', '13', '3', 'the answer is (Ladies do not start fights, but they can finish them )', 1, 2, '2023-02-26 03:53:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Ynqvrf qb abg fgneg svtugf, ohg gurl pna svavfu gurz ', '', '', '', ''),
(138, 'Decrypt this cipher text:  FRZDUGV GLH PDQB WLPHV EHIRUH WKHLU GHDWKV; WKH YDOLDQW QHYHU WDVWH RI GHDWK EXW RQFH. ', '3', '3', 'the answer is (COWARDS DIE MANY TIMES BEFORE THEIR DEATHS; THE VALIANT NEVER TASTE OF DEATH BUT ONCE.  )', 1, 2, '2023-02-26 03:54:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'COWARDS DIE MANY TIMES BEFORE THEIR DEATHS; THE VALIANT NEVER TASTE OF DEATH BUT ONCE.', '', '', '', ''),
(139, 'If a = 1 b= 2 y=25 z=26,     what is the code for 8, 5, 12, 12, 15 23,15,18,12,4 ', '1', '1', 'The answer is:  hello world ', 1, 2, '2023-02-26 03:57:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ' hello world', '', '', '', ''),
(140, 'If a = 1 b= 2 y=25 z=26,     what is the code for 8, 5, 12, 12, 15 23,15,18,12,4 ', '1', '1', 'The answer is:  hello world ', 1, 2, '2023-02-26 03:57:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ' hello world', '', '', '', ''),
(141, 'Decrypt the word ecguct ', '2', '1', 'The answer is:   Caesar ', 1, 2, '2023-02-26 03:59:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Caesar ', '', '', '', ''),
(142, 'What key do we need to make “CAESAR” become “MKOCKB”? ', 'Guess the key', '2', 'The answer is:   The key is 10. ', 1, 2, '2023-02-26 04:02:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'The key is 10. ', '', '', '', ''),
(143, 'Crack the following plaintext: “TRVJRI TZGYVIJ RIV HLZKV VRJP KF TIRTB”, What encryption key was used? ', 'Guess the key', '2', 'The answer is:   The key is 17', 1, 2, '2023-02-26 04:03:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'The key is 17.  ', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `FavuriteID` int(11) NOT NULL,
  `obj_id` int(11) DEFAULT NULL,
  `creatd_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `likeOrUnlike` varchar(255) NOT NULL DEFAULT 'unlike',
  `videoID` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `loginUsername` varchar(255) NOT NULL,
  `loginPassword` varchar(255) NOT NULL,
  `LoginGender` varchar(255) NOT NULL,
  `loginName` varchar(255) NOT NULL,
  `loginAge` int(255) NOT NULL,
  `loginLocation` varchar(255) NOT NULL,
  `loginStatue` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `middle`
--

CREATE TABLE `middle` (
  `usersID` int(11) NOT NULL,
  `statues` int(11) NOT NULL DEFAULT 0,
  `ChallengesID` int(11) NOT NULL,
  `middleID` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `middle`
--

INSERT INTO `middle` (`usersID`, `statues`, `ChallengesID`, `middleID`, `degree`, `correct`) VALUES
(25, 1, 118, 6236, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creatd_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `Text` text NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `email`, `user_id`, `creatd_in`, `Text`, `name`) VALUES
(51, 'haifamoshref@gmail.com', 22, '2023-02-26 04:07:17', 'asdfghjk', 'HaifaAlamri'),
(52, 'haifamoshref@gmail.com', 22, '2023-02-26 04:07:22', 'asdfghjk', 'HaifaAlamri'),
(54, 'haifa.almri28@gmail.com', 25, '2023-02-26 04:48:41', 'aasdf', 'haifaAlamri');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `creatd_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `creatd_in`) VALUES
(20, 'SarahMohammed', 'x.sa9903@gmail.com', '6910b977fb6dc104efc567261dd2f4f919594044', 'admin', '2023-02-26 01:59:24'),
(22, 'haifaalamri', 'haifamoshref@gmail.com', '1bcea4edf79f001423998bee1125842c15c6ab29', 'admin', '2023-02-26 02:18:33'),
(25, 'haifaAlamri', 'haifa.almri28@gmail.com', '1bcea4edf79f001423998bee1125842c15c6ab29', 'admin', '2023-02-26 04:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url` longtext NOT NULL,
  `algorithm_id` int(11) NOT NULL,
  `creatd_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `url`, `algorithm_id`, `creatd_in`) VALUES
(17, 'https://www.youtube.com/embed/tMa9lgYi20A', 1, '2023-01-28 15:23:11'),
(18, 'https://www.youtube.com/embed/JtbKh_12ctg', 1, '2023-01-28 15:24:51'),
(19, 'https://www.youtube.com/embed/na5rapg1XsI', 1, '2023-02-03 18:47:35'),
(27, 'https://www.youtube.com/embed/fR8rVR72a6o', 1, '2023-02-03 19:47:03'),
(28, 'https://www.youtube.com/embed/pIt4Q68J00A', 1, '2023-02-05 17:08:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algorithm`
--
ALTER TABLE `algorithm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `algorthimadvantages`
--
ALTER TABLE `algorthimadvantages`
  ADD PRIMARY KEY (`algorthimAdvantagesID`),
  ADD KEY `algorthimAdvantagesID` (`algorthimAdvantagesID`),
  ADD KEY `algorthimID` (`algorthimID`);

--
-- Indexes for table `algorthimdisadvantages`
--
ALTER TABLE `algorthimdisadvantages`
  ADD PRIMARY KEY (`disadvantagesID`),
  ADD KEY `disadvantagesID` (`disadvantagesID`),
  ADD KEY `algorthimID` (`algorthimID`);

--
-- Indexes for table `algorthimencrypt`
--
ALTER TABLE `algorthimencrypt`
  ADD PRIMARY KEY (`algorthimEncryptID`),
  ADD KEY `algorthimEncryptID` (`algorthimEncryptID`),
  ADD KEY `algorthimID` (`algorthimID`);

--
-- Indexes for table `algortihmdecrypt`
--
ALTER TABLE `algortihmdecrypt`
  ADD PRIMARY KEY (`algortihmDecryptID`),
  ADD KEY `algortihmDecryptID` (`algortihmDecryptID`),
  ADD KEY `algorthimID` (`algorthimID`);

--
-- Indexes for table `algortihmexample`
--
ALTER TABLE `algortihmexample`
  ADD PRIMARY KEY (`imgAlgorthimID`),
  ADD KEY `algorithmID` (`algorthimID`),
  ADD KEY `imgAlgorthimID` (`imgAlgorthimID`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`FavuriteID`),
  ADD KEY `videoID` (`videoID`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`),
  ADD UNIQUE KEY `loginUsername` (`loginUsername`),
  ADD UNIQUE KEY `loginPassword` (`loginPassword`),
  ADD KEY `loginID` (`loginID`);

--
-- Indexes for table `middle`
--
ALTER TABLE `middle`
  ADD PRIMARY KEY (`middleID`),
  ADD KEY `usersID` (`usersID`),
  ADD KEY `ChallengesID` (`ChallengesID`),
  ADD KEY `middleID` (`middleID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `algorithm`
--
ALTER TABLE `algorithm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `algorthimadvantages`
--
ALTER TABLE `algorthimadvantages`
  MODIFY `algorthimAdvantagesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `algorthimdisadvantages`
--
ALTER TABLE `algorthimdisadvantages`
  MODIFY `disadvantagesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `algorthimencrypt`
--
ALTER TABLE `algorthimencrypt`
  MODIFY `algorthimEncryptID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `algortihmdecrypt`
--
ALTER TABLE `algortihmdecrypt`
  MODIFY `algortihmDecryptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `algortihmexample`
--
ALTER TABLE `algortihmexample`
  MODIFY `imgAlgorthimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `FavuriteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `middle`
--
ALTER TABLE `middle`
  MODIFY `middleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6237;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `algorthimadvantages`
--
ALTER TABLE `algorthimadvantages`
  ADD CONSTRAINT `algorthimadvantages_ibfk_1` FOREIGN KEY (`algorthimID`) REFERENCES `algorithm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `algorthimdisadvantages`
--
ALTER TABLE `algorthimdisadvantages`
  ADD CONSTRAINT `algorthimdisadvantages_ibfk_1` FOREIGN KEY (`algorthimID`) REFERENCES `algorithm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `algorthimencrypt`
--
ALTER TABLE `algorthimencrypt`
  ADD CONSTRAINT `algorthimencrypt_ibfk_1` FOREIGN KEY (`algorthimID`) REFERENCES `algorithm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `algortihmdecrypt`
--
ALTER TABLE `algortihmdecrypt`
  ADD CONSTRAINT `algortihmdecrypt_ibfk_1` FOREIGN KEY (`algorthimID`) REFERENCES `algorithm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `algortihmexample`
--
ALTER TABLE `algortihmexample`
  ADD CONSTRAINT `algortihmexample_ibfk_1` FOREIGN KEY (`algorthimID`) REFERENCES `algorithm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`videoID`) REFERENCES `videos` (`id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `middle`
--
ALTER TABLE `middle`
  ADD CONSTRAINT `middle_ibfk_1` FOREIGN KEY (`usersID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `middle_ibfk_2` FOREIGN KEY (`ChallengesID`) REFERENCES `challenges` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
