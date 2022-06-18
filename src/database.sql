SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Logs` (
  `id` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  `entry` varchar(255) NOT NULL,
  `type` enum('0','1') NOT NULL,
  `message` varchar(100) NOT NULL,
  `creationDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `Logs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;