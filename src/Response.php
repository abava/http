<?php declare(strict_types = 1);

namespace Venta\Http;

use Venta\Http\Contract\ResponseContract;

/**
 * Class Response
 *
 * @package Venta\Http
 */
class Response extends \Zend\Diactoros\Response implements ResponseContract
{

    /**
     * {@inheritdoc}
     */
    public function append(string $body): ResponseContract
    {
        $this->getBody()->write($body);
        return $this;
    }

}