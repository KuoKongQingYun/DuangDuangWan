-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 10 日 00:44
-- 服务器版本: 5.6.19
-- PHP 版本: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `duangduangwan`
--

-- --------------------------------------------------------

--
-- 表的结构 `ddw_comment`
--

CREATE TABLE IF NOT EXISTS `ddw_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '注释id',
  `userid` int(11) NOT NULL COMMENT '用户id',
  `videoid` int(11) NOT NULL COMMENT '视频id',
  `content` text NOT NULL COMMENT '评论内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `ddw_user`
--

CREATE TABLE IF NOT EXISTS `ddw_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(20) DEFAULT NULL COMMENT '用户名',
  `email` varchar(256) NOT NULL COMMENT '邮箱',
  `password` varchar(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `ddw_user`
--

INSERT INTO `ddw_user` (`id`, `name`, `email`, `password`) VALUES
(22, '阔空晴云', '609898048@qq.com', '827732b9faf63e2223ef6639a20c8ece');

-- --------------------------------------------------------

--
-- 表的结构 `ddw_video`
--

CREATE TABLE IF NOT EXISTS `ddw_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频ID',
  `pid` int(11) NOT NULL COMMENT '父ID',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `title` varchar(32) NOT NULL COMMENT '视频名称',
  `description` text NOT NULL COMMENT '描述',
  `vid` varchar(20) NOT NULL COMMENT '优酷id',
  `likes` int(11) NOT NULL COMMENT '点赞数',
  `type` int(2) NOT NULL COMMENT '类型,0:代表公开项目;1:用户公开项目;2:用户公开项目',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `ddw_video`
--

INSERT INTO `ddw_video` (`id`, `pid`, `uid`, `title`, `description`, `vid`, `likes`, `type`) VALUES
(4, 0, 22, 'test', '测试视频1', 'XMTMwNTUzNDA3Mg==', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
