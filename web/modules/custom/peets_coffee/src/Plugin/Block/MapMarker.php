<?php

namespace Drupal\peets_coffee\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MapMarker' block.
 *
 * @Block(
 *  id = "map_marker_block",
 *  admin_label = @Translation("Map Marker"),
 * )
 */
class MapMarker extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['map_marker_block']['#markup'] = '<div id="map"></div>';

    return $build;
  }

}
