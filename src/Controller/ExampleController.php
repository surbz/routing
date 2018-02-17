<?php
namespace Drupal\drupalcamp\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;//
/*Defines an account interface which represents the current user.

Defines an object that has a user id, roles and can have session data. The interface is implemented both by the global session and the user entity.*/
use Symfony\Component\HttpFoundation\Request;
/*Request represents an HTTP request.

The methods dealing with URL accept / return a raw path (% encoded):

getBasePath
getBaseUrl
getPathInfo
getRequestUri
getUri
getUriForPath*/

/**
 * An example controller.
 */
class ExampleController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    $build = [
      '#markup' => t('Hello World!'),
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function bloglist() {
    $build = [
      '#markup' => t('Hello Blog List!'),
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function blogshow($slug) {
    // $slug will equal the dynamic part of the URL
    // e.g. at /blog/yay-routing, then $slug='yay-routing'

    $build = [
      '#markup' => t('Hello Blog Show!'),
    ];
    return $build;
  }

  public function customarg($arg) {
    $build = [
      '#markup' => $arg,
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function testuser(AccountInterface $user, Request $request) {
    $build = [
      '#markup' => var_dump($user).t('Hello Blog List!'),
    ];
    return $build;
  }

  public function blogadvanced($year,$slug) {
    $build = [
      '#markup' => 'Test',
    ];
    return $build;
  }
}
