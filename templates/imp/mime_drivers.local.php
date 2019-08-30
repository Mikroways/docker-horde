<?php
$mime_drivers['html']['inline'] = strcasecmp(isset($_ENV['IMP_MIME_DRIVERS_HTML_INLINE'])?$_ENV['IMP_MIME_DRIVERS_HTML_INLINE']:'true','true') == 0;
