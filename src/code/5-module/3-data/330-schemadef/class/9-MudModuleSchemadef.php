<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-02-07 jj5 - class definition...
//

class MudModuleSchemadef extends MudModuleData {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-07 jj5 - factory methods...
  //

  public function new_mud_schema_def() {

    return MudSchemaDef::Create();

  }

  public function new_mud_schema_tab_def( $file_info, $file, $line, $tab_name, $tab_type ) {

    return MudSchemaTabDef::Create( $file_info, $file, $line, $tab_name, $tab_type );

  }

  public function new_mud_schema_col_def(
    $file_info,
    $file,
    $line,
    $col_name,
    $col_type,
    $is_key,
    $is_vrt,
    $is_ref,
    $is_flg,
    $is_dup,
    $is_unique,
    $is_fk,
    $min,
    $max,
    $nullable,
    $default,
    $valid,
    $invalid,
    $ref_tab_name,
    $ref_col_name,
    $flag,
    $is_interaction_id,
  ) {

    return MudSchemaColDef::Create(
      $file_info,
      $file,
      $line,
      $col_name,
      $col_type,
      $is_key,
      $is_vrt,
      $is_ref,
      $is_flg,
      $is_dup,
      $is_unique,
      $is_fk,
      $min,
      $max,
      $nullable,
      $default,
      $valid,
      $invalid,
      $ref_tab_name,
      $ref_col_name,
      $flag,
      $is_interaction_id,
    );

  }

  public function new_mud_schema_idx_def(
    $file_info,
    $file,
    $line,
    $idx_name,
    $idx_type,
    $col_name_list,
  ) {

    return MudSchemaIdxDef::Create(
      $file_info,
      $file,
      $line,
      $idx_name,
      $idx_type,
      $col_name_list,
    );

  }
}
