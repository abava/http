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
     * @return RequestContract
     */
    public function withCookieParams(array $cookies);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withQueryParams(array $query);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withUploadedFiles(array $uploadedFiles);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withParsedBody($data);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withAttribute($name, $value);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withoutAttribute($name);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withRequestTarget($requestTarget);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withMethod($method);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withUri(UriInterface $uri, $preserveHost = false);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withProtocolVersion($version);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withAddedHeader($name, $value);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withoutHeader($name);

    /**
     * {@inheritdoc}
     * @return RequestContract
     */
    public function withBody(StreamInterface $body);

}