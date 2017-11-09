<?php
	namespace Drupal\peets_coffee\Controller;

	class LocatingPageController {

	  public static function content() {
	    
	    $html = '<div id="map"></div>
	      				<br>
	      				<p>' . t('<strong>Location 1:</strong> Peet\'s Coffee Vienna') . '</p>

	      				<p>' . t('<strong>Longitude:</strong> 38.906095') . '</p>
	      				
	      				<p>' . t('<strong>Latitude:</strong> -77.260225') . '</p>

	      				<br>

	      				<p>' . t('<strong>Location 2:</strong> Peet\'s Coffee Vienna') . '</p>

	      				<p>' . t('<strong>Longitude:</strong> 38.916245') . '</p>

	      				<p>' . t('<strong>Latitude:</strong> -77.226557') . '</p>

	      				<br>

	      				<p>' . t('<strong>Location 3:</strong> Peet\'s Coffee Falls Church') . '</p>

	      				<p>' . t('<strong>Longitude:</strong> 38.904583') . '</p>

	      				<p>' . t('<strong>Latitude:</strong> -77.203958') . '</p>';

	    $build = array(
	      '#type' => 'markup',
	      '#markup' => $html,
	      '#attached' => array(
          'library' => array(
        	  'peets_coffee/peets-map',
          ),
      	),
			);
	    
	    return $build;
	  }
	} // in drupal it's typical not to close the PHP tag in a 100% PHP file
