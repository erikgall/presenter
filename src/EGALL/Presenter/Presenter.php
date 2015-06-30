<?php

namespace EGALL\Presenter;

/**
 * Abstract Presenter Class
 *
 * @package EGALL\Presenter
 * @author Erik Galloway <erik@mybarnarnapp.com>
 * @verson 1.0.0
 */
abstract class Presenter {

  /**
   * The entity
   *
   * @var mixed
   */
  protected $entity;

  /**
   * @param $entity
   */
  public function __construct($entity) {
    $this->entity = $entity;
  }

  /**
   * Magic property style retrieval.
   *
   * @param $property
   * @return mixed
   */
  public function __get($property) {

    if (method_exists($this, $property)) {
      return $this->{$property}();
    }

    return $this->entity->{$property};

  }

}