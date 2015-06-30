<?php

namespace EGALL\Presenter;
use EGALL\Presenter\Exceptions\PresenterException;

/**
 * Presentable Trait
 *
 * @package EGALL\Presenter
 * @author Erik Galloway <erik@mybarnapp.com>
 */
trait PresentableTrait {

  /**
   * The presentable instance.
   *
   * @var mixed
   */
  protected $presentableInstance;

  /**
   * Prepare a new or cached presenter instance.
   *
   * @return mixed
   * @throws PresenterException
   */
  public function present() {

    if (!$this->presenter OR !class_exists($this->presenter)) {
      throw new PresenterException();
    }

    if (!$this->presentableInstance) {
      $this->presentableInstance = new $this->presenter($this);
    }

    return $this->presentableInstance;

  }


}