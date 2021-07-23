<?php
namespace Drupal\customconfig\Controller;

use Drupal\Core\Controller\ControllerBase;
namespace Drupal\customconfig\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Provides route responses for the Example module.
 */
class ExampleController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
public function myPage() {
	$serializer = \Drupal::service('serializer');
	$node = Node::load(2);
	$data = $serializer->serialize($node, 'json', ['plugin_id' => 'entity']);
	return JsonResponse::fromJsonString($data);
}

}