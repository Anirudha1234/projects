-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 03:29 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `cid` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `ccontactno` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`cid`, `cname`, `caddress`, `ccontactno`, `longitude`, `latitude`) VALUES
('1', 'bhilai institute of technology raipur chhattisgarh', 'raipur-abhanpur Rd,bhargaon,chhattisgarh-493661,india,9752065555', '9752065555', '21.2514', '81.2514'),
('10', 'kalyan snatkotar mahavidyalaya', 'sector 7 bhilai taluka bhilai 490006', '7882223665', '', ''),
('11', 'shri shankaracharya mahavidyalaya bhilai', 'sector 6 lakshmi narayan emole complex 490006', '07882284822', '', ''),
('12', 'swami shri swaroopanand saraswati mahavidyalaya', 'amdi nagar hudco bhilai chhattisgarh 491001', '', '', ''),
('13', 'bhilai maitri college chhattisgarh', 'risali sector bhilai 490006', '', '21.1609', '81.3435'),
('14', 'chhattisgarh kalyan shiksha mahavidyalaya', 'nandini road aheri p o dhouri(jcw) chhattisgarh 490024', '', '21.1948', '81.3334'),
('15', 'shiva college chhattisgarh', 'maitri vihar,radika nagar,supela bhilai,490023', '', '21.2116', '813365'),
('16', 'udai college bhilai chhattisgarh', 'plot no 108/1 & 108/2 near acc bogda pool,nandini road jamul,490024', '', '', ''),
('17', 'apollo college durg chhattisgarh', 'opposite veterinary college anjora durg 491001', '', '21.1653', '81.2297'),
('18', 'dev sanskriti college of education & technology', 'khapri dhamdha road bhilai 491001', '', '21.2408', '81.3026'),
('19', 'mansha college of education bhilai chhattisgarh', 'kohka road kurud bhilai,chhattisgarh,490024', '', '', ''),
('2', 'govt.engineering college raipur chhattisgarh 492015,india', 'sejbahar,old dhamtari road,raipur,chhattisgarh 492015,india,', '9981934836', '21.29996', '81.5706'),
('20', 'Dynamic College of Professional Studies', '  Nehru Nagar (East)Bhilai Durg - 490 020 DIST. : Durg  Chattisgarh	', '', '', ''),
('21', 'Rungta Coll.of Dental Science & Research  ', '  Kohka Road,Bhilai Distt.Durg Chattisgarh,  Chattisgarh	', '', '21.2357', '81.3451'),
('22', 'Attar Singh Mahavidylaya', '  Modeltown-511,Bhilai Distt.Durg Chattisgarh, ', '', '', ''),
('23', 'M.P.Christian College of Engineering & Technology Industrial Estate', ' Kailash Nagar,Bhilai Distt.Durg  Chattisgarh	', '', '21.2297', '81.3593'),
('24', 'Bhilai Mahila Mahavidyalaya,  BHILAI NAGAR, Sect 9. DIST.:Durg Chattisgarh  Chattisgarh	 ', ' BHILAI NAGAR, Sect 9. DIST.:Durg Chattisgarh  Chattisgarh	  Women College:   Yes	 University Name:  Pandit Ravi Shankar Shukla University	 ', '', '21.1927', '81.3162'),
('25', 'Bhilai Nayar Samajam College  Bhilai CHATTISGARH  ', ' Women College:   No	 University Name:  Pandit Ravi Shankar Shukla University	 ', '', '21.1947', '81.3228'),
('26', 'Dr. Rajendra Prasad Arts/Commerce College  Rasali,Bhilai Nagar Bhilai, Distt. Durg CHATTISGARH  ', ' Rasali,Bhilai Nagar Bhilai, Distt. Durg CHATTISGARH  Women College:   No	 University Name:  Pandit Ravi Shankar Shukla University	 ', '', '', ''),
('27', 'Kalyan Arts & Commerce College', 'BHILAI NAGAR. DIST.:Durg Chattisgarh  Chattisgarh	  Women College:   No	 University Name:  Pandit Ravi Shankar Shukla University	 ', '', '', ''),
('28', 'Kalyan Law College', 'Sector-VII, BHILAI NAGAR. DIST.:Durg  Chattisgarh	  Women College:   No	 University Name:  Pandit Ravi Shankar Shukla University	 ', '', '', ''),
('29', 'St. Thomas College', 'Ruabandha, BHILAI NAGAR. DIST.:Durg  Chattisgarh	  Women College:   No	 University Name:  Pandit Ravi Shankar Shukla University	    ', '', '', ''),
('3', 'pragati college of engineering ', ' chhattisgarh-492015,old dhamtari road,sejbahar,india', '7716538345', '21.2470', '81.6147'),
('30', 'CM Medical College, Bhilai', ' Address:Village Kadhandur, Near Rungta College, Bhilai (District Durg) Chhattisgarh, India Pin Code : 491001', '', '21.2075', '81.3353'),
('31', 'Kanti Darshan Mahavidyalya, Bhilai, Chhattisgarh', ' Address:24/3 and 24/4, Kosa Nagar Dixit Colony Bhilai (District Durg) Chhattisgarh, India Pin Code : 490023', '', '', ''),
('32', 'Mansa B Ed College, Bhilai, Chhattisgarh', 'Address:1450,1451, Kohaka Road,Kurud Bhilai (District Durg) Chhattisgarh, India Pin Code : 490024', '', '', ''),
('33', 'Chhattisgarh Vanijya Avam Vigyan Mahavidyalaya, Bhilai, Chhattisgarh A', ' Address:S-767, Street 10, Sector-6 Bhilai (District Durg) Chhattisgarh, India Pin Code : 490006', '', '', ''),
('34', 'Bhilai School of Architecture, Bhilai, Chhattisgarh Address:16, Commercial Complex, 1st FloorNehru Nagar (E) Bhilai (District Durg) Chhattisgarh, India Pin Code : 490020', 'Bhilai School of Architecture, Bhilai, Chhattisgarh Address:16, Commercial Complex, 1st FloorNehru Nagar (E) Bhilai (District Durg) Chhattisgarh, India Pin Code : 490020', '', '', ''),
('35', 'IBT College of Engineering and Technology, Bhilai, Chhattisgarh Address:Berla Road, Girhola Gram, Ahirwara, Nandini Nagar Bhilai (District Durg) Chhattisgarh, India', 'IBT College of Engineering and Technology, Bhilai, Chhattisgarh Address:Berla Road, Girhola Gram, Ahirwara, Nandini Nagar Bhilai (District Durg) Chhattisgarh, India', '', '', ''),
('36', 'Rastogi College of Nursing, Bhilai, Chhattisgarh Address:Model Town, Nehru Nagar East Bhilai (District Durg) Chhattisgarh, India Pin Code : 490020', 'Rastogi College of Nursing, Bhilai, Chhattisgarh Address:Model Town, Nehru Nagar East Bhilai (District Durg) Chhattisgarh, India Pin Code : 490020', '', '', ''),
('37', 'Ramkrishna Vidyapeeth College of Physiotherapy, Bhilai, Chhattisgarh Address:Risali Bhilai Chhattisgarh, India', 'Ramkrishna Vidyapeeth College of Physiotherapy, Bhilai, Chhattisgarh Address:Risali Bhilai Chhattisgarh, India', '', '', ''),
('38', 'Sai Mahavidyalaya, Bhilai, Chhattisgarh Bhilai (District Bhilai) Chhattisgarh, India', 'Sai Mahavidyalaya, Bhilai, Chhattisgarh Bhilai (District Bhilai) Chhattisgarh, India', '', '', ''),
('39', 'Attar Singh Mahavidyalaya, Bhilai, Chhattisgarh Address:Model Town-511 Bhilai Chhattisgarh, India', 'Attar Singh Mahavidyalaya, Bhilai, Chhattisgarh Address:Model Town-511 Bhilai Chhattisgarh, India', '', '', ''),
('4', 'mj college bhilai chhattisgarh', 'ayyappa nagar,bhilai chhatttisgah-490023,india', '07882295044', '21.2163', '81.3272'),
('40', 'Chhattisgarh Commerce and Science Mahavidyala, Bhilai, Chhattisgarh ', ' Bhilai, Chhattisgarh Address:Sect.-6 Bhilai Chhattisgarh, India', '', '', ''),
('41', 'Capital College of Information Technology, Bhilai, Chhattisgarh.', ' Bhilai Chhattisgarh, India', '', '', ''),
('42', 'Shri Krishana College, Bhilai, Chhattisgarh.', ' Bhilai, Chhattisgarh Address:Maroda Bhilai Chhattisgarh, India', '', '', ''),
('43', 'Shri Shankaracharya Institute of Pharmaceutical Sciences (SSIPS), Bhilai, Chhattisgarh.', ' Bhilai, Chhattisgarh Address:Junwani Bhilai Chhattisgarh, India', '', '', ''),
('44', 'Shreyas College Of Nursing,, Bhilai, Chhattisgarh.', ' Bhilai, Chhattisgarh Address:Shreyas Medical Centre, G E Road, Supela Bhilai (District Durg) Chhattisgarh, India Pin Code : 490023', '', '', ''),
('45', 'College Of Nursing, Bhilai, Chhattisgarh.', ' Bhilai, Chhattisgarh Address:St No. 5, Hospital Sector Bhilai (District Durg) Chhattisgarh, India Pin Code : 490009', '', '', ''),
('46', 'Government Girls College, Bhilai, Chhattisgarh.', ' Bhilai, Chhattisgarh Address:Durg Bhilai Chhattisgarh, India', '', '', ''),
('47', 'ICFAI National College (INC)', ' Bhilai, Chhattisgarh Address:Aakashdeep Complex, III Floor, Aakashganga, Supela Bhilai Chhattisgarh, India', '', '', ''),
('48', 'GD Rungta College of Engineering and Technology (GDRCET), Bhilai, Chhattisgarh Address:Kohka-Kurud Road Bhilai (District Bhilai) Chhattisgarh, India Pin Code : 490024', 'GD Rungta College of Engineering and Technology (GDRCET), Bhilai, Chhattisgarh Address:Kohka-Kurud Road Bhilai (District Bhilai) Chhattisgarh, India Pin Code : 490024', '', '21.2350', '81.3442'),
('49', 'Christian College of Engineering and Technology (CCET), Bhilai, Chhattisgarh Address:P.O. Box No. 18, Kailash Nagar, Near Industrial Estate Bhilai (District Durg) Chhattisgarh, India Pin Code : 492026', 'Christian College of Engineering and Technology (CCET), Bhilai, Chhattisgarh Address:P.O. Box No. 18, Kailash Nagar, Near Industrial Estate Bhilai (District Durg) Chhattisgarh, India Pin Code : 492026', '', '21.2297', '81.3593'),
('5', 'disha institute of managment & technology raipur chhattisgarh', 'building 1,first floor,ram nagar-kota marg,behind NIT and hotel piccadilly,raipur chhattisgarh 492003,india', '09685012222', '21.2515', '81.3272'),
('50', 'Rungta College of Dental Sciences and Research, Bhilai, Chhattisgarh.', 'Bhilai, Chhattisgarh Address:Rungta Educational Campus, Kohka-Kurud Road Bhilai Chhattisgarh, India', '', '21.2350', '81.3442'),
('51', 'Rungta Group of Institutions, Bhilai, Chhattisgarh.', 'Bhilai Chhattisgarh, India Pin Code : 490024', '', '21.2350', '81.3442'),
('52', 'RSR Rungta College of Engineering and Technology (RSRRCET), Bhilai, Chhattisgarh Address:Kohka-Kurud Road Bhilai (District Bhilai) Chhattisgarh, India Pin Code : 490024', 'RSR Rungta College of Engineering and Technology (RSRRCET), Bhilai, Chhattisgarh Address:Kohka-Kurud Road Bhilai (District Bhilai) Chhattisgarh, India Pin Code : 490024', '', '21.2350', '81.3442'),
('53', 'Takshashila Mahavidyalaya', 'Engineer''s bhawan civic centre,bhilai,chhattisarh pin code-490006,india,Affiliated:pandit ravishankar sukla university', '9425236936', '', ''),
('54', 'Maya Academy of Advance Cinematics', '158,new Civic Centre,dist durg,bhilai,chhattisgarh', '07884011386', '', ''),
('55', 'bhilai institute of technology Durg chhattisgarh', '', '', '21.1946', '81.2989'),
('56', 'chhatrapati shivaji institute durg', '', '', '21.1482', '81.2612'),
('57', 'Pandit Ravishankar University Raipur', '', '', '21.2469', '81.5974'),
('6', 'parthivi collage of engineering durg chhattisgarh', 'durg,SIRSAKALA,bhilai,chhattisgarh 490021', '09589132901', '21.1898', '81.6121'),
('7', 'shri shankaracharya college of engineering bhilai', 'junwani bhilai chhattisgarh-490020', '', '21.2158', '81.3065'),
('8', 'central college of engineering raipur chhattisgarh', 'kabir nagar,near R.K. mall,mohba bazar raipur,chhattisgarh-492009,india', '07712322400', '21.299996', '81.5706'),
('9', 'rungta college of engineeringn bhilai chhattisgarh', 'kohka road,kurud,chhattisgarh-490024,india', '07886459564', '21.2350', '81.2350');

