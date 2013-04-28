<?php

class Controller_Catalog extends Controller_Template {

  public function action_index()
  {
    $categories = Catalog::get_menu();
    foreach($categories as $category) {
      echo $category->translation->name_lv;
    }
  }

}

// End Controller_Catalog
