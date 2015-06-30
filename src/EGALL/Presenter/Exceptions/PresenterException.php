<?php

namespace EGALL\Presenter\Exceptions;


class PresenterException extends \Exception {

  protected $message = 'Please set the $presenter property to your presenter path.';

}