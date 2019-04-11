-- CREATE DATABASE databasename;
CREATE DATABASE  `gestione video`;

use  `gestione video`

CREATE TABLE `gestione video`.`video`
(  
    -- nome_campo tipo_dato[(lenght)] [flag],
    `id_video` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `id_autore` INT(10) UNSIGNED NOT NULL , 
    `durata` TIME NULL , 
    `titolo` VARCHAR(255) NOT NULL , 
    `video_url` VARCHAR(255) NOT NULL ,
    `visualizzazioni` INT(10) UNSIGNED NULL , 
    `nlike` INT(10) UNSIGNED NULL , 
     
     -- dichiaro la chiave primaria
     PRIMARY KEY  (`id_video`)
     
) ENGINE = InnoDB;


-- create table [nome_database.]nome_tabella (
--     # creazione dei singoli campi 
--     nome_campo tipo_dato[(lenght)] [flag],
--     nome_campo tipo_dato[(lenght)] [flag],
--     nome_campo tipo_dato[(lenght)] [flag],
--     nome_campo tipo_dato[(lenght)] [flag],
--     nome_campo tipo_dato[(lenght)] [flag],
--     nome_campo tipo_dato[(lenght)] [flag],
-- ) 


-- eliminare un database

DROP DATABASE `altro_db`;

DROP DATABASE `altro_database`;
DROP DATABASE `ancorauno`;