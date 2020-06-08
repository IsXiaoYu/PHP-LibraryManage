-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: library_info
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book_info`
--

DROP TABLE IF EXISTS `book_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `book_info` (
  `book_id` varchar(10) NOT NULL COMMENT '图书号',
  `book_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '书名',
  `author` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '作者',
  `book_state` enum('在馆','不在馆') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '在馆' COMMENT '图书状态',
  `publisher` varchar(17) NOT NULL COMMENT '出版社',
  `publication_date` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '出版时间',
  `price` float(10,2) NOT NULL COMMENT '价格',
  `isbn` char(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'ISBN',
  `synopsis` text NOT NULL COMMENT '作品简介',
  `borrower` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '借阅人',
  `restore_date` date DEFAULT NULL COMMENT '截止日期',
  `borrower_sno` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '借阅人学号',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_info`
--

LOCK TABLES `book_info` WRITE;
/*!40000 ALTER TABLE `book_info` DISABLE KEYS */;
INSERT INTO `book_info` VALUES ('jsj001','PHP从入门到精通（第4版）','明日科技','不在馆','清华大学出版社','2017年06月',63.00,'9787302457220','   《php从入门到精通（第4版）》从初学者角度出发，通过通俗易懂的语言、丰富多彩的实例，详细介绍了使用PHP进行网络开发应该掌握的各方面技术。《php从入门到精通（第4版）》共分4篇25章，其中，基础知识篇包括初识PHP、PHP环境搭建和开发工具、PHP语言基础、流程控制语句、字符串操作、正则表达式、PHP数组、PHP与Web页面交互、PHP与JavaScript交互、日期和时间；核心技术篇包括Cookie与Session、图形图像处理技术、文件系统、面向对象、PHP加密技术、MySQL数据库基础、phpMyAdmin图形化管理工具、PHP操作MySQL数据库、PDO数据库抽象层、ThinkPHP框架；高级应用篇包括Smarty模板技术、PHP与XML技术、PHP与Ajax技术；项目实战篇包括应用Smarty模板开发电子商务网站、应用ThinkPHP框架开发明日导航网等内容。书中所有知识都结合具体实例进行介绍，涉及的程序代码均附以详细的注释，可以使读者轻松领会PHP程序开发的精髓，快速提高开发技能。 《php从入门到精通（第4版）》适合作为软件开发入门者的自学用书，也适合作为高等院校相关专业的教学参考书，也可供开发人员查阅、参考。','xiaoyu','2020-06-10','2350170102'),('jsj002','PHP Web安全开发实战','汤青松','在馆','清华大学出版社','2018年09月',46.60,'9787302511274','暂无',NULL,NULL,NULL),('jsj003','Java从入门到精通（第5版）','明日科技','在馆','清华大学出版社','2019年03月',55.10,'9787302517597','《Java从入门到精通（第5版）》从初学者角度出发，通过通俗易懂的语言、丰富多彩的实例，详细介绍了使用Java语言进行程序开发需要掌握的知识。全书分为27章，包括初识Java，熟悉Eclipse开发工具，Java语言基础，流程控制，字符串，数组，类和对象，包装类，数字处理类，接口、继承与多态，类的高级特性，异常处理，Swing程序设计，集合类，I/O（输入/输出），反射，枚举类型与泛型，多线程，网络通信，数据库操作，Swing表格组件，Swing树组件，Swing其他高级组件，高级事件处理，AWT绘图，奔跑吧小恐龙和企业进销存管理系统等。',NULL,NULL,NULL),('jsj004',' Java Web从入门到精通（第3版）','明日科技','在馆','清华大学出版社','2019年06月',55.00,'9787302528036','《Java Web从入门到精通（第3版）》从初学者角度出发，通过通俗易懂的语言、丰富多彩的实例，详细介绍了进行Java Web应用程序开发需要掌握的各方面技术。全书共分21章，包括Java Web应用开发概述、HTML与CSS网页开发基础、JavaScript脚本语言、搭建开发环境、JSP基本语法、JSP内置对象、JavaBean技术、Servlet技术、过滤器和监听器、Java Web的数据库操作、EL（表达式语言）、JSTL标签、Ajax技术、Struts2基础、Struts2高级技术、Hibernate技术、Hibernate高级应用、Spring核心之IoC、Spring核心之AOP、SSM框架整合开发、九宫格记忆网等内容。本书所有知识都结合具体实例进行介绍，涉及的程序代码给出了详细的注释，可以使读者轻松领会Java Web应用程序开发的精髓，快速提高开发技能。',NULL,NULL,NULL),('mz001','红楼梦','曹雪芹','在馆','人民文学出版社','2013年01月',37.90,'9787020002207','本书是一部具有高度思想性和高度艺术性的伟大作品，从本书反映的思想倾向来看，作者具有初步的民主主义思想，他对现实社会包括宫廷及官场的黑暗，封建贵族阶级及其家庭的腐朽，封建的科举制度、婚姻制度、奴婢制度、等级制度，以及与此相适应的社会统治思想即孔孟之道和程朱理学、社会道德观念等等，都进行了深刻的批判并且提出了朦胧的带有初步民主主义性质的理想和主张。这些理想和主张正是当时正在滋长的资本主义经济萌芽因素的曲折反映。',NULL,NULL,NULL),('mz002','水浒传','施耐庵、罗贯中','在馆','人民文学出版社','2004年09月',32.89,'9787020008742','水浒传》是一部长篇英雄传奇，是中国古代长篇小说的代表作之一，是以宋江起义故事为线索创作出来的。宋江起义发生在北宋徽宗时期，《宋史》的《徽宗本纪》、《侯蒙传》、《张叔夜传》等都有记载。从南宋起，宋江起义的故事就在民间流传，《醉翁谈录》记载了一些独立的有关水浒英雄的传说，《大宋宣和遗事》把许多水浒故事联缀起来，和长篇小说已经很接近。元代出现了不少水浒戏，一批梁山英雄作为舞台形象出现。《水浒传》是宋江起义故事在民间长期流传基础上产生出来的，吸收了民间文学的营养。 《水浒传》是我国人民最喜爱的古典长篇白话小说之一。它产生于明代，是在宋、元以来有关水浒的故事、话本、戏曲的基础上，由作者加工整理、创作而成的。全书以宋江领导的农民起义为主要题材，艺术地再现了中国古代人民反抗压迫、英勇斗争的悲壮画卷。作品充分暴露了封建统治阶级的腐朽和残暴，揭露了当时尖锐对立的社会矛盾和“官逼民反”的残酷现实，成功地塑造了鲁智深、李逵、武松、林冲、阮小七等一批英雄人物。小说故事情节曲折，语言生动，人物性格鲜明，具有高度的艺术成就。但作品歌颂、美化宋江，鼓吹“忠义”和“替天行道”，表现出严重的思想局限。',NULL,NULL,NULL),('mz003','西游记','吴承恩','在馆','人民文学出版社','2010年10月',30.68,'9787020008735','全书主要描写了孙悟空出世及大闹天宫后，遇见了唐僧、猪八戒、沙僧和白龙马，西行取经，一路上历经艰险、降妖伏魔，经历了九九八十一难，终于到达西天见到如来佛祖，最终五圣成真的故事。该小说以“唐僧取经”这一历史事件为蓝本，通过作者的艺术加工，深刻地描绘了明代社会现实。','',NULL,''),('mz004','三国演义','罗贯中','在馆','人民文学出版社','2010年09月',25.68,'9787020008728','《三国演义》描写了从东汉末年到西晋初年之间近百年的历史风云，以描写战争为主，诉说了东汉末年的群雄割据混战和魏、蜀、吴三国之间的政治和军事斗争，最终司马炎一统三国，建立晋朝的故事。反映了三国时代各类社会斗争与矛盾的转化，并概括了这一时代的历史巨变，塑造了一群叱咤风云的三国英雄人物。','',NULL,NULL),('wgwx001','偷影子的人','马克·李维（Marc Levy）','在馆','湖南文艺出版社','2018年04月',27.40,'9787540485214','一个老是受班上同学欺负的瘦弱小男孩，因为拥有一种特殊能力而强大：他能“偷别人的影子”，因而能看见他人心事，听见人们口中不愿意说出口的秘密。他开始成为需要帮助者的心灵伙伴，为每个偷来的影子找出点亮生命的小小光芒。 某年灿烂的夏天，他在海边邂逅了一位又聋又哑的女孩。他该如何用自己的能力帮助她？他将如何信守与她共许的承诺？',NULL,NULL,NULL),('wgwx002','柳林风声','[英]肯尼斯格雷厄姆著；[英]大卫罗伯茨绘；杨静远译','不在馆','贵州人民出版社','2013年08月',77.40,'9787221111999','  在风光旖旎的泰晤士河畔，住着四个要好的朋友——憨厚的鼹鼠、机灵的河鼠、狂妄自大的蟾蜍、老成持重的獾。他们游山逛水，尽享大自然的慷慨恩赐。财大气粗而不知天高地厚的蟾蜍，迷上了开汽车，车祸不断，受到朋友们的责难和管束。一次，他偷了一辆汽车，被捕入狱，在狱卒女儿的帮助下，化装成洗衣妇逃出监狱，历经险情和磨难，在三位朋友的帮助下，夺回了被野林动物侵占的庄园，并从此改邪归正。','xiaoyu','2020-06-10','2350170102'),('xs001','狂人日记','鲁迅','在馆','浙江教育出版社','2018年04月',31.30,'9787553669090','《狂人日记：鲁迅小说全集》完整收录了鲁迅的全部小说，均选自《呐喊》《彷徨》《故事新编》三部小说集。鲁迅小说的主题多是反封建、反礼教、反传统、反迷信，善于创造典型形象，讽刺人物的阴暗面，用笔深刻、冷隽而富幽默，句法简洁峭拔，故事多以故乡为背景。小说主人公阿Q、祥林嫂、孔乙己、闰土等在中国妇孺皆知。\r\n',NULL,NULL,NULL);
/*!40000 ALTER TABLE `book_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_info`
--

DROP TABLE IF EXISTS `login_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `login_info` (
  `user_sno` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '用户学号',
  `user_level` enum('普通用户','管理员') NOT NULL DEFAULT '普通用户' COMMENT '用户级别',
  `user_pwd` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '用户密码',
  `login_time` datetime NOT NULL COMMENT '最近最后一次登录时间',
  PRIMARY KEY (`user_sno`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_info`
--

LOCK TABLES `login_info` WRITE;
/*!40000 ALTER TABLE `login_info` DISABLE KEYS */;
INSERT INTO `login_info` VALUES ('2350170102','普通用户','root','2020-05-11 06:50:52'),('2350170104','普通用户','root','2020-05-08 12:20:47'),('2350170120','普通用户','root','2020-05-08 12:44:55');
/*!40000 ALTER TABLE `login_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_info` (
  `sno` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '用户学号',
  `user_name` varchar(7) NOT NULL COMMENT '用户姓名',
  `user_class` varchar(17) NOT NULL COMMENT '所属班级',
  PRIMARY KEY (`sno`) USING BTREE,
  CONSTRAINT `sno` FOREIGN KEY (`sno`) REFERENCES `login_info` (`user_sno`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES ('2350170102','xiaoyu','17软工本一'),('2350170104','夏登峰','17软工本一'),('2350170120','肖森','17软工本一');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-28 23:52:37
