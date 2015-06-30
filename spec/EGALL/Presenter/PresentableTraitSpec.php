<?php

namespace spec\EGALL\Presenter;

use Mockery;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PresentableTraitSpec extends ObjectBehavior
{
  function let()
  {
    $this->beAnInstanceOf('spec\EGALL\Presenter\Foo');
  }

  function it_is_initializable()
  {
    $this->shouldHaveType('spec\EGALL\Presenter\Foo');
  }

  function it_fetches_a_valid_presenter()
  {
    Mockery::mock('FooPresenter');

    $this->present()->shouldBeAnInstanceOf('FooPresenter');
  }

  function it_throws_up_if_invalid_presenter_is_provided()
  {
    $this->presenter = 'Invalid';

    $this->shouldThrow('EGALL\Presenter\Exceptions\PresenterException')->duringPresent();
  }

  function it_caches_the_presenter_for_future_use()
  {
    Mockery::mock('FooPresenter');

    $one = $this->present();
    $two = $this->present();

    $one->shouldBe($two);
  }
}

// We'll reproduce what the consumer of our
// package might do. This way, we can test the
// trait.
class Foo {
  use \EGALL\Presenter\PresentableTrait;

  public $presenter = 'FooPresenter';
}