-- --------------------------------------------------------

--
-- Table structure for table `fire_station`
--

CREATE TABLE IF NOT EXISTS `fire_station` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`contactno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_station`
--

INSERT INTO `fire_station` (`id`, `name`, `address`, `contactno`, `longitude`, `latitude`) VALUES
('1', 'B.S.P fire station', 'bhilai steel plant chowk ,bhilai steel plant,chhattisgarh', '07882852222', '21.1137', '81.22');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE IF NOT EXISTS `healthcare` (
  `H_id` varchar(200) NOT NULL,
  `H_name` varchar(200) NOT NULL,
  `H_address` varchar(200) NOT NULL,
  `H_contactno` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  PRIMARY KEY (`H_id`,`H_contactno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthcare`
--

INSERT INTO `healthcare` (`H_id`, `H_name`, `H_address`, `H_contactno`, `longitude`, `latitude`) VALUES
('1', 'narayana hrudayalaya mmi hospital raipur Chhattisgarh', 'dhamtari road,lalpur,raipur,chhattisgarh-492001,india', '7714210901', '21.2132', '81.6579'),
('10', 'all india institute of medical science raipur chhattisgarh', 'GE road,tatibandh,raipur-chhattisgarh-492099(opposite gurudwara)', '07712573777', '28.5668', '77.2103'),
('11', 'pandey nursing home raipur chhattisgarh', 'samta colony,raipur,chhattisgarh 492001,india', '07712235454', '21.2567', '81.5984'),
('12', 'chandulal chandrakar memorial hospital bhilai', 'nehru nagar square,GE road,bhilai,durg,chhattisgarh-490023,india,7882294712', '07882294712', '21.2002', '81.3227'),
('13', 'sparsh child hospital raipur chhattisgarh', 'near RK mall,opposite singapur city,mohba bazar', '08649988549', '21.2116', '81.3554'),
('14', 'ayushman hospital raipur chhattisgarh', ',daganiya,amanaka,near SBI Bank,raipur,chhattisgarh-492001,india', '07714076010', '21.2578', '81.6296'),
('15', 'B.M. shah hospital &  medical research centre', 'shastri nagar bhilai chhattisgarh,490023', '07773077711', '21.2099', '81.3602'),
('16', 'shree ambey hospital', 'G.E. road power house bhilai,camp2,bhilai chhhattisgarh 490022', '07884086194', '21.2092', '81.3782'),
('17', 'sanjeevani hospital', 'padum nagar,bhilai marshalling yard bhilai,chhattisgarh,490021', '07882281888', '', ''),
('18', 'vinayak hospital', 'priyadarshini nagar,maitri nagar risali,bhilai,chhattisgarh 490021', '07882281888', '', ''),
('19', 'shri shankaracharya institute of medical science', 'junwani,smriti nagar,bhilai,chhattisgarh,490020', '09293171727', '21.2206', '81.3063'),
('2', 'suyash hospital raipur', 'gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', '07712575275', '22.7139', '75.8842'),
('20', 'shri sai netralaya', 'panchsheel parisar,behind dhillon complex,garage rd akash ganga,supela bhilai,chhattisgarh,490023', '08251008351', '21.2048', '81.3513'),
('21', 'sharma netralaya', 'dakshin gangotri,supela,bhilai,chhattisgarh,490023', '07884030377', '21.2053', '81.3461'),
('22', 'BSP hospital sec 6 east', 'sector 6,bhilai,chhattisgarh 490006', '', '21.17945', '81.35365'),
('23', 'Dr. mukesh D.jain,sanjivani wellness centre raipur,bhilai-durg  exp4', 'priyadarshini parisar east supela ,bhilai chhattishgarh,290023', '07882292358', '21.2045', '81.3430'),
('24', 'sec 9 jawahar lal nehru research centre ', 's park Ave,sector5,bhilai,chhhattisharh,490006', '07882855011', '21.1844', '81.3505'),
('25', 'jankalyan hospital', 'ghasidas nagar,vasuri,bhilai,chhattishgarh,490026', '', '21.2368', '81.3689'),
('26', 'AUM hospital ', 'house 22,ward 18,durg -49101,491001', '7882210966', '', ''),
('27', 'Dr siddiqui eye hospital', 'gurudattar station road durg 491001', '07882323121', '', ''),
('28', 'M.P. nursing home', 'front tarun,talkis shankar nagar durg 491001', '07882324910', '', ''),
('29', 'osteopathy & yoga clinic', 'malviya nagar durg 490001', '9754363444', '', ''),
('3', 'dhanwantari hospital bhilai chhattisgarh', '40/3,nehru nagar east,bhilai,nehru nagar durrg,chhattisgarh 490020', '07882290294', '19.1646', '73.2395'),
('30', 'ambika hospital power house chhattisgarh', 'G.E. road power house bhilai 490001', '7884031210', '', ''),
('31', 'the srijjan test tube baby centre ', 'revival medical centre second floor c-4,G.E. road supela bhilai 490023', '9752595605', '', ''),
('32', 's.s hospital ', 'nandini road power house bhilai,490001', '7882286872', '', ''),
('33', 'sai naman hospital', 'nr, sirsa G.E. road bhilai-3,bhilai 490021', '7884090330', '', ''),
('34', 'bhilai nursing home', 'contractor colony sirsa road supela bhilai 490023', '7884030200', '', ''),
('35', 'suraj hospital', '4b/2, GERoad, Nehru Nagar East, Bhilai - 490021, Opposite Diesel Pump', '07882294620', '', ''),
('36', 'K Gurunath hospital', 'Priyadharshani Parisar, G.E Road, Supela, Bhilai - 490023  ', '(91)-788-2220777', '', ''),
('37', 'city hospital', 'Supela, Bhilai - 490023, Priyadarshini Parisar East (Map)', '', '', ''),
('38', 'kamla hospital', 'Mourya Complex, Front Of Mourya Talkies, Supela, Bhilai - 490023, Sirsa Road (Map)', '', '', ''),
('39', 'bhilai gayatri hospital', ' 5/3, G B Road, Supela, Bhilai - 490023, Priyadarsani Parisar, East Zone, Near Supela Thana & Railway Under Bridge, Opposite Tata Motors (Map)', '(91)-788-3206479  +(91)-9827150436', '', ''),
('4', 'vidya hospital and kidney centre raipur', 'shankar nagar raipur,chhattisgarh-492006', '7714055895', '21.2490', '81.6617'),
('40', 'Ortho Joints Arya nagar', 'Om Parisar, Bhilai - 490001, Arya Nagar', ' +(91)-788-2210702  +(91)-9898045103 ', '', ''),
('41', 'Twin city I C U & Medical Centre', 'upela, G E Road, Bhilai - 490001, Opp Teen Darshan Mandir', '(91)-788-6451001', '', ''),
('42', 'Geedogi devi Medical Hospital', 'Beside Police Chouki, G. E. Road, Khurshipar, Bhilai - 490011, Khurshipar', '(91)-788-4051001  ', '', ''),
('43', 'S S hospital', 'Nandini Road, Power House, Bhilai - 490001, Near Kusum Petrol Pump, Chawni Chowk  ', '+(91)-788-2286872  +(91)-9827163238', '', ''),
('44', 'Khanna Clinic', 'Nandini Road, Power House, Power House, Bhilai - 490001', '(91)-788-2356919', '', ''),
('45', 'Diabetics Care Centre', ' Nr. Maurya Talkies, G. E. Road, Supela, Bhilai - 490023 (Map)', '(91)-788-4035541, 4035542  +(91)-9827160909  Nr. Maurya Talkies, G. E. Road, Supela, Bhilai - 490023 (Map)', '', ''),
('46', 'Rmc hospital', 'Near Maurya Talkies, G.e. Raod, Supela, Bhilai - 490023, Supela (Map)', '+(91)-9827159843', '', ''),
('47', 'S.B. Momorial Hospital', '91)-788-6453462  +(91)-9893431771  Supela, Bhilai - 490023, Laxmi Nagar', '91)-788-6453462  +(91)-9893431771  Supela, Bhilai - 490023, Laxmi Nagar', '', ''),
('48', 'Nihar Hospital', '+(91)-9425210909 Nihar Hospital, Sector 5, Bhilai - 490006, Op.O Jewara Sirsa', '+(91)-9425210909 Nihar Hospital, Sector 5, Bhilai - 490006, Op.O Jewara Sirsa', '', ''),
('49', 'R.K hospital', 'Plot No 7-8, G E Road, Supela, Bhilai - 490023, Opposite Nagar Nigam', '+(91) 9993785497  +(91)-788-229560', '', ''),
('5', 'Ramkrishna care hospital raipur chhattisgarh', '492001,aurobindo enclave,pachpedi naka,dhamtari road,nh 43,india', '07713003300', '21.2129', '81.6537'),
('50', 'Arora Multispeciality Dental Implant Laser  centre', 'Krishna Talkies Road, Risali, Bhilai - 490006, Near DPS School,', '(91)-788-2278364  +(91)-9826600101, 9425240687', '', ''),
('51', 'Aarogya Niketan Swasthya Kendra', 'Plot No. - B-05, Central Avenue, Smriti Nagar, Bhilai - 490020, Smriti Nagar', '(91)-9329618388 ', '', ''),
('52', 'Dr S M Afzal', '9B/6, Sector 9, Sector 10, Bhilai - 490009, Nr, Market', '+(91)-9407980875, 9039024672 ', '', ''),
('53', 'MAA Durga Hospital', ' Main Road, Ahiwara, Bhilai - 490036', '9302186518', '', ''),
('6', 'devi laxmi hospital raipur ', '492001,telibandha ring td,tagore nagar,raipur,india', '07712421964', '21.2233', '81.6522'),
('7', 'mishra hospital raipur chhattisgarh', 'patidar bhawan,pinbar market,fafadih,raipur,chhattisgarh-492001,india', '07712889595', '21.2616', '81.6380'),
('8', 'subbarao hospital raipur chhattisgarh', 'behind hotel celebration,fafadih chowk,raipur', '07712885991', '21.2571', '81.6373'),
('9', 'life worth hospital raipur chhattisgarh', 'samta colony raipur,chhattisgarh-492001,india', '0,7714065400', '21.2458', '81.6372');

-- --------------------------------------------------------

--
-- Table structure for table `infotbl`
--

CREATE TABLE IF NOT EXISTS `infotbl` (
  `name` varchar(1000) NOT NULL,
  `lati` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  PRIMARY KEY (`lati`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotbl`
--

INSERT INTO `infotbl` (`name`, `lati`, `longi`) VALUES
('Apollo hospital', '21.193403', '81.286889'),
('dhanwantari hospital bhilai chhattisgarh,40/3,nehru nagar east,bhilai,nehru nagar durrg,chhattisgarh 490020,07882290294', '73.2395', '19.1646'),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', '75.8842', '22.7139'),
('all india institute of medical science raipur chhattisgarh,GE road,tatibandh,raipur-chhattisgarh-492099(opposite gurudwara),7712573777', '77.2103', '28.5668'),
('bhilai institute of technology raipur chhattisgarh,raipur-abhanpur Rd,bhargaon,chhattisgarh-493661,india,9752065555', '81.2514', '21.2514'),
('bhilai institute of technology durg,chhattisgarh-491001', '81.2998', '21.1914'),
('shri shankaracharya college of engineering bhilai,junwani bhilai chhattisgarh-490020', '81.3065', '21.2158'),
('sector 9 hospital bhilai', '81.3144', '21.1876'),
('chandulal chandrakar memorial hospital bhilai,nehru nagar square,GE road,bhilai,durg,chhattisgarh-490023,india,7882294712', '81.3227', '21.2002'),
('Apollo BSR hospital bhilai', '81.3236', '21.2163'),
('mj college bhilai chhattisgarh,ayyappa nagar,bhilai chhatttisgah-490023,india,7882295044', '81.3272', '21.2168'),
('rungta college of engineeringn bhilai chhattisgarh,kohka road,kurud,chhattisgarh-490024,india,7886459564', '81.3442', '21.2350'),
('sparsh child hospital raipur chhattisgarh,near RK mall,opposite singapur city,mohba bazar,raipur,8649988549', '81.3554', '21.2116'),
('parthivi collage of engineering durg chhattisgarh,durg,SIRSAKALA,bhilai,chhattisgarh 490021,india,9589132901', '81.4609', '21.1898'),
('central college of engineering raipur chhattisgarh,kabir nagar,near R.K. mall,mohba bazar raipur,chhattisgarh-492009,india,7712322400', '81.5706', '21.29996'),
('pandey nursing home raipur chhattisgarh,samta colony,raipur,chhattisgarh 492001,india,7712235454', '81.5984', '21.2567'),
('disha college raipur chhattisgarh,building 1,first floor,ram nagar-kota marg,behind NIT and hotel piccadilly,raipur chhattisgarh 492003,india,9685012222', '81.6121', '21.2515'),
('pragati college of engineering chhattisgarh-492015,old dhamtari road,sejbahar,india,7716538345', '81.6147', '21.2470'),
('ayushman hospital raipur chhattisgarh,daganiya,amanaka,near SBI Bank,raipur,chhattisgarh-492001,india,7714076010', '81.6296', '21.2518'),
('life worth hospital raipur chhattisgarh,samta colony raipur,chhattisgarh-492001,india,7714065400', '81.6304', '21.2458'),
('subbarao hospital raipur chhattisgarh,behind hotel celebration,fafadih chowk,raipur,7712885991', '81.6373', '21.2571'),
('mishra hospital raipur chhattisgarh,patidar bhawan,pinbar market,fafadih,raipur,chhattisgarh-492001,india,7712889595', '81.6380', '21.2616'),
('devi laxmi hospital raipur chhattisgarh-492001,telibandha ring td,tagore nagar,raipur,india,7712421964', '81.6522', '21.2233'),
('ramkrishna care hospital raipur chhattisgarh-492001,aurobindo enclave,pachpedi naka,dhamtari road,nh 43,india,7713003300', '81.6537', '21.2129'),
('narayana hrudayalaya mmi hospital raipur Chhattisgarh,dhamtari road,lalpur,raipur,chhattisgarh-492001,india,7714210901', '81.6579', '21.2132'),
('govt.engineering college raipur chhattisgarh,sejbahar,old dhamtari road,raipur,chhattisgarh 492015,india,9981934836', '81.6593', '21.1624'),
('vidya hospital and kidney centre raipur,shankar nagar raipur,chhattisgarh-492006,7714055895', '81.6617', '21.2490'),
('balaji hospital raipur', '81.6719', '21.2723'),
('shri rawatpura sarkar college of engineering', '81.6944', '21.1548'),
('shrishti college of nursing raipur', '81.7021', '21.1788'),
('lakshmi chand institute of technology bilaspur', '82.0991', '22.0321'),
('bilaspur hospital', '82.1304', '22.0987'),
('luthra hospital bilaspur', '82.1337', '22.0879'),
('mission hospital bilaspur', '82.1493', '22.0852'),
('ladikar hospital', '82.1605', '22.0841'),
('apollo hospital bilaspur', '82.1771', '22.0841');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `name` varchar(1000) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`name`, `rating`) VALUES
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 1),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 2),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 4),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 4),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 4),
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_med`
--

CREATE TABLE IF NOT EXISTS `tbl_med` (
  `name` varchar(1000) NOT NULL,
  `medicinetype` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_med`
--

INSERT INTO `tbl_med` (`name`, `medicinetype`) VALUES
('suyash hospital raipur,gudhiyari road,behind hotel piccadaily,kota,raipur,chhattisgarh 492001,07712575275', 'cancer hospital,raipur hospital,chhattisgarh hospital'),
('dhanwantari hospital bhilai chhattisgarh,40/3,nehru nagar east,bhilai,nehru nagar durrg,chhattisgarh 490020,07882290294', 'bhilai hospital,durg hospital,chhattisgarh hospital '),
('all india institute of medical science raipur chhattisgarh,GE road,tatibandh,raipur-chhattisgarh-492099(opposite gurudwara),7712573777', 'raipur medical college,chhattisgarh medical college,medical college'),
('bhilai institute of technology raipur chhattisgarh,raipur-abhanpur Rd,bhargaon,chhattisgarh-493661,india,9752065555', 'raipur engineering college,chhattisgarh engineering college'),
('shri shankaracharya college of engineering bhilai,junwani bhilai chhattisgarh-490020', 'bhilai engineering college,chhattisgarh enngineering college'),
('sector 9 hospital bhilai', 'hospital,doctor,bhilai'),
('vidya hospital and kidney centre raipur,shankar nagar raipur,chhattisgarh-492006,7714055895', 'hospital,doctor,medical college,kedney,raipur'),
('govt.engineering college raipur chhattisgarh,sejbahar,old dhamtari road,raipur,chhattisgarh 492015,india,9981934836', 'raipur engineering college,chhattisgarh engineering college'),
('narayana hrudayalaya mmi hospital raipur Chhattisgarh,dhamtari road,lalpur,raipur,chhattisgarh-492001,india,7714210901', 'hospital,raipur hospitals,chhattisgarh hospital'),
('ramkrishna care hospital raipur chhattisgarh-492001,aurobindo enclave,pachpedi naka,dhamtari road,nh 43,india,7713003300', 'hospital,raipur hospitals,chhattisgarh hospital'),
('devi laxmi hospital raipur chhattisgarh-492001,telibandha ring td,tagore nagar,raipur,india,7712421964', 'hospital,raipur hospitals,chhattisgarh hospital'),
('mishra hospital raipur chhattisgarh,patidar bhawan,pinbar market,fafadih,raipur,chhattisgarh-492001,india,7712889595', 'raipur hospital,chhattisgarh hospital,hospital'),
('subbarao hospital raipur chhattisgarh,behind hotel celebration,fafadih chowk,raipur,7712885991', 'raipur hospital,chhattisgarh hospital,hospital'),
('life worth hospital raipur chhattisgarh,samta colony raipur,chhattisgarh-492001,india,7714065400', 'raipur hospital,chhattisgarh hospitals'),
('ayushman hospital raipur chhattisgarh,daganiya,amanaka,near SBI Bank,raipur,chhattisgarh-492001,india,7714076010', 'raipur hospital,chhattisgarh hospital'),
('pragati college of engineering chhattisgarh-492015,old dhamtari road,sejbahar,india,7716538345', 'engineering college raipur,chhattigarh engineering college'),
('disha college raipur chhattisgarh,building 1,first floor,ram nagar-kota marg,behind NIT and hotel piccadilly,raipur chhattisgarh 492003,india,9685012222', 'raipur engineering college,chhattisgarh engineering college'),
('pandey nursing home raipur chhattisgarh,samta colony,raipur,chhattisgarh 492001,india,7712235454', 'chhattisgarh hospital,raipur hospital'),
('central college of engineering raipur chhattisgarh,kabir nagar,near R.K. mall,mohba bazar raipur,chhattisgarh-492009,india,7712322400', 'engineering college raipur,chhattisgarh engineering college'),
('parthivi collage of engineering durg chhattisgarh,durg,SIRSAKALA,bhilai,chhattisgarh 490021,india,9589132901', 'chhattisgarh engineering college,durg engineering college'),
('sparsh child hospital raipur chhattisgarh,near RK mall,opposite singapur city,mohba bazar,raipur,8649988549', 'chhattisgarh hospital,raipur hospital'),
('rungta college of engineeringn bhilai chhattisgarh,kohka road,kurud,chhattisgarh-490024,india,7886459564', 'chhattisgarh engineering college,bhilai engineering college'),
('mj college bhilai chhattisgarh,ayyappa nagar,bhilai chhatttisgah-490023,india,7882295044', 'mj college bhilai,chhattisgarh college'),
('Apollo BSR hospital bhilai', 'chhattisgarh hospital,bhilai hospital'),
('chandulal chandrakar memorial hospital bhilai,nehru nagar square,GE road,bhilai,durg,chhattisgarh-490023,india,7882294712', 'chattisgarh hospital,bhilai hospital'),
('bhilai institute of technology bhilai', 'chhattisgarh engineering college,bhilai engineering college');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
