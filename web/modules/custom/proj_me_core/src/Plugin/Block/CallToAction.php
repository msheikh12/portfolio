<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CallToAction' block.
 *
 * @Block(
 *  id = "call_to_action_block",
 *  admin_label = @Translation("Call To Action Block"),
 * )
 */
class CallToAction extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
     $build['call_to_action_block']['#markup'] = '<p> Interested in working together? <a class="lets-build" href="/web/form/contact-me" role="button">Let\'s build something awesome</a> </p>';

    return $build;
  }

}
