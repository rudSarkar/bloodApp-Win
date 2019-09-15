-- MySQL dump 10.17  Distrib 10.3.17-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bloodApp
-- ------------------------------------------------------
-- Server version	10.3.17-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `division_id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `division_id` (`division_id`),
  CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,3,'Dhaka','ঢাকা',23.7115253,90.4111451,'www.dhaka.gov.bd'),(2,3,'Faridpur','ফরিদপুর',23.6070822,89.8429406,'www.faridpur.gov.bd'),(3,3,'Gazipur','গাজীপুর',24.0022858,90.4264283,'www.gazipur.gov.bd'),(4,3,'Gopalganj','গোপালগঞ্জ',23.0050857,89.8266059,'www.gopalganj.gov.bd'),(5,8,'Jamalpur','জামালপুর',24.937533,89.937775,'www.jamalpur.gov.bd'),(6,3,'Kishoreganj','কিশোরগঞ্জ',24.444937,90.776575,'www.kishoreganj.gov.bd'),(7,3,'Madaripur','মাদারীপুর',23.164102,90.1896805,'www.madaripur.gov.bd'),(8,3,'Manikganj','মানিকগঞ্জ',0,0,'www.manikganj.gov.bd'),(9,3,'Munshiganj','মুন্সিগঞ্জ',0,0,'www.munshiganj.gov.bd'),(10,8,'Mymensingh','ময়মনসিংহ',0,0,'www.mymensingh.gov.bd'),(11,3,'Narayanganj','নারায়াণগঞ্জ',23.63366,90.496482,'www.narayanganj.gov.bd'),(12,3,'Narsingdi','নরসিংদী',23.932233,90.71541,'www.narsingdi.gov.bd'),(13,8,'Netrokona','নেত্রকোণা',24.870955,90.727887,'www.netrokona.gov.bd'),(14,3,'Rajbari','রাজবাড়ি',23.7574305,89.6444665,'www.rajbari.gov.bd'),(15,3,'Shariatpur','শরীয়তপুর',0,0,'www.shariatpur.gov.bd'),(16,8,'Sherpur','শেরপুর',25.0204933,90.0152966,'www.sherpur.gov.bd'),(17,3,'Tangail','টাঙ্গাইল',0,0,'www.tangail.gov.bd'),(18,5,'Bogura','বগুড়া',24.8465228,89.377755,'www.bogra.gov.bd'),(19,5,'Joypurhat','জয়পুরহাট',0,0,'www.joypurhat.gov.bd'),(20,5,'Naogaon','নওগাঁ',0,0,'www.naogaon.gov.bd'),(21,5,'Natore','নাটোর',24.420556,89.000282,'www.natore.gov.bd'),(22,5,'Chapainawabganj','চাঁপাইনবাবগঞ্জ',24.5965034,88.2775122,'www.chapainawabganj.gov.bd'),(23,5,'Pabna','পাবনা',23.998524,89.233645,'www.pabna.gov.bd'),(24,5,'Rajshahi','রাজশাহী',0,0,'www.rajshahi.gov.bd'),(25,5,'Sirajgonj','সিরাজগঞ্জ',24.4533978,89.7006815,'www.sirajganj.gov.bd'),(26,6,'Dinajpur','দিনাজপুর',25.6217061,88.6354504,'www.dinajpur.gov.bd'),(27,6,'Gaibandha','গাইবান্ধা',25.328751,89.528088,'www.gaibandha.gov.bd'),(28,6,'Kurigram','কুড়িগ্রাম',25.805445,89.636174,'www.kurigram.gov.bd'),(29,6,'Lalmonirhat','লালমনিরহাট',0,0,'www.lalmonirhat.gov.bd'),(30,6,'Nilphamari','নীলফামারী',25.931794,88.856006,'www.nilphamari.gov.bd'),(31,6,'Panchagarh','পঞ্চগড়',26.3411,88.5541606,'www.panchagarh.gov.bd'),(32,6,'Rangpur','রংপুর',25.7558096,89.244462,'www.rangpur.gov.bd'),(33,6,'Thakurgaon','ঠাকুরগাঁও',26.0336945,88.4616834,'www.thakurgaon.gov.bd'),(34,1,'Barguna','বরগুনা',0,0,'www.barguna.gov.bd'),(35,1,'Barishal','বরিশাল',0,0,'www.barisal.gov.bd'),(36,1,'Bhola','ভোলা',22.685923,90.648179,'www.bhola.gov.bd'),(37,1,'Jhalokati','ঝালকাঠি',0,0,'www.jhalakathi.gov.bd'),(38,1,'Patuakhali','পটুয়াখালী',22.3596316,90.3298712,'www.patuakhali.gov.bd'),(39,1,'Pirojpur','পিরোজপুর',0,0,'www.pirojpur.gov.bd'),(40,2,'Bandarban','বান্দরবান',22.1953275,92.2183773,'www.bandarban.gov.bd'),(41,2,'Brahmanbaria','ব্রাহ্মণবাড়িয়া',23.9570904,91.1119286,'www.brahmanbaria.gov.bd'),(42,2,'Chandpur','চাঁদপুর',23.2332585,90.6712912,'www.chandpur.gov.bd'),(43,2,'Chattogram','চট্টগ্রাম',22.335109,91.834073,'www.chittagong.gov.bd'),(44,2,'Cumilla','কুমিল্লা',23.4682747,91.1788135,'www.comilla.gov.bd'),(45,2,'Cox\'s Bazar','কক্স বাজার',0,0,'www.coxsbazar.gov.bd'),(46,2,'Feni','ফেনী',23.023231,91.3840844,'www.feni.gov.bd'),(47,2,'Khagrachhari','খাগড়াছড়ি',23.119285,91.984663,'www.khagrachhari.gov.bd'),(48,2,'Lakshmipur','লক্ষ্মীপুর',22.942477,90.841184,'www.lakshmipur.gov.bd'),(49,2,'Noakhali','নোয়াখালী',22.869563,91.099398,'www.noakhali.gov.bd'),(50,2,'Rangamati','রাঙ্গামাটি',0,0,'www.rangamati.gov.bd'),(51,7,'Habiganj','হবিগঞ্জ',24.374945,91.41553,'www.habiganj.gov.bd'),(52,7,'Moulvibazar','মৌলভীবাজার',24.482934,91.777417,'www.moulvibazar.gov.bd'),(53,7,'Sunamganj','সুনামগঞ্জ',25.0658042,91.3950115,'www.sunamganj.gov.bd'),(54,7,'Sylhet','সিলেট',24.8897956,91.8697894,'www.sylhet.gov.bd'),(55,4,'Bagerhat','বাগেরহাট',22.651568,89.785938,'www.bagerhat.gov.bd'),(56,4,'Chuadanga','চুয়াডাঙ্গা',23.6401961,88.841841,'www.chuadanga.gov.bd'),(57,4,'Jashore','যশোর',23.16643,89.2081126,'www.jessore.gov.bd'),(58,4,'Jhenaidah','ঝিনাইদহ',23.5448176,89.1539213,'www.jhenaidah.gov.bd'),(59,4,'Khulna','খুলনা',22.815774,89.568679,'www.khulna.gov.bd'),(60,4,'Kushtia','কুষ্টিয়া',23.901258,89.120482,'www.kushtia.gov.bd'),(61,4,'Magura','মাগুরা',23.487337,89.419956,'www.magura.gov.bd'),(62,4,'Meherpur','মেহেরপুর',23.762213,88.631821,'www.meherpur.gov.bd'),(63,4,'Narail','নড়াইল',23.172534,89.512672,'www.narail.gov.bd'),(64,4,'Satkhira','সাতক্ষীরা',0,0,'www.satkhira.gov.bd');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `divisions` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `divisions`
--

LOCK TABLES `divisions` WRITE;
/*!40000 ALTER TABLE `divisions` DISABLE KEYS */;
INSERT INTO `divisions` VALUES (1,'Barishal','বরিশাল'),(2,'Chattogram','চট্টগ্রাম'),(3,'Dhaka','ঢাকা'),(4,'Khulna','খুলনা'),(5,'Rajshahi','রাজশাহী'),(6,'Rangpur','রংপুর'),(7,'Sylhet','সিলেট'),(8,'Mymensingh','ময়মনসিংহ');
/*!40000 ALTER TABLE `divisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request_blood`
--

DROP TABLE IF EXISTS `request_blood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_blood` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `when_need` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_blood`
--

