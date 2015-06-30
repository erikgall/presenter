<?php

namespace Laracasts\Presenter\Contracts;

/**
 * Presentable Interface
 *
 * @package Laracasts\Presenter\Contracts
 * @author Erik Galloway <erik@mybarnapp.com>
 * @version 1.0.0
 */
interface PresentableInterface {

  /**
   * Prepare a new or cached presenter instance
   *
   * @return mixed
   */
  public function present();
}