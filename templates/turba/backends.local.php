<?php
$cfgSources['favourites']['disabled'] = strcasecmp(isset($_ENV['TURBA_FAVOURITES_DISABLED'])?$_ENV['TURBA_FAVOURITES_DISABLED']:'true','true') == 0;
