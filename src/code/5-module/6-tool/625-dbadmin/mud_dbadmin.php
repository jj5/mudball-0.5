<?php


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-21 jj5 - include dependencies...
//

require_once __DIR__ . '/../610-tool/mud_tool.php';

require_once __DIR__ . '/../../../../../../../src/code/1-bootstrap/9-keystone.php';


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-23 jj5 - module errors...
//

mud_define_error( 'MUD_ERR_DBADMIN_ADMIN_NOT_DEFINED', 'ADMIN not defined.' );
mud_define_error( 'MUD_ERR_DBADMIN_MISSING_SCHEMADECL_SPEC', 'missing schemadecl spec.' );


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-23 jj5 - include components...
//

require_once __DIR__ . '/class/MudDbadmin.php';
