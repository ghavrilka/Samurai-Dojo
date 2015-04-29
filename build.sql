
CREATE DATABASE /*!32312 IF NOT EXISTS*/ `samurai_dojo_basic` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `samurai_dojo_basic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `mysignature` text,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `accounts` VALUES (1,'admin','Flynn','Monkey!!!'),(2,'adrian','somepassword','Zombie Films Rock!!!'),(3,'john','monkey','I like the smell of confunk'),(4,'ed','pentest','Commandline KungFu anyone?');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs_table` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `blogger_name` text,
  `comment` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `blogs_table` VALUES (1,'adrian','Well, I\'ve been working on this for a bit. Welcome to my crappy blog software. :)','2009-03-01 22:26:12'),(2,'adrian','Looks like I got a lot more work to do. Fun, Fun, Fun!!!','2009-03-01 22:26:54'),(3,'anonymous','An anonymous blog? Huh? ','2009-03-01 22:27:11'),(4,'ed','I love me some Netcat!!!','2009-03-01 22:27:48'),(5,'john','Listen to Pauldotcom!','2009-03-01 22:29:04'),(6,'john','Why give users the ability to get to the unfiltered Internet? It\'s just asking for trouble. ','2009-03-01 22:29:49'),(7,'john','Chocolate is GOOD!!!','2009-03-01 22:30:06'),(8,'admin','Fear me, for I am ROOT!','2009-03-01 22:31:13');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hitlog` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` text,
  `ip` text,
  `browser` text,
  `referer` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `samurai_dojo_scavenger` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `samurai_dojo_scavenger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners_data` (
  `partner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `partners_data` VALUES (1,'kevin','brenna'),(2,'justin','meeas'),(3,'tim','lanmaster53'),(4,'key','boomerang');
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `the_key` (
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `the_key` VALUES ('key13','ed265bc903a5a097f61d3ec064d96d2e');
