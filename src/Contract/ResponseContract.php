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
     */
    public function withStatus($code, $reasonPhrase = ''): ResponseContract;

    /**
     * {@inheritdoc}
     */
    public function withProtocolVersion($version): ResponseContract;

    /**
     * {@inheritdoc}
     */
    public function withHeader($name, $value): ResponseContract;

    /**
     * {@inheritdoc}
     */
    public function withAddedHeader($name, $value): ResponseContract;

    /**
     * {@inheritdoc}
     */
    public function withoutHeader($name): ResponseContract;

    /**
     * {@inheritdoc}
     */
    public function withBody(StreamInterface $body): ResponseContract;

}