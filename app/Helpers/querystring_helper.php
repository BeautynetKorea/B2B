<?php

function product_query_return($params = []) {
  $table = 'product';
  $where = [];
  if( empty($params) ) return $where;
  
  if ( !empty($params['brand_id']) ) {
    array_push($where,  $table.'.brand_id IN ('.$params['brand_id'].') ');
  }

  if ( !empty($params['name']) ) {
    // $name = explode(' ', $params['name']);
    // $name_where = '( ';

    // foreach($name as $i => $v) :
    //   if ( $i > 0 ) $name_where.= ' OR ';
    //   $name_where.= 
    //     'REPLACE(CONCAT('.$table.'.name_en, '.$table.'.type_en), \' \', \'\') LIKE \'%'.$v.'%\'
    //       OR REPLACE(CONCAT('.$table.'.name, '.$table.'.type), \' \', \'\') LIKE \'%'.$v.'%\'';
    //   if ( (count($name) - 1) == $i ) $name_where.= ' )';
    // endforeach;
    
    $name_where='(  REPLACE(UPPER('.$table.'.name_en), \' \', \'\') LIKE \'%'.preg_replace('/\s+/', '', strtoupper($params['name'])).'%\'
                    OR REPLACE('.$table.'.name, \' \', \'\') LIKE \'%'.preg_replace('/\s+/', '', $params['name']).'%\' )';
    array_push($where, $name_where);
  }

  if ( !empty($params['barcode']) ) {
    array_push($where,  $table.'.barcode LIKE "%'.$params['barcode'].'%"');
  }
  
  if ( !empty($params['sample']) ) {
    array_push($where,  $table.'.sample = '.$params['sample']);
  }

  if ( !empty($params['id']) ) {
    array_push($where, $table.'.id IN ('.$params['id'].') ');
  }

  if ( !empty($params['product_id']) ) {
    array_push($where, $table.'.id IN ('.$params['product_id'].') ');
  }

  return $where;
}

function product_query_string_return($params = []) {
  $table = 'product';
  $where = "";
  if( empty($params) ) return $where;
  
  if ( !empty($params['brand_id']) ) {    
    if ( !empty($where) ) $where .= " AND ";
    $where .= $table.'.brand_id IN ('.$params['brand_id'].')';
  }

  if ( !empty($params['name']) ) {
   if ( !empty($where) ) $where .= " AND ";
    $name_where= '(  REPLACE(UPPER('.$table.'.name_en), \' \', \'\') LIKE \'%'.preg_replace('/\s+/', '', strtoupper($params['name'])).'%\'
                    OR REPLACE(UPPER('.$table.'.name), \' \', \'\') LIKE \'%'.preg_replace('/\s+/', '', strtoupper($params['name'])).'%\' )';
    $where .= $name_where;
  }

  if ( !empty($params['barcode']) ) {
    if ( !empty($where) ) $where .= " AND ";
    $where .= $table.'.barcode LIKE "%'.$params['barcode'].'%"';
  }
  
  if ( !empty($params['sample']) ) {
    if ( !empty($where) ) $where .= " AND ";
    $where .= $table.'.sample = '.$params['sample'];
  }

  if ( !empty($params['id']) ) {
    if ( !empty($where) ) $where .= " AND ";
    $where .= $table.'.id IN ('.$params['id'].')';
  }

  if ( !empty($params['product_id']) ) {
    if ( !empty($where) ) $where .= " AND ";
    $where .= $table.'.id IN ('.$params['product_id'].')';
  }

  return $where;
}