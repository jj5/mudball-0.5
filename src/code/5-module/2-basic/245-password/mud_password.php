<?php


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - include dependencies...
//

require_once __DIR__ . '/../235-exception/mud_exception.php';


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-23 jj5 - include components...
//

require_once __DIR__ . '/class/MudModulePassword.php';


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-02-24 jj5 - functional interface...
//
//

function mud_password_hash( string $password ) : string {

  return mud_module_password()->password_hash( $password );

}

function mud_password_verify( string $password, string $password_hash )
  : bool {

  return mud_module_password()->password_verify( $password, $password_hash );

}


/////////////////////////////////////////////////////////////////////////////
// 2024-02-07 jj5 - service locator...
//
//

function mud_module_password() : MudModulePassword {

  return mud_locator()->get_module( MudModulePassword::class );

}
