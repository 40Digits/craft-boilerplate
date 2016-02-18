<?php

/**
 * Local Config Override
 *
 * Overrides added here will get appended to the end of the
 * custom config array for all environments: '*'
 */

return array(

  // Environment name
  'env' => 'local'

  // Give us more useful error messages
  'devMode' => true,

  // Route ALL of the emails that Craft
  // sends to a single email address.
  'testToEmailAddress'  => 'email@email.com',

  'translationDebugOutput'      => false,
  'useCompressedJs'             => true,
  'cacheDuration'               => 'P1D',
  'cooldownDuration'            => 'PT5M',
  'maxInvalidLogins'            => 5,
  'invalidLoginWindowDuration'  => 'PT1H',
  'phpMaxMemoryLimit'           => '256M',

  // Member login info duration
  // http://www.php.net/manual/en/dateinterval.construct.php
  'userSessionDuration'           => 'P101Y',
  'rememberedUserSessionDuration' => 'P101Y',
  'rememberUsernameDuration'      => 'P101Y',

  'syncOptions' => array(
    'sshUser' => 'sshusername',
    'sshHost' => 'ssh.host.com',
    'remoteDbUser' => 'dbuser',
    'remoteDbPass' => 'dbpass',
    'remoteDbName' => 'dbname',
    'folderOptions' => array(
      'uploads' => array(
        'localFolder' => '/Users/davidhahn/Dev/40digits-projects/example/public/uploads',
        'remoteFolder' => '/var/www/vhosts/example/public/uploads',
      ),
      'storage' => array(
        'localFolder' => '/Users/davidhahn/Dev/40digits-projects/example/craft/storage',
        'remoteFolder' => '/var/www/vhosts/example/craft/storage/'
      )
    )
  )

);