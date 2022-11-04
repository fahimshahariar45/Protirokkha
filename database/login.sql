

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
   `mobile` int(11) NOT NULL,
   `nid` int(11) NOT NULL,
   `dicease` varchar(255) NOT NULL,
   `center` varchar(255) NOT NULL,
   `does` varchar(255) NOT NULL,
   `SecondDoes` varchar(255) NOT NULL,
   `birth` varchar(255) NOT NULL,
   
  `code` text NOT NULL

  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

