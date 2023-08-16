# DuplicateFinder
Duplicate Finder is a PHP class created for searching duplicates in a text.

# Example usage

Example #1:

<?php

$df = new DuplicateFinder(
    "Lorem ipsum dolor Lorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ex dolore ea commodo consequat. Duis aute irure dolor in reprehenderit ex in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
);

$duplicates = $df->search_duplicates();

foreach ($duplicates as $value) {

    echo "{$value[0]} appeared {$value[1]} times<br />";
    
}

Example #2:

Highlighting duplicates in the text with color.

<?php

$df = new DuplicateFinder(
    "Lorem ipsum dolor Lorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ex dolore ea commodo consequat. Duis aute irure dolor in reprehenderit ex in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
);

$duplicates = $df->search_duplicates();

echo $df->mark_duplicates();
