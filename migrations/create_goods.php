<?php
  require_once('../utils/db_adapter.php');

  DBAdapter::getInstance() -> createTable('goods', [
    'id' => [
      'AI' => true,
      'PK' => true,
      'type' => 'int(8)',
      'default' => false,
      'not_null' => true,
      'unsigned' => true
    ],
    'title' => [
      'AI' => false,
      'PK' => false,
      'type' => 'varchar(50)',
      'default' => false,
      'not_null' => true,
      'unsigned' => false
    ],
    'description' => [
      'AI' => false,
      'PK' => false,
      'type' => 'TEXT(2000)',
      'default' => false,
      'not_null' => false,
      'unsigned' => false
    ],
    'price' => [
      'AI' => false,
      'PK' => false,
      'type' => 'DECIMAL(10, 2)',
      'default' => false,
      'not_null' => true,
      'unsigned' => false
    ],
    'photo' => [
      'AI' => false,
      'PK' => false,
      'type' => 'varchar(50)',
      'default' => false,
      'not_null' => false,
      'unsigned' => false
    ],
    ] );

?>
