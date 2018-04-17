<?php
  require_once('../utils/db_adapter.php');
  DBAdapter::getInstance() -> createTable('users', [
    'id' => [
      'AI' => true,
      'PK' => true,
      'type' => 'int(8)',
      'default' => false,
      'not_null' => true,
      'unsigned' => true
    ],
    'email' => [
      'AI' => false,
      'PK' => false,
      'type' => 'varchar(50)',
      'default' => false,
      'not_null' => true,
      'unsigned' => false
    ],
    'password' => [
      'AI' => false,
      'PK' => false,
      'type' => 'varchar(50)',
      'default' => false,
      'not_null' => true,
      'unsigned' => false
    ],
    'is_admin' => [
      'AI' => false,
      'PK' => false,
      'type' => 'Bool',
      'default' => 0,
      'not_null' => false,
      'unsigned' => false
    ],
    ] );

?>