LOCK TABLES `request_blood` WRITE;
/*!40000 ALTER TABLE `request_blood` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_blood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upazilas`
--

DROP TABLE IF EXISTS `upazilas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upazilas` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `district_id` (`district_id`),
  CONSTRAINT `upazilas_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=493 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upazilas`
--

LOCK TABLES `upazilas` WRITE;
/*!40000 ALTER TABLE `upazilas` DISABLE KEYS */;
INSERT INTO `upazilas` VALUES (1,34,'Amtali','আমতলী'),(2,34,'Bamna','বামনা'),(3,34,'Barguna Sadar','বরগুনা সদর'),(4,34,'Betagi','বেতাগি'),(5,34,'Patharghata','পাথরঘাটা'),(6,34,'Taltali','তালতলী'),(7,35,'Muladi','মুলাদি'),(8,35,'Babuganj','বাবুগঞ্জ'),(9,35,'Agailjhara','আগাইলঝরা'),(10,35,'Barisal Sadar','বরিশাল সদর'),(11,35,'Bakerganj','বাকেরগঞ্জ'),(12,35,'Banaripara','বানাড়িপারা'),(13,35,'Gaurnadi','গৌরনদী'),(14,35,'Hizla','হিজলা'),(15,35,'Mehendiganj','মেহেদিগঞ্জ '),(16,35,'Wazirpur','ওয়াজিরপুর'),(17,36,'Bhola Sadar','ভোলা সদর'),(18,36,'Burhanuddin','বুরহানউদ্দিন'),(19,36,'Char Fasson','চর ফ্যাশন'),(20,36,'Daulatkhan','দৌলতখান'),(21,36,'Lalmohan','লালমোহন'),(22,36,'Manpura','মনপুরা'),(23,36,'Tazumuddin','তাজুমুদ্দিন'),(24,37,'Jhalokati Sadar','ঝালকাঠি সদর'),(25,37,'Kathalia','কাঁঠালিয়া'),(26,37,'Nalchity','নালচিতি'),(27,37,'Rajapur','রাজাপুর'),(28,38,'Bauphal','বাউফল'),(29,38,'Dashmina','দশমিনা'),(30,38,'Galachipa','গলাচিপা'),(31,38,'Kalapara','কালাপারা'),(32,38,'Mirzaganj','মির্জাগঞ্জ '),(33,38,'Patuakhali Sadar','পটুয়াখালী সদর'),(34,38,'Dumki','ডুমকি'),(35,38,'Rangabali','রাঙ্গাবালি'),(36,39,'Bhandaria','ভ্যান্ডারিয়া'),(37,39,'Kaukhali','কাউখালি'),(38,39,'Mathbaria','মাঠবাড়িয়া'),(39,39,'Nazirpur','নাজিরপুর'),(40,39,'Nesarabad','নেসারাবাদ'),(41,39,'Pirojpur Sadar','পিরোজপুর সদর'),(42,39,'Zianagar','জিয়ানগর'),(43,40,'Bandarban Sadar','বান্দরবন সদর'),(44,40,'Thanchi','থানচি'),(45,40,'Lama','লামা'),(46,40,'Naikhongchhari','নাইখংছড়ি '),(47,40,'Ali kadam','আলী কদম'),(48,40,'Rowangchhari','রউয়াংছড়ি '),(49,40,'Ruma','রুমা'),(50,41,'Brahmanbaria Sadar','ব্রাহ্মণবাড়িয়া সদর'),(51,41,'Ashuganj','আশুগঞ্জ'),(52,41,'Nasirnagar','নাসির নগর'),(53,41,'Nabinagar','নবীনগর'),(54,41,'Sarail','সরাইল'),(55,41,'Shahbazpur Town','শাহবাজপুর টাউন'),(56,41,'Kasba','কসবা'),(57,41,'Akhaura','আখাউরা'),(58,41,'Bancharampur','বাঞ্ছারামপুর'),(59,41,'Bijoynagar','বিজয় নগর'),(60,42,'Chandpur Sadar','চাঁদপুর সদর'),(61,42,'Faridganj','ফরিদগঞ্জ'),(62,42,'Haimchar','হাইমচর'),(63,42,'Haziganj','হাজীগঞ্জ'),(64,42,'Kachua','কচুয়া'),(65,42,'Matlab Uttar','মতলব উত্তর'),(66,42,'Matlab Dakkhin','মতলব দক্ষিণ'),(67,42,'Shahrasti','শাহরাস্তি'),(68,43,'Anwara','আনোয়ারা'),(69,43,'Banshkhali','বাশখালি'),(70,43,'Boalkhali','বোয়ালখালি'),(71,43,'Chandanaish','চন্দনাইশ'),(72,43,'Fatikchhari','ফটিকছড়ি'),(73,43,'Hathazari','হাঠহাজারী'),(74,43,'Lohagara','লোহাগারা'),(75,43,'Mirsharai','মিরসরাই'),(76,43,'Patiya','পটিয়া'),(77,43,'Rangunia','রাঙ্গুনিয়া'),(78,43,'Raozan','রাউজান'),(79,43,'Sandwip','সন্দ্বীপ'),(80,43,'Satkania','সাতকানিয়া'),(81,43,'Sitakunda','সীতাকুণ্ড'),(82,44,'Barura','বড়ুরা'),(83,44,'Brahmanpara','ব্রাহ্মণপাড়া'),(84,44,'Burichong','বুড়িচং'),(85,44,'Chandina','চান্দিনা'),(86,44,'Chauddagram','চৌদ্দগ্রাম'),(87,44,'Daudkandi','দাউদকান্দি'),(88,44,'Debidwar','দেবীদ্বার'),(89,44,'Homna','হোমনা'),(90,44,'Comilla Sadar','কুমিল্লা সদর'),(91,44,'Laksam','লাকসাম'),(92,44,'Monohorgonj','মনোহরগঞ্জ'),(93,44,'Meghna','মেঘনা'),(94,44,'Muradnagar','মুরাদনগর'),(95,44,'Nangalkot','নাঙ্গালকোট'),(96,44,'Comilla Sadar South','কুমিল্লা সদর দক্ষিণ'),(97,44,'Titas','তিতাস'),(98,45,'Chakaria','চকরিয়া'),(100,45,'Cox\'s Bazar Sadar','কক্স বাজার সদর'),(101,45,'Kutubdia','কুতুবদিয়া'),(102,45,'Maheshkhali','মহেশখালী'),(103,45,'Ramu','রামু'),(104,45,'Teknaf','টেকনাফ'),(105,45,'Ukhia','উখিয়া'),(106,45,'Pekua','পেকুয়া'),(107,46,'Feni Sadar','ফেনী সদর'),(108,46,'Chagalnaiya','ছাগল নাইয়া'),(109,46,'Daganbhyan','দাগানভিয়া'),(110,46,'Parshuram','পরশুরাম'),(111,46,'Fhulgazi','ফুলগাজি'),(112,46,'Sonagazi','সোনাগাজি'),(113,47,'Dighinala','দিঘিনালা '),(114,47,'Khagrachhari','খাগড়াছড়ি'),(115,47,'Lakshmichhari','লক্ষ্মীছড়ি'),(116,47,'Mahalchhari','মহলছড়ি'),(117,47,'Manikchhari','মানিকছড়ি'),(118,47,'Matiranga','মাটিরাঙ্গা'),(119,47,'Panchhari','পানছড়ি'),(120,47,'Ramgarh','রামগড়'),(121,48,'Lakshmipur Sadar','লক্ষ্মীপুর সদর'),(122,48,'Raipur','রায়পুর'),(123,48,'Ramganj','রামগঞ্জ'),(124,48,'Ramgati','রামগতি'),(125,48,'Komol Nagar','কমল নগর'),(126,49,'Noakhali Sadar','নোয়াখালী সদর'),(127,49,'Begumganj','বেগমগঞ্জ'),(128,49,'Chatkhil','চাটখিল'),(129,49,'Companyganj','কোম্পানীগঞ্জ'),(130,49,'Shenbag','শেনবাগ'),(131,49,'Hatia','হাতিয়া'),(132,49,'Kobirhat','কবিরহাট '),(133,49,'Sonaimuri','সোনাইমুরি'),(134,49,'Suborno Char','সুবর্ণ চর '),(135,50,'Rangamati Sadar','রাঙ্গামাটি সদর'),(136,50,'Belaichhari','বেলাইছড়ি'),(137,50,'Bagaichhari','বাঘাইছড়ি'),(138,50,'Barkal','বরকল'),(139,50,'Juraichhari','জুরাইছড়ি'),(140,50,'Rajasthali','রাজাস্থলি'),(141,50,'Kaptai','কাপ্তাই'),(142,50,'Langadu','লাঙ্গাডু'),(143,50,'Nannerchar','নান্নেরচর '),(144,50,'Kaukhali','কাউখালি'),(145,1,'Dhamrai','ধামরাই'),(146,1,'Dohar','দোহার'),(147,1,'Keraniganj','কেরানীগঞ্জ'),(148,1,'Nawabganj','নবাবগঞ্জ'),(149,1,'Savar','সাভার'),(150,2,'Faridpur Sadar','ফরিদপুর সদর'),(151,2,'Boalmari','বোয়ালমারী'),(152,2,'Alfadanga','আলফাডাঙ্গা'),(153,2,'Madhukhali','মধুখালি'),(154,2,'Bhanga','ভাঙ্গা'),(155,2,'Nagarkanda','নগরকান্ড'),(156,2,'Charbhadrasan','চরভদ্রাসন '),(157,2,'Sadarpur','সদরপুর'),(158,2,'Shaltha','শালথা'),(159,3,'Gazipur Sadar-Joydebpur','গাজীপুর সদর'),(160,3,'Kaliakior','কালিয়াকৈর'),(161,3,'Kapasia','কাপাসিয়া'),(162,3,'Sripur','শ্রীপুর'),(163,3,'Kaliganj','কালীগঞ্জ'),(164,3,'Tongi','টঙ্গি'),(165,4,'Gopalganj Sadar','গোপালগঞ্জ সদর'),(166,4,'Kashiani','কাশিয়ানি'),(167,4,'Kotalipara','কোটালিপাড়া'),(168,4,'Muksudpur','মুকসুদপুর'),(169,4,'Tungipara','টুঙ্গিপাড়া'),(170,5,'Dewanganj','দেওয়ানগঞ্জ'),(171,5,'Baksiganj','বকসিগঞ্জ'),(172,5,'Islampur','ইসলামপুর'),(173,5,'Jamalpur Sadar','জামালপুর সদর'),(174,5,'Madarganj','মাদারগঞ্জ'),(175,5,'Melandaha','মেলানদাহা'),(176,5,'Sarishabari','সরিষাবাড়ি '),(177,5,'Narundi Police I.C','নারুন্দি'),(178,6,'Astagram','অষ্টগ্রাম'),(179,6,'Bajitpur','বাজিতপুর'),(180,6,'Bhairab','ভৈরব'),(181,6,'Hossainpur','হোসেনপুর '),(182,6,'Itna','ইটনা'),(183,6,'Karimganj','করিমগঞ্জ'),(184,6,'Katiadi','কতিয়াদি'),(185,6,'Kishoreganj Sadar','কিশোরগঞ্জ সদর'),(186,6,'Kuliarchar','কুলিয়ারচর'),(187,6,'Mithamain','মিঠামাইন'),(188,6,'Nikli','নিকলি'),(189,6,'Pakundia','পাকুন্ডা'),(190,6,'Tarail','তাড়াইল'),(191,7,'Madaripur Sadar','মাদারীপুর সদর'),(192,7,'Kalkini','কালকিনি'),(193,7,'Rajoir','রাজইর'),(194,7,'Shibchar','শিবচর'),(195,8,'Manikganj Sadar','মানিকগঞ্জ সদর'),(196,8,'Singair','সিঙ্গাইর'),(197,8,'Shibalaya','শিবালয়'),(198,8,'Saturia','সাঠুরিয়া'),(199,8,'Harirampur','হরিরামপুর'),(200,8,'Ghior','ঘিওর'),(201,8,'Daulatpur','দৌলতপুর'),(202,9,'Lohajang','লোহাজং'),(203,9,'Sreenagar','শ্রীনগর'),(204,9,'Munshiganj Sadar','মুন্সিগঞ্জ সদর'),(205,9,'Sirajdikhan','সিরাজদিখান'),(206,9,'Tongibari','টঙ্গিবাড়ি'),(207,9,'Gazaria','গজারিয়া'),(208,10,'Bhaluka','ভালুকা'),(209,10,'Trishal','ত্রিশাল'),(210,10,'Haluaghat','হালুয়াঘাট'),(211,10,'Muktagachha','মুক্তাগাছা'),(212,10,'Dhobaura','ধবারুয়া'),(213,10,'Fulbaria','ফুলবাড়িয়া'),(214,10,'Gaffargaon','গফরগাঁও'),(215,10,'Gauripur','গৌরিপুর'),(216,10,'Ishwarganj','ঈশ্বরগঞ্জ'),(217,10,'Mymensingh Sadar','ময়মনসিং সদর'),(218,10,'Nandail','নন্দাইল'),(219,10,'Phulpur','ফুলপুর'),(220,11,'Araihazar','আড়াইহাজার'),(221,11,'Sonargaon','সোনারগাঁও'),(222,11,'Bandar','বান্দার'),(223,11,'Naryanganj Sadar','নারায়ানগঞ্জ সদর'),(224,11,'Rupganj','রূপগঞ্জ'),(225,11,'Siddirgonj','সিদ্ধিরগঞ্জ'),(226,12,'Belabo','বেলাবো'),(227,12,'Monohardi','মনোহরদি'),(228,12,'Narsingdi Sadar','নরসিংদী সদর'),(229,12,'Palash','পলাশ'),(230,12,'Raipura, Narsingdi','রায়পুর'),(231,12,'Shibpur','শিবপুর'),(232,13,'Kendua Upazilla','কেন্দুয়া'),(233,13,'Atpara Upazilla','আটপাড়া'),(234,13,'Barhatta Upazilla','বরহাট্টা'),(235,13,'Durgapur Upazilla','দুর্গাপুর'),(236,13,'Kalmakanda Upazilla','কলমাকান্দা'),(237,13,'Madan Upazilla','মদন'),(238,13,'Mohanganj Upazilla','মোহনগঞ্জ'),(239,13,'Netrakona-S Upazilla','নেত্রকোনা সদর'),(240,13,'Purbadhala Upazilla','পূর্বধলা'),(241,13,'Khaliajuri Upazilla','খালিয়াজুরি'),(242,14,'Baliakandi','বালিয়াকান্দি'),(243,14,'Goalandaghat','গোয়ালন্দ ঘাট'),(244,14,'Pangsha','পাংশা'),(245,14,'Kalukhali','কালুখালি'),(246,14,'Rajbari Sadar','রাজবাড়ি সদর'),(247,15,'Shariatpur Sadar -Palong','শরীয়তপুর সদর '),(248,15,'Damudya','দামুদিয়া'),(249,15,'Naria','নড়িয়া'),(250,15,'Jajira','জাজিরা'),(251,15,'Bhedarganj','ভেদারগঞ্জ'),(252,15,'Gosairhat','গোসাইর হাট '),(253,16,'Jhenaigati','ঝিনাইগাতি'),(254,16,'Nakla','নাকলা'),(255,16,'Nalitabari','নালিতাবাড়ি'),(256,16,'Sherpur Sadar','শেরপুর সদর'),(257,16,'Sreebardi','শ্রীবরদি'),(258,17,'Tangail Sadar','টাঙ্গাইল সদর'),(259,17,'Sakhipur','সখিপুর'),(260,17,'Basail','বসাইল'),(261,17,'Madhupur','মধুপুর'),(262,17,'Ghatail','ঘাটাইল'),(263,17,'Kalihati','কালিহাতি'),(264,17,'Nagarpur','নগরপুর'),(265,17,'Mirzapur','মির্জাপুর'),(266,17,'Gopalpur','গোপালপুর'),(267,17,'Delduar','দেলদুয়ার'),(268,17,'Bhuapur','ভুয়াপুর'),(269,17,'Dhanbari','ধানবাড়ি'),(270,55,'Bagerhat Sadar','বাগেরহাট সদর'),(271,55,'Chitalmari','চিতলমাড়ি'),(272,55,'Fakirhat','ফকিরহাট'),(273,55,'Kachua','কচুয়া'),(274,55,'Mollahat','মোল্লাহাট '),(275,55,'Mongla','মংলা'),(276,55,'Morrelganj','মরেলগঞ্জ'),(277,55,'Rampal','রামপাল'),(278,55,'Sarankhola','স্মরণখোলা'),(279,56,'Damurhuda','দামুরহুদা'),(280,56,'Chuadanga-S','চুয়াডাঙ্গা সদর'),(281,56,'Jibannagar','জীবন নগর '),(282,56,'Alamdanga','আলমডাঙ্গা'),(283,57,'Abhaynagar','অভয়নগর'),(284,57,'Keshabpur','কেশবপুর'),(285,57,'Bagherpara','বাঘের পাড়া '),(286,57,'Jessore Sadar','যশোর সদর'),(287,57,'Chaugachha','চৌগাছা'),(288,57,'Manirampur','মনিরামপুর '),(289,57,'Jhikargachha','ঝিকরগাছা'),(290,57,'Sharsha','সারশা'),(291,58,'Jhenaidah Sadar','ঝিনাইদহ সদর'),(292,58,'Maheshpur','মহেশপুর'),(293,58,'Kaliganj','কালীগঞ্জ'),(294,58,'Kotchandpur','কোট চাঁদপুর '),(295,58,'Shailkupa','শৈলকুপা'),(296,58,'Harinakunda','হাড়িনাকুন্দা'),(297,59,'Terokhada','তেরোখাদা'),(298,59,'Batiaghata','বাটিয়াঘাটা '),(299,59,'Dacope','ডাকপে'),(300,59,'Dumuria','ডুমুরিয়া'),(301,59,'Dighalia','দিঘলিয়া'),(302,59,'Koyra','কয়ড়া'),(303,59,'Paikgachha','পাইকগাছা'),(304,59,'Phultala','ফুলতলা'),(305,59,'Rupsa','রূপসা'),(306,60,'Kushtia Sadar','কুষ্টিয়া সদর'),(307,60,'Kumarkhali','কুমারখালি'),(308,60,'Daulatpur','দৌলতপুর'),(309,60,'Mirpur','মিরপুর'),(310,60,'Bheramara','ভেরামারা'),(311,60,'Khoksa','খোকসা'),(312,61,'Magura Sadar','মাগুরা সদর'),(313,61,'Mohammadpur','মোহাম্মাদপুর'),(314,61,'Shalikha','শালিখা'),(315,61,'Sreepur','শ্রীপুর'),(316,62,'angni','আংনি'),(317,62,'Mujib Nagar','মুজিব নগর'),(318,62,'Meherpur-S','মেহেরপুর সদর'),(319,63,'Narail-S Upazilla','নড়াইল সদর'),(320,63,'Lohagara Upazilla','লোহাগাড়া'),(321,63,'Kalia Upazilla','কালিয়া'),(322,64,'Satkhira Sadar','সাতক্ষীরা সদর'),(323,64,'Assasuni','আসসাশুনি '),(324,64,'Debhata','দেভাটা'),(325,64,'Tala','তালা'),(326,64,'Kalaroa','কলরোয়া'),(327,64,'Kaliganj','কালীগঞ্জ'),(328,64,'Shyamnagar','শ্যামনগর'),(329,18,'Adamdighi','আদমদিঘী'),(330,18,'Bogra Sadar','বগুড়া সদর'),(331,18,'Sherpur','শেরপুর'),(332,18,'Dhunat','ধুনট'),(333,18,'Dhupchanchia','দুপচাচিয়া'),(334,18,'Gabtali','গাবতলি'),(335,18,'Kahaloo','কাহালু'),(336,18,'Nandigram','নন্দিগ্রাম'),(337,18,'Sahajanpur','শাহজাহানপুর'),(338,18,'Sariakandi','সারিয়াকান্দি'),(339,18,'Shibganj','শিবগঞ্জ'),(340,18,'Sonatala','সোনাতলা'),(341,19,'Joypurhat S','জয়পুরহাট সদর'),(342,19,'Akkelpur','আক্কেলপুর'),(343,19,'Kalai','কালাই'),(344,19,'Khetlal','খেতলাল'),(345,19,'Panchbibi','পাঁচবিবি'),(346,20,'Naogaon Sadar','নওগাঁ সদর'),(347,20,'Mohadevpur','মহাদেবপুর'),(348,20,'Manda','মান্দা'),(349,20,'Niamatpur','নিয়ামতপুর'),(350,20,'Atrai','আত্রাই'),(351,20,'Raninagar','রাণীনগর'),(352,20,'Patnitala','পত্নীতলা'),(353,20,'Dhamoirhat','ধামইরহাট '),(354,20,'Sapahar','সাপাহার'),(355,20,'Porsha','পোরশা'),(356,20,'Badalgachhi','বদলগাছি'),(357,21,'Natore Sadar','নাটোর সদর'),(358,21,'Baraigram','বড়াইগ্রাম'),(359,21,'Bagatipara','বাগাতিপাড়া'),(360,21,'Lalpur','লালপুর'),(361,21,'Natore Sadar','নাটোর সদর'),(362,21,'Baraigram','বড়াই গ্রাম'),(363,22,'Bholahat','ভোলাহাট'),(364,22,'Gomastapur','গোমস্তাপুর'),(365,22,'Nachole','নাচোল'),(366,22,'Nawabganj Sadar','নবাবগঞ্জ সদর'),(367,22,'Shibganj','শিবগঞ্জ'),(368,23,'Atgharia','আটঘরিয়া'),(369,23,'Bera','বেড়া'),(370,23,'Bhangura','ভাঙ্গুরা'),(371,23,'Chatmohar','চাটমোহর'),(372,23,'Faridpur','ফরিদপুর'),(373,23,'Ishwardi','ঈশ্বরদী'),(374,23,'Pabna Sadar','পাবনা সদর'),(375,23,'Santhia','সাথিয়া'),(376,23,'Sujanagar','সুজানগর'),(377,24,'Bagha','বাঘা'),(378,24,'Bagmara','বাগমারা'),(379,24,'Charghat','চারঘাট'),(380,24,'Durgapur','দুর্গাপুর'),(381,24,'Godagari','গোদাগারি'),(382,24,'Mohanpur','মোহনপুর'),(383,24,'Paba','পবা'),(384,24,'Puthia','পুঠিয়া'),(385,24,'Tanore','তানোর'),(386,25,'Sirajganj Sadar','সিরাজগঞ্জ সদর'),(387,25,'Belkuchi','বেলকুচি'),(388,25,'Chauhali','চৌহালি'),(389,25,'Kamarkhanda','কামারখান্দা'),(390,25,'Kazipur','কাজীপুর'),(391,25,'Raiganj','রায়গঞ্জ'),(392,25,'Shahjadpur','শাহজাদপুর'),(393,25,'Tarash','তারাশ'),(394,25,'Ullahpara','উল্লাপাড়া'),(395,26,'Birampur','বিরামপুর'),(396,26,'Birganj','বীরগঞ্জ'),(397,26,'Biral','বিড়াল'),(398,26,'Bochaganj','বোচাগঞ্জ'),(399,26,'Chirirbandar','চিরিরবন্দর'),(400,26,'Phulbari','ফুলবাড়ি'),(401,26,'Ghoraghat','ঘোড়াঘাট'),(402,26,'Hakimpur','হাকিমপুর'),(403,26,'Kaharole','কাহারোল'),(404,26,'Khansama','খানসামা'),(405,26,'Dinajpur Sadar','দিনাজপুর সদর'),(406,26,'Nawabganj','নবাবগঞ্জ'),(407,26,'Parbatipur','পার্বতীপুর'),(408,27,'Fulchhari','ফুলছড়ি'),(409,27,'Gaibandha sadar','গাইবান্ধা সদর'),(410,27,'Gobindaganj','গোবিন্দগঞ্জ'),(411,27,'Palashbari','পলাশবাড়ী'),(412,27,'Sadullapur','সাদুল্যাপুর'),(413,27,'Saghata','সাঘাটা'),(414,27,'Sundarganj','সুন্দরগঞ্জ'),(415,28,'Kurigram Sadar','কুড়িগ্রাম সদর'),(416,28,'Nageshwari','নাগেশ্বরী'),(417,28,'Bhurungamari','ভুরুঙ্গামারি'),(418,28,'Phulbari','ফুলবাড়ি'),(419,28,'Rajarhat','রাজারহাট'),(420,28,'Ulipur','উলিপুর'),(421,28,'Chilmari','চিলমারি'),(422,28,'Rowmari','রউমারি'),(423,28,'Char Rajibpur','চর রাজিবপুর'),(424,29,'Lalmanirhat Sadar','লালমনিরহাট সদর'),(425,29,'Aditmari','আদিতমারি'),(426,29,'Kaliganj','কালীগঞ্জ'),(427,29,'Hatibandha','হাতিবান্ধা'),(428,29,'Patgram','পাটগ্রাম'),(429,30,'Nilphamari Sadar','নীলফামারী সদর'),(430,30,'Saidpur','সৈয়দপুর'),(431,30,'Jaldhaka','জলঢাকা'),(432,30,'Kishoreganj','কিশোরগঞ্জ'),(433,30,'Domar','ডোমার'),(434,30,'Dimla','ডিমলা'),(435,31,'Panchagarh Sadar','পঞ্চগড় সদর'),(436,31,'Debiganj','দেবীগঞ্জ'),(437,31,'Boda','বোদা'),(438,31,'Atwari','আটোয়ারি'),(439,31,'Tetulia','তেতুলিয়া'),(440,32,'Badarganj','বদরগঞ্জ'),(441,32,'Mithapukur','মিঠাপুকুর'),(442,32,'Gangachara','গঙ্গাচরা'),(443,32,'Kaunia','কাউনিয়া'),(444,32,'Rangpur Sadar','রংপুর সদর'),(445,32,'Pirgachha','পীরগাছা'),(446,32,'Pirganj','পীরগঞ্জ'),(447,32,'Taraganj','তারাগঞ্জ'),(448,33,'Thakurgaon Sadar','ঠাকুরগাঁও সদর'),(449,33,'Pirganj','পীরগঞ্জ'),(450,33,'Baliadangi','বালিয়াডাঙ্গি'),(451,33,'Haripur','হরিপুর'),(452,33,'Ranisankail','রাণীসংকইল'),(453,51,'Ajmiriganj','আজমিরিগঞ্জ'),(454,51,'Baniachang','বানিয়াচং'),(455,51,'Bahubal','বাহুবল'),(456,51,'Chunarughat','চুনারুঘাট'),(457,51,'Habiganj Sadar','হবিগঞ্জ সদর'),(458,51,'Lakhai','লাক্ষাই'),(459,51,'Madhabpur','মাধবপুর'),(460,51,'Nabiganj','নবীগঞ্জ'),(461,51,'Shaistagonj','শায়েস্তাগঞ্জ'),(462,52,'Moulvibazar Sadar','মৌলভীবাজার'),(463,52,'Barlekha','বড়লেখা'),(464,52,'Juri','জুড়ি'),(465,52,'Kamalganj','কামালগঞ্জ'),(466,52,'Kulaura','কুলাউরা'),(467,52,'Rajnagar','রাজনগর'),(468,52,'Sreemangal','শ্রীমঙ্গল'),(469,53,'Bishwamvarpur','বিসশম্ভারপুর'),(470,53,'Chhatak','ছাতক'),(471,53,'Derai','দেড়াই'),(472,53,'Dharampasha','ধরমপাশা'),(473,53,'Dowarabazar','দোয়ারাবাজার'),(474,53,'Jagannathpur','জগন্নাথপুর'),(475,53,'Jamalganj','জামালগঞ্জ'),(476,53,'Sulla','সুল্লা'),(477,53,'Sunamganj Sadar','সুনামগঞ্জ সদর'),(478,53,'Shanthiganj','শান্তিগঞ্জ'),(479,53,'Tahirpur','তাহিরপুর'),(480,54,'Sylhet Sadar','সিলেট সদর'),(481,54,'Beanibazar','বেয়ানিবাজার'),(482,54,'Bishwanath','বিশ্বনাথ'),(483,54,'Dakshin Surma','দক্ষিণ সুরমা'),(484,54,'Balaganj','বালাগঞ্জ'),(485,54,'Companiganj','কোম্পানিগঞ্জ'),(486,54,'Fenchuganj','ফেঞ্চুগঞ্জ'),(487,54,'Golapganj','গোলাপগঞ্জ'),(488,54,'Gowainghat','গোয়াইনঘাট'),(489,54,'Jaintiapur','জয়ন্তপুর'),(490,54,'Kanaighat','কানাইঘাট'),(491,54,'Zakiganj','জাকিগঞ্জ'),(492,54,'Nobigonj','নবীগঞ্জ');
/*!40000 ALTER TABLE `upazilas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` bigint(20) unsigned NOT NULL,
  `district` bigint(20) unsigned NOT NULL,
  `upazila` bigint(20) unsigned NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_donate_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-14 10:51:42
