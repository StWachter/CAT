<?php
/**
 * Revoke all google's authorization and reset the app
 *
 * @package bigbrother
 * @subpackage processors
 *
 * @var BigBrother $ga
 */
$ga =& $modx->bigbrother;

/* Delete all account assigned to a user */
$query = $modx->newQuery('modUserSetting');
$query->where(array(
    'key' => 'bigbrother.account',
));
$query->orCondition(array(
    'key' => 'bigbrother.account_name',
));
$modx->removeCollection('modUserSetting', $query);


/* Delete all bigbrother's related system settings */
$ga->deleteOption('refresh_token');
$ga->deleteOption('oauth_token');
$ga->deleteOption('oauth_secret');
$ga->deleteOption('account');
$ga->deleteOption('account_name');
$ga->deleteOption('total_account');
$modx->getCacheManager()->delete('access_token', $ga->cacheOptions);

$response['success'] = true;

return $modx->toJSON($response);