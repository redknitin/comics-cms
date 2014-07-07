<?php
function load_title() {
  if (isset($_GET['p']) && $_GET['p'] != '')
    $tmp_title = $_GET['p'];
  $retval = '';
  if (isset($tmp_title)) {
    $tmp_title_text = str_replace('-', ' ', $tmp_title);
    $retval .= (strtoupper(substr($tmp_title_text, 0, 1)).substr($tmp_title_text, 1).' - ');
    $retval = str_replace(' i ', ' I ', $retval);
  }
  $retval .= KNRCOMIX_BASETITLE;
  echo $retval;
}

function is_local() {
  return ($_SERVER['HTTP_HOST'] == 'localhost');
}

//function load_item() {
//  $tmp_title = $_GET['p'];
//}

function is_load_marked($a_id) {
  if (!isset($_GET['p']) || $_GET['p'] == '')
    return true;

  $tmp_title = $_GET['p'];
  $retval = false;
  if ($tmp_title == $a_id) {
    $retval = true;
  }
  return $retval;
}

function load_permalink($a_id) {
  $retval = KNRCOMIX_BASEURL.'?p='.$a_id;
  echo $retval;
}
?>
