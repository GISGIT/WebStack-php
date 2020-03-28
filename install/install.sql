/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.53 : Database - aizhuzhan
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aizhuzhan` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `azz_admin` */

DROP TABLE IF EXISTS `azz_admin`;

CREATE TABLE IF NOT EXISTS `azz_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` char(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `salt` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*Data for the table `azz_admin` */

LOCK TABLES `azz_admin` WRITE;

UNLOCK TABLES;

/*Table structure for table `azz_category` */

DROP TABLE IF EXISTS `azz_category`;

CREATE TABLE IF NOT EXISTS `azz_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(20) DEFAULT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL,
  `order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

/*Data for the table `azz_category` */

LOCK TABLES `azz_category` WRITE;

INSERT INTO `azz_category` (`id`, `name`, `seo_title`, `seo_keywords`, `seo_desc`, `isshow`, `order`) VALUES
(1, '栏目1', '栏目1', '', '', 1, 0),
(2, '栏目2', '栏目2', '', '', 1, 0),
(3, '栏目3', '栏目3', '', '', 1, 1),
(4, '栏目4', '栏目4', '', '', 1, 0);

UNLOCK TABLES;

/*Table structure for table `azz_contact` */

DROP TABLE IF EXISTS `azz_contact`;

CREATE TABLE IF NOT EXISTS `azz_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL,
  `order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

/*Data for the table `azz_contact` */

LOCK TABLES `azz_contact` WRITE;

INSERT INTO `azz_contact` (`id`, `title`, `image`, `desc`, `isshow`, `order`) VALUES
(1, '官方微信公众号', '/upload/20181021/6f983fc03eec482e39bc233c2071b1fa.jpg', '简介简介简介简介简介', 1, 0),
(2, '官方微信客服', '/upload/20181021/0edb5a11dd8060d594670b468c13ac61.jpg', '简介简介简介简介简介', 1, 0);

UNLOCK TABLES;

/*Table structure for table `azz_friendlinks` */

DROP TABLE IF EXISTS `azz_friendlinks`;

CREATE TABLE IF NOT EXISTS `azz_friendlinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pubtime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL,
  `order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*Data for the table `azz_friendlinks` */

LOCK TABLES `azz_friendlinks` WRITE;

INSERT INTO `azz_friendlinks` (`id`, `name`, `url`, `pubtime`, `isshow`, `order`) VALUES
(1, '官方淘宝店铺', 'http://www.zzlzl.com', 1540131523, 1, 0);

UNLOCK TABLES;

/*Table structure for table `azz_kuaixun` */

DROP TABLE IF EXISTS `azz_kuaixun`;

CREATE TABLE IF NOT EXISTS `azz_kuaixun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `info` tinytext,
  `keywords` char(255) DEFAULT NULL,
  `pubtime` int(10) NOT NULL,
  `isRec` tinyint(1) NOT NULL,
  `isshow` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

/*Data for the table `azz_kuaixun` */

LOCK TABLES `azz_kuaixun` WRITE;

INSERT INTO `azz_kuaixun` (`id`, `title`, `info`, `keywords`, `pubtime`, `isRec`, `isshow`) VALUES
(1, '快讯1快讯1快讯1快讯1快讯1快讯1', '快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1快讯1', '', 1540130331, 1, 1),
(2, '快讯2快讯2快讯2快讯2快讯2快讯2快讯2', '快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快讯2快', '', 1540130346, 1, 1),
(3, '快讯3快讯3快讯3快讯3快讯3', '快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快讯3快', '', 1540130416, 0, 1),
(4, '快讯4快讯4快讯4快讯4快讯4', '快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快讯4快', '', 1540130407, 1, 1),
(5, '快讯5快讯5快讯5快讯5', '快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快讯5快', '', 1540130402, 1, 1);

UNLOCK TABLES;

/*Table structure for table `azz_news` */

DROP TABLE IF EXISTS `azz_news`;

