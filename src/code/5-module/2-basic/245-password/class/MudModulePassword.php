<?php


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-03-19 jj5 - class definition...
//

class MudModulePassword extends MudModuleBasic {


  ////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-09 jj5 - constructor...
  //

  public function __construct( MudModulePassword|null $previous = null) {

    parent::__construct( $previous );

  }


  ////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-03-04 jj5 - public functions...
  //

  public function password_hash( string $password ) : string {

    return password_hash( $password, PASSWORD_ARGON2I );

  }

  public function password_verify( string $password, string $password_hash )
    : bool {

    return password_verify( $password, $password_hash );

  }
}
