<?php
class Model_Category extends ORM {

  protected $_has_many = array(
    'products' => array(
      'model'   => 'Product',
      'through' => 'category_products',
    ),
  );

  protected $_has_one = array(
    'translation' => array(
      'model'   => 'Category_Translation',  
    ),
  );
}

// End Model_Category
