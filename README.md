# ZF2 Todo List #
---
Simple example of a todo list app with ZF2.

# Installation #
---
1. Clone repo
2. Run Composer in app diretory
3. Set up the database

# Composer #
In the directory of the cloned app:
```
  php composer.phar self-update
  php composer.phar install
```

# Database #
---
Create a Database (MySQL).

In that database, create a table:
```
CREATE TABLE todo (
   id int(11) NOT NULL auto_increment,
   description varchar(100) NOT NULL,
   PRIMARY KEY (id)
 );
```
Insert values into that table:
```
 INSERT INTO todo (description) VALUES  ('Clean Car');
 INSERT INTO todo (description) VALUES  ('Clean Room');
 INSERT INTO todo (description) VALUES  ('Buy food');
 INSERT INTO todo (description) VALUES  ('Walk dog');
 INSERT INTO todo (description) VALUES  ('Exercise');
```

Make sure to adjust **config/autoload/global.php** and **config/autoload/local.php** to configure your database credentials. 

If **local.php** is missing, duplicate **local.php.dist** and modify the file:
```
// /config/autoload/local.php

return array(
    'db' => array(
        'username' => 'DB_User_Name',
        'password' => 'DB_Password',
    ),
);
```

# Other #
---
Make sure to follow [ZF2 Documentation](http://framework.zend.com/manual/2.3/en/user-guide/skeleton-application.html) for any questions on hosting the app or any other problems.

