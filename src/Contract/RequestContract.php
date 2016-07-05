<?php declare(strict_types = 1);

namespace Venta\Http\Contract;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * Interface RequestContract
 *
 * @package Venta\Http\Contract
 */
interface RequestContract extends ServerRequestInterface
{

    /**
     * {@inheritdoc}
     */
    public function withCookieParams(array $cookies): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withQueryParams(array $query): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withUploadedFiles(array $uploadedFiles): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withParsedBody($data): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withAttribute($name, $value): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withoutAttribute($name): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withRequestTarget($requestTarget): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withMethod($method): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withUri(UriInterface $uri, $preserveHost = false): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withProtocolVersion($version): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withHeader($name, $value): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withAddedHeader($name, $value): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withoutHeader($name): RequestContract;

    /**
     * {@inheritdoc}
     */
    public function withBody(StreamInterface $body): RequestContract;

}