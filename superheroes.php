<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];

?>

<ul>
<?php foreach ($superheroes as $superhero): ?>
  <li><?= $superhero['alias']; ?></li>
<?php endforeach; ?>
</ul>

<?php
$superheroes = [
    ["alias" => "Iron Man", "name" => "Tony Stark", "bio" => "A billionaire industrialist and genius inventor."],
    ["alias" => "Spider-Man", "name" => "Peter Parker", "bio" => "Bitten by a radioactive spider."],
    ["alias" => "Captain America", "name" => "Steve Rogers", "bio" => "Recipient of the Super-Soldier serum."],
    ["alias" => "Captain Marvel ", "name" => "Carol Danvers", "bio" => "One of the universe's most powerful heroes."],
    ["alias" => "Black Widow", "name" => "Natasha Romanov", "bio" => "One of S.H.I.E.L.D.’s most deadly assassins."],
    ["alias" => "Hulk", "name" => "Bruce Banner", "bio" => "The uncontrollable green monster powered by his rage."],
    ["alias" => "Hawkeye", "name" => "Clint Barton", "bio" => "The Avengers’ amazing archer."],
    ["alias" => "Black Panther", "name" => "T'Challa", "bio" => "King of the secretive and highly advanced African nation of Wakanda."],
    ["alias" => "Thor", "name" => "Thor Odinson", "bio" => "The god of thunder."],
    ["alias" => "Scarlett Witch", "name" => "Wanda Maximoff", "bio" => "Powerful warrior."],
];


$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($query === '') {
    foreach ($superheroes as $hero) {
        echo "<h3>{$hero['alias']}</h3><p>{$hero['bio']}</p>";
    }
} else {
    $found = false;
    foreach ($superheroes as $hero) {
        if (stripos($hero['alias'], $query) !== false || stripos($hero['name'], $query) !== false) {
            echo "<h3>{$hero['alias']}</h3><h4>{$hero['name']}</h4><p>{$hero['bio']}</p>";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "Superhero not found.";
    }
}
?>
