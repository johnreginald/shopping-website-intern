CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
);

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` int(10) unsigned NOT NULL
);

CREATE TABLE `category_item` (
  `category_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL
);
