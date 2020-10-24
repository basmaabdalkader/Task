--
-- Table structure for table `tblproduct`
--

CREATE TABLE `discounts` (
  `id` int(8) NOT NULL,
  `code` varchar(255) NOT NULL,
  `start_date` DATE NOT NULL,
  `expiry_date` DATE NOT NULL,
  `percentage` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `discounts` (`id`, `code`, `start_date`,`expiry_date`,`percentage`) VALUES
(1,'104','2020-05-21','2020-12-21',10);



--
-- Indexes for table `tblproduct`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `discounts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;