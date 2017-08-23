<?php

gila::controllers([
    'star_systems'=> 'star-systems/controllers/star_systems'
]);

gila::amenu([['Exoplanets','star_systems','icon'=>'dashboard']]);
