--
-- 数据库: `rjphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `userpass` varchar(255) DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `userpass`, `create_time`) VALUES
(1, 'zhang', 'e10adc3949ba59abbe56e057f20f883e', 1451515405),
(2, 'zhang2', 'e10adc3949ba59abbe56e057f20f883e', 1451515406),
(3, 'zhang3', 'e10adc3949ba59abbe56e057f20f883e', 1451515407),
(4, 'zhang4', 'e10adc3949ba59abbe56e057f20f883e', 1451515408),
(5, 'zhang5', 'e10adc3949ba59abbe56e057f20f883e', 1451515409);