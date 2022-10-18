<?php

define("ASSET", get_template_directory_uri() . '/assets/theme');
define("PART", get_template_directory_uri() . '/parts');

function Asset($fileName): string {
    return ASSET . "/$fileName";
}