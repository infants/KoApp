<?php

class Controller_Template extends Kohana_Controller_Template {

  public $template = 'site';

  public function before()
  {
    parent::before();
    // Set session instance to $session
    $session = Session::instance();
    // Set site configuration to $config
    $config  = Kohana::$config->load('site');

    $this->template->set('stylesheets', $config->stylesheets);
    $this->template->set('scripts', $config->scripts);
  }

  public function after()
  {
    parent::after();
  }
}
