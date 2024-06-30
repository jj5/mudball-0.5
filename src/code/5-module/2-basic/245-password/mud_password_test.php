<?php


/////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - include dependencies...
//

require_once __DIR__ . '/../../../../host/dev/test.php';
require_once __DIR__ . '/mud_password.php';


/////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - declare tests...
//

declare_tests([


  ////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-02-24 jj5 - password
  //

  'password' => function() {

    $password = 'test password';

    $password_hash = mud_password_hash( $password );

    mud_password_verify( $password, $password_hash );

    return 0;

  },

]);
