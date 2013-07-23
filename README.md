CI Base - a good place to start a project
==================

Just a good starting point for a Codeigniter project. Database with users and user_profiles table needed for the user registration component.


SQL
==================
SQL for users and user_profiles

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


CREATE TABLE `user_profiles` (
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_bio` text,
  `join_date` tinytext,
  `user_image` tinytext,
  KEY `username` (`username`),
  CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

