<?php
// test commit for branch slim2
require 'vendor/autoload.php';



$app = new \Slim\Slim(array(
    'mode' => 'development',
    'debug' => true,
    'log.enabled' => true,
    ));






/**
 *  * zeynel dağlı
 * @since 11-09-2014
 */
$app->get("/redirected_path/", function () use ($app) {
    echo "redirected path";
});

/**
 *  * zeynel dağlı
 * @since 11-09-2014
 */
$app->get("/hashNotMatch/", function () use ($app) {
    echo "hashNotMatch";
});

$app->get("/timeExpired/", function () use ($app) {
    echo "timeExpired";
});

/**
 *  * zeynel dağlı
 * @since 27-01-2016
 */
$app->get("/timeStampNotFound/", function () use ($app) {
    echo "timeStampNotFound";
});

/**
 *  * zeynel dağlı
 * @since 05/01/2016
 */
$app->get("/publicNotFound/", function () use ($app) {
    echo "publicNotFound";
});

/**
 *  * zeynel dağlı
 * @since 27/01/2016
 */
$app->get("/publicTempNotFound/", function () use ($app) {
    echo "publicTempNotFound";
});

/**
 *  * zeynel dağlı
 * @since 09/06/2016
 */
$app->get("/publicCompanyNotFound/", function () use ($app) {
    echo "publicCompanyNotFound";
});

/**
 *  * zeynel dağlı
 * @since 05/01/2016
 */
$app->get("/privateNotFound/", function () use ($app) {
    echo "privateNotFound";
});

/**
 *  * zeynel dağlı
 * @since 27/01/2016
 */
$app->get("/privateTempNotFound/", function () use ($app) {
    echo "privateTempNotFound";
});

/**
 *  * zeynel dağlı
 * if user id and company public key does not match, rest api forward request here
 * @since 09/06/2016
 */
$app->get("/userNotBelongToCompany/", function () use ($app) {
    echo "userNotBelongToCompany";
});

/**
 *  * zeynel dağlı
 * @since 05/01/2016
 */
$app->get("/userNotRegistered/", function () use ($app) {
    echo "userNotRegistered";
});

/**
 *  * zeynel dağlı
 * @since 06/01/2016
 */
$app->get("/userNotRegisteredSlim/", function () use ($app) {
    echo "header-userNotRegistered";
});

/**
 *  * zeynel dağlı
 * @since 06/01/2016
 */
$app->get("/publicNotFoundSlim/", function () use ($app) {
    echo "header-publicNotFound";
	print_r($_GET);
});

/**
 *  * zeynel dağlı
 * @since 05/01/2016
 */
$app->get("/privateNotFoundSlim/", function () use ($app) {
    echo "header-privateNotFound";
});



$app->run();