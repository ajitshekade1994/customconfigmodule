<?php
namespace Drupal\customconfig\Access;
 
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;
/**
 * Class CustomAccessCheck.
 *
 * @package Drupal\customconfig\Access
 */
class CustomAccessCheck implements AccessInterface {

public function access(AccountInterface $account) {
$variables['siteapikey'] = \Drupal::config('system.site')->get('siteapikey');
if($variables['siteapikey'] == '' ) {
	 return AccessResult::forbidden();
    }
      return AccessResult::allowed();
  }
 
}