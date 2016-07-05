<?php declare(strict_types = 1);

namespace Venta\Http;

use Venta\Http\Contract\RequestContract;
use Zend\Diactoros\ServerRequest;

/**
 * Class Request
 *
 * @package Venta\Http
 */
class Request extends ServerRequest implements RequestContract {}