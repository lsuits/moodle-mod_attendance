<?php

define('CLI_SCRIPT', 1);
require_once('../../config.php');
require_once($CFG->dirroot.'/mod/attendance/locallib.php');
attforblock_upgrade();