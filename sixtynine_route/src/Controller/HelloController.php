<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\sixtynine_route\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content($name) {
    return array(
      '#type' => 'markup',
     // '#markup' => t('Welcome to Sixtynine Page.'),
      '#markup' => $this->t('Hello @name', array('@name' => $name)),
    );
  }
}