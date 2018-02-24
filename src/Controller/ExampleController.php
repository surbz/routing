<?php
namespace Drupal\drupalcamp\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;//
/*Defines an account interface which represents the current user.

Defines an object that has a user id, roles and can have session data. The interface is implemented both by the global session and the user entity.*/

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {
  /**
  * Matches /example exactly
  *
  * @Route("/example", name="content")
  */
  public function content() {
    $build = [
      '#markup' => t('Hi there!'),
    ];
    return $build;
  }

  /**
  * Matches /blog/*
  *
  * @Route("/blog/{slug}", name="blogshow")
  */
  public function blogshow($slug) {
    $build = [
      '#markup' => t('Hello Blog Show!'),
    ];
    return $build;
  }

  /**
  * Matches /blog/*
  *
  * @Route("/blog/{event}", name="eventshow")
  */
  public function eventshow($event) {
    $build = [
      '#markup' => t('Hello Event Show!'),
    ];
    return $build;
  }

  public function issuetype($arg) {
    $build = [
      '#markup' => 'The issue if of the type ' . $arg,
    ];
    return $build;
  }

  public function showuser(AccountInterface $user, Request $request) {
    // Do something with $user.
    $build = [
      '#markup' => var_dump($user).t('Hello Blog List!'),
    ];
    return $build;
  }

}
