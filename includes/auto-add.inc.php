<?php 
require_once("../classes/data_access.php");

DataAccess::CreateTables();


$select_query = "select * from city";
$result1 = DataAccess::ExecuteQuery($select_query);

$select_query = "select * from users";
$result2 = DataAccess::ExecuteQuery($select_query);

$select_query = "select * from admin";
$result3 = DataAccess::ExecuteQuery($select_query);

if(sizeof($result1) <= 0 && sizeof($result2) <= 0 && sizeof($result3) <= 0) {
    // insert some cities
$insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
"values ('Istanbul','Turkey','70','1.jpg', '1-back.jpg', 'Istanbul is the capital of the world...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas nisi et consectetur pretium. Cras eget ante laoreet, pretium nisl eu, vehicula orci. Aenean fringilla, lorem sed dignissim euismod, tortor mauris vehicula sem, in accumsan enim felis et dui. Mauris eget augue sed lorem tincidunt aliquam vel in metus. Cras nibh ipsum, egestas eu consequat in, porta nec ante. Nam aliquam posuere dignissim. Donec augue ex, maximus tristique vestibulum vel, rhoncus eu purus. Etiam vitae arcu nisl. Vestibulum vel quam diam.')";

$result = DataAccess::ExecuteNonQuery($insert_query);


$insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
"values ('Berlin','Germany','90','2.jpg', '2-back.jpg', 'Berlin, the star of Europe...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas nisi et consectetur pretium. Cras eget ante laoreet, pretium nisl eu, vehicula orci. Aenean fringilla, lorem sed dignissim euismod, tortor mauris vehicula sem, in accumsan enim felis et dui. Mauris eget augue sed lorem tincidunt aliquam vel in metus. Cras nibh ipsum, egestas eu consequat in, porta nec ante. Nam aliquam posuere dignissim. Donec augue ex, maximus tristique vestibulum vel, rhoncus eu purus. Etiam vitae arcu nisl. Vestibulum vel quam diam.')";

$result = DataAccess::ExecuteNonQuery($insert_query);

$insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
"values ('Izmir','Turkey','60','3.jpg', '3-back.jpg', 'Izmir a great city to travel!','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas nisi et consectetur pretium. Cras eget ante laoreet, pretium nisl eu, vehicula orci. Aenean fringilla, lorem sed dignissim euismod, tortor mauris vehicula sem, in accumsan enim felis et dui. Mauris eget augue sed lorem tincidunt aliquam vel in metus. Cras nibh ipsum, egestas eu consequat in, porta nec ante. Nam aliquam posuere dignissim. Donec augue ex, maximus tristique vestibulum vel, rhoncus eu purus. Etiam vitae arcu nisl. Vestibulum vel quam diam.')";

$result = DataAccess::ExecuteNonQuery($insert_query);

$insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
"values ('London','England','120','4.jpg', '4-back.jpg', 'London, the king of the world','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas nisi et consectetur pretium. Cras eget ante laoreet, pretium nisl eu, vehicula orci. Aenean fringilla, lorem sed dignissim euismod, tortor mauris vehicula sem, in accumsan enim felis et dui. Mauris eget augue sed lorem tincidunt aliquam vel in metus. Cras nibh ipsum, egestas eu consequat in, porta nec ante. Nam aliquam posuere dignissim. Donec augue ex, maximus tristique vestibulum vel, rhoncus eu purus. Etiam vitae arcu nisl. Vestibulum vel quam diam.')";

$result = DataAccess::ExecuteNonQuery($insert_query);

$insert_query="insert into city(name,country,price,small_picture_url, back_picture_url,small_text,details)".
"values ('Paris','France','75','5.jpg', '5-back.jpg', 'Paris city of the love...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas nisi et consectetur pretium. Cras eget ante laoreet, pretium nisl eu, vehicula orci. Aenean fringilla, lorem sed dignissim euismod, tortor mauris vehicula sem, in accumsan enim felis et dui. Mauris eget augue sed lorem tincidunt aliquam vel in metus. Cras nibh ipsum, egestas eu consequat in, porta nec ante. Nam aliquam posuere dignissim. Donec augue ex, maximus tristique vestibulum vel, rhoncus eu purus. Etiam vitae arcu nisl. Vestibulum vel quam diam.')";

$result = DataAccess::ExecuteNonQuery($insert_query);

// insert some users

$insert_query = "insert into users(firstname,surname,password,email,picture_url) ".
"values('Nurettin Resul','Tanyıldızı','123456','tanyildizi@gmail.com','1.jpeg') ";
$result = DataAccess::ExecuteNonQuery($insert_query);

$insert_query = "insert into users(firstname,surname,password,email,picture_url) ".
"values('Kübra','Aksoy','123456','aksoy@gmail.com','2.jpg') ";
$result = DataAccess::ExecuteNonQuery($insert_query);

// insert an admin
$insert_query = "insert into admin(firstname, surname, password, email, picture_url) ".
"values('Admin', 'Admin', '123456', 'admin@dreamer.com', '1.jpg') ";
$result = DataAccess::ExecuteNonQuery($insert_query);



echo "Auto data added successfully. Click button below to return home page!<br>";
echo "<a href='../index.php'><button>Go Homepage</button></a>";
} else {
    echo "Already added auto data!<br>";
    echo "<a href='../index.php'><button>Go Homepage</button></a>";
}


?>