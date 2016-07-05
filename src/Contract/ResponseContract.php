<?php declare(strict_types = 1);

namespace Venta\Http\Contract;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Interface ResponseContract
 *
 * @package Venta\Http\Contract
 */
interface ResponseContract extends ResponseInterface
{

    /**
     * Writes provided string to response body stream
     *
     * @param string $body
     * @return ResponseContract
     */
    public function append(string $body): ResponseContract;

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withStatus($code, $reasonPhrase = '');

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withProtocolVersion($version);

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withAddedHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withoutHeader($name);

    /**
     * {@inheritdoc}
     * @return ResponseContract
     */
    public function withBody(StreamInterface $body);

}