<?php
/**
 * Category
 *
 * PHP version 5
 *
 * @category Class
 * @package  Billingo
 * @author   Billingo
 * @link     https://www.billingo.hu
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.12
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Billingo\Model;
use \Billingo\ObjectSerializer;

/**
 * Category Class Doc Comment
 *
 * @category Class
 * @package  Billingo
 * @author   Billingo
 * @link     https://www.billingo.hu
 */
class Category
{
    /**
     * Possible values of this enum
     */
    const ADVERTISEMENT = 'advertisement';
const DEVELOPMENT = 'development';
const OTHER = 'other';
const OVERHEADS = 'overheads';
const SERVICE = 'service';
const STOCK = 'stock';
const TANGIBLE_ASSETS = 'tangible_assets';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVERTISEMENT,
self::DEVELOPMENT,
self::OTHER,
self::OVERHEADS,
self::SERVICE,
self::STOCK,
self::TANGIBLE_ASSETS,        ];
    }
}