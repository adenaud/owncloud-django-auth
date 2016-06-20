<?php
$CONFIG = array (
  'instanceid' => 'oc0ymre8qtcw',
  'passwordsalt' => 'G5AyP09MU3AuZnDQVgvsVc/S3qalv0',
  'secret' => 'l5Y8cAfRdXmdWM8PV+f2v/vwYO9rCjx9yb+USVWytH/Xhn5T',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '137.43.140.87',
    2 => '192.168.2.1',
  ),
  'datadirectory' => '/var/owncloud',
  'overwrite.cli.url' => 'http://localhost/owncloud',
  'dbtype' => 'pgsql',
  'version' => '9.0.1.3',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'owncloud',
  'dbpassword' => 'owncloud',
  'logtimezone' => 'UTC',
  'installed' => true,
  'user_backends' => 
  array (
    0 => 
    array (
      'class' => 'OC_User_DJANGO',
      'arguments' => 
      array (
        0 => '192.168.2.10',
      ),
    ),
  ),
);
