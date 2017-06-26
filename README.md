# ciICON Blog
Dedicated Blog Website for ICON (FEU Diliman Student Publication)

# Queries
##### Accounts table
```sql
CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pword` varchar(100) NOT NULL,
  `joined_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

##### Articles
```sql
CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `ArtName` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StudNum` int(11) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `sub_article` text NOT NULL,
  `Description` text NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

##### Categories
```sql
CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symbol` varchar(50) NOT NULL DEFAULT 'fa fa-tags',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `name`, `symbol`, `created_at`) VALUES
(1, 'Campus', 'fa fa-institution', '2017-06-12 02:33:30'),
(2, 'Business', 'fa fa-briefcase', '2017-06-12 02:33:30'),
(3, 'Technology', 'fa fa-microchip', '2017-06-12 02:33:30'),
(4, 'Sports', 'fa fa-soccer-ball-o', '2017-06-12 02:33:30'),
(5, 'Literary', 'fa fa-pencil', '2017-06-12 02:33:30');
```

##### News
```sql
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `photo_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

##### Photos
```sql
CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `PhotoName` text NOT NULL,
  `Name` varchar(100) NOT NULL,
  `StudNum` int(11) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `sub_photo` text NOT NULL,
  `Description` text NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

##### Skills
```sql
CREATE TABLE `skills` (
  `StudNum` int(11) NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

##### Team
```sql
CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `StudNum` varchar(8) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(14) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `requested_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

# Database Configuration
```php
'username' => 'root',
'password' => 'oali',
'database' => 'cicon',
```
