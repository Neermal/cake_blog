
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `body` text COLLATE ascii_bin,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2014-02-19 14:08:51', NULL),
(2, 'A title once again', 'And the post body follows.', '2014-02-19 14:08:52', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2014-02-19 14:08:52', NULL),
(4, 'Test', 'Test', '2014-04-20 16:23:35', '2014-04-20 16:23:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



IcakephAlTAAZbL

https://Neermal@icakephp.scm.azurewebsites.net:443/Icakephp.git
https://Neermal@caker.scm.azurewebsites.net:443/cakeR.git