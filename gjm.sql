-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 09:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gjm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `itemcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registrasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kurs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastupdate` datetime NOT NULL,
  `spec` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=119 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `itemcode`, `description`, `itemname`, `model`, `registrasi`, `kurs`, `price`, `created_at`, `updated_at`, `lastupdate`, `spec`) VALUES
(1, '3BS#1000001', 'SEIRIN® - TYPE B NEEDLE (S-B2015)', '1000001#SEIRIN® - TYPE B NEEDLE (S-B2015)', '1000001(S-B2015)', 'NULL', 'KURS BARUUUUUU', '248.04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Tidak nulllllll'),
(2, '3BS#1000002', 'CHILDBIRTH SIMULATOR (W44525)', '1000002#CHILDBIRTH SIMULATOR (W44525)', '1000002(W44525)', 'NULL', 'EUR', '1460.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This lifelike birthing simulator gives your trainees practice in normal vaginal delivery as well as birthing procedures for breech and vertex presentation of the fetus. This birthing simulator contains two interchangeable abdominal overlays - one containing an additional fetus in a simulated amniotic fluid sac for practicing Leopold’s maneuver, the other being transparent to allow viewing of the fetal position during labor.  The birthing simulator also features: • Anatomically correct female pelvis with representation of internal landmarks as spinal column, angled birth canal, ileum, ischium, sacrum, sacro spinious ligaments and greater sciatic notch. • Full term foetus with fontanelles and cranial sutures • Placenta with six disposable umbilical cords and clamps • Easily replaceable spare vulva • Simulated blood powder • Soft carrying bag The birthing simulator is a great addition to lesson on labor and the human childbirth process. Replacement Parts: W44525 • 12 Umbilical Cords • Blood Powder (4.5 l) • Simulated Amniotic Fluid • Transparent Overlay • Vulva Options: W44525 • Full Term Newborn for Forceps Delivery'),
(3, '3BS#1000003', 'SPORTS SHOULDER (W47002)', '1000003#SPORTS SHOULDER (W47002)', '1000003(W47002)', 'NULL', 'EUR', '769.88', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(4, '3BS#1000005', 'SENSO HAND TRAINER LIGHT (W11250)', '1000005#SENSO HAND TRAINER LIGHT (W11250)', '1000005(W11250)', 'NULL', 'EUR', '8.80', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(5, '3BS#1000007', 'F/H TUBE W. HG A. HEATING CHAMBER @230V (U8482150-230)', '1000007#F/H TUBE W. HG A. HEATING CHAMBER @230V (U8482150-230)', '1000007(U8482150-230)', 'NULL', 'NULL', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(6, '3BS#1000008', 'F/H TUBE W. HG A. HEATING CHAMBER @115V (U8482150-115)', '1000008#F/H TUBE W. HG A. HEATING CHAMBER @115V (U8482150-115)', '1000008(U8482150-115)', 'NULL', 'NULL', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(7, '3BS#1000009', '3B NETLOG™ WITH ETHERNET PORT @230V (U11300IP-230)', '1000009#3B NETLOG™ WITH ETHERNET PORT @230V (U11300IP-230)', '1000009(U11300IP-230)', 'NULL', 'EUR', '1936.57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(8, '3BS#1000010', 'STANDARD SKELETON STAN, ON (A10)', '1013853#STANDARD SKELETON STAN, ON (A10)', '1013853(A10)', 'NULL', 'EUR', '463.49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This classic model (we call him Stan) has been the standard of quality in hospitals, schools, universities, and laboratories for over 50 years. Don''t settle for imitations which compromise quality in workmanship and materials. Stan''s the man! - Excellent price-performance ratio - 3-year warranty - First-class natural cast "Made in Germany" - Manual final assembly - Made of durable, unbreakable plastic - Almost realistic weight of the approx. 200 bones - Life-size - 3-part mounted skull - Individually inserted teeth - Limbs are quick and easy to remove - Stand and dust cover included  Weights & Measurements 176.5 cm  9.57 kg 69.5 in  21.10 lb'),
(9, '3BS#1000011', 'MALTESE CROSS TUBE S (U18553)', '1000011#MALTESE CROSS TUBE S (U18553)', '1000011(U18553)', 'NULL', 'EUR', '1003.11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(10, '3BS#1000012', 'CHART THE HUMAN SKELETON, REAR (V2002M)', '1000012#CHART THE HUMAN SKELETON, REAR (V2002M)', '1000012(V2002M)', 'NULL', 'EUR', '98.61', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(11, '3BS#1000014', 'ADJUSTABLE HEADBOARD DIVAN (W15050)', '1000014#ADJUSTABLE HEADBOARD DIVAN (W15050)', '1000014(W15050)', 'NULL', 'EUR', '827.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(12, '3BS#1000015', 'DISSECTABLE MUSCLED ARM, (M10)', '1000015#DISSECTABLE MUSCLED ARM, (M10)', '1000015(M10)', 'NULL', 'EUR', '769.88', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This model illustrates both the superficial and deeper muscles, five of which are removable. Tendons, vessels, nerves and bone components of the left arm and shoulder are shown in great detail. Parts numbered.'),
(13, '3BS#1000016', 'DENTAL DISEASE (D26)', '1000016#DENTAL DISEASE (D26)', '1000016(D26)', 'NULL', 'EUR', '425.70', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This model is based on a lifelike illustration of a lower jaw with 16 removable teeth of an adult magnified two times.  One half of the dental disease model shows eight healthy teeth and healthy gums.  The other half of the model shows the following dental diseases: - Dental plaque - Dental calculus (tartar) - Periodontitis - Inflammation of the root - Fissure, approximal and smooth surface caries. One part of the front bone section can be removed from the dental disease model to view the roots, vessels and nerves. Two molars are sectioned along the length to show the inside of the tooth. Delivered on a base.  25.5x18.5x18cm; 0.6 kg'),
(14, '3BS#1000021', 'SET OF  7 CERVICAL VERTEBRAE (A790)', '1000021#SET OF  7 CERVICAL VERTEBRAE (A790)', '1000021(A790)', 'NULL', 'EUR', '262.66', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'In this quality, a worldwide unique casting of original cervical vertebra bones, in which even the finest anatomical structures are represented in detail. • Manufactured in excellent quality from 3B BONElike™ material, which has the look and feel of real bone • Realistic weight • These vertebrae are particularly useful in medical education as replacement for real bones and also for patient education Supplied on a base.  Here''s what 3B customers are saying about 3B BONElike™:  “… a unique reproduction of a bone that cannot be distinguished from a real one. One of my staff members, a world-wide renowned bone specialist, was not able to distinguish the vertebra from a real one. I wish your company much success with your excellent artificial preparations.” -Prof. Dr. Dr. h.c. Horst Erich König, Director, Institute for Anatomy, University of Veterinary Medicine, Vienna  “… I am convinced that you have developed the best bone ever created by man.” -Prof. Vladimire Ovcharov, MD, DSc, Rector Medical University - Sofia  “Thank you very much for sending a vertebral body model. It was a pleasant surprise for me as a keen anatomist. In the first moment, I actually believed it was real bone! My compliments, the material has excellent tactile feel.” -Yvonne Kammerer, MD Institute of Anatomy, University of Regensburg, Germany'),
(15, '3BS#1000023', 'DISARTICULATED HALF SKELETON (A04)', '1000023#DISARTICULATED HALF SKELETON (A04)', '1000023(A04)', 'NULL', 'EUR', '477.78', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This replica of a disarticulated half human skeleton is complete with mounted skull, sternum, hyoid, and spinal column. Hand and foot on wire for demonstration of natural human movement. This disarticulated skeleton is great for study of the anatomy of the human skeleton and any scientific anatomy studies. The disarticulated half skeleton comes in a sturdy partitioned cardboard storage box. The half human skeleton is a high quality model with realistic anatomic detail.  Weights & Measurements 49 x 43 x 26.5 cm  4 kg 19.3 x 16.9 x 10.4 in  8.82 lb'),
(16, '3BS#1000024', 'DISARTICULATED HALF SKELETON, (A04/1)', '1000024#DISARTICULATED HALF SKELETON, (A04/1)', '(A04/1)', 'NULL', 'EUR', '523.06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This half skeleton has the hand and foot loosely articulated on nylon cord for study of more realistic movement. This replica of a disarticulated half human skeleton is complete with mounted skull, sternum, hyoid, and spinal column. This disarticulated skeleton is great for study of the anatomy of the human skeleton and any scientific anatomy studies. The disarticulated half skeleton comes in a sturdy partitioned cardboard storage box. This half human skeleton is a high quality model with realistic anatomic detail.  Weights & Measurements 48.5 x 27 x 42.5 cm  4 kg 19.1 x 10.6 x 16.7 in  8.82 lb'),
(17, '3BS#1000025', 'DISARTICULATED FULL SKELETON  (A05/1)', '1000025#DISARTICULATED FULL SKELETON  (A05/1)', '1000025(A05/1)', 'NULL', 'EUR', '629.49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'One hand and foot on wire, one loosely articulated. Great for any in depth study of the human skeleton. Supplied in a sturdy partitioned storage box.'),
(18, '3BS#1000026', 'DISARTICULATED PAINTED FULL (A05/2)', '1000026#DISARTICULATED PAINTED FULL (A05/2)', '1000026(A05/2)', 'NULL', 'EUR', '1032.54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(19, '3BS#1000027', 'INTERVERTEBRAL DISCS ON NYLON, (A09)', '1000027#INTERVERTEBRAL DISCS ON NYLON, (A09)', '1000027(A09)', 'NULL', 'EUR', '27.17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(20, '3BS#1000028', 'STANDARD SKELETON STAN, ON (A10/1)', '1000028#STANDARD SKELETON STAN, ON (A10/1)', '1000028(A10/1)', 'NULL', 'EUR', '655.72', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(21, '3BS#1000029', 'MUSCLE SKELETON MAX, ON 5-FEET (A11)', '1000029#MUSCLE SKELETON MAX, ON 5-FEET (A11)', '1000029(A11)', 'NULL', 'EUR', '950.48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(22, '3BS#1000030', 'MUSCLE SKELETON MAX, ON (A11/1)', '1000030#MUSCLE SKELETON MAX, ON (A11/1)', '1000030(A11/1)', 'NULL', 'EUR', '1089.31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(23, '3BS#1000031', 'LIGAMENT SKELETON LEO, ON (A12)', '1000031#LIGAMENT SKELETON LEO, ON (A12)', '1000031(A12)', 'NULL', 'EUR', '1108.53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'In addition to the standard benefits of a 3B Scientific® skeleton, Leo provides representations of the structural interaction between bones and ligaments. Its elastic ligaments on the major appendicular joints (shoulder, elbow, hip and knee) are mounted on the right side. An amazing replica of the human skeleton.  - Excellent price-performance ratio - 3-year warranty - First-class natural cast "Made in Germany" - Manual final assembly - Made of durable, unbreakable plastic - Almost realistic weight of the approx. 200 bones - Life-size - 3-part mounted skull - Individually inserted teeth - Limbs are quick and easy to remove - Stand and dust cover included  Weights & Measurements 176.5 cm  9.97 kg 69.5 in  21.98 lb'),
(24, '3BS#1000032', 'LIGAMENT SKELETON LEO, ON (A12/1)', '1000032#LIGAMENT SKELETON LEO, ON (A12/1)', '1000032(A12/1)', 'NULL', 'NULL', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(25, '3BS#1000033', 'SUPER SKELETON SAM, ON 5-FEET (A13)', '1000033#SUPER SKELETON SAM, ON 5-FEET (A13)', '1000033(A13)', 'NULL', 'EUR', '1198.24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Of course this top-of-the-line version contains all the benefits you have come to expect in our high-quality 3B Scientific® standard skeletons. Sam additionally allows you to demonstrate the movements of the skull and head joints as well as all natural human postures due to the fully flexible vertebral column. The unique combination of flexible vertebral column, muscle origins and insertions, numbered bones, flexible joint ligaments and a disc prolapse between the 3rd and 4th lumbar vertebrae display over 600 structures of medical/anatomical interest in this top human skeleton model. Perfect for in depth study of the human skeleton and more.  To sum it up: - All standard benefits of a 3B Scientific® Skeleton Model - Over 600 hand-numbered and identified details - Hand-painted muscle origins and insertions - Flexible joint ligaments - Flexible vertebral column - Emerging spinal nerves and vertebral arteries - Disc prolapse between L3 and L4 - Excellent price-performance ratio - 3-year warranty - First-class natural cast “Made in Germany” - Manual final assembly - Made of durable, unbreakable plastic - Almost realistic weight of the approx. 200 bones - Life-size - 3-part mounted skull - Individually inserted teeth - Stand and dust cover included'),
(26, '3BS#1000034', 'SUPER SKELETON SAM, ON HANGING (A13/1)', '1000034#SUPER SKELETON SAM, ON HANGING (A13/1)', '1000034(A13/1)', 'NULL', 'EUR', '1309.31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(27, '3BS#1000035', 'FLEXIBLE SKELETON FRED, ON (A15)', '1000035#FLEXIBLE SKELETON FRED, ON (A15)', '1000035(A15)', 'NULL', 'EUR', '820.19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Introducing Fred the flexible skeleton model. Fred''s spine can bend to mimic any natural human movement. Once flexed, this human skeleton model will remain fixed in position to demonstrate correct and incorrect posture or various pathological conditions. In addition, all skull and neck movements can be demonstrated. Spinal nerve exits and vertebral arteries are shown as is a dorso-lateral disc prolapse between the 3rd and 4th lumbar vertebrae. This 3B Scientific human skeleton replica moves just like the real thing.  • Excellent price-performance ratio • 3-year warranty • First-class natural cast "Made in Germany" • Manual final assembly • Made of durable, unbreakable plastic • Almost realistic weight of the approx. 200 bones • Life-size • 3-part mounted skull • Individually inserted teeth • Limbs are quick and easy to remove • Stand and dust cover included  Weights & Measurements 176.5 cm  9.57 kg 69.5 in  21.10 lb'),
(28, '3BS#1000036', 'FLEX. SKEL. FRED, ON 5-FT. (A15/2)', '1000036#FLEX. SKEL. FRED, ON 5-FT. (A15/2)', '1000036(A15/2)', 'NULL', 'EUR', '931.25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Introducing Fred, the flexible skeleton model. Fred''s spine can bend to mimic any natural human movement. Once flexed, this human skeleton model will remain fixed in position to demonstrate correct and incorrect posture or various pathological conditions. In addition, all skull and neck movements can be demonstrated. Spinal nerve exits and vertebral arteries are shown as is a dorso-lateral disc prolapse between the 3rd and 4th lumbar vertebrae. This 3B Scientific human skeleton replica moves just like the real thing.   • Excellent price-performance ratio • 3-year warranty • First-class natural cast "Made in Germany" • Manual final assembly • Made of durable, unbreakable plastic • Almost realistic weight of the approx. 200 bones • Life-size • 3-part mounted skull • Individually inserted teeth • Limbs are quick and easy to remove • Stand and dust cover included This skeleton is a great tool for any scientific study of human anatomy.  Weights & Measurements 176.5 cm  9.57 kg 69.5 in  21.10 lb'),
(29, '3BS#1000037', 'PHYSIOLOGICAL SKELETON PHIL, (A15/3)', '1000037#PHYSIOLOGICAL SKELETON PHIL, (A15/3)', '1000037(A15/3)', 'NULL', 'EUR', '1322.12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This scientific grade human skeleton model is unique in its near lifelike realization of the joint mechanisms. Phil the physiological human skeleton model allows you to demonstrate the inward and outward rotation of the arms and legs and the extension and flexion of the knee and elbow joints. The flexible spine allows for natural movement (lateral inclination, movement and extension, rotation). The bones of the hands are mounted on wire to demonstrate their natural positions. The foot bones of this human skeleton are mounted flexibly to enable movability.  Even the restricted mobility of the iliosacral joint and the sacrococcygeal joint can be demonstrated.  • Excellent price-performance ratio • Full 3-year warranty • First-class natural cast • Manual final assembly • Made of durable, unbreakable plastic • Almost realistic weight of the approx. 200 bones • Life-size • 3-part mounted skull • Individually inserted teeth • Lower Limbs are quick and easy to remove • Hanging roller stand with brake and protective dust cover included • Can also be used with a wall mounted A59/8 (not included) multifunctional stand for a space saving solution  Weights & Measurements 192.5 cm  9.57 kg 75.8 in  21.10 lb'),
(30, '3BS#1000038', 'THE FUNCTIONAL SKELETON, (A15/3S)', '1000038#THE FUNCTIONAL SKELETON, (A15/3S)', '1000038(A15/3S)', 'NULL', 'EUR', '1642.51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(31, '3BS#1000039', 'MINI SKELETON “SHORTY” (A18)', '1000039#MINI SKELETON “SHORTY” (A18)', '1000039(A18)', 'NULL', 'EUR', '301.16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(32, '3BS#1000040', 'MINI SKELETT AUF HÄNGESTATIV (A18/1)', '1000040#MINI SKELETT AUF HÄNGESTATIV (A18/1)', '1000040(A18/1)', 'NULL', 'EUR', '350.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(33, '3BS#1000041', 'MINI SKULL, 3-PART (A18/15)', '1000041#MINI SKULL, 3-PART (A18/15)', '1000041(A18/15)', 'NULL', 'EUR', '43.02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(34, '3BS#1000042', 'MINI VERTEBRAL COLUMN, ELASTIC (A18/20)', '1000042#MINI VERTEBRAL COLUMN, ELASTIC (A18/20)', '1000042(A18/20)', 'NULL', 'EUR', '156.24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(35, '3BS#1000043', 'MINI VERTEBRAL COLUMN (A18/21)', '1000043#MINI VERTEBRAL COLUMN (A18/21)', '1000043(A18/21)', 'NULL', 'EUR', '174.35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(36, '3BS#1000044', 'MINISKELETON W.PAINTED MUSCLES (A18/5)', '1000044#MINISKELETON W.PAINTED MUSCLES (A18/5)', '1000044(A18/5)', 'NULL', 'EUR', '421.17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Top of the range mini human skeleton. Skillful 3B Scientific engineers using powerful hardware and software optimized the process of reproducing miniatures in order to keep all anatomical details and structures even at half natural size (80 cm).   The skull can be removed and disassembled into three parts (skullcap, base of skull, mandible). The arms and legs are removable. The hip joints are specially mounted so their natural rotation can be demonstrated. The portrayal of the muscle origins (red) and insertions (blue) on the left half. The muscles are numbered. This mini skeleton can be taken off of the base when required.  This mini human skeleton delivers all the anatomical detail you want and need in half the size!  Weights & Measurements 94 cm  1.7 kg 37.0 in  3.75 lb'),
(37, '3BS#1000045', 'MINISKELETON W.PAINTED MUSCLES (A18/6)', '1000045#MINISKELETON W.PAINTED MUSCLES (A18/6)', '1000045(A18/6)', 'NULL', 'EUR', '439.28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(38, '3BS#1000046', 'CLASSIC SKULL, 3-PART (A20)', '1000046#CLASSIC SKULL, 3-PART (A20)', '1000046(A20)', 'NULL', 'EUR', '140.39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Our classic skills combine quality and value. Each of the 8 classic versions available are designed to show exceptional detail at an affordable price. The 3-part standard version a20 is a first choice for basu anatomical studies or an attractive present. Alternatively, choose one of the more advanced versions exhibiting additional anatomical structures such as muscle origins/ insertion, hand-numbered bones and structures or a supplementary complete 5-part brain. 20x13x5x15.5 cm; 0.6 kg.'),
(39, '3BS#1000047', 'SKULL ON CERVICAL SPINE, (A20/1)', '1000047#SKULL ON CERVICAL SPINE, (A20/1)', '1000047(A20/1)', 'NULL', 'EUR', '294.37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This skull is flexibly mounted on a cervical spine. Also represented are the hindbrain, spinal cord, cervical nerves, vertebral arteries, basilar artery and rear cerebral arteries. Skull can be removed from stand.  - High quality original skulll cast - Handmade from hard, unbreakable plastic - Highly accurate representation of the fissures, foramina, processes, sutures etc. - Can be disassembled into skull cap, base of skull and mandible - Mandible is mounted on a spring to easily demonstrate natural movement'),
(40, '3BS#1000048', 'DIDACTIC SKULL ON CERVICAL (A20/2)', '1000048#DIDACTIC SKULL ON CERVICAL (A20/2)', '1000048(A20/2)', 'NULL', 'EUR', '579.67', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This human skull model uses 19 didactic colors to show the shapes and relationships of the various bone plates of the skull. This human skull replica is flexibly mounted on the cervical spine (C1, C2 and C7 are colored). The didactic model also exhibits the hindbrain, spinal cord, spinal nerves of the cervical spine, vertebral arteries, basilar artery and rear cerebral arteries. The plastic skull can be removed from its stand. High quality original human skull cast Skull is handmade from hard, unbreakable plastic Highly accurate representation of the fissures, foramina, processes, sutures etc. Can be disassembled into skull cap, base of skull and mandible Mandible of skull is mounted on a spring to easily demonstrate natural movement  Weights & Measurements 17.5 x 17.5 x 30 cm  0.6 kg 6.9 x 6.9 x 11.8 in  1.32 lb'),
(41, '3BS#1000049', 'CLASSIC-SKULL WITH BRAIN, (A20/9)', '1000049#CLASSIC-SKULL WITH BRAIN, (A20/9)', '1000049(A20/9)', 'NULL', 'EUR', '366.82', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(42, '3BS#1000050', 'NEON SKULL (A20/N)', '1000050#NEON SKULL (A20/N)', '1000050(A20/N)', 'NULL', 'EUR', '224.17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(43, '3BS#1000051', 'CLASSIC- SKULL, TRANSPARENT, (A20/T)', '1000051#CLASSIC- SKULL, TRANSPARENT, (A20/T)', '1000051(A20/T)', 'NULL', 'EUR', '224.17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(44, '3BS#1000052', 'NUMBERED CLASSIC SKULL, 3-PART (A21)', '1000052#NUMBERED CLASSIC SKULL, 3-PART (A21)', '1000052(A21)', 'NULL', 'EUR', '197.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(45, '3BS#1000053', 'CLASSIC SKULL, WITH OPENED (A22)', '1000053#CLASSIC SKULL, WITH OPENED (A22)', '1000053(A22)', 'NULL', 'EUR', '305.69', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(46, '3BS#1000054', 'CLASSIC SKULL WITH OPENED (A22/1)', '1000054#CLASSIC SKULL WITH OPENED (A22/1)', '1000054(A22/1)', 'NULL', 'EUR', '416.64', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This dental skull with opened mandible exposes tooth roots with vessels and nerves. The skull model also features the numbering of the cranial bones, bone components, fissures, foramina and other structures. The cranial sutures are shown in color, as are the meningeal vessels and venous sinuses. For added anatomical detail muscle origins (red) and insertions (blue) are represented on the left side of this human skull model. High-quality original casts Skull is handmade of hard, unbreakable plastic Highly accurate representation of the fissures, foramina, processes, sutures etc. Can be disassembled into Skull Cap, Base of Skull and Mandible As an option, you can insert a 5-part brain (C 18) into the skull This unique model of the classic human skull is useful for students and practicing doctors alike, being a great tool for learning and teaching. Not only are important anatomical features of the skull depicted but also the open jaw gives a distinctive view of teeth roots.  Weights & Measurements 20 x 13.5 x 15.5 cm  0.7 kg 7.9 x 5.3 x 6.1 in  1.54 lb'),
(47, '3BS#1000055', 'CLASSIC SKULL, PAINTED, 3-PART (A23)', '1000055#CLASSIC SKULL, PAINTED, 3-PART (A23)', '1000055(A23)', 'NULL', 'EUR', '208.32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(48, '3BS#1000056', 'FUNCTIONAL SKULL WITH (A24)', '1000056#FUNCTIONAL SKULL WITH (A24)', '1000056(A24)', 'NULL', 'EUR', '414.38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'In this human skull model the masticatory muscles (masseter, temporal, medial and lateral pterygoid muscles) are represented as elastic bands. This skull model is suited to demonstrate the function of the masticator muscles with jaw occlusion, the initial stage of jaw opening and the movements of the mandible to the side and front. The skullcap is removable.   - High-quality original casts - Skull is handmade of hard, unbreakable plastic - Highly accurate representation of the fissures, foramina, processes, sutures etc.  The anatomy of the human skull is displayed in a distinctive way with this TMJ skull.  Weights & Measurements 0.7 kg 1.54 lb'),
(49, '3BS#1000057', 'FETAL SKULL (A25)', '1000057#FETAL SKULL (A25)', '1000057(A25)', 'NULL', 'EUR', '67.93', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(50, '3BS#1000058', 'FETAL SKULL, ON STAND (A26)', '1000058#FETAL SKULL, ON STAND (A26)', '1000058(A26)', 'NULL', 'EUR', '79.25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(51, '3BS#1000059', 'DELUXE DEMONSTRATION SKULL, (A27)', '1000059#DELUXE DEMONSTRATION SKULL, (A27)', '1000059(A27)', 'NULL', 'EUR', '1689.20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This replica of the human skull is one of exceptional quality and anatomical detail. The skullcap is removable and the base of skull is mid-sagitally divided. The skull model features a frontal sinus, perpendicular lamina and vomer that are fitted with flaps which can be opened to view the lateral nose wall and sphenoidal sinus. On the left half, the temporal bone can be removed and folded up in the area of the tympanic membrane. Maxilla and mandible of the skull are opened to reveal the alveolar nerves. On the right side the temporal bone is opened to reveal the sigmoid sinus, the facial nerve canal and the semicircular ducts. Additional flaps on the skull are located at the maxillary sinus and the right half of the mandible, so that the dental roots of the premolars and molars of the lower jaw can also be viewed. The natural occlusion and the individual removal and replacement of each tooth also make this skull especially interesting for dentists. This is a spectacular model whether you use it as a dental skull or for other purposes. The anatomy of the human skull is easy to learn and teach using this model.  Weights & Measurements 28 x 22.5 x 18.5 cm  1.5 kg 11.0 x 8.9 x 7.3 in  3.31 lb'),
(52, '3BS#1000060', 'DELUXE DEMONSTRATION SKULL, (A27/9)', '1000060#DELUXE DEMONSTRATION SKULL, (A27/9)', '1000060(A27/9)', 'NULL', 'EUR', '1552.80', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This replica of the human skull is one of exceptional quality and contains amazing anatomical detail. The skullcap is removable and the base of skull is mid-sagitally divided. The skull model also features a frontal sinus, perpendicular lamina and vomer that are fitted with flaps that can be opened to view the lateral nose wall and sphenoidal sinus. On the left half of the skull, the temporal bone can be removed and folded up in the area of the tympanic membrane. Maxilla and mandible are opened to reveal the alveolar nerves. On the right side of the skull the temporal bone is opened to reveal the sigmoid sinus, the facial nerve canal and the semicircular ducts. Additional flaps are located at the maxillary sinus and the right half of the mandible, so that the dental roots of the premolars and molars of the lower jaw can also be viewed. The natural occlusion and the individual removal and replacement of each tooth also make this skull especially interesting for dentists. The anatomy of the human skull is uniquely displayed in this replica. Supplied on mounting base with Plexiglas cover for display. This high quality dental skull is a great tool for students and practicing dentists alike.  Weights & Measurements 48 x 39 x 36 cm  2.2 kg 18.9 x 15.4 x 14.2 in  4.85 lb'),
(53, '3BS#1000061', '3B SCIENTIFIC® SYSTEM SKULL - (A280)', '1000061#3B SCIENTIFIC® SYSTEM SKULL - (A280)', '1000061(A280)', 'NULL', 'EUR', '486.99', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(54, '3BS#1000062', '3B SCIENTIFIC® SYSTEM SKULL - (A281)', '1000062#3B SCIENTIFIC® SYSTEM SKULL - (A281)', '1000062(A281)', 'NULL', 'EUR', '1057.45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(55, '3BS#1000063', '3B SCIENTIFIC® SYSTEM SKULL - (A282)', '1000063#3B SCIENTIFIC® SYSTEM SKULL - (A282)', '1000063(A282)', 'NULL', 'EUR', '1335.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(56, '3BS#1000064', '3B SCIENTIFIC® SYSTEM SKULL - (A283)', '1000064#3B SCIENTIFIC® SYSTEM SKULL - (A283)', '1000064(A283)', 'NULL', 'EUR', '2130.75', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'The new BONElike™ Skulls are made of a new material that allows an absolutely natural reproduction of even finest anatomical structures for the first time. Bones made of 3B BONElike™ look real, have an absolutely natural feel and almost exactly the weight of a natural bone. This worldwide unique and high-quality skull will leave no questions in the study of anatomy unanswered! The possibility to transfer the structures visible on the transparent half to the bony half give this skull a special didactic value. On the right, transparent skull half the paranasal sinuses can be easily located even from the outside, since these are marked in different colours: maxillary sinus (yellow), ethmoidal cells (orange), frontal sinus (green), sphenoidal sinus (purple). The cranial sinuses and the neck and face arteries are also shown in colour: sinuses of dura mater (blue), common carotid artery, external and internal carotid artery and the branches of the meningeal artery (red). One brain half, which is also visible through the skullcap, visualizes the brain position and the course of the sinuses. The periodontal pockets and tooth roots can be viewed through the transparent jaw. The lower jaw is mounted flexibly to demonstrate the masticator movements. The skull is mounted on a cervical spine and can be disassembled into both halves of the skullcap, the left half of the base of skull, the nasal septum, the complete mandible and a brain half.'),
(57, '3BS#1000065', 'MICROCEPHALIC SKULL (A29/1)', '1000065#MICROCEPHALIC SKULL (A29/1)', '1000065(A29/1)', 'NULL', 'EUR', '552.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Anatomical model of a skull of a young male. This one-part microcephalic skull has an alveolar abscess of the right maxilla with the canine tooth suspended in the abscess. The molars exhibit severe attrition. This human microcephalic skull model is a natural cast and includes 27 teeth.   High-quality original casts Microcephalic skull is handmade of hard, unbreakable plastic Highly accurate representation of the fissures, foramina, processes, sutures etc.  This microcephalic skull model is an accurate anatomical replica of microcephalic human and is great for teaching and learning about medical malformations of the human skull.  Weights & Measurements 23 x 16.5 x 17 cm  0.8 kg 9.1 x 6.5 x 6.7 in  1.76 lb'),
(58, '3BS#1000066', 'HYDROCEPHALIC SKULL (A29/2)', '1000066#HYDROCEPHALIC SKULL (A29/2)', '1000066(A29/2)', 'NULL', 'EUR', '552.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'This human skull model demonstrates the anatomy of a hydrocephalic skull. The enlarged cerebral cranium is typical of this severe malformation. The skullcap of the one-part hydrocephalic skull is partially covered by bone skin. The lower right canine and the right molar are decayed. The hydrocephalic skull replica is made from a natural cast.   High-quality original casts Hydrocephalic Skull is handmade of hard, unbreakable plastic Highly accurate representation of the fissures, foramina, processes, sutures etc.  This hydrocephalic skull is great for teaching and learning about medical malformations of the human skull.  Weights & Measurements 28 x 23 x 19.5 cm  0.8 kg 11.0 x 9.1 x 7.7 in  1.76 lb'),
(59, '3BS#1000067', 'SKULL WITH CLEFT JAW AND PLATE (A29/3)', '1000067#SKULL WITH CLEFT JAW AND PLATE (A29/3)', '1000067(A29/3)', 'NULL', 'EUR', '552.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(60, '3BS#1000068', 'SKULL KIT (A290)', '1000068#SKULL KIT (A290)', '1000068(A290)', 'NULL', 'EUR', '502.69', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'The human skull consists of many individual bones that gradually grow together as the development proceeds. The best selling 3B Scientific® Beauchene Adult Human Skull is a natural cast and makes the complex anatomical structure of the human skull easy to understand.   The Beauchene Skull can be disassembled into its 22 individual bones. The individual bones can be reassembled by means of inconspicuous, stable connectors attached at the slightly simplified skull sutures. All 22 bones are depicted in their natural bone color in this "Exploded Human Skull".  The skull consists of the following individual bones: Parietal bone (left and right) Occipital bone Frontal bone Temporal bone (left and right) Sphenoid bone Ethmoid bone Vomer bone Zygomatic bone (left and right) Upper jaw (maxilla) with teeth (left and right) Palatine bone (left and right) Nasal concha (left and right) Lacrimal bone (left and right) Nasal bone (left and right) Lower jaw (mandible) with teeth  Weights & Measurements 21 x 14 x 16 cm  0.7 kg 8.3 x 5.5 x 6.3 in  1.54 lb'),
(61, '3BS#1000069', 'SKULL KIT (A291)', '1000069#SKULL KIT (A291)', '1000069(A291)', 'NULL', 'EUR', '577.41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(62, '3BS#1000070', 'FOOT SKELETON WITH BONE NAMES (A30/1R)', '1000070#FOOT SKELETON WITH BONE NAMES (A30/1R)', '1000070(A30/1R)', 'NULL', 'NULL', '0.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(63, '3BS#1000071', 'FOOT SKELETON LOOSELY THREADED (A30/2L)', '1000071#FOOT SKELETON LOOSELY THREADED (A30/2L)', '1000071(A30/2L)', 'NULL', 'EUR', '101.90', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(64, '3BS#1000072', 'FOOT SKELETON LOOSELY THREADED (A30/2R)', '1000072#FOOT SKELETON LOOSELY THREADED (A30/2R)', '1000072(A30/2R)', 'NULL', 'EUR', '101.90', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(65, '3BS#1000073', 'FOOT SKELETON MOUNTED ON WIRE, (A30L)', '1000073#FOOT SKELETON MOUNTED ON WIRE, (A30L)', '1000073(A30L)', 'NULL', 'EUR', '81.52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(66, '3BS#1000074', 'FOOT SKELETON MOUNTED ON WIRE, (A30R)', '1000074#FOOT SKELETON MOUNTED ON WIRE, (A30R)', '1000074(A30R)', 'NULL', 'EUR', '81.52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(67, '3BS#1000075', 'FOOT SKELETON WITH PORTIONS OF (A31/1L)', '1000075#FOOT SKELETON WITH PORTIONS OF (A31/1L)', '1000075(A31/1L)', 'NULL', 'EUR', '133.60', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(68, '3BS#1000076', 'FOOT SKELETON WITH PORTIONS OF (A31/1R)', '1000076#FOOT SKELETON WITH PORTIONS OF (A31/1R)', '1000076(A31/1R)', 'NULL', 'EUR', '133.60', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(69, '3BS#1000077', 'FOOT SKELETON WITH PORTIONS OF (A31L)', '1000077#FOOT SKELETON WITH PORTIONS OF (A31L)', '1000077(A31L)', 'NULL', 'EUR', '108.69', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(70, '3BS#1000078', 'FOOT SKELETON WITH PORTIONS OF (A31R)', '1000078#FOOT SKELETON WITH PORTIONS OF (A31R)', '1000078(A31R)', 'NULL', 'EUR', '108.69', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(71, '3BS#1000079', 'FEMUR, LEFT (A35/1L)', '1000079#FEMUR, LEFT (A35/1L)', '1000079(A35/1L)', 'NULL', 'EUR', '56.61', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(72, '3BS#1000080', 'FEMUR, RIGHT (A35/1R)', '1000080#FEMUR, RIGHT (A35/1R)', '1000080(A35/1R)', 'NULL', 'EUR', '56.61', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(73, '3BS#1000081', 'PATELLA, LEFT (A35/2L)', '1000081#PATELLA, LEFT (A35/2L)', '1000081(A35/2L)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(74, '3BS#1000082', 'PATELLA, RIGHT (A35/2R)', '1000082#PATELLA, RIGHT (A35/2R)', '1000082(A35/2R)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(75, '3BS#1000083', 'TIBIA, LEFT (A35/3L)', '1000083#TIBIA, LEFT (A35/3L)', '1000083(A35/3L)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(76, '3BS#1000084', 'TIBIA, RIGHT (A35/3R)', '1000084#TIBIA, RIGHT (A35/3R)', '1000084(A35/3R)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(77, '3BS#1000085', 'FIBULA, LEFT (A35/4L)', '1000085#FIBULA, LEFT (A35/4L)', '1000085(A35/4L)', 'NULL', 'EUR', '18.79', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(78, '3BS#1000086', 'FIBULA, RIGHT (A35/4R)', '1000086#FIBULA, RIGHT (A35/4R)', '1000086(A35/4R)', 'NULL', 'EUR', '18.79', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(79, '3BS#1000087', 'HIP BONE, LEFT (A35/5L)', '1000087#HIP BONE, LEFT (A35/5L)', '1000087(A35/5L)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(80, '3BS#1000088', 'HIP BONE, RIGHT (A35/5R)', '1000088#HIP BONE, RIGHT (A35/5R)', '1000088(A35/5R)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(81, '3BS#1000089', 'FEMUR HEADS, 1 PAIR (A35/6)', '1000089#FEMUR HEADS, 1 PAIR (A35/6)', '1000089(A35/6)', 'NULL', 'EUR', '38.45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(82, '3BS#1000090', 'LEG SKELETON, LEFT (A35L)', '1000090#LEG SKELETON, LEFT (A35L)', '1000090(A35L)', 'NULL', 'EUR', '176.62', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(83, '3BS#1000091', 'LEG SKELETON, RIGHT (A35R)', '1000091#LEG SKELETON, RIGHT (A35R)', '1000091(A35R)', 'NULL', 'EUR', '176.62', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(84, '3BS#1000092', 'LEG SKELETON WITH HIP BONE, L. (A36L)', '1000092#LEG SKELETON WITH HIP BONE, L. (A36L)', '1000092(A36L)', 'NULL', 'EUR', '185.68', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(85, '3BS#1000093', 'LEG SKELETON WITH HIP BONE, (A36R)', '1000093#LEG SKELETON WITH HIP BONE, (A36R)', '1000093(A36R)', 'NULL', 'EUR', '185.68', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(86, '3BS#1000094', 'HAND SKELETON WITH BONE NAMES (A40/1L)', '1000094#HAND SKELETON WITH BONE NAMES (A40/1L)', '1000094(A40/1L)', 'NULL', 'EUR', '97.37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(87, '3BS#1000095', 'HAND SKELETON WITH BONE NAMES (A40/1R)', '1000095#HAND SKELETON WITH BONE NAMES (A40/1R)', '1000095(A40/1R)', 'NULL', 'EUR', '97.37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(88, '3BS#1000096', 'HAND SKELETON LOOSELY THREADED (A40/2L)', '1000096#HAND SKELETON LOOSELY THREADED (A40/2L)', '1000096(A40/2L)', 'NULL', 'EUR', '99.63', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(89, '3BS#1000097', 'HAND SKELETON LOOSELY THREADED (A40/2R)', '1000097#HAND SKELETON LOOSELY THREADED (A40/2R)', '1000097(A40/2R)', 'NULL', 'EUR', '99.63', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(90, '3BS#1000098', 'HAND SKELETON WITH PORTIONS OF (A40/3L)', '1000098#HAND SKELETON WITH PORTIONS OF (A40/3L)', '1000098(A40/3L)', 'NULL', 'EUR', '142.65', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(91, '3BS#1000099', 'HAND SKELETON WITH PORTIONS OF (A40/3R)', '1000099#HAND SKELETON WITH PORTIONS OF (A40/3R)', '1000099(A40/3R)', 'NULL', 'EUR', '142.65', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(92, '3BS#1000100', 'HAND SKELETON WIRE MOUNTED, (A40L)', '1000100#HAND SKELETON WIRE MOUNTED, (A40L)', '1000100(A40L)', 'NULL', 'EUR', '81.52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(93, '3BS#1000101', 'HAND SKELETON WIRE MOUNTED, (A40R)', '1000101#HAND SKELETON WIRE MOUNTED, (A40R)', '1000101(A40R)', 'NULL', 'EUR', '81.52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(94, '3BS#1000102', 'HAND SKELETON WITH PORTIONS OF (A41L)', '1000102#HAND SKELETON WITH PORTIONS OF (A41L)', '1000102(A41L)', 'NULL', 'EUR', '117.75', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(95, '3BS#1000103', 'HAND SKELETON WITH PORTIONS OF (A41R)', '1000103#HAND SKELETON WITH PORTIONS OF (A41R)', '1000103(A41R)', 'NULL', 'EUR', '117.75', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(96, '3BS#1000104', 'HUMERUS, LEFT (A45/1L)', '1000104#HUMERUS, LEFT (A45/1L)', '1000104(A45/1L)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(97, '3BS#1000105', 'HUMERUS, RIGHT (A45/1R)', '1000105#HUMERUS, RIGHT (A45/1R)', '1000105(A45/1R)', 'NULL', 'EUR', '33.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(98, '3BS#1000106', 'ULNA, LEFT (A45/2L)', '1000106#ULNA, LEFT (A45/2L)', '1000106(A45/2L)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(99, '3BS#1000107', 'ULNA, RIGHT (A45/2R)', '1000107#ULNA, RIGHT (A45/2R)', '1000107(A45/2R)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(100, '3BS#1000108', 'RADIUS, LEFT (A45/3L)', '1000108#RADIUS, LEFT (A45/3L)', '1000108(A45/3L)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(101, '3BS#1000109', 'RADIUS, RIGHT (A45/3R)', '1000109#RADIUS, RIGHT (A45/3R)', '1000109(A45/3R)', 'NULL', 'EUR', '25.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(102, '3BS#1000110', 'SCAPULA, LEFT (A45/4L)', '1000110#SCAPULA, LEFT (A45/4L)', '1000110(A45/4L)', 'NULL', 'EUR', '16.53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(103, '3BS#1000111', 'SCAPULA, RIGHT (A45/4R)', '1000111#SCAPULA, RIGHT (A45/4R)', '1000111(A45/4R)', 'NULL', 'EUR', '16.53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(104, '3BS#1000112', 'CLAVICLE, LEFT (A45/5L)', '1000112#CLAVICLE, LEFT (A45/5L)', '1000112(A45/5L)', 'NULL', 'EUR', '16.53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(105, '3BS#1000113', 'CLAVICLE, RIGHT (A45/5R)', '1000113#CLAVICLE, RIGHT (A45/5R)', '1000113(A45/5R)', 'NULL', 'EUR', '16.53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(106, '3BS#1000114', 'ARM SKELETON, LEFT (A45L)', '1000114#ARM SKELETON, LEFT (A45L)', '1000114(A45L)', 'NULL', 'EUR', '133.60', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(107, '3BS#1000115', 'ARM SKELETON, RIGHT (A45R)', '1000115#ARM SKELETON, RIGHT (A45R)', '1000115(A45R)', 'NULL', 'EUR', '133.60', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(108, '3BS#1000116', 'ARM SKELETON WITH SCAPULA AND (A46L)', '1000116#ARM SKELETON WITH SCAPULA AND (A46L)', '1000116(A46L)', 'NULL', 'EUR', '158.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(109, '3BS#1000117', 'ARM SKELETON WITH SCAPULA AND (A46R)', '1000117#ARM SKELETON WITH SCAPULA AND (A46R)', '1000117(A46R)', 'NULL', 'EUR', '158.50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(110, '3BS#1000118', 'CHILD VERTEBRAL COLUMN (A52)', '1000118#CHILD VERTEBRAL COLUMN (A52)', '1000118(A52)', 'NULL', 'EUR', '350.97', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(111, '3BS#1000119', 'CLASSIC FLEXIBLE SPINE WITH (A56)', '1000119#CLASSIC FLEXIBLE SPINE WITH (A56)', '1000119(A56)', 'NULL', 'EUR', '507.21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'Description: Flexible spine with ribs shows the interaction of the ribs, spine and  associated structures. This spine and rib model contains the following features:  Full pelvis and occiput Extremely good valued and high quality durability Full pelvis and occipital plate Fully flexible mounting L3-L4 disc prolapsed Spinal nerve exits Cervical vertebral artery Male pelvis  Weights & Measurements:  74 cm 29.1 in  2.8 kg 6.17 lb'),
(112, '3BS#1000120', 'CLASSIC FLEXIBLE SPINE WITH (A56/2)', '1000120#CLASSIC FLEXIBLE SPINE WITH (A56/2)', '1000120(A56/2)', 'NULL', 'EUR', '593.26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(113, '3BS#1000121', 'CLASSIC FLEXIBLE SPINE (A58/1)', '1000121#CLASSIC FLEXIBLE SPINE (A58/1)', '1000121(A58/1)', 'NULL', 'EUR', '178.88', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(114, '3BS#1000122', 'CLASSIC FLEXIBLE SPINE WITH (A58/2)', '1000122#CLASSIC FLEXIBLE SPINE WITH (A58/2)', '1000122(A58/2)', 'NULL', 'EUR', '203.79', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(115, '3BS#1000123', 'CLASSIC FLEX. SPINE WITH FEMUR (A58/3)', '1000123#CLASSIC FLEX. SPINE WITH FEMUR (A58/3)', '1000123(A58/3)', 'NULL', 'EUR', '273.99', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(116, '3BS#1000124', 'CLASSIC FLEXIBLE SPINE WITH (A58/4)', '1000124#CLASSIC FLEXIBLE SPINE WITH (A58/4)', '1000124(A58/4)', 'NULL', 'EUR', '246.81', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(117, '3BS#1000125', 'DELUXE FLEXIBLE SPINE (A58/5)', '1000125#DELUXE FLEXIBLE SPINE (A58/5)', '1000125(A58/5)', 'NULL', 'EUR', '278.51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL'),
(118, '3BS#1000126', 'DELUXE FLEXIBLE SPINE WITH (A58/6)', '1000126#DELUXE FLEXIBLE SPINE WITH (A58/6)', '1000126(A58/6)', 'NULL', 'EUR', '312.48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-05-27 14:36:46', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE IF NOT EXISTS `login_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2015-05-21 22:56:02', 1, '2015-05-21 08:56:02', '2015-05-21 08:56:02'),
(3, '2015-05-21 22:57:08', 2, '2015-05-21 08:57:08', '2015-05-21 08:57:08'),
(4, '2015-05-21 15:58:03', 2, '2015-05-21 08:58:03', '2015-05-21 08:58:03'),
(5, '2015-05-21 16:52:57', 1, '2015-05-21 09:52:57', '2015-05-21 09:52:57'),
(6, '2015-05-22 10:17:53', 1, '2015-05-22 03:17:53', '2015-05-22 03:17:53'),
(7, '2015-05-22 11:29:41', 7, '2015-05-22 04:29:41', '2015-05-22 04:29:41'),
(8, '2015-05-22 11:29:57', 3, '2015-05-22 04:29:57', '2015-05-22 04:29:57'),
(9, '2015-05-22 11:30:19', 10, '2015-05-22 04:30:19', '2015-05-22 04:30:19'),
(10, '2015-05-22 11:31:08', 6, '2015-05-22 04:31:08', '2015-05-22 04:31:08'),
(11, '2015-05-22 13:34:04', 1, '2015-05-22 06:34:04', '2015-05-22 06:34:04'),
(12, '2015-05-25 10:40:32', 1, '2015-05-25 03:40:32', '2015-05-25 03:40:32'),
(13, '2015-05-25 13:35:29', 2, '2015-05-25 06:35:29', '2015-05-25 06:35:29'),
(14, '2015-05-25 13:36:54', 1, '2015-05-25 06:36:54', '2015-05-25 06:36:54'),
(15, '2015-05-27 14:35:42', 1, '2015-05-27 07:35:42', '2015-05-27 07:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2015_05_08_140730_create_table_barang', 1),
('2015_05_08_145651_create_table_upload', 1),
('2015_05_15_125341_create_table_news', 1),
('2015_05_18_130225_add_column_user', 1),
('2015_05_21_132336_create_login_count', 2),
('2015_05_21_164050_create_login_count2', 3),
('2015_05_22_105434_edit_column_login', 4),
('2015_05_22_153037_update_kolom_barang', 5),
('2015_05_22_153323_update_kolom_barang2', 6),
('2015_05_22_153450_update_kolom_barang3', 7),
('2015_05_22_153614_update_kolom_barang4', 8),
('2015_05_22_164513_tambah_kolom_lastupdate', 9),
('2015_05_22_170108_update_kolom_barang_panjang_spec', 10),
('2015_05_22_170428_tambah_kolom_specygbener', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `date`, `created_at`, `updated_at`) VALUES
(1, 'News pertama', '<h1>Sebuah Judul</h1>\r\n<p>sebuah paragraf</p>\r\n<p><strong>bold</strong></p>', '2015-05-23 00:17:35', '2015-05-22 10:17:35', '2015-05-22 10:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`, `created_at`, `updated_at`) VALUES
(1, '2015-05-22_15-37-26.xlsx', '2015-05-22 15:37:26', '2015-05-22 08:37:27', '2015-05-22 08:37:27'),
(2, '2015-05-22_15-54-50.xlsx', '2015-05-22 15:54:50', '2015-05-22 08:54:50', '2015-05-22 08:54:50'),
(3, '2015-05-22_16-09-06.xlsx', '2015-05-22 16:09:06', '2015-05-22 09:09:13', '2015-05-22 09:09:13'),
(4, '2015-05-22_16-09-54.xlsx', '2015-05-22 16:09:54', '2015-05-22 09:09:56', '2015-05-22 09:09:56'),
(5, '2015-05-22_16-10-51.xlsx', '2015-05-22 16:10:51', '2015-05-22 09:10:52', '2015-05-22 09:10:52'),
(6, '2015-05-22_16-11-19.xlsx', '2015-05-22 16:11:19', '2015-05-22 09:11:20', '2015-05-22 09:11:20'),
(7, '2015-05-22_16-14-18.xlsx', '2015-05-22 16:14:18', '2015-05-22 09:14:19', '2015-05-22 09:14:19'),
(8, '2015-05-22_16-28-51.xlsx', '2015-05-22 16:28:51', '2015-05-22 09:28:51', '2015-05-22 09:28:51'),
(9, '2015-05-22_16-37-53.xlsx', '2015-05-22 16:37:53', '2015-05-22 09:37:53', '2015-05-22 09:37:53'),
(10, '2015-05-22_16-39-43.xlsx', '2015-05-22 16:39:43', '2015-05-22 09:39:43', '2015-05-22 09:39:43'),
(11, '2015-05-22_16-40-05.xlsx', '2015-05-22 16:40:05', '2015-05-22 09:40:05', '2015-05-22 09:40:05'),
(12, '2015-05-22_16-41-38.xlsx', '2015-05-22 16:41:38', '2015-05-22 09:41:38', '2015-05-22 09:41:38'),
(13, '2015-05-22_16-42-36.xlsx', '2015-05-22 16:42:36', '2015-05-22 09:42:36', '2015-05-22 09:42:36'),
(14, '2015-05-22_16-43-57.xlsx', '2015-05-22 16:43:57', '2015-05-22 09:43:57', '2015-05-22 09:43:57'),
(15, '2015-05-22_16-48-48.xlsx', '2015-05-22 16:48:48', '2015-05-22 09:48:49', '2015-05-22 09:48:49'),
(16, '2015-05-22_16-49-19.xlsx', '2015-05-22 16:49:19', '2015-05-22 09:49:19', '2015-05-22 09:49:19'),
(17, '2015-05-22_16-50-20.xlsx', '2015-05-22 16:50:20', '2015-05-22 09:50:20', '2015-05-22 09:50:20'),
(18, '2015-05-22_16-50-36.xlsx', '2015-05-22 16:50:36', '2015-05-22 09:50:36', '2015-05-22 09:50:36'),
(19, '2015-05-22_16-52-26.xlsx', '2015-05-22 16:52:26', '2015-05-22 09:52:27', '2015-05-22 09:52:27'),
(20, '2015-05-22_16-52-44.xlsx', '2015-05-22 16:52:44', '2015-05-22 09:52:44', '2015-05-22 09:52:44'),
(21, '2015-05-22_16-53-03.xlsx', '2015-05-22 16:53:03', '2015-05-22 09:53:03', '2015-05-22 09:53:03'),
(22, '2015-05-22_17-05-45.xlsx', '2015-05-22 17:05:45', '2015-05-22 10:05:46', '2015-05-22 10:05:46'),
(23, '2015-05-22_17-06-22.xlsx', '2015-05-22 17:06:22', '2015-05-22 10:06:22', '2015-05-22 10:06:22'),
(24, '2015-05-22_17-07-19.xlsx', '2015-05-22 17:07:19', '2015-05-22 10:07:19', '2015-05-22 10:07:19'),
(25, '2015-05-22_17-10-01.xlsx', '2015-05-22 17:10:01', '2015-05-22 10:15:13', '2015-05-22 10:15:13'),
(26, '2015-05-22_17-21-35.xlsx', '2015-05-22 17:21:35', '2015-05-22 10:22:50', '2015-05-22 10:22:50'),
(27, '2015-05-25_13-03-47.xlsx', '2015-05-25 13:03:47', '2015-05-25 06:03:48', '2015-05-25 06:03:48'),
(28, '2015-05-25_13-05-23.xlsx', '2015-05-25 13:05:23', '2015-05-25 06:07:00', '2015-05-25 06:07:00'),
(29, '2015-05-25_13-07-21.xlsx', '2015-05-25 13:07:21', '2015-05-25 06:07:21', '2015-05-25 06:07:21'),
(30, '2015-05-25_13-09-13.xlsx', '2015-05-25 13:09:13', '2015-05-25 06:09:13', '2015-05-25 06:09:13'),
(31, '2015-05-25_13-09-27.xlsx', '2015-05-25 13:09:27', '2015-05-25 06:09:27', '2015-05-25 06:09:27'),
(32, '2015-05-25_13-10-59.xlsx', '2015-05-25 13:10:59', '2015-05-25 06:10:59', '2015-05-25 06:10:59'),
(33, '2015-05-25_13-13-57.xlsx', '2015-05-25 13:13:57', '2015-05-25 06:13:57', '2015-05-25 06:13:57'),
(34, '2015-05-25_13-14-35.xlsx', '2015-05-25 13:14:35', '2015-05-25 06:14:35', '2015-05-25 06:14:35'),
(35, '2015-05-25_13-15-21.xlsx', '2015-05-25 13:15:21', '2015-05-25 06:15:21', '2015-05-25 06:15:21'),
(36, '2015-05-25_13-15-59.xlsx', '2015-05-25 13:15:59', '2015-05-25 06:15:59', '2015-05-25 06:15:59'),
(37, '2015-05-25_13-16-32.xlsx', '2015-05-25 13:16:32', '2015-05-25 06:16:32', '2015-05-25 06:16:32'),
(38, '2015-05-25_13-33-36.xlsx', '2015-05-25 13:33:36', '2015-05-25 06:33:36', '2015-05-25 06:33:36'),
(39, '2015-05-25_13-33-58.xlsx', '2015-05-25 13:33:58', '2015-05-25 06:33:58', '2015-05-25 06:33:58'),
(40, '2015-05-25_13-34-17.xlsx', '2015-05-25 13:34:17', '2015-05-25 06:34:17', '2015-05-25 06:34:17'),
(41, '2015-05-25_13-37-07.xlsx', '2015-05-25 13:37:07', '2015-05-25 06:38:22', '2015-05-25 06:38:22'),
(42, '2015-05-25_13-39-22.xlsx', '2015-05-25 13:39:22', '2015-05-25 06:45:34', '2015-05-25 06:45:34'),
(43, '2015-05-25_13-49-57.xlsx', '2015-05-25 13:49:57', '2015-05-25 06:49:57', '2015-05-25 06:49:57'),
(44, '2015-05-25_13-50-24.xlsx', '2015-05-25 13:50:24', '2015-05-25 06:50:24', '2015-05-25 06:50:24'),
(45, '2015-05-25_13-51-03.xlsx', '2015-05-25 13:51:03', '2015-05-25 06:51:03', '2015-05-25 06:51:03'),
(46, '2015-05-25_13-56-26.xlsx', '2015-05-25 13:56:26', '2015-05-25 06:56:54', '2015-05-25 06:56:54'),
(47, '2015-05-25_13-57-18.xlsx', '2015-05-25 13:57:18', '2015-05-25 06:58:52', '2015-05-25 06:58:52'),
(48, '2015-05-25_14-08-03.xlsx', '2015-05-25 14:08:03', '2015-05-25 07:08:03', '2015-05-25 07:08:03'),
(49, '2015-05-25_14-09-19.xlsx', '2015-05-25 14:09:19', '2015-05-25 07:09:19', '2015-05-25 07:09:19'),
(50, '2015-05-25_14-09-40.xlsx', '2015-05-25 14:09:40', '2015-05-25 07:09:40', '2015-05-25 07:09:40'),
(51, '2015-05-25_14-10-11.xlsx', '2015-05-25 14:10:11', '2015-05-25 07:10:11', '2015-05-25 07:10:11'),
(52, '2015-05-25_14-11-13.xlsx', '2015-05-25 14:11:13', '2015-05-25 07:11:13', '2015-05-25 07:11:13'),
(53, '2015-05-25_14-12-20.xlsx', '2015-05-25 14:12:20', '2015-05-25 07:12:20', '2015-05-25 07:12:20'),
(54, '2015-05-25_14-13-02.xlsx', '2015-05-25 14:13:02', '2015-05-25 07:13:02', '2015-05-25 07:13:02'),
(55, '2015-05-25_14-17-49.xlsx', '2015-05-25 14:17:49', '2015-05-25 07:17:49', '2015-05-25 07:17:49'),
(56, '2015-05-25_14-19-14.xlsx', '2015-05-25 14:19:14', '2015-05-25 07:19:14', '2015-05-25 07:19:14'),
(57, '2015-05-25_14-19-27.xlsx', '2015-05-25 14:19:27', '2015-05-25 07:19:27', '2015-05-25 07:19:27'),
(58, '2015-05-25_15-04-11.xlsx', '2015-05-25 15:04:11', '2015-05-25 08:04:11', '2015-05-25 08:04:11'),
(59, '2015-05-25_15-13-55.xlsx', '2015-05-25 15:13:55', '2015-05-25 08:14:27', '2015-05-25 08:14:27'),
(60, '2015-05-25_15-15-59.xlsx', '2015-05-25 15:15:59', '2015-05-25 08:17:44', '2015-05-25 08:17:44'),
(61, '2015-05-25_15-37-50.xlsx', '2015-05-25 15:37:50', '2015-05-25 08:37:51', '2015-05-25 08:37:51'),
(62, '2015-05-25_15-38-29.xlsx', '2015-05-25 15:38:29', '2015-05-25 08:38:29', '2015-05-25 08:38:29'),
(63, '2015-05-25_15-42-21.xlsx', '2015-05-25 15:42:21', '2015-05-25 08:42:49', '2015-05-25 08:42:49'),
(64, '2015-05-27_14-36-46.xlsx', '2015-05-27 14:36:46', '2015-05-27 07:36:47', '2015-05-27 07:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `hp`, `email`) VALUES
(1, 'Administrator of darkness', 'admin', '$2y$10$5OzihIQ80RBfUYdSVB0tteH0QSJ81sy/OLgCWto0CcdQ50YHfNy0m', 'admin', 'BansjWLdQSIlOXmKY1CB8jWwLAZlBLZGLXsN1SskVmR5stZ5jpCw431aGCs5', '2015-05-21 05:15:49', '2015-05-25 06:35:17', '666666666666', 'admin@admin.admin'),
(2, 'Cloud Strife 7777777', 'cloud', '$2y$10$9AQDgrD7y7bl6o0dvOiW3u8qKrbak8etgRth7nTbwjrtLVNyF72za', 'marketing', 'V6Ozub4qYVyroeGeZe5Tu1GtsWrO1KDloRWVXyuu6Sr4LXx6XNRXt2Ypbxkw', '2015-05-21 06:17:35', '2015-05-25 06:36:52', '0897876780000', 'cloud@ff.viiiaaaaa'),
(3, 'Squal Leonhart', 'squall', '$2y$10$Bi17Xm1WcNRd7JsfWRvvKed/gWgOrJk2O6HVJPcm1TZ9.WlOjjEUm', 'marketing', 'Dov3tQj4sAhk8gdQEAMJOviUFZ68ec6KLQoF1i6ojJvLtkmmoq4RMA3osSnq', '2015-05-22 04:15:38', '2015-05-22 04:30:02', '093219765', 'iuygf89s7fy'),
(4, 'Zidane Tribal', 'zidane', '$2y$10$Bvy1WWHOpBMo4tG4HLfUUOkhNU4koG2IWEc99XyBT3DRJsgtsSBKy', 'marketing', NULL, '2015-05-22 04:16:00', '2015-05-22 04:16:00', '7649876', 'ihjglefihs'),
(5, 'Rinoa Heartily', 'rinoa', '$2y$10$gSWfu89pGh77Kn1qJa9dtOOEnXbSO8LurZd0ewr7WdXGicU5AKjny', 'marketing', NULL, '2015-05-22 04:16:51', '2015-05-22 04:16:51', '876548765', 'iuhjgbewfiujwh'),
(6, 'Zack Fair', 'zack', '$2y$10$ScHzQDlpbX04YTbGrOS20.JhW9fAu4VVkDjBmlW7yyLJ6.U1YJxl6', 'marketing', 'EXJYyphXjnk9hgYxcPhgGI8HEO7dDG4YAahsbqljvslKSZiFd6ojgVqxgpN6', '2015-05-22 04:17:17', '2015-05-22 06:33:55', '8173645', 'jbhgfehj'),
(7, 'Tidus', 'tidus', '$2y$10$.oks0FjHqz4ofzlp6TdzmOvnQOmQV1RmUBjCayy2St5TPni84wOY2', 'marketing', 'rjhaWVoprdFr8tTT119k2ErMjd9esGaNpyYKXEjtiLhhWxGml4zk7fHOq7Ca', '2015-05-22 04:17:53', '2015-05-22 04:29:48', '27362388', 'ujhfiowuehf'),
(8, 'Tifa Lockhart', 'tifa', '$2y$10$gSGgD47PgqsiwVXP4W4I4.ZgcljtR59qC7JOgEWaLQpiUttGEB/RW', 'marketing', NULL, '2015-05-22 04:18:15', '2015-05-22 04:18:15', '84692639', 'ihnfgkwehjf'),
(9, 'Cecil Harvey', 'cecil', '$2y$10$DZwUhDHXmNDwKUodzWjwfuOWVB9tVlxFjDYT3OZhgcpOXPkHPEkj6', 'marketing', NULL, '2015-05-22 04:18:36', '2015-05-22 04:18:36', '82436427', 'ujfgthikjuhwefw'),
(10, 'Yuna ', 'yuna', '$2y$10$hLtUHaf/I.DtYPgogUKmne5O71lMfGn3abpBVHVlfHgYVh8hGXeqC', 'marketing', 'Z3W5BxzdElyjjWqhV8vBjTI131rVcaaDgXQoPI3hyLVhmu2xHZXSGXzMRKMA', '2015-05-22 04:19:35', '2015-05-22 04:30:47', '176351', 'uyfrujee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
