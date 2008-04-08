create table `user` (
	`id` int(4) unsigned not null,
	`login` varchar(50) not null,
	`encrypted_password` varchar(50) not null,
	`email` varchar(50) not null,
	`created_on` datetime,
	`updated_on` datetime,
	primary key (`id`),
	unique key (`login`),
	unique (`email`)
);

create table `product` (
	`id` int(4) unsigned not null,
	`sku` char(10) not null,
	`name` varchar(255) default '',
	`description` text default '',
	`price` double default 0.00,
	`manufacturer_id` int(4) unsigned default 0,
	`created_on` datetime,
	`updated_on` datetime,
	primary key (`id`),
	unique (`sku`)
);

create table `category` (
	`id` int(4) unsigned not null,
	`code` char(4) not null,
	`name` varchar(255) default '',
	`description` text default '',
	`parent_id` int(4) unsigned default 0,
	primary key (`id`)
);

create table `category_product` (
	`category_id` int(4) unsigned not null,
	`product_id` int(4) unsigned not null
);

create table `manufacturer` (
	`id` int(4) unsigned not null,
	`code` char(4) not null,
	`name` varchar(255) default '',
	primary key (`id`)
);

create table `order` (
	`id` int(4) unsigned not null,
	`reference1` varchar(50) default '',
	`reference2` varchar(50) default '',
	`reference3` varchar(50) default '',
	`order_date` datetime,
	`shipping_method` varchar(50) default '',
	`company_name` varchar(50) default '',
	`prefix` varchar(50) default '',
	`first_name` varchar(50) default '',
	`middle_name` varchar(50) default '',
	`last_name` varchar(50) default '',
	`suffix` varchar(50) default '',
	`attention` varchar(50) default '',
	`address1` varchar(50) default '',
	`address2` varchar(50) default '',
	`address3` varchar(50) default '',
	`city` varchar(50) default '',
	`state` varchar(50) default '',
	`zip` varchar(50) default '',
	`country` varchar(50) default '',
	`phone1` varchar(50) default '',
	`phone2` varchar(50) default '',
	`fax` varchar(50) default '',
	`email` varchar(50) default '',
	primary key (`id`)
);

create table `order_item` (
	`id` int(4) unsigned not null,
	`order_id` int(4) unsigned not null,
	`sku` char(10) not null,
	`price` double default 0.00,
	`quantity` int(2) default 1,
	primary key (`id`)
);

create table `shipment` (
	`id` int(4) unsigned not null,
	`shipping_cost` double default 0.00,
	`tracking_number` varchar(50) default '',
	`shipping_method` varchar(50) default '',
	`shipping_date` datetime,
	primary key (`id`)
);

create table `shipping_method` (
	`id` int(4) unsigned not null,
	`code` varchar(50) not null,
	`description` text default '',
	`shipper` varchar(50) not null,
	primary key (`id`)
);

create table `customer` (
	`id` int(4) unsigned not null,
	`customer_number` varchar(50) not null,
	`company_name` varchar(50) default '',
	`prefix` varchar(50) default '',
	`first_name` varchar(50) default '',
	`middle_name` varchar(50) default '',
	`last_name` varchar(50) default '',
	`suffix` varchar(50) default '',
	`attention` varchar(50) default '',
	`address1` varchar(50) default '',
	`address2` varchar(50) default '',
	`address3` varchar(50) default '',
	`city` varchar(50) default '',
	`state` varchar(50) default '',
	`zip` varchar(50) default '',
	`country` varchar(50) default '',
	`phone1` varchar(50) default '',
	`phone2` varchar(50) default '',
	`fax` varchar(50) default '',
	`email` varchar(50) default '',
	primary key (`id`)
);

create table `invoice` (
	`id` int(4) unsigned not null,
	`invoice_number` varchar(50) not null,
	`invoice_date` datetime,
	primary key (`id`)
);

create table `invoice_order` (
	`invoice_id` int(4) unsigned not null,
	`order_id` int(4) unsigned not null
);

create table `invoice_item` (
	`id` int(4) unsigned not null,
	`invoice_id` int(4) unsigned not null,
	`sku` char(10) not null,
	`price` double default 0.00,
	`quantity` int(2) default 1,
	primary key (`id`)
);