CREATE TABLE IF NOT EXISTS `azz_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `content` text,
  `pubtime` int(10) NOT NULL,
  `isRec` tinyint(1) NOT NULL,
  `isshow` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

/*Data for the table `azz_news` */

LOCK TABLES `azz_news` WRITE;

INSERT INTO `azz_news` (`id`, `title`, `image`, `keywords`, `desc`, `content`, `pubtime`, `isRec`, `isshow`) VALUES
(1, '资讯1资讯1资讯1资讯1资讯1', '', '', '', '<p>资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1</p>', 1540133962, 1, 1),
(2, '资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1', '', '', '', '<p>资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1</p>', 1540134031, 1, 1),
(3, '资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1', '', '', '', '<p>资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1资讯1</p>', 1540134026, 1, 1),
(4, ' 2018世界VR产业大会 马云、诺贝尔物理学奖得主乔治·斯穆特亮相现场', '/upload/20181022/4792aac3a73af21529f411a76b7427a6.jpeg', '', '10月19日-21日在江西南昌召开的2018世界VR产业大会，可以说是集江西省全省之力。整个城市的标语中无处不在宣传着VR的理念。不仅如此，还有强大的卡司阵容，除了VR行业内的大咖外，阿里巴巴马云、诺贝尔物理学奖得主乔治·斯穆特等等都亮相现场。但最强大的卡司，还是那篇刷遍朋友圈的致辞。', '<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">10月19日-21日在江西南昌召开的2018世界<a href="http://www.ikanchai.com/vr/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">VR</a>产业大会，可以说是集江西省全省之力。整个城市的标语中无处不在宣传着VR的理念。不仅如此，还有强大的卡司阵容，除了VR行业内的大咖外，阿里巴巴<a href="http://app.ikanchai.com/tags.php?tag=%E9%A9%AC%E4%BA%91" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">马云</a>、诺贝尔物理学奖得主乔治·斯穆特等等都亮相现场。但最强大的卡司，还是那篇刷遍朋友圈的致辞。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">这场大会以“VR让世界更精彩”为主题，包括了多场论坛及VR大赛等活动。展会面向普通观众，则在传播VR的事业中起到了重要作用。所以我们暂且抛开会议，单独聊聊这次展会，聊聊展会上的新朋友和旧朋友。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">好像都看过了。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">这是在观看AR相关展品时的印象。经历过最初的VR、AR发展高峰期后，从事于AR的硬件厂商数来数去也就那么几家。唯一还会让人感到意外的可能就是此前参展露脸次数较少的外国厂商了。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但是我们还是不妨先说说那几家AR厂商。联想在其中可能算是比较具备代表性了。很早之前，联想就推出了Mirage AR头显，那套带光剑的设备让人瞬间穿越到星球大战的世界里。甚至连内容也与星球大战有关。此后我们时常看到MirageAR头显亮相各种场合，每一次都让体验者看起来像是尤达大师交出来的学生。这次也不例外。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171711912916.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">接下来是影创。影创在展会上再次展出了Action One MR眼镜。这款设备有着手势识别操作、语音控制等功能。机身也十分轻便。仅有的3个操作按钮也使得操作极简化。Action One还配备了一只支持6DoF的手柄，这也是我们见过的最轻的手柄。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171712984678.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">很多厂商都在做To B的设备，但是面向工业的AR眼镜却很少去做。0glass可以看做是当前切入这一领域的佼佼者。在这次展会上，江铃<a href="http://auto.ikanchai.com/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">汽车</a>集团将0glass AR工业解决方案应用于江西五十铃发动机有限公司的发动机装配过程。开发出的发动机装配AR工作辅助系统，最终实现了装配工序中的零缺陷目标。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171713923729.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">在现场还有一个比较特殊的AR厂商——灵犀AR。说特殊是因为虽然它在现场展示了AR眼镜，事实上它并非AR眼镜制造商。他们瞄准的是光学模组。灵犀AR为B端用户提供光学模组的技术解决方案。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">除了国内厂商外，来自美国的Dreamworld也带来了一款AR眼镜设备。这款Dreamworld设备宣称有高达90度的FOV。并且相比1万+的HoloLens，它的价格只有2000+。在实际体验过程中，无论是视场角还是流明都呈现出较好的状态，手势识别操作也较为成功。这款设备有意思的一个地方在于，它除了接入PC进行计算处理外，也可以接入<a href="http://news.ikanchai.com/mobile/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">手机</a>进行相关运算，可以说是比较易于携带了。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171714169528.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但是也并不总是AR。也有厂商在现场带来了7D的体验，但是很难将其归类。以至于体验者在离开时念叨称“这不就是3D眼镜吗？”事实上，习惯侏罗纪公园的人群早已对此免疫。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171714140089.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">在VR不再被看好的时候，AR似乎更有操作的空间。但是不知道是当前技术发展受限，还是受制于市场环境，AR眼镜厂商似乎并没有带来太多让人眼前一亮的东西。发展的速度似乎停顿了下来。当然，这其中也可能孕育着革新，毕竟要想拿出更为成熟的产品，就需要等待。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">VR厂商可能是变化得最快的一批了。从最初的PC VR头显，到移动VR头显，设备的形态在变化，人们探索新生事物的激情却没有变化。一个比较有意思的环节或许并不在某个具体的展位中，而是充斥在展会中。以往各个展位都会看到的标志性的HTC Vive，如今并没有褪去光辉的外衣。但是继PC VR头显后，移动VR头显充斥在展会中，抬眼望去Pico Goblin/Pico Neo比比皆是。此外，Nolo的控制设备也充斥在展会中。这多少表明了人们对VR头显的期望，希望它是便携的可移动的，也希望它是可双手6自由度操作的。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171715206228.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">还是让我们回到具体的展位。参观者无疑是最好奇的那群人，所以可以说展会本身起着科普的作用。我们并不能要求面向C端的展会太多东西，所以球幕是可接受的，“天文望远镜”式的VR眼镜是有趣的。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171716111555.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">大多数设备厂商仍旧在围绕HTC Vive做拓展，这样的设备在展会上也相当吃香，往往排起了长队。但拓展的变化是很小的。对于HTC来说，在Facebook推出真正的6DoF头显后，HTC显然不会坐以待毙。所以更有可能的是即将如法炮制，至于结果，就静待HTC公布了。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但是对于专业观众来说，这些显然是不够的。HTC的展会上，威爱教育就推出了多项面向B端的解决方案。除了用于VR教育外，也有汽车维修等内容。这样的VR教育培训厂商在展会上并不占少数。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171716177805.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">我们显然也不会跳过华为这个在5G领域的佼佼者。在大会现场华为展示了多项解决方案，包括VR智能分片技术（可以将其视为注视点渲染技术的变体），华为将其运用在了8K全景视频的播放上；此外华为推出了Huawei VR Engine，全面兼容ureal、unity的插件。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171717174751.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">比较有意思的是华为指出的云VR以来，在现场采用的是Pico Neo的设备。华为虽然展示了华为VR2，但是这是一款需要连接PC，由PC提供计算的设备。但是Pico Neo则是一款独立的VR一体机。但这就是云吗？答案显然是错的。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171718158990.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">真正的答案在另外一家名为视博云的厂商手中。视博云<a href="http://www.ikanchai.com/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">科技</a>是一家专注云流化、云渲染技术的技术厂商，一直在推动着两项技术在运营商和<a href="http://news.ikanchai.com/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">互联网</a>领域的应用。而华为云VR则得益于视博云。在这次展会上，视博云带来的就是云VR的技术解决方案。这也可能让我们有机会最终体验到云VR带来的设备降价、体验升级的效果。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">在这些解决方案中，大空间显然不会过时。似乎它们并没有因为STEAM基站2.0版本的出现就宣告消失，各家厂商都还在用力地活着。PC背包+大空间定位方案，让消费者能够愉快地在虚拟环境中奔跑——这样的案例我们在此次展会上看到很多。对于他们来说，将面对的永远是一个强劲的对手——更强大的基站。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171719956039.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">有了这些精彩的解决方案，还要解决的问题显然是如何分享。日本厂商理光在大会上带阿里了两款全景拍摄设备、国内厂商看到科技也带来了一些全景拍摄设备。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171719184306.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但真正要解决的显然是全景录播、全景直播的问题，有意思的是，在展会现场，有厂商提供了一个价值不菲的解决方案。在擂台中央安装有全景相机，在舞台周围则有序地间隔排列着一堆照相机。这多少说明全景相机存在局限。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但是VR/AR/AI技术显然正在照进现实，不管它是以何种方式实现的。在现场，阿里云展示了其智能穿衣镜。当用户站在它面前，体型身材样貌都会被复刻到镜面中去，随后便可挑选相关衣物，并进行结单清算。想象一下，当你头戴VR/AR眼镜，同样的方式会是什么样的效果。而这样的未来正在到来。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><img src="/ueditor/php/upload/image/20181022/1540171720124151.jpeg"/></p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">Via 零镜网</p><p><br/></p>', 1540171749, 1, 1),
(5, '科大讯飞坚决表示未涉足房地产，但疑点太多，坑难填', '/upload/20181022/8dd729410897e93a7cac7455fdf216ab.jpg', '', '经济观察网 记者 冯庆艳 实习记者 赵喆 成立19年、上市10周年的科大讯飞，以AI第一股自居，却遭央视《东方时空》栏目报道其假借“产业研发和培训基地”之名，实则暗箱操作，搞起了地产生意。', '<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);"><a href="http://finance.ikanchai.com/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">经济</a>观察网 记者 冯庆艳 实习记者 赵喆 成立19年、上市10周年的科大讯飞，以AI第一股自居，却遭央视《东方时空》栏目报道其假借“产业研发和培训基地”之名，实则暗箱操作，搞起了地产生意。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">受“地产门”影响，科大讯飞16日股价跌停，从开盘价下跌10.02%，每股20.30元。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">10月12日，科大讯飞被央视点名，央视《东方时空》栏目报道了安徽省宣城市扬子鳄国家级自然保护区被违规侵占的现象，该事件涉及泾县经济开发区内的200多家企业和机构。在数百家企业中，为何偏偏只有科大讯飞被点名，被推到了风口浪尖？概之于科大讯飞观塘培训基地，假借“产业研发和培训基地”之名，实则暗箱操作，搞起了地产生意。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">科大讯飞在语音技术核心研究和产业化方面的成绩，吸引了社会各界和国家层面的关注和肯定，被《麻省理工<a href="http://www.ikanchai.com/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">科技</a>评论》称为“中国版的Siri”，跻身“2017年度全球50大最聪明公司”榜单第6位，是中国9家入榜公司的榜首，远远领先于腾讯（第8位）、阿里巴巴（第41位）、蚂蚁金服（第49位）和百度（第50位）等公司。然而开发出色人工智能翻译器的科大讯飞，却在飞的高时狠狠跌了一跤。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">科大讯飞的泾县研发中心项目始于2013年底，据泾县人民政府网站介绍，该项目由科大讯飞信息科技股份有限公司<a href="http://www.ikanchai.com/start/" target="_blank" style="box-sizing: border-box; background: 0px 0px; color: rgb(51, 51, 51); text-decoration-line: none; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1) 0s; margin: 0px; padding: 0px; cursor: pointer;">投资</a>建设，占地60亩，建筑面积2.5万平方米，总投资1.2亿元，主要建设集智能语音技术研发、高端人才培训为一体的IT产业研发中心及配套服务中心。该项目共分为两期，一期主要建设培训中心、酒店等；二期主要建设研发中心，主要建设集智能语音技术研发、高端人才培训为一体的IT产业研发中心及配套服务中心。项目建成后，将有力扩大本地科技辐射面，增强自主创新能力，积聚高端智力人才，对提升开发区综合经济实力和科技服务水平起到十分重要的作用。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">央视消息称，科大讯飞所在的安徽省宣城市泾县经济开发区长期违规侵占安徽扬子鳄国家级自然保护区双坑片区核心区土地近300公顷，据严重破坏了扬子鳄的栖息环境。根据遥感监测报告显示，安徽扬子鳄国家级自然保护区存在58处人类活动变化，其中16个遥感监测位点处于核心区。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">此次央视对科大讯飞的点名，主要围绕三大“问题”：</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（1）违规侵占扬子鳄国家级自然保护区；</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（2）经中央环保督察组督查后仍不收手，继续建设和运营；</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（3）打着AI的旗号搞“地产生意”，骗取国家资源，“空手套白狼”。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">经央视曝光后，科大讯飞在官方微博迅速作出了回应。科大讯飞在声明中表示，其观塘基地建设流程规范、审批手续齐全，公司对该经济开发区位于扬子鳄国家级自然保护区并不知情，并且在科大讯飞入驻前，开发区内已有200多家企业和机构。位于观塘科技岛的研发中心是作为支援革命老区经济建设和扶贫工作的招商引资项目。观塘科技岛是讯飞子公司设立在泾县经济开发区内的IT产业研发中心，并非地产项目。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">科大讯飞在公告中还表示，为减少浪费、提升使用效率，科大讯飞观塘基地在工商审批许可后对外公开经营，对政府、企业和个人统一收费。这大概也是对央视记者前往基地调查时，发现该基地正在组织安徽省宣传工作培训班，客房紧张的回应。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">科大讯飞回应的重点在于三个方面：</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（1）对于观塘基地位于国家自然保护区内不知情；</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（2）观塘基地为IT产业研发和培训中心，并非地产项目；但为了避免资源浪费，已将基地对外公开经营；</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">（3）现已将公司停止运营，接受整改。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">但科大讯飞的回应依然不能满足外界对其的质疑，央视节目曝光的工作人员回应中“这里环境好，科大讯飞培训基地住的是政府（县、省政府）的开会人员”、“开两个月的会”该作如何解释？如果是以研发中心为主，为何大部分时间基地用于服务政府开会，那么该基地到底是IT研发中心，还是供机关开会、疗养的地产项目？</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">早在9月，中央环保督察组就因基地队自然保护区的破坏进行督查，并约谈相关省市主要负责人以及林业负责人，何谓对于基地所处国家自然保护区内不知情？若不知情为真，则实属公司管理上的疏漏。。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">如果说此前的同传丑闻事件，让科大讯飞在AI产业上丢了一次人，此次的侵占国家自然保护区和按搞地产生意，可以说性质更加严重。科大讯飞的“地产门”也不禁令人叹息，似乎不少中国企业做大了之后依然难以跳出旧时“圈地”的“怪圈”，难以持续做滚雪球式的资本积累。</p><p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 15px 0px; color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; white-space: normal; background-color: rgb(255, 255, 255);">由于高新科技产业对环境造成的污染较低，且对当地经济有中重要的推动作用，各地政府对于该类产业十分欢迎，并给予大力支持，因此，这类产业相比其他产业也能获得更多的资源，但如果借此打起了自己的“小算盘”，损害公共利益，则必定会受到制裁。</p><p><br/></p>', 1540169709, 1, 1);

UNLOCK TABLES;

/*Table structure for table `azz_seo` */

DROP TABLE IF EXISTS `azz_seo`;

CREATE TABLE IF NOT EXISTS `azz_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT NULL,
  `mark` char(20) DEFAULT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

