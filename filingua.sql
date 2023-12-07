SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+08:00";


CREATE TABLE `tb_user` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `progress` int(3) NOT NULL,
  `profile_image_path` varchar(255) DEFAULT NULL,
  `AccType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_user` (`email`, `first_name`, `last_name`, `age`, `sex`, `password`, `progress`, `profile_image_path`, `AccType`) VALUES
('harvysdlc@gmail.com', 'harvy', 'soriano', 20, 'male', 'soriano22', 0, 'harvysdlc@gmail.com - 2023.12.03 - 11.58.49am.png', 'developer'),
('joshelland@gmail.com', 'Josh Elland', 'Sombrano', 21, 'male', 'ejsombrano', 0, NULL, 'developer');

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);
COMMIT;
