<?php

$df = new DuplicateFinder("Lorem ipsum dolor Lorem sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ex dolore ea commodo consequat. Duis aute irure dolor in reprehenderit ex in voluptate velit esse cillum dolore eu fugiat nulla pariatur.");

$duplicates = $df->search_duplicates();

echo $df->mark_duplicates();
