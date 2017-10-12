-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-12 08:06:55
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csdn`
--

-- --------------------------------------------------------

--
-- 表的结构 `csdntest`
--

CREATE TABLE IF NOT EXISTS `csdntest` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `csdntest`
--

INSERT INTO `csdntest` (`id`, `title`, `author`, `introduction`, `content`, `datetime`) VALUES
(18, 'eclipse项目导入到android studio中文乱码处理', '傲娇的我妻真白', '由于eclipse项目是gbk编码，Android studio默认用的是utf-8。', '由于eclipse项目是gbk编码，Android studio默认用的是utf-8。就会导致代码中的汉字，注释全部显示为乱码。解决方法：在module的bulid.gradle中加入；然后点击同步就成功了，注意，别加到project的bulid.gradle里去。', '2017-09-19 16:38:52'),
(19, '解决在eclipse中写ImageView时有警告的问题', '傲娇的我妻真白', 'Eclipse中写了一个android程序其中main.xml中ImageView哪行是个黄叹号！不知道为什么？', 'Eclipse中写了一个android程序其中main.xml中ImageView哪行是个黄叹号！不知道为什么？\n\n解决办法：\n\nandroid:contentDescription="@string/desc"　　加上这个属性就可以了。\n\n解答：\n\nandroid:contentDescription的作用是什么\n\n在写Android的XML布局文件时，在ImageView或ImageButton中经常会碰到一个提示:\n\nMissing contentDescription attribute on image.\n\n这个属性是做什么的呢？\n\n其实这个属性是方便一些生理功能有缺陷的人使用应用程序的。比如我们有一个ImageView里面放置一张颜色复杂的图片，可能一些色弱色盲的人，分不清这张图片中画的是什么东西。如果用户安装了辅助浏览工具比如TalkBack,TalkBack就会大声朗读出用户目前正在浏览的内容。TextView控件TalkBack可以直接读出里面的内容，但是ImageView TalkBack就只能去读contentDescription', '2017-09-19 16:40:43'),
(20, 'Design库-TabLayout属性详解', '自导自演的机器人', '上图是简书Android端的主页Tab,在其他的App中Tab也是很常见的，它的实现方式也有很多：TabHost，自定义控件（第三方库），RadioGroup等等。这里主要介绍Android Design库中的TabLayout的使用。', '1.什么是TabLayout\r\n\r\n在源码中给出了TabLayout的定义：\r\n意思很明显：TabLayout提供了一个水平的布局用来展示Tabs。\r\n\r\nDesign库：AS有直接的引用，如果是Eclipse这里提供一个通道-Design库\r\n在清单文件中设置如下代码即可：\r\n2.TabLayout的基本使用方式\r\n\r\n方式一：\r\n\r\n1.在布局中加入该控件：\r\n2.在代码中\r\n<android.support.design.widget.TabLayout\r\n\r\nandroid:layout_width="wrap_content"\r\n\r\nandroid:layout_height="wrap_content">\r\n\r\n<android.support.design.widget.TabItem\r\n\r\nandroid:layout_width="wrap_content"\r\n\r\nandroid:layout_height="wrap_content"\r\n\r\nandroid:text="Tab1"/>\r\n\r\n...\r\n\r\n</android.support.design.widget', '2017-10-12 13:36:13'),
(21, '工作环境配置及putty工具常见设置', '原创', 'Putty 工具主要是用于在 windows 环境下连接 linux 服务器的一个命令行工具，可以在此客户端中进行编译、svn代码修改 更新 提交等动作。LD主要是用它来干这个的。 工作环境的改变：', 'Putty 工具主要是用于在 windows 环境下连接 linux 服务器的一个命令行工具，可以在此客户端中进行编译、svn代码修改 更新 提交等动作。LD主要是用它来干这个的。\r\n工作环境的改变：\r\nBEFORE：\r\n    为毛不把代码下到本地来编译呢？早些年做功能机的时候确实是这样的。下载一份代码到本地，一两个小时过去了，再编译一遍，又一两小时过去了。如果不出错还好，一旦中间因为别人或者自己的修改导致编译出错，那么又需要重新编译，又需要一两个小时。所以大部分时间都耗在编译上，而正常工作基本上都要靠加班来完成。\r\n另外，在机器编译的时候很卡，几乎很难同时在机器上干其它事情。坏处三：由于机器磁盘空间有限（当时是160G），而工程代码量巨大，每check 下来几个工程磁盘就容易满了。这里又不得不删除掉其它老的工程代码。那叫一个痛苦啊！\r\nNOW：\r\n    现在LD的工作环境是这样配置的，当然一台电脑是必不可少的。那我们的代码是否就是在本地保存和管理呢，实际上不是的。LD所在的公司有一个服务器机房，每四个同事共用一台服务器，所有的代码都是放在服务器上。服务器安装的是 Ubuntu 版', '2017-10-12 13:37:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
