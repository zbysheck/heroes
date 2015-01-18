<?php
$sql="CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `hp_max` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `combo` int(11) NOT NULL,
  `unlocked` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `monster_id` int(11) NOT NULL,
  `monster_hp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;";

    try {
        $db->exec($sql)
        or die(print_r($db->errorInfo(), true));

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }