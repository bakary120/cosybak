-- MySQL Script generated by MySQL Workbench
-- Tue Feb 22 14:47:54 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cosybak
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cosybak
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cosybak` DEFAULT CHARACTER SET utf8 ;
USE `cosybak` ;

-- -----------------------------------------------------
-- Table `cosybak`.`config`
-- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `cosybak`.`config` (
--   `id` INT NOT NULL AUTO_INCREMENT,
--   `name` VARCHAR(255) NULL,
--   `value` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL,
--   `user_id` VARCHAR(45) NULL,
--   PRIMARY KEY (`id`))
-- ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cosybak`.`addliv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`addLiv` (
  `id` INT NOT NULL AUTO_INCREMENT,  
  `lastname` VARCHAR(255) NULL,
  `firstname` VARCHAR(255) NULL,
  `numero` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `adress` VARCHAR(255) NULL,
  `codepostal` VARCHAR(255) NULL,
  `ville` VARCHAR(255) NULL,
  `Total` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` VARCHAR(255) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `cosybak`.`user_admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`user_admin` (
  `id` INT NOT NULL AUTO_INCREMENT,  
  `lastname` VARCHAR(255) NULL,
  `firstname` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL,
  `config_id` INT NOT NULL,
  PRIMARY KEY (`id`),  
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `cosybak`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,  
  `lastname` VARCHAR(255) NULL,
  `firstname` VARCHAR(255) NULL,
  `numero` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `adress` VARCHAR(255) NULL,
  `codepostal` VARCHAR(255) NULL,
  `ville` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` VARCHAR(255) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cosybak`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `footer_order` TINYINT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cosybak`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT 'nom de la cat??gorie',
  `subtitle` VARCHAR(255) NULL,
  `picture` VARCHAR(255) NULL DEFAULT 'L\'URL de l\'image de la cat??gorie (utilis??e en home)',
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `numero` VARCHAR(255),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cosybak`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL DEFAULT 'nom du produit',
  `description` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL DEFAULT 'la description du produit',
  `picture` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL DEFAULT 'l\'URL de l\'image produit',
  `price` FLOAT NOT NULL DEFAULT 0 COMMENT 'Le prix du produit',
   `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Le statut du produit (1=dispo, 2=pas dispo)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de cr??ation du produit',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la derni??re mise ?? jour du produit',   
  `type_id` INT NOT NULL,
  `category_id` INT NOT NULL,  
  PRIMARY KEY (`id`, `type_id`, `category_id`),
  INDEX `fk_product_type1_idx` (`type_id` ASC),
  INDEX `fk_product_category1_idx` (`category_id` ASC))
  
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cosybak`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cosybak`.`media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `file` VARCHAR(45) NULL DEFAULT 'chemin vers le fichier',
  `product_id` INT NOT NULL,
  PRIMARY KEY (`id`, `product_id`),
  INDEX `fk_media_product_idx` (`product_id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- -----------------------------------------------------
-- Data for table `category`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (1, 'Th??s Bio', 'D??couvrer notre gamme de th??s verts-th??s noirs ', 'images/thesbio.jpg','2022-02-22 8:00:00', NULL,1);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (2, 'Tisanes', 'Boisson saines et bienfaisantes', 'images/tisanes.jpg', '2022-02-22 8:00:00', NULL,2);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (3, 'Infusions', 'Des m??langes audacieux et d??licieux', 'images/infusion.jpg', '2022-02-22 8:00:00', NULL,3);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (4, 'Coffrets', 'Selection th??s et infusion pour votre plaisir', 'images/coffret.png', '2022-02-22 8:00:00', NULL,4);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (5, 'Bien-??tre et d??tox', 'Purifier et revitaliser naturellement', 'images/detox.jpg', '2022-02-22 8:00:00', NULL,5);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (6, 'Tisane-Enfant', 'Souhaitez-vous une tisane pour votre tout petit?', 'images/tisane-enfant.jpg', '2022-02-22 8:00:00', NULL,6);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `created_at`, `updated_at`,`numero`) VALUES (7, 'accessoires-th??', 'Th??i??res, infuseur, tisani??res, bouilloire. Retrouvez une gamme compl??te autour du th??', 'images/tisane-enfant.jpg', '2022-02-22 8:00:00', NULL,7);

COMMIT;


