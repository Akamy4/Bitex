<?php
session_start();
function get_product($id)
{
  // $connection = mysqli_connect('localhost', 'root', '', 'bitex');
  $mysqli = new mysqli("localhost", "root", "", "bitex"); 

  // $query = "SELECT groups.id, groups.name, groups.title, groups.slug,
  // strings.name as string_name, strings.value as string_value
  // FROM groups, strings WHERE groups.id = strings.entity_id 
  // AND strings.name IN ('old_price','price')
  // AND groups.slug = '$id'";
  // $query_groups = mysqli_query($connection, $query);
  $mysqli ->query("SET NAMES 'utf8' "); //вся выборка будет в юникоде

  $sql = "SELECT groups.id, groups.name, groups.title, groups.slug,
  strings.name as string_name, strings.value as string_value
  FROM groups, strings WHERE groups.id = strings.entity_id 
  AND strings.name IN ('old_price','price')
  AND groups.slug = '$id'";

  $result = $mysqli ->query($sql);
  $rows = mysqli_num_rows($result);
  while ($group = mysqli_fetch_assoc($result)) {
  $groups []=[
    'id' => $group['id'],
        'name' => $group['name'],
        'title' => $group['title'],
        'slug' => $group['slug'],
        'string_name' => $group['string_name'],
        'string_value' => $group['string_value']
  ];
}

  return $groups;
}

function add_to_cart($product){
  // echo "<pre>";
  // print_r($product);
  $img = $_POST['img'];
  $size = $_POST['size'];
  if(isset($_SESSION['cart'][$product[0]['id']])){
    $_SESSION['cart'][$product[0]['id']]['qty'] += 1;
  }else{
    $_SESSION['cart'][$product[0]['id']] = [
      'id' => $product [0]['id'],
      'name' => $product [0]['name'],
      'title' => $product [0]['title'],
      'slug' => $product [0]['slug'],
      'old_price' => $product [0]['string_value'],
      // 'string_value' => $product [0]['string_value'],
      'price' => $product [1]['string_value'],
      // 'string_value' => $product [1]['string_value'],
      'img' => $img,
      'size' => $size,
      'qty' => 1
    ];
  }
  $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
  $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product [1]['string_value']: $product [1]['string_value'];
}



if (isset($_POST['name']) && isset($_POST['img']) && isset($_POST['size'])) {
  switch ($_POST['cart']){
    case 'add':
      echo $_POST['img'] ."<br>";
      echo $_POST['size'];

      $id = isset($_POST['name']) ? $_POST['name'] : 0;
      $product = get_product($id);

      if(!$product){
        echo json_encode(['code' => 'error', 'answer' => 'Error product']);
      } else {
        add_to_cart($product);
        echo "<pre>";
        print_r($_SESSION['cart']);
        echo json_encode(['code' => 'ok', 'answer' => $_SESSION['cart']]);
      }
      break;
    case 'clear':
      if(isset($_SESSION['cart'])){
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.sum']);
      }
      break;
  }
}

if(isset($_POST['clear'])){
  if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
    unset($_SESSION['cart.qty']);
    unset($_SESSION['cart.sum']);
    header('LOCATION: /cart');
  }
}