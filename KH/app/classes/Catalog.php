<?php
abstract class Catalog {

  public static function get_menu()
  {
    $categories = ORM::factory('Category')->find_all()->as_array();
    return $categories;
  }

}

// End classes Catalog
