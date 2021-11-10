<?php

namespace Drupal\custom1\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomModuleController extends ControllerBase {
  public function render() {
    return [
      '#markup' => 'Custom module 1',
    ];
  }
}
