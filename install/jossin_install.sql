
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` varchar(50) NOT NULL,
  `content_text` text NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `content` (`content_id`, `content_name`, `content_text`) VALUES
(1, 'homePage', 'Text may refer to: hkhkjgkjgkjkjhkgjjkhkjText (journal), an academic journal of language, discourse, and communication studies; Text (literary theory), any object that can beeee '),
(2, '', 'test@email.commm'),
(3, 'phone', '+44 23674599'),
(4, '', '');

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `activated` int(1) NOT NULL DEFAULT '0',
  `confirmation` varchar(35) NOT NULL,
  `reg_date` int(11) NOT NULL,
  `last_login` int(11) NOT NULL DEFAULT '0',
  `group_id` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `activated`, `confirmation`, `reg_date`, `last_login`, `group_id`) VALUES
(1, 'qwe123QWE', '202cb962ac59075b964b07152d234b70', 'qwe123QWE', 1, 'qwe123QWE', 0, 1400498945, 1);
