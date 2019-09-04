<?php
$_prefs['theme']['locked'] = false;
$_prefs['initial_application']['value'] = 'imp';
$_prefs['syncmlmanagement']['suppress'] = true;
$_prefs['theme']['value']=isset($_ENV['HORDE_THEME'])?$_ENV['HORDE_THEME']:'default';
$_prefs['theme']['locked']=strcasecmp(isset($_ENV['HORDE_THEME_LOCKED'])?$_ENV['HORDE_THEME_LOCKED']:'false', 'true')==0;
if ( isset($_ENV['HORDE_LANGUAGE']) ) {
  $_prefs['language']['locked']=strcasecmp(isset($_ENV['HORDE_LANGUAGE_LOCKED'])?$_ENV['HORDE_LANGUAGE_LOCKED']:'false', 'true')==0;
  $_prefs['language']['value']=$_ENV['HORDE_LANGUAGE'];
}
