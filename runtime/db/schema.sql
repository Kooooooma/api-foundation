#
# New schema for easemob ticket
#
#

DROP TABLE IF EXISTS `em_ticket`;

CREATE TABLE `em_ticket` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`number` varchar(40) NOT NULL DEFAULT '',
	`user_id` int(11) unsigned DEFAULT 0,
	`staff_id` int(11) unsigned DEFAULT 0,
	`creator_id` int(11) unsigned DEFAULT 0,
	`team_id` int(11) unsigned DEFAULT 0,
	`department_id` int(11) unsigned DEFAULT 0,
	`topic_id` int(11) unsigned DEFAULT 0,
	`status_id` int(11) unsigned DEFAULT 0,
	`priority_id` int(11) unsigned DEFAULT 0,
	`sla_id` int(11) unsigned DEFAULT 0,
	`source_id` int(11) unsigned DEFAULT 0,
	`first_thread_id` int(11) unsigned DEFAULT 0,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	`lastupdate` int(11) unsigned DEFAULT 0,
	`closed` int(11) unsigned DEFAULT 0,
	`reopened` int(11) unsigned DEFAULT 0,
	`duedate` int(11) unsigned DEFAULT 0,
	`isanswered` tinyint(1) unsigned DEFAULT 0,
	`isoverdue` tinyint(1) unsigned DEFAULT 0,
	`creator_type` char(1) DEFAULT NULL,
	`subject` varchar(500) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_ticket_thread`;

CREATE TABLE `em_ticket_thread` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`ticket_id` int(11) unsigned NOT NULL,
	`type` char(10) NOT NULL COMMENT "reply,note,event",
	`operator_id` int(11) unsigned NOT NULL,
	`operator_type` char(1) NOT NULL,
	`data` varchar(500) DEFAULT NULL,
	`content` TEXT DEFAULT NULL,
	`title` varchar(500) DEFAULT NULL,
	`ip_addresss` varchar(50) DEFAULT NULL,
	`source_id` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_attachment`;

CREATE TABLE `em_attachment` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`thread_id` int(11) unsigned NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_staff`;

CREATE TABLE `em_staff` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`nickname` varchar(50) DEFAULT NULL,
	`passwd` varchar(60) NOT NULL,
	`email` varchar(50) DEFAULT NULL,
	`phone` varchar(50) DEFAULT NULL,
	`mobile` varchar(50) DEFAULT NULL,
	`isadmin` tinyint(1) unsigned DEFAULT 0,
	`onvacation` tinyint(1) unsigned DEFAULT 0,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	`lastlogin` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_user`;

CREATE TABLE `em_user` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`username` varchar(50) NOT NULL,
	`email` varchar(50) DEFAULT NULL,
	`passwd` varchar(60) NOT NULL,
	`phone` varchar(50) DEFAULT NULL,
	`mobile` varchar(50) DEFAULT NULL,
	`status` tinyint(1) unsigned DEFAULT 0,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	`org_id` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_department`;

CREATE TABLE `em_department` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`manager_id` int(11) unsigned DEFAULT 0,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_topic`;

CREATE TABLE `em_topic` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`ispublic` tinyint(1) unsigned DEFAULT 0,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_team`;

CREATE TABLE `em_team` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`created` int(11) unsigned DEFAULT 0,
	`updated` int(11) unsigned DEFAULT 0,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_source`;

CREATE TABLE `em_source` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_sla`;

CREATE TABLE `em_sla` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_status`;

CREATE TABLE `em_status` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `em_priority`;

CREATE TABLE `em_priority` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

