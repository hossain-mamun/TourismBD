-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2015 at 05:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `message`) VALUES
(5, 'Mamun Hosen', 'hossainmamun278@gmail.com', 'nbgmvhmv'),
(7, 'Hossain Mamun', 'hossainmamun035@gmail.com', 'hee'),
(8, 'Mamun Hosen', 'mamuns999@yahoo.com', 'he');

-- --------------------------------------------------------

--
-- Table structure for table `related_place`
--

CREATE TABLE IF NOT EXISTS `related_place` (
  `related_place_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `first_place` text NOT NULL,
  `second_place` varchar(1000) NOT NULL,
  `third_place` varchar(1000) NOT NULL,
  `fourth_place` varchar(1000) NOT NULL,
  `latitude` decimal(12,8) NOT NULL,
  `longitude` decimal(12,8) NOT NULL,
  `map_name` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_place`
--

INSERT INTO `related_place` (`related_place_id`, `place_id`, `first_place`, `second_place`, `third_place`, `fourth_place`, `latitude`, `longitude`, `map_name`) VALUES
(1, 10, ' The Himchari National Park is a beautiful tropical rain forest, which is very near the town of Cox’s Bazar, and which is protected and maintained for the people of Bangladesh and for visitors from abroad as well. The park has high forest, low forest and grasslands with a few trees. Some of the grasslands may be areas which were encroached upon before the Park was fully regulated. Though the Bay of Bengal is not far away, Himchari does not have any inter-tidal habitats.\r\nThe Himchari Natural Park is a biologist’s delight! There are more than 50 species of trees, including Grewia microcos, Dipterocarpus turbinatus, Vitex pedurcularis, and Pterospermum acerifolium. The forest area has some twenty types of important herbs, amongst which Swintonia floribunda, Curculigo recurvata, and Alpinia nigra are most valuable. ', 'Aggmeda Khyang a large Buddhist monastery, and a place revered by around 400,000 Buddhist people of Cox''s Bazar; and the Chittagong Hill Tracts. The main sanctuary is posted on a series of round timber columns. It has a prayer chamber and an assembly hall, Buddha images and manuscripts. The main chamber is supported by timber columns. The Aggmeda Khyang is located by the entrance to the town. The majority of the Buddha images originate from Burma. Aggmeda Khyang is at the bottom of a hill and is nestled in between trees.', 'Bangabandhu Sheikh MujibSafari Park is the first Safari Park in Bangladesh. The nature of the forest is tropical evergreen and rich with Garjan, Boilam, Telsur and Chapalish along with herbs, shrubs and creepers. Bangabandhu Sheikh Mujib Safari Park is one of the best tourist attractions in Bangladesh. You will get the taste of visiting wild Africa here. It is new and attractive visiting place. Everybody will be satisfied making a tour at Bangabandhu Sheikh Mujib Safari Park. It is mostly known as Gazipur Safari Park.\r\nMany tourists visit India, Nepal, Thailand, Indonesia or African countries to experience jungle environment.', 'Inani Beach is within Ukhia Thana, 35 km. to the south of Cox''s Bazar.With green hills to the east, the golden beach of Inani casts a music spell on anyone stepping on to its fine golden sands. The clean blue waters of the Bay are ideal for swimming.\r\n\r\n', '21.43946360', '92.00773160', 'map_cox'),
(2, 11, 'The Mosque City of Bagerhat (Bengali: ??????? ??? ????????) is a formerly lost city, located in the suburbs of Bagerhat city in Bagerhat District, in the Khulna Division of southwest of Bangladesh. Bagerhat is about 15 miles south east of Khulna and 200 miles southwest of Dhaka.\r\nOriginally known as Khalifatabad and nicknamed the "mint town of the Bengal Sultanate", the city was founded in the 15th century by the warrior saint Turkish general Ulugh Khan Jahan.\r\nThe historic city, listed by Forbes as one of the 15 lost cities of the world, has more than 50 Islamic monuments which have been found after removing the vegetation that had obscured them from view for many centuries. The site has been recognized as a UNESCO World Heritage Site in 1983 under criteria , "as an outstanding example of an architectural ensemble which illustrates a significant stage in human history", of which the Sixty Pillar Mosque (Shat Gombuj Masjid in Bengali), constructed with 60 pillars and 77 domes, is the most well known.Apart from these monuments, UNESCO also includes the mausoleum of Khan Jahan, the mosques of Singar, Bibi Begni, Reza Khoda, Zindavir among the unique monuments.', '', '', '', '22.14152800', '88.88614370', 'map_shundarban'),
(3, 12, 'Chhera island (Bengali: ?????? ?????, Chhera Dwip), also called Cheradia Island or Cheridia Island, is an extension of St. Martin''s Island but divided by sea during tides. During low tide period, the Chhera island can be reached by walking for about two and a half hours from St. Martin''s Island. Most popular medium is by local motorboat or tourist boat. Corals can be found all over the island. Island''s has a beautiful small bush area which is also the only green region of it. No permanent settlement is established except for tourists.', '', '', '', '20.62730000', '92.32260000', 'map_saint'),
(4, 13, 'Keokradong is a peak located in Bandarban, Bangladesh, with an elevation of 986 metres (3,235 ft).Some sources claim it as the highest point of Bangladesh.\r\nOn the top of Keokradong there is a small shelter and a signboard put up by the Bangladeshi military proclaiming the elevation to be 3,172 feet.\r\nHeight measured by handheld GPS shows it is 986 metres (3,235 ft) with 3m accuracy.\r\nThere is a controversy about the highest point of Bangladesh, and some sources indicate Mowdok Mual as the most elevated peak of the country.', 'The lake is bounded on three sides by mountain peaks covered with thick bamboo bushes. The area of the lake is 18.56 acres (75,100 m2). It is a closed lake and there is a small spring named Boga chhara, which is 153 metres (502 ft) deep. There is no outlet for draining out water from the lake. The lake is composed of the soft rocks of the Bhuban Formation. The main source of water is the spring. The water is crystal clear and under the lake the water there are rocks and boulders all over.', 'Nilgiri is one of the tallest peaks and beautiful place in Bangladesh,\r\nSurrounded by beautiful hilly natural views and clouds most of the time. An esthetic place for enjoying serenity with ultimate relaxation away from city boredom.You will find yourself in the embrace of the clouds. Its located in Thansi Upozilla in Bandarban district which is lies 48 km away from the Bandarban town. There is beautiful resort in the top of the mountain maintained by Bandarban Officers Club sister concern of Bangladesh Army .', 'The Buddha Dhatu Jadi  also known as the Bandarban Golden Temple is located close to Balaghata town, in Bandarban City, in Bangladesh. Dhatu are the material remains of a holy person, and in this temple the relics belong to Buddha. It is the largest Theravada Buddhist temple in Bangladesh and has the second-largest Buddha statue in the country.\r\nThe Bandaban Golden Temple belongs to the Theravada Buddhism order, which is practiced by the Marma indigenous people, a dominant ethnic group of Bandarban. It was built in 2000 in Arakanese architecture, an adoption of South East Asia style.', '21.80000000', '92.40000000', 'map_bandharban'),
(5, 14, '', '', '', '', '0.00000000', '0.00000000', '0'),
(6, 15, '', '', '', '', '0.00000000', '0.00000000', '0'),
(7, 16, '', '', '', '', '0.00000000', '0.00000000', '0'),
(8, 17, '', '', '', '', '0.00000000', '0.00000000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `related_place_title`
--

CREATE TABLE IF NOT EXISTS `related_place_title` (
  `related_title_id` int(11) NOT NULL,
  `related_place_id` int(11) NOT NULL,
  `related_place_title1` varchar(255) NOT NULL,
  `related_place_title2` varchar(255) NOT NULL,
  `related_place_title3` varchar(255) NOT NULL,
  `related_place_title4` varchar(255) NOT NULL,
  `related_place_pic1` varchar(255) NOT NULL,
  `related_place_pic2` varchar(255) NOT NULL,
  `related_place_pic3` varchar(255) NOT NULL,
  `related_place_pic4` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_place_title`
--

INSERT INTO `related_place_title` (`related_title_id`, `related_place_id`, `related_place_title1`, `related_place_title2`, `related_place_title3`, `related_place_title4`, `related_place_pic1`, `related_place_pic2`, `related_place_pic3`, `related_place_pic4`) VALUES
(1, 1, 'Himchari National Park', 'Aggmeda Khyang', 'Bangabandhu Sheikh Mujib Safari Park', 'Inani Beach', './images/himchari.jpg', './images/aggemeda.jpg', './images/park.jpg', './images/inani.jpg'),
(2, 2, 'Mosque City of Bagerhat', '', '', '', './images/bagerhat.jpg', '', '', ''),
(3, 3, 'Chhera Dwip', '', '', '', './images/chera.jpg', '', '', ''),
(4, 4, 'Keokradong', 'Boga lake', 'Scenic view of Nilgiri', 'Buddha Dhatu Jadi', './images/keo.jpg', './images/boga.jpg', './images/nil.jpg', './images/buddha.jpg'),
(5, 5, '', '', '', '', '', '', '', ''),
(6, 6, '', '', '', '', '', '', '', ''),
(7, 7, '', '', '', '', '', '', '', ''),
(8, 8, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `signup_id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `full_name`, `email`, `password`) VALUES
(3, 'Hossain', 'mamuns999@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Mamun Hosen', 'mamma@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Mamun Hosen', 'mamuns9599@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Arif Khan', 'arif@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'mehedi hasan', 'mehedi@yahoo.com', 'adcaec3805aa912c0d0b14a81bedb6ff'),
(10, 'dhakaBD', 'dhakabd@yahoo.com', '90a91c67ea38b60ca8e3b6e21b182a08'),
(18, 'hossain mamun', 'hossainmamun035@gmail.com', '8b41de844581b43daaf404cc80faf346'),
(19, 'rayhan', 'boyrsyhsn@gmail.com', '1b2aaeaed7ff994a25fc35507eff6e71'),
(25, 'Hossain-Mamun', 'hossainmamun035@hotmail.com', '8b41de844581b43daaf404cc80faf346'),
(26, 'Mohammad Hasan', 'hasan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(31, 'dhakaBD', 'mamuns999@yaho4o.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(32, '', 'mamuns999@yahgyugyhoo.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tourism_contents`
--

CREATE TABLE IF NOT EXISTS `tourism_contents` (
  `place_id` int(11) NOT NULL,
  `place_title` varchar(255) NOT NULL,
  `fancy` varchar(25) NOT NULL,
  `place_descript` text NOT NULL,
  `place_rating` float NOT NULL,
  `place_hits` int(11) NOT NULL,
  `place_views` int(11) NOT NULL,
  `grid_color` varchar(255) NOT NULL,
  `Image_size` varchar(255) NOT NULL,
  `mainImg` varchar(50) NOT NULL,
  `Alt` varchar(50) NOT NULL,
  `sub_image_container` varchar(50) NOT NULL,
  `subImg1` varchar(50) NOT NULL,
  `subImg2` varchar(50) NOT NULL,
  `subImg3` varchar(50) NOT NULL,
  `subImg4` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourism_contents`
--

INSERT INTO `tourism_contents` (`place_id`, `place_title`, `fancy`, `place_descript`, `place_rating`, `place_hits`, `place_views`, `grid_color`, `Image_size`, `mainImg`, `Alt`, `sub_image_container`, `subImg1`, `subImg2`, `subImg3`, `subImg4`) VALUES
(10, 'Cox''s Bazar', 'link_img', 'Cox''s Bazar is a town, a fishing port and district headquarters in Bangladesh. It is one of the world''s longest uninterrupted natural sandy sea beaches, The beach in Cox''s Bazar is an unbroken 125 km sandy sea beach with a gentle slope It is located 150 km south of the industrial port Chittagong. Cox''s Bazar is also known by the name Panowa, whose literal translation means "yellow flower." Its other old name was "Palongkee".\r\nThe modern Cox''s Bazar derives its name from Captain Hiram Cox (died 1799), an officer serving in British India. An officer of the British East India Company, Captain Cox was appointed Superintendent of Palongkee outpost after Warren Hastings became Governor of Bengal. Captain Cox was specially mobilised to deal with a century-long conflict between Arakan refugees and local Rakhains. He embarked upon the mammoth task of rehabilitating refugees in the area and made significant progress. A premature death took Captain Cox in 1799 before he could finish his work. To commemorate his role in rehabilitation work, a market was established and named Cox''s Bazar ("Cox''s Market") after him.\r\nToday, Cox''s Bazar is one of the most-visited tourist destinations in Bangladesh. It has yet to become a major international tourist destination, and has no international hotel chains, due to lack of publicity and transportation. In 2013, the Bangladesh Government formed the Tourist Police unit to better protect local and foreign tourists, as well as to look after the nature and wildlife in the tourist spots of Cox''s Bazar.', 5, 1, 38, 'first_item', 'mainimg', './images/cox.jpg', 'Cox''s Bazar', 'divcontainer', './images/cox1.jpg', './images/cox2.jpg', './images/cox3.jpg', './images/cox4.jpg'),
(11, 'Shundarban', 'link_img1', 'The Sundarbans is a natural region in the Bengal region comprising Eastern India and Bangladesh. It is the largest single block of tidal halophytic mangrove forest in the world.The Sundarbans covers approximately 10,000 square kilometres (3,900 sq mi) of which 60 percent is in Bangladesh with the remainder in India.The Sundarbans is a UNESCO World Heritage Site.\r\nThe Sundarbans National Park is a National Park, Tiger Reserve, and a Biosphere Reserve located in the Sundarbans delta in the Indian state of West Bengal. Sundarbans South, East and West are three protected forests in Bangladesh. This region is densely covered by mangrove forests, and is the largest reserves for the Bengal tiger.\r\nThe history of the area can be traced back to 200–300 AD. A ruin of a city built by Chand Sadagar has been found in the Baghmara Forest Block. During the Mughal period, the Mughal Kings leased the forests of the Sundarbans to nearby residents. Many criminals took refuge in the Sundarbans from the advancing armies of Emperor Akbar. Many have been known to be attacked by tigers. Many of the buildings which were built by them later fell to hands of Portuguese pirates, salt smugglers and dacoits in the 17th century. Evidence of the fact can be traced from the ruins at Netidhopani and other places scattered all over Sundarbans.The legal status of the forests underwent a series of changes, including the distinction of being the first mangrove forest in the world to be brought under scientific management.', 4, 1, 28, 'second_item', 'mainimg1', './images/shundarban.jpg', 'Shundarban', 'divcontainer1', './images/shundarban1.jpg', './images/shundarban2.jpg', './images/shundarban3.jpg', './images/shundarban4.jpg'),
(12, 'Saint Martin', 'link_img2', 'St. Martin''s Island is a small island (area only 8 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox''s Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chhera island. It is about 8 km west of the northwest coast of Myanmar, at the mouth of the Naf River. The first settlement started just 250 years ago by some Arabian sailors who named the island ‘Zajira’. During British occupation the island was named St. Martin Island. The local names of the island are "Narical Gingira", also spelled "Narikel Jinjira/Jinjera", which means ''Coconut Island'' in Bengali, and "Daruchini Dip". It is the only coral island in Bangladesh.<br>The only way to reach the place is the water transportation i.e. boats and ships (mostly for tourists) from Teaknaf. Do not expect to find taxis, tarred roads or electricity here in the island. Except for the larger hotels that run on generators, there is no electricity supply from the national grid in the island since a dangerous hurricane in the year 1999. The island is all about sun, sea and palm trees. During the day, the island comes alive with water and beach sports, with beach parties and bonfires lighting up the evening skies.', 5, 1, 25, 'third_item', 'mainimg2', './images/saint.jpg', 'Saint Martin', 'divcontainer2', './images/saint1.jpg', './images/saint2.jpg', './images/saint3.jpg', './images/saint4.jpg'),
(13, 'Bandharban', 'link_img3', 'Bandarban is a district in South-Eastern Bangladesh, and a part of the Chittagong Division.It is one of the three districts that make up the Chittagong Hill Tracts, the others being Rangamati District and Khagrachhari District.Bandarban is regarded as one of the most attractive travel destinations in Bangladesh. Bandarban (meaning the dam of monkeys), or in Marma or Arakanese language as "Rwa-daw Mro" is also known as Arvumi or the Bohmong Circle (of the rest of the three hill districts Rangamati is the Chakma Circle, Raja Devasish Roy and Khagrachari is the Mong Circle, Raja Sachingprue Marma). Bandarban town is the home town of the Bohmong Chief (currently King, or Raja, U Cho Prue Marma) who is the head of the Marma population. It also is the administrative headquarters of Bandarban district, which has turned into one of the most exotic tourist attractions in Bangladesh since the insurgency in Chittagong Hill Tracts has ceased more than a decade back.', 4, 1, 36, 'fourth_item', 'mainimg3', './images/bandharban.jpg', 'Bandharban', 'divcontainer3', './images/bandharban1.jpg', './images/bandharban2.jpg', './images/bandharban3.jpg', './images/bandharban4.jpg'),
(14, 'Jaflong', 'link_img4', 'Jaflong is a hill station and popular tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and', 3, 1, 3, 'fifth_item', 'mainimg4', './images/jaflong.jpg', 'Jaflong', 'divcontainer4', './images/jaflong1.jpg', './images/jaflong2.jpg', './images/jaflong3.jpg', './images/jaflong4.jpg'),
(15, 'Srimongol', 'link_img5', 'Srimangal is an Upazila of Maulvibazar District in the Division of Sylhet, Bangladesh.A tiny and rustic locally owned eco-lodge of four rooms located in the countryside just a few kilometres outside Srimongol with close proximity to the Lawachara', 0, 0, 4, 'sixth_item', 'mainimg5', './images/sri.jpg', 'Srimongol', 'divcontainer5', './images/sri1.jpg', './images/sri2.jpg', './images/sri3.jpg', './images/sri4.jpg'),
(16, 'Nijum Dwip', 'link_img6', 'Nijhum Dwip is a small island under Hatiya upazila. It is situated in Noakhali District in Bangladesh. Once it was called Char Osmani.A cluster of islands (mainly, Ballar Char, Kamlar Char, Char Osman and Char Muri) emerged in the early 1950s as an alluvium in the shallow estuary of the Bay of Bengal on the south of Noakhali. These new sandbanks first drew the notice of a group of fishermen, who named it Baular Char (literally, the alluvium of sand) later transformed into Ballar Char. Occupying an area of 14,050 acres the island situated between 21 0 1 / to 22 0 6 /north latitude and 90 0 3 / to 91 0 4 / east longitude\r\nMigratory Birds in Nijhum Dwip: During winter, thousands of migratory birds flock in to island. The fishermen use the airy and sunny land as an ideal place for drying their catches from the sea. Sometimes many of them also construct straw huts on the island as seasonal residences.', 0, 0, 4, 'seventh_item', 'mainimg6', './images/nijumdip.jpg', 'Nijum Dwip', 'divcontainer6', './images/nijum1.jpg', './images/nijum2.jpg', './images/nijum3.jpg', './images/nijum4.jpg'),
(17, 'Kuakata', 'link_img7', 'Kuakata is a panoramic sea beach and village on the southernmost tip of Bangladesh. Located in the Patuakhali district, Kuakata has a wide sandy beach from where one can see both the sunrise and sunset.', 0, 0, 4, 'eighth_item', 'mainimg7', './images/kua.jpg', 'Kuakata', 'divcontainer7', './images/kua1.jpg', './images/kua2.jpg', './images/kua3.jpg', './images/kua4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `related_place`
--
ALTER TABLE `related_place`
  ADD PRIMARY KEY (`related_place_id`);

--
-- Indexes for table `related_place_title`
--
ALTER TABLE `related_place_title`
  ADD PRIMARY KEY (`related_title_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- Indexes for table `tourism_contents`
--
ALTER TABLE `tourism_contents`
  ADD PRIMARY KEY (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `related_place`
--
ALTER TABLE `related_place`
  MODIFY `related_place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `related_place_title`
--
ALTER TABLE `related_place_title`
  MODIFY `related_title_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tourism_contents`
--
ALTER TABLE `tourism_contents`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
