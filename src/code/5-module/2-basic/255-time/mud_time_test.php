<?php


/////////////////////////////////////////////////////////////////////////////
// 2021-04-14 jj5 - include dependencies...
//

require_once __DIR__ . '/../../../../host/dev/test.php';
require_once __DIR__ . '/mud_time.php';


/////////////////////////////////////////////////////////////////////////////
// 2021-04-14 jj5 - declare tests...
//

declare_tests([


  ////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-04-14 jj5 - test
  //

  'test' => function() {

    $sydtime = mud_get_sydtime();

    assert( preg_match( '/^\d\d\d\d-\d\d-\d\d-\d\d\d\d\d\d$/', $sydtime ) );

    return 0;

  },

]);
