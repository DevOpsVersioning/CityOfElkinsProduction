-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2015 at 10:39 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elkins_production_storage`
--
CREATE DATABASE IF NOT EXISTS `elkins_production_storage` DEFAULT CHARACTER SET ascii COLLATE ascii_general_ci;
USE `elkins_production_storage`;

-- --------------------------------------------------------

--
-- Table structure for table `cityForms`
--

DROP TABLE IF EXISTS `cityForms`;
CREATE TABLE IF NOT EXISTS `cityForms` (
  `submission_number` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) DEFAULT NULL,
  `form_name` varchar(255) NOT NULL,
  `Date/Time` datetime NOT NULL,
  `data_string` varchar(30000) DEFAULT NULL,
  `Attachment` blob NOT NULL,
  PRIMARY KEY (`submission_number`),
  UNIQUE KEY `submission_number` (`submission_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=65 ;

--
-- Dumping data for table `cityForms`
--

INSERT INTO `cityForms` (`submission_number`, `identifier`, `form_name`, `Date/Time`, `data_string`, `Attachment`) VALUES
(42, 'yolo corp', 'newconstruction', '2015-03-18 09:16:12', '{"datePeriod":"2015-03-04","ReceiptNumber":"123456","SessionNumber":"123456","propertyAddress":"","applicationDate":"","propertyApt":"","propertyZip":"","parcelNum":"","propertyZoning":"","propertySubdivision":"","propertyLotNum":"","ownerFirstName":"","userName":"yolo corp","ownerPhone":"12345567890","ownerAddress":"","ownerCityState":"","ownerZip":"","applicantName":"","applicantAddress":"","applicantLocation":"","applicantLicense":"","builderName":"","builderAddress":"","builderLocation":"","builderLicense":"","contractorName":"","contractorAdress":"","contractorLocation":"","contractorNumber":"","excavationName":"","excavationAdress":"","excavationLocation":"","excavationLicense":"","concreteName":"","concreteAddress":"","concreteLocation":"","contractorLicense":"","carpentryName":"","carpentryAddress":"","carpentryLocation":"","carpentryLicense":"","electricalName":"","electricalAddress":"","electricalLocation":"","electricalLicense":"","plumbingName":"","plumbingAddress":"","plumbingLocation":"","plumbingLicense":"","sewerName":"","sewerAddress":"","sewerLocation":"","sewerLicense":"","mechanicalName":"","mechanicalAddress":"","mechanicalLocation":"","mechanicalLicense":"","roofingName":"","roofingAddress":"","roofingLocation":"","roofingLicense":"","drywallName":"","drywallAddress":"","drywallLocation":"","drywallLicense":"","sprinklerName":"","sprinklerAddressr":"","sprinklerLocation":"","sprinklerLicense":"","pavingName":"","pavingAddress":"","pavingLocation":"","pavingLicense":"","fireAlarmName":"","fireAlarmAddress":"","fireAlarmLocatioin":"","fireAlarmLicense":"","applicantSignature":"","applicantPhone":"","personInCharge":"","personInChargeTitle":"","personInChargePhone":"","Request_Plan_Number":"","Other6":"","structureOther":"","exteriorOther":"","streetFrontage":"","frontSetback":"","leftSetback":"","rearSetback":"","rightSetback":"","heightAboveGrade":"","stories":"","bedrooms":"","fullBaths":"","partialBaths":"","garages":"","windows":"","newResidentialUnits":"","fireplaces":"","enclosedParking":"","existingResidentialUnits":"","elevatorsEscalators":"","outsideParking":"","lotArea":"","buildingArea":"","parkingArea":"","livingArea":"","basementArea":"","garageArea":"","officeSales":"","service":"","manufacturing":"","estBuildinStart":"","estBuildinFinish":"","buildingValue":"","totalServiceAmps":"","wire2":"","wire3":"","wire4":"","110v":"","220v":"","PowerDevice1":"","num1":"","output-load1":"","PowerDevice2":"","num2":"","output-load2":"","PowerDevice3":"","num3":"","output-load3":"","PowerDevice4":"","num4":"","output-load4":"","PowerDevice5":"","num5":"","output-load5":"","PowerDevice6":"","num6":"","output-load6":"","PowerDevice7":"","num7":"","output-load7":"","PowerDevice8":"","num8":"","output-load8":"","PowerDevice9":"","num9":"","output-load9":"","PowerDevice":"","num10":"","output-load10":"","PowerDevice11":"","num11":"","output-load11":"","MotorNum":"","serviceRevision":"","estElectricStart":"","estElectricalFinish":"","estElectricalValue":"","tubsShower":"","showerStalls":"","lavatories":"","toilets":"","urinals":"","sinks":"","laundryTubs":"","dishwashers":"","drinkingFountains":"","floorDrains":"","waterHeaters":"","waterSofteners":"","sewageEjectors":"","sumpPumps":"","greaseTraps":"","bidets":"","backFlowPrevention":"","waterPumps":"","roofOpenings":"","parkingLotDrains":"","insideDownspouts":"","swimmingPools":"","standpipes":"","fireSprinklers":"","lawnSprinklers":"","waterService":"","waterMeterSize":"","dailyWater":"","serviceRevisions":"","estPlumbingStart":"","estPlumbingFinish":"","plumbingValue":"","unitHeat":"","gasOilConversion":"","airHandlingUnit":"","heatPump":"","air_Cleaner":"","urinalsInsideDownspouts":"","garbageDisposals":"","spaceHeater":"","gravityFurnace":"","solidFuelAppliance":"","incinerator":"","boiler":"","coilUnit":"","windowACUnit":"","splitSystemAC":"","aCCompressor":"","kitchenExhaustHood":"","hazardousExhaustSystem":"","electricFurnace":"","utilityServiceRevisions":"","heatingOther":"","estMechanicalStart":"","estMechanicalFinish":"","mehanicalTotal":"","otherPermit":"","otherDescription":"","estOtherStart":"","estOtherEnd":"","otherPermitlValue":"","appReceivedDate":"","applicationReceived_By":"","appReviewedDate":"","applicationReviewedBy":"","dataEntryDate":"","dataEntryBy":"","floodMapNumber":"","lowestFloorElevation":"","floodZone":"","baseFloodElevation":"","zoningDistrict":"","mapNumber":"","lotCoverage":"","lotAreaPerRoom":"","encroachments":"","offStreetParkingNeeded":"","parkingProvided":"","loadingSpace":"","numOfSigns":"","sizeOfSign":"","planningCommissionApproval":"","boardZoningApproval":"","buildingCost":"","dateBuildingPlansStarted":"","by1a":"","dateBuildingApproved":"","by1b":"","buildingNotes":"","plumbingCost":"","datePlumbingStarted":"","by2a":"","datePlumbingApproved":"","by2b":"","plumbingNotes":"","mechanicalCost":"","dateMechanicalStarted":"","by3a":"","dateMechanicalApproved":"","by3b":"","mechanicalNotes":"","ElectricalCost":"","dateElecricalStarted":"","by4a":"","dateElectricalApproved":"","by4b":"","electricaNotes":"","totalPlanCost":"","boilerPermitDate":"","boilerPermitNumber":"","boilerBy":"","curbPermitDate":"","curbOrSidewalkCutPermitNumber":"","sidewalkBy":"","elevatorPermitDate":"","elevatorPermitNumber":"","elevatorBy":"","electricalPermitDate":"","ElectricalPermitNumber":"","electricalBy":"","furnacePermitDate":"","FurnacePermitNumber":"","furnaceBy":"","gradingPermitDate":"","GradingPermitNumber":"","gradingBy":"","oilPermitDate":"","OilBurnerPermitNumber":"","oilBy":"","plumbingPermitDate":"","plumbingPermitNumber":"","plumbingBy":"","roofingPermitDate":"","roofingPermitNumber":"","roofingBy":"","sewerPermitDate":"","Sewer_Permit_Number":"","sewerBy":"","signPermitDate":"","signOrBillboardPermitNumber":"","billboardBy":"","streetGradesPermitDate":"","streetGradesPermitNumber":"","streetBy":"","publicAreasPermit":"","useOfPublicAreasPermitNumber":"","publicBy":"","demolitionPermitDate":"","demolitionPermitNumber":"","demoBy":"","sitePlanSubmittedDate":"","sitePlanRevisionDate":"","soilReportSubmittedDate":"","soilReportRevisionDate":"","architecturalDrawingsSubmittedDate":"","architecturalDrawingsRevisionDate":"","structuralDrawingsSubmittedDate":"","structuralDrawingsRevisionDate":"","mechanicalDrawingsSubmittedDate":"","mechanicalDrawingsRevisionDate":"","electricalDrawingsSubmittedDate":"","electricalDrawingsRevisionDate":"","jobSpecificationsSubmittedDate":"","jobSpecificationsRevisionDate":"","structuralConnectSubmittedDate":"","structuralConnectRevisionDate":"","structuralCalculationsSubmittedDate":"","structuralCalculationsRevisionDate":"","specialInspectionSubmittedDate":"","specialInspectionRevisionDate":"","sprinklerDrawingsSubmittedDate":"","sprinklerDrawingsRevisionDate":"","sprinklerCalculationsSubmittedDate":"","sprinklerCalculationsRevisionDate":"","fireApproval":"","FireApprovalDate":"","publicWorksApproval":"","PublicWorksApprovalDate":"","zoningPlanningApproval":"","ZoningApprovalDate":"","environmentalManagementApproval":"","EnvironmentalManagementApproval_Date":"","healthSanitationApproval":"","HeathApprovalDate":"","waterApproval":"","WaterApprovalDate":"","architecturalReviewApproval":"","ArchitecturalReviewApprovalDate":"","buildingApproval":"","BuildingApprovedDate":"","buildingPermitDate":"","BuildingPermitNumber":"","buildingPermitFee":"","preparedDate":"","electricalPermitNumber":"","electricalPermitFee":"","plumbingPermitFee":"","mechanicalPermitNumber":"","mechanicalPermitFee":"","planReviewFee":"","certOccupancyFee":"","otheFees":"","totalFees":"","Preparedby":"","Approvedby":"","approvedDate":"","json_form_submit":"Submit"}', ''),
(44, 'yolo', 'buildingpermit', '2015-03-18 09:18:17', '{"userName":"yolo","ownersaddress":"wwhat up street at yopur face dot com","ownerPhone":"1234567890","contractorName":"","contractorAddress":"","contractorPhone":"","contractorLicenseNumber":"","plumberName":"","plumberAddress":"","plumberPhone":"","plumberLicenseNumber":"","electricName":"","electricAddress":"","electricPhone":"","electricLicenseNumber":"","ElectricalLicenseNumber":"","otherName":"","otherAddress":"","otherPhone":"","otherLicenseNumber":"","StateCertifiedAsbestosInspectorName":"","stateCertifiedAsbestosInspectorLicenseNumber":"","stateCertifiedAsbestosContractorLicenseNumber":"","workComment":"","jobSiteAddress":"","newDwellingArea":"","finishedAtticArea":"","garageArea":"","basementArea":"","accessoryBuilding":"","otherArea":"","improvementOther":"","useOther":"","numberOfStoriesHigh":"","thicknessOfExternalWall":"","RoofingMaterial":"","otherConstructionMaterials":"","costComment":"","json_form_submit":"Submit"}', ''),
(45, 'tour face ', 'businesslicenseapplication', '2015-03-18 09:19:05', '{"businessname":"tour face ","mailingaddress":"a big place ","csz":"fayetteville west virginia","businesslocation":"","businessphone":"","ownerphone":"","wvLicense":"","wvcontractorLicense":"","federalFEIN":"","nameUnder":"","accountant":"","architect":"","attorney":"","auctioneer":"","banking":"","barber":"","chiropractor":"","collectionAgency":"","contractor":"","dental":"","dentist":"","employmentAgency":"","engineer":"","funeral":"","gasoline":"","general":"","handyman":"","hearingAid":"","insuranceAgency":"","landSurveyor":"","optometrist":"","palmReader":"","pawnBroker":"","pharmacist":"","photographer":"","physicalTherapist":"","physician":"","detective":"","psychologist":"","realEstate":"","rental":"","restaurant":"","service":"","specialStore":"","tattoo":"","theatre":"","veterinarian":"","beerDistributor":"","classA":"","classB":"","retailDealer":"","distributor":"","clubs":"","less1000":"","more1000":"","less20":"","more20":"","withoutVehicle":"","vehiclehalfTon":"","vehicle1Ton":"","vehicle2Ton":"","vehicleOver2":"","residentJunk":"","residentJunkAgent":"","nonresidentJunk":"","devices":"","more10":"","bedBreakfast":"","hotel":"","firstTable":"","additionalTable":"","vendingLess20":"","vendingOver20":"","classAPackages":"","classBPackages":"","classCPackages":"","totalFees":"","json_form_submit":"Submit"}', ''),
(46, 'what up doc', 'catlicenseapplication', '2015-03-18 09:20:10', '{"userName":"what up doc","phone":"1234567890","streetAddress":"ruffalo street ","mailingAddress":"awesome","catName":"fluffy","breedType":"","primaryColor":"","secondaryColor":"","distinguishingMarking":"","rabiesVaccineDateGiven":"","dateExpires":"","signatureOfOwner":"samool capoozer","uploadFile":"Process_Model.docx","json_form_submit":"Submit"}', 0x50726f636573735f4d6f64656c2e646f6378),
(47, 'samuel ', 'foiarequest', '2015-03-18 09:39:46', '{"requester":"samuel ","address":"street face","city":"ffayeeteville","state":"Wv","zip":"q","telephone":"1234567899","email":"buttmunch@yolo","fax":"","details":"","json_form_submit":"Submit"}', ''),
(48, 'sambino', 'commercialdemolition', '2015-03-18 09:40:41', '{"ownersName":"sambino","ownersAddress":"ruffalo","ownersPhoneNumber":"1234567890","jobSiteAddress":"kowasaki","jobSiteNewDwellingArea":"","jobSiteFinishedAtticArea":"","jobSiteGarageArea":"","jobSiteBasementArea":"","jobSiteAccessoryBuilding":"","jobSiteOtherArea":"","contractorName":"","contractorAddress":"","contractorPhone":"","contractorWVLicenseNum":"","contractorCityLicense":"","contractorInputInformation":"","asbestosStateCertifiedInspector":"","asbestosInspectorLicenseNumber":"","asbestosContractorLicenseNum":"","permitFeeAmountPaid":"","permitFeeReceiptNum":"","permitFeeSignatureOfOwner":"","permitFeeSignatureOfApplicant":"turaloo","json_form_submit":"Submit"}', ''),
(51, 'sdf', 'eventrequest', '2015-03-18 09:50:23', '{"e_date":"a date","e_start":"","e_end":"","street_close":"a date","street_timeclose":"a time","street_opening":"a date","street_timeopen":"a time","organization":"","address":"","city":"","fax":"","contact":"sdf","telephone":"sdf","email":"sdfsdf@awdf","contact2":"","telephone2":"","email2":"","reason":"","street1":"","s1_start":"","s1_end":"","street2":"","s2_start":"","s2_end":"","street3":"","s3_start":"","s3_end":"","street4":"","s4_start":"","s4_end":"","assistance":"","json_form_submit":"Submit"}', ''),
(52, 'samuel', 'excavationpermit', '2015-03-18 10:05:19', '{"Nameusr":"samuel","Addressusr":"buttmunch street","phoneusr":"1234567890","Namectr":"samuel","phonectr":"12345678990","license":"1123","Citycode":"123","bond":"copyattached","jobaddress":"sdasd","purpose":"","startdate":"","enddate":"","closure":"yes","details":"        ","nameresp":"sanool","addressresp":"yolo","phoneresp":"1234567890","json_form_submit":"Submit"}', ''),
(53, 'yolo', 'rental', '2015-03-18 10:19:14', '{"streetAddress":"","unitNum":"","numOfUnits":"","otherStory":"","ownerName":"","mailingAddress":"","cityState":"","ownerHomePhone":"","ownerWork":"","ownerCell":"","email":"","contactName":"yolo","contactHomePhone":"1234567890","contactWorkNum":"","contactCellNum":"","contactAddress":"your face","acknowledgement":"yes","receivedBy":"","feeAmount":"","dateReceived":"","number":"","json_form_submit":"Submit"}', ''),
(54, 'samool', 'residentialdemolition', '2015-03-18 10:34:29', '{"permitnumber":"","ownersname":"samool","address":"dfasg","phonenumber":"1234","newdwellingarea":"a place","garagearea":"a garage","accessorybuilding":" a building","finishedatticarea":"an attic","basementarea":" a basement","otherarea":"an area","contractorname":"sam ","contractoraddress":"dffgd","contractorphone":"12345","contractorwvlicense":"123","contactorcitylicense":"456","asbestosinspectorsname":"a person","AsbestosFree":"on","inspectorslicense":"23","contractorslicense":"123","costofwork":" a olot","amountpaid":"76000","receiptnumber":"","ownerssignature":"","applicantsignature":"","buildinginspector":"","date":"","buildinginspectorsignature":"","buildingcommittee":"","signatureofchairmanofbuildingcommittee":"","sewerdepartmentsignature":"","waterdepartmentsignature":"","firechief":"","firechiefsignature":"","applicationdate":"","elkinscityclerksignature":"","signature":"","json_form_submit":"Submit"}', ''),
(55, '', 'signpermit', '2015-03-18 10:35:14', '{"applicationdate":"","PermitNumber":"","typeofsign":"GroundPoleSign","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"","signatureOfOwner":"","json_form_submit":"Submit"}', ''),
(56, 'a persom', 'signpermit', '2015-03-18 10:35:51', '{"applicationdate":"","PermitNumber":"","typeofsign":"GroundPoleSign","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"a persom","signatureOfOwner":"another pwerson","json_form_submit":"Submit"}', ''),
(57, 'yolo', 'residentialdemolition', '2015-03-20 09:50:44', '{"permitnumber":"","ownersname":"yolo","address":"","phonenumber":"122344564576","newdwellingarea":"","garagearea":"","accessorybuilding":"","finishedatticarea":"","basementarea":"","otherarea":"","contractorname":"","contractoraddress":"","contractorphone":"","contractorwvlicense":"","contactorcitylicense":"","asbestosinspectorsname":"","inspectorslicense":"","contractorslicense":"","costofwork":"","amountpaid":"","receiptnumber":"","ownerssignature":"","applicantsignature":"","buildinginspector":"","date":"","buildinginspectorsignature":"","buildingcommittee":"","signatureofchairmanofbuildingcommittee":"","sewerdepartmentsignature":"","waterdepartmentsignature":"","firechief":"","firechiefsignature":"","applicationdate":"","elkinscityclerksignature":"","signature":"","json_form_submit":"Submit"}', ''),
(58, 'Samu', 'signpermit', '2015-03-23 08:57:12', '{"applicationdate":"","PermitNumber":"","applicantName":"","applicantNumber":"","typeofsign":"Billboard","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"Samu","signatureOfOwner":"","json_form_submit":"Submit"}', ''),
(59, 'Yolo', 'signpermit', '2015-03-23 08:58:35', '{"applicationdate":"","PermitNumber":"","applicantName":"Yolo","applicantNumber":"1234567890","typeofsign":"Billboard","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"Yolo","signatureOfOwner":"","json_form_submit":"Submit"}', ''),
(60, 'yolo', 'signpermit', '2015-03-23 08:59:24', '{"applicationdate":"","PermitNumber":"","applicantName":"yolo","applicantNumber":"12345","typeofsign":"WallSign","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"yolo","signatureOfOwner":"Yolo","json_form_submit":"Submit"}', ''),
(61, 'yolo', 'excavationpermit', '2015-03-23 09:37:43', '{"Nameusr":"yolo","Addressusr":"your face street","phoneusr":"123456","Namectr":"a good man","phonectr":"1234444","license":"234","Citycode":"","bond":"copyattached","jobaddress":"","purpose":"","startdate":"","enddate":"","closure":"yes","details":"        ","nameresp":"","addressresp":"","phoneresp":"","json_form_submit":"Submit"}', ''),
(62, 'yolo', 'excavationpermit', '2015-03-23 09:39:06', '{"Nameusr":"yolo","Addressusr":"a place","phoneusr":"123455","Namectr":"totes","phonectr":"mah gotes","license":"","Citycode":"","bond":"copyattached","jobaddress":"","purpose":"","startdate":"","enddate":"","closure":"yes","details":"        ","nameresp":"","addressresp":"","phoneresp":"","json_form_submit":"Submit"}', ''),
(63, 'yo face', 'signpermit', '2015-03-23 09:52:19', '{"applicationdate":"","PermitNumber":"","applicantName":"yo face","applicantNumber":"123445","typeOfSign":"DoubleFacedSign","OtherType":"","DimensionsLong":"","StreetClearance":"","DimensionsWide":"","WalkClearance":"","Weight":"","SignClearanceFromFacetoCurb":"","AdditionalInformation":"","materialstobeused":"","costofwork":"","userName":"yo face","signatureOfOwner":"yo face","json_form_submit":"Submit"}', ''),
(64, 's', 'catlicenseapplication', '2015-04-21 21:30:28', '{"userName":"s","phone":"s","streetAddress":"s","mailingAddress":"s","catName":"s","breedType":"s","primaryColor":"s","secondaryColor":"s","distinguishingMarking":"s","coatLength":"male","sex":"female","tail":"tail_docked_No","rabiesVaccineDateGiven":"2015-04-14","dateExpires":"2015-04-08","Fees":"5","signatureOfOwner":"s","json_form_submit":"Submit"}', '');

