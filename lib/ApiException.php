<?php
/**
 * ApiException
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

namespace Billingo;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Billingo
 * @author   Billingo
 * @link     https://www.billingo.hu
 */
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     *
     * @param string        $message         Error message
     * @param int           $code            HTTP status code
     * @param string[]|null $responseHeaders HTTP response header
     * @param mixed         $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct($message = "", $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
