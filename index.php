<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--
    In order to check your PHP doc in cmd format, type php -h 

    To run a development server, type in php -S localhost:8888
    --> 
    <!-- <h1>

    <=?php 
      //THIS SECTION HERE COVERS YOUR FIRST PHP TAG AND HELLO WORLD PLUS VARIABLE DECLARATION 

      // You can use print but do not forget that's a matter of preference. Otherwise, use echo

      echo "Hello " . " " . " World" . "<br>";  

      //To concatenate, the syntax goes like "First syllable or word " . " " . " another word" 

      echo "This is " . " my " . " first concatenation" . "<br>";

      //You can do concatenation like this by declaring a variable. Welcome to variable declaration! 

      $var = " World!";

      echo "Hello " . " " . $var . "<br>";

      $var = "Hello ";

      echo $var . " " . " World!" . "<br>";

      //You can also approach variable declaration like this
      $var = "Hello "; 

      echo "$var everybody";

    ?> 
    </h1> 
    -->

    <!-- <-?php 
    //This section involves an impromptu section on CSS design
    //The topic of focus however here is about conditions and booleans
     $name = "Fear and Loathing in Las Vegas";
     $read = true;

     if ($read) {
      $message = "You have read $name";
     } else {
      $message = "Please read $name";
     }
     
    ?> -->
    <!-- <h1>
    <-?php  echo $message; ?>
    <-?=
     $message;
    ?>
    </h1> -->

    <?php 
    //This section of the sandbox shows an example of an Array
    //Below is an example of a basic array
    //Arrays are zero based, the indexes are determined from 0.
    //[0] <- This is an example of a first index.
    //In this case, Do Androids Dream of Electric Sheep? is the first index.
    //  $books = [
    //     "Do Androids Dream of Electric Sheep?", 
    //     "1984", 
    //     "Brave New World"
    //  ];
    //Here's an example of another form of array called Associative Arrays which
    //utilizes the key, value pair syntax.
    //
    //Data will be fetched differently this time for the case of echoing data in
    //Associative Arrays
    $books = [
        [
          'name' => 'Do Androids Dream of Electric Sheep?',
          'author' =>  'Phillip K. Dick',
          'purchaseUrl' =>  'https://example.com',
          'releaseYear' => '1968'
        ],
        [
          'name' =>  'Project Hail Mary',
          'author' => 'Phillip K Dick',
          'purchaseUrl' =>  'http://example.com',
          'releaseYear' => '2021'
        ],
    ];
    ?>

    <h1>Recommended Books</h1>
    <ul>
        <?php foreach($books AS $book):   ?>
            <li>Book: <?=$book['name']?></li>
            <li>Author: <?= $book['author'] ?></li>
            <li>Link to purchase: <?= $book['purchaseUrl'] ?></li>
            <li>Release Year: <?= $book['releaseYear'] ?></li> <br>
           
        <?php endforeach; ?>
    </ul>
</body>
</html>