DROP TABLE IF EXISTS `output_images`;
CREATE TABLE IF NOT EXISTS `output_images` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `content` mediumblob NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `submission_number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=225 ;

DROP FUNCTION IF EXISTS `verify_submission`;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` FUNCTION `verify_submission`(`p_identifier` VARCHAR(255), `p_form_name` VARCHAR(255), `p_data_string` VARBINARY(30000)) RETURNS tinyint(1)
    READS SQL DATA
BEGIN
DECLARE stored_identifier VARCHAR(255);
DECLARE stored_form_name VARCHAR(255);
DECLARE stored_data_string VARBINARY(30000);

SELECT identifier, form_name, data_string 
INTO stored_identifier, stored_form_name, stored_data_string
FROM cityForms WHERE submission_number = LAST_INSERT_ID();

IF p_identifier <> stored_identifier THEN RETURN false; END IF;
IF p_form_name <> stored_form_name THEN RETURN false; END IF;
IF p_data_string <> stored_data_string THEN RETURN false; END IF;

RETURN true;
END
$$

DELIMITER ;

# Privileges for `Employee`@`127.0.0.1` 
GRANT USAGE ON *.* TO 'Employee'@'127.0.0.1'; # create to prevent nonexist error
DROP USER 'Employee'@'127.0.0.1'; # drop to ensure clean setup
GRANT USAGE ON *.* TO 'Employee'@'127.0.0.1' IDENTIFIED BY PASSWORD '*F0E20042BA279DCB6BD8BB77F6DA7C61968C8609';

GRANT SELECT, INSERT, UPDATE, DELETE ON `elkins_production_storage`.* TO 'Employee'@'127.0.0.1';

GRANT EXECUTE ON FUNCTION `elkins_production_storage`.`verify_submission` TO 'Employee'@'127.0.0.1';

# Privileges for `public`@`127.0.0.1`
GRANT USAGE ON *.* TO 'public'@'127.0.0.1'; # create to prevent nonexist error
DROP USER 'public'@'127.0.0.1'; # drop to ensure clean setup
GRANT USAGE ON *.* TO 'public'@'127.0.0.1' IDENTIFIED BY PASSWORD '*F0E20042BA279DCB6BD8BB77F6DA7C61968C8609';

GRANT INSERT ON `elkins_production_storage`.* TO 'public'@'127.0.0.1';

GRANT EXECUTE ON FUNCTION `elkins_production_storage`.`verify_submission` TO 'public'@'127.0.0.1';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
