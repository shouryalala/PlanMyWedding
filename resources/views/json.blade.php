  <?php
    foreach ($data as $datas) {
      $name = $datas->img_folder;
      $nm = explode('/',$name);
      $mmn = 'data/'.$name;
      $ab = glob($mmn."*jpg");
      $a = count($ab);
      $ml = array();
    }
    for ($i=1; $i <=$a ; $i++) {
      $ml[] = '{'.'"'."image"."".'":'.'"'.'http://memorableshaadi.com/'."$mmn".'Image'."$i".'.jpg'.'"'.'}';
    }
    echo '{"'."$nm[2]".'":'.'['.implode(',', $ml).']}';
  ?>
  