/*Data for the table `azz_seo` */

LOCK TABLES `azz_seo` WRITE;

INSERT INTO `azz_seo` (`id`, `name`, `mark`, `seo_title`, `seo_keywords`, `seo_desc`) VALUES
(1, 'PC端首页', 'pc_index', '演示站点', '演示站点', '演示站点'),
(2, 'PC端快讯', 'pc_kuaixun', '演示站点', '演示站点', '演示站点'),
(3, '手机端快讯', 'm_kuaixun', '演示站点', '演示站点', '演示站点'),
(4, 'PC端资讯', 'pc_news', '演示站点', '演示站点', '演示站点'),
(5, '手机端新闻', 'm_news', '演示站点', '演示站点', '演示站点'),
(6, '手机端微信', 'm_wechat', '演示站点', '演示站点', '演示站点'),
(7, '手机端首页', 'm_index', '演示站点', '演示站点', '演示站点');

UNLOCK TABLES;

/*Table structure for table `azz_sysconfig` */

DROP TABLE IF EXISTS `azz_sysconfig`;

CREATE TABLE IF NOT EXISTS `azz_sysconfig` (
  `varname` varchar(255) DEFAULT NULL,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `azz_sysconfig` */

LOCK TABLES `azz_sysconfig` WRITE;

INSERT INTO `azz_sysconfig` (`varname`, `value`) VALUES
('webname', '演示站点'),
('web_sort', '专业导航'),
('weburl', '004.com'),
('logourl', '/static/images/logo.png'),
('imagesurl', '/upload/'),
('murl', 'm.004.com'),
('now_version', '1.0.0'),
('mbanquan', 'Copyright © 2018-2020 All Rights Reserved.'),
('mlogourl', '/static/images/logo.png'),
('hotkey', '热搜词1,热搜词2');

UNLOCK TABLES;

/*Table structure for table `azz_website` */

DROP TABLE IF EXISTS `azz_website`;

CREATE TABLE IF NOT EXISTS `azz_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `bgimg` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parameter` text,
  `keywords` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `info` text,
  `pubtime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL,
  `isRec` tinyint(1) NOT NULL,
  `view_num` int(11) NOT NULL,
  `order` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

/*Data for the table `azz_website` */

LOCK TABLES `azz_website` WRITE;

INSERT INTO `azz_website` (`id`, `cid`, `name`, `color`, `bgimg`, `image`, `parameter`, `keywords`, `desc`, `info`, `pubtime`, `isshow`, `isRec`, `view_num`, `order`) VALUES
(1, 4, 'Fotor懒设计', '#d63333', '', '/upload/20181021/e39b1028ea8f9fbb3fef57e49efa4f63.png', 'a:2:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:24:"https://www.fotor.com.cn";}i:1;a:3:{s:6:"ptitle";s:12:"网站语言";s:5:"pname";s:6:"中文";s:4:"purl";s:0:"";}}', '', '推荐！免费的在线设计神器，10秒做出精美图', '<p>Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计Fotor懒设计</p>', 1540130831, 1, 1, 0, 0),
(2, 4, 'png素材库', '', '', '/upload/20181021/d6c02b704f7957fe71e23fe96cad9c48.png', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:18:"http://pngimg.com/";}}', '', '', '', 1540131777, 1, 1, 0, 0),
(3, 4, '百度', '', '', '', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:21:"https://www.baidu.com";}}', '', '', '', 1540132461, 1, 0, 0, 0),
(4, 4, '链助理', '#1e9fff', '/upload/20181021/9f19d0a78cd061589214c40046b54e96.jpg', '/upload/20181021/fc7c0313fdd77fbf299bf59148563978.jpg', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:0:"";}}', '', '链助理是一个专业提供数字货币行情分析的平台，提供区块链虚拟货币大数据分析，实时获取第三方平台数据，为数字货币用户提供数据分析。', '<p><span style="color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, simsun, &quot;arial narrow&quot;; font-size: 14px; background-color: rgb(255, 255, 255);">链助理是一个专业提供数字货币行情分析的平台，提供区块链虚拟货币大数据分析，实时获取第三方平台数据，为数字货币用户提供数据分析。</span></p>', 1540132112, 1, 1, 0, 0),
(5, 3, '共享财经', '', '', '/upload/20181021/caa3683795b4321e685b3d737cb72261.jpg', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:0:"";}}', '', '', '', 1540132167, 1, 0, 0, 0),
(6, 3, '巴比特', '', '', '/upload/20181021/21ac00afc012bd58de28cc5d34b7ce5d.jpg', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:0:"";}}', '', '', '', 1540132430, 1, 0, 0, 0),
(7, 3, 'EARTH', '', '', '/upload/20181021/fc297ff4f19f6bd76d7de29d847c59b6.png', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:23:"http://earth-token.com/";}}', '', '', '', 1540132292, 1, 1, 0, 0),
(8, 3, 'BCH', '', '', '/upload/20181021/3140b9301d57b77de47b21ebb2589956.png', 'a:1:{i:0;a:3:{s:6:"ptitle";s:12:"首页网址";s:5:"pname";s:6:"链接";s:4:"purl";s:0:"";}}', '', '', '', 1540132521, 1, 0, 0, 0);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