-- -----------------------------------------------------
-- Data for table `type`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `type` (`id`, `name`, `footer_order`, `created_at`, `updated_at`) VALUES (1, 'Tisane', 1, '2022-02-22 8:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `footer_order`, `created_at`, `updated_at`) VALUES (2, 'Coffret', 2, '2022-02-22 8:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `footer_order`, `created_at`, `updated_at`) VALUES (3, 'Bien-??tre et d??tox', 4, '2022-02-22 8:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `footer_order`, `created_at`, `updated_at`) VALUES (4, 'Tisane-Enfant', 0, '2022-02-22 8:00:00', NULL);



COMMIT;

-- -----------------------------------------------------
-- Data for table `product`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`, `category_id`) VALUES (1, 'th?? vert sencha bio', ' Gr??ce ?? son proc??d?? de fabrication unique, ce th?? Sencha biologique vous offre une pause hydratation r??solument rafra??chissante et bienfaisante. Un bon moyen de s???initier en douceur ?? la c??l??bre infusion des feuilles du th??ier !.', 'images/produits/sencha.png', 13.99, 1, '2022-02-22 8:00:00', NULL, 1, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`, `category_id`) VALUES (2, 'th?? vert jasmin bio', ' l??ger et savoureux,Avec son ar??me ?? la fois subtil et floral, ce th?? vert biologique traditionnel se glisse ?? merveille dans un mug matinal, ou dans celui de 16 heures pour vous accorder une pause th?? r??solument zen.', 'images/produits/sencha.png', 13.99, 1, '2022-02-22 8:00:00', NULL, 1, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`,`category_id`) VALUES (3, 'tisane ventre', ' renferme toutes les plantes incontournables de la sph??re digestive. La m??lisse soulage les spasmes de l???estomac et du c??lon d???origine nerveuse, et stimule en douceur le transit intestinal. Le romarin, en favorisant la s??cr??tion de bile, facilite les processus digestifs et l?????limination des toxines.', 'images/produits/sencha.png', 12, 1, '2022-02-22 8:00:00', NULL, 1, 2);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`, `category_id`) VALUES (4, 'tisane troubles feminins', ' Ce m??lange pr??sente un concentr?? de plantes reconnues pour leur vertus calmantes. La m??lisse antispasmodique r??duit les crampes ut??rines tout en r??gulant l???humeur et l???irritabilit??. La sauge et l???achill??e millefeuille contribuent ??galement ?? att??nuer les douleurs provoqu??es par les contractions de l???ut??rus. Quant au millepertuis, l???anti-d??prime par excellence, il est tout indiqu?? dans la pr??vention du syndrome pr??menstruel.', 'images/produits/sencha.png', 11, 1, '2022-02-22 8:00:00', NULL, 1, 2);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`,  `category_id`) VALUES (5, 'Coffret minceur', ' Pour une ligne au top, vous pouvez faire confiance au Th?? amincissant bio. Alliant th??s verts, th?? blanc, mat?? vert et pissenlit, il acc??l??re le m??tabolisme au repos tout en exer??ant une action drainante.', 'images/produits/sencha.png', 13.99, 1, '2022-02-22 8:00:00', NULL, 2, 4);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`, `category_id`) VALUES (6, 'Coffret 100% d??tox', ' Combinant th?? vert Sencha, matcha et mat?? vert, la Cure d??tox minceur 28 jours vous accompagne dans votre r????quilibrage alimentaire ou votre perte de poids en acc??lerant votre m??tabolisme. Exit les kilos superflus qui se logent sur les hanches !', 'images/produits/sencha.png', 10, 1, '2022-02-22 8:00:00', NULL, 2, 4);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`,  `category_id`) VALUES (7, 'Infusion fruits rouges - citron bio', 'Une farandole de baies rouges, roses et violettes pour c??l??brer le retour du soleil et des beaux jours : de la m??re et de la myrtille qui sonnent comme un retour de promenade en for??t, et de la framboise pour son parfum d??licatement acidul??. Fra??ches et p??tillantes, les ??corces de citron adjoignent l???ultime touche ensoleill??e manquante.Joyeuse et vive, cette infusion biologique sans th??ine s???adresse aussi bien aux plus petits qu???aux plus grands gourmands.', 'images/produits/sencha.png', 14, 1, '2022-02-22 8:00:00', NULL, 1, 3);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`, `category_id`) VALUES (8, 'cure d??tox foie 28 jours', ' la cure d??tox pour le foie bio de 28 jours. Autour d???un trio de th??s verts, blanc et noir et de feuilles de mat??, on retrouve la dent-de-lion (ou pissenlit) qui participe au fonctionnement normal du foie et de l???estomac.', 'images/produits/sencha.png', 13.99, 1, '2022-02-22 8:00:00', NULL, 3, 5);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`,  `category_id`) VALUES (9, 'Tisane enfants - infusion bonbon', ' M??lant morceaux de fraise et ??corces d???orange biologiques, ce m??lange naturellement sucr?? plongera votre enfant dans la magie d???une f??te foraine, au pays des sucettes color??es et des foisonnantes barbes ?? papa. Un moyen ing??nieux pour lui offrir une hydratation optimale tout au long de la journ??e, sans recourir syst??matiquement aux sodas et jus de fruits !', 'images/produits/sencha.png', 10, 1, '2022-02-22 8:00:00', NULL, 4, 6);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`,  `status`, `created_at`, `updated_at`, `type_id`,  `category_id`) VALUES(10, 'verre a th?? ', "La grande carafe est en verre borosilicat?? ??paissi r??sistant ?? la chaleur, qui peut r??sister ?? l\'eau bouillante.\r\nUn filtre am??lior?? produit un double effet et aide ?? minimiser la quantit?? de marc mieux que les autres, vous offrant une tasse de caf?? pur comme celui des professionnels.\r\nParfait pour faire du th?? frais, de l\'espresso et m??me de l\'infusion froide.", 'images/7.png', 12.99, 0, '2022-03-30 17:27:08', NULL, 0, 7);


COMMIT;

-- -----------------------------------------------------
-- Data for table `user`
-- -----------------------------------------------------
-- START TRANSACTION;
-- INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`,  `password`) VALUES (1, `traore`, `bakary`, `traorebakary120@gmail.com`, 12345);
-- INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`,  `password`) VALUES (1, `adm`, `bakary`, `traorebakary120@icloud.com`, 12345);


-- COMMIT;
