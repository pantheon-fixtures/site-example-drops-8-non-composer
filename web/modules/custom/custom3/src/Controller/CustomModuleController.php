<?php

namespace Drupal\custom3\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomModuleController extends ControllerBase {
  public function render() {
    return [
      '#markup' => 'Custom module 3',
    ];
  }
}
