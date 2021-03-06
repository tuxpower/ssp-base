<?php
require_once __DIR__ . '/../../../../../autoload.php';

use Sil\PhpEnv\Env;

/*
 * Unset c1 and c2 cookies if present
 */
$secureCookie = Env::get('SECURE_COOKIE', true);
$deleteRememberMeOnLogout = Env::get('DELETE_REMEMBER_ME_ON_LOGOUT', true);
if ($deleteRememberMeOnLogout === true) {
    setcookie('c1', '', 1, '/', null, $secureCookie, true);
    setcookie('c2', '', 1, '/', null, $secureCookie, true);
}

require __DIR__ . '/ssp-SingleLogoutService.php';
