<?php

// Data-Source: a multidimensional array containing quote, source, citation, and year.
$quotes = [
  [
    "quote" => "Only to the extent that we expose ourselves over and over to annihilation can that which is indestructible in us be found.",
    "source" => "Pema Chodron",
    "citation" => "When Things Fall Apart",
    "year" => "2016",
    "tag" => "buddhism",
  ],
  [
    "quote" => "She wasn't doing a thing that I could see, except standing there leaning on the balcony railing, holding the universe together.",
    "source" => "J.D. Salinger",
    "citation" => "A Girl I Knew",
    "year" => "1948",
    "tag" => "literature",
  ],
  [
    "quote" => "Have patience with all things, but chiefly have patience with yourself. Do not lose courage in considering your own imperfections but instantly set about remedying them - every day begin the task anew.",
    "source" => "Saint Francis de Sales",
    "tag" => "introspection",
  ],
  [
    "quote" => "The way things are does not determine the way they ought to be.",
    "source" => "Michael J. Sandel",
    "citation" => "Justice: What's the Right Thing to Do?",
    "year" => "2009",
    "tag" => "philosophy",
  ],
  [
    "quote" => "Courage is being scared to death, but saddling up anyway.",
    "source" => "John Wayne",
    "tag" => "inspiration",
  ],
];

// Takes an array (the quotes array) as a parameter and returns a random array from the quotes array.
function getRandomQuote($array) {
  $array_count = count($array) - 1;
  $randomArray = $array[rand(0, $array_count)];
  return $randomArray;
}

// Takes an array (quotes array) as a parameter and returns a formatted string with HTML tags to print to screen.
function printQuote($array) {
  $quote = getRandomQuote($array);
  $quoteToPrint = " ";
  if (isset($quote['tag'])) {
    $quoteToPrint .="<p class='tag'> $quote[tag] </p>";
  }
  $quoteToPrint .="<p class='quote'> $quote[quote] </p>";
  $quoteToPrint .="<p class='source'> $quote[source]";
  if (isset($quote['citation'])) {
    $quoteToPrint .="<span class='citation'> $quote[citation] </span>";
  }
  if (isset($quote['year'])) {
    $quoteToPrint .="<span class='year'> $quote[year] </span>";
  }
  $quoteToPrint .= "</p>";
  return $quoteToPrint;
}

?>
