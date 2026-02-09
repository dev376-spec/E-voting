-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.27


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema election
--

CREATE DATABASE IF NOT EXISTS election;
USE election;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `org` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`,`username`,`password`,`org`) VALUES 
 (1,'admin','admin','admin'),
 (2,'buscc','buscc','buscc'),
 (3,'cas','cas','cas'),
 (4,'cbaa','cbaa','cbaa'),
 (5,'educ','educ','educ'),
 (6,'cede','cede','cede'),
 (7,'con','con','con'),
 (8,'site','site','site'),
 (9,'shmt','shmt','shmt'),
 (10,'stc','stc','stc'),
 (11,'vote','123',''),
 (12,'shubham','','giacr'),
 (13,'shubham','123','giacr'),
 (14,'admin1','admin1','evoting'),
 (15,'admin1','admin1','evoting'),
 (16,'admin1','admin1','evoting');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `cell`
--

DROP TABLE IF EXISTS `cell`;
CREATE TABLE `cell` (
  `cell_id` int(11) NOT NULL AUTO_INCREMENT,
  `cell_name` varchar(11) NOT NULL,
  PRIMARY KEY (`cell_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell`
--

/*!40000 ALTER TABLE `cell` DISABLE KEYS */;
INSERT INTO `cell` (`cell_id`,`cell_name`) VALUES 
 (1,'Patna'),
 (2,'Gya'),
 (3,'Bhojpur');
/*!40000 ALTER TABLE `cell` ENABLE KEYS */;


--
-- Definition of table `deletecandidate`
--

DROP TABLE IF EXISTS `deletecandidate`;
CREATE TABLE `deletecandidate` (
  `delcan_id` int(11) NOT NULL,
  `studnum` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `partylist` varchar(90) NOT NULL,
  `yearlvl` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletecandidate`
--

/*!40000 ALTER TABLE `deletecandidate` DISABLE KEYS */;
/*!40000 ALTER TABLE `deletecandidate` ENABLE KEYS */;


--
-- Definition of table `deletevoter`
--

DROP TABLE IF EXISTS `deletevoter`;
CREATE TABLE `deletevoter` (
  `del_id` int(11) NOT NULL AUTO_INCREMENT,
  `studnum` varchar(20) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `datee` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `ddate` datetime NOT NULL,
  PRIMARY KEY (`del_id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deletevoter`
--

/*!40000 ALTER TABLE `deletevoter` DISABLE KEYS */;
/*!40000 ALTER TABLE `deletevoter` ENABLE KEYS */;


--
-- Definition of table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL DEFAULT '1',
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` (`stud_voted`,`stud_id`,`position`) VALUES 
 (6,1,'President'),
 (7,1,'Principal'),
 (8,1,'PrimeMinister'),
 (9,1,'Vice President');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;


--
-- Definition of table `sector`
--

DROP TABLE IF EXISTS `sector`;
CREATE TABLE `sector` (
  `sec_id` int(4) NOT NULL AUTO_INCREMENT,
  `sec_name` varchar(25) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

/*!40000 ALTER TABLE `sector` DISABLE KEYS */;
INSERT INTO `sector` (`sec_id`,`sec_name`) VALUES 
 (1,'Delhi'),
 (2,'Kolkata'),
 (3,'Mumbai'),
 (4,'Chennai'),
 (5,'Hyderabad'),
 (6,'Bangalore');
/*!40000 ALTER TABLE `sector` ENABLE KEYS */;


--
-- Definition of table `tbmembers`
--

DROP TABLE IF EXISTS `tbmembers`;
CREATE TABLE `tbmembers` (
  `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` char(45) NOT NULL,
  `last_name` char(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmembers`
--

/*!40000 ALTER TABLE `tbmembers` DISABLE KEYS */;
INSERT INTO `tbmembers` (`member_id`,`first_name`,`last_name`,`email`,`password`) VALUES 
 (1,'salagram','padhi','salagrampadhi@gmail.com','12345'),
 (2,'shalini','kumari','shalini@gmail.com','shalini'),
 (3,'prakash','singh','pks@gmail.com','pks'),
 (4,'shalija','','shalija@gmail.com','shalija'),
 (5,'manju','lata','manju@gmail.com','manju');
/*!40000 ALTER TABLE `tbmembers` ENABLE KEYS */;


--
-- Definition of table `voices`
--

DROP TABLE IF EXISTS `voices`;
CREATE TABLE `voices` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Candidate` varchar(20) NOT NULL,
  `Position` char(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voices`
--

/*!40000 ALTER TABLE `voices` DISABLE KEYS */;
INSERT INTO `voices` (`Id`,`Candidate`,`Position`) VALUES 
 (1,'Obama','President'),
 (2,'Salagram padhi','professor'),
 (9,'N Modi','President'),
 (10,'G Bush','Vice President'),
 (12,'Nitish kumar','Vice President'),
 (16,'L k advani','President'),
 (19,'Nitish Kumar','President'),
 (18,'P Dinakar','Principal');
/*!40000 ALTER TABLE `voices` ENABLE KEYS */;


--
-- Definition of table `voted_cede`
--

DROP TABLE IF EXISTS `voted_cede`;
CREATE TABLE `voted_cede` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voted_cede`
--

/*!40000 ALTER TABLE `voted_cede` DISABLE KEYS */;
INSERT INTO `voted_cede` (`stud_voted`,`stud_id`,`position`) VALUES 
 (1,2,'President');
/*!40000 ALTER TABLE `voted_cede` ENABLE KEYS */;


--
-- Definition of table `voted_con`
--

DROP TABLE IF EXISTS `voted_con`;
CREATE TABLE `voted_con` (
  `stud_voted` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`stud_voted`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voted_con`
--

/*!40000 ALTER TABLE `voted_con` DISABLE KEYS */;
INSERT INTO `voted_con` (`stud_voted`,`stud_id`,`position`) VALUES 
 (1,2,'President');
/*!40000 ALTER TABLE `voted_con` ENABLE KEYS */;


--
-- Definition of table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE `voter` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `VoterCard` varchar(20) NOT NULL,
  `Number_of_ID` varchar(20) NOT NULL,
  `Names` varchar(25) NOT NULL,
  `FatherNames` varchar(20) NOT NULL,
  `MotherNames` varchar(20) NOT NULL,
  `DoB` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `sec_name` varchar(20) NOT NULL,
  `cell_name` varchar(30) NOT NULL,
  `VotingCenter` varchar(20) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

/*!40000 ALTER TABLE `voter` DISABLE KEYS */;
INSERT INTO `voter` (`ID`,`VoterCard`,`Number_of_ID`,`Names`,`FatherNames`,`MotherNames`,`DoB`,`District`,`sec_name`,`cell_name`,`VotingCenter`,`pob`,`password`) VALUES 
 (1,'456','1199080042434098','Umesh','TWAGIRAYEZU Jean Cla','UWAMBAJIMANA Cesalie','20/12/1990','Bokaro','Rwamiko','Butare','','huye','123'),
 (2,'052','1201374052','shalija','mr.pati','mrs.pati','20-12-1993','rgda','kolkata','patna','bbsr','rgda','shalija'),
 (3,'123','012','shubham','shambhu','shashi','22-10-1994','0601','karongi','Butare','deoghar','root','1234'),
 (4,'123','123','vikash','s singh','mrs. singh','aug','0603','nyamagabe','Ngoma','deoghar','123','vikash'),
 (5,'045','1201374045','Prakash','Sanjay Singh','mrs. singh','12-10-10','0505','karongi','Butare','deoghar','deoghar','prakash'),
 (6,'1234','1234','xyz','abc','def','12-10-12','0502','nyamagabe','Butare','abc','rgda','1234'),
 (7,'051','1201374051','Manju','xyz','abc','12-11-1994','0204','Hyderabad','Patna','Rgda','RGDA','123');
/*!40000 ALTER TABLE `voter` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
