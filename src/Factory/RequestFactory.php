<?php declare(strict_types = 1);

namespace Venta\Http\Factory;

use Zend\Diactoros\ServerRequestFactory;

/**
 * Class RequestFactory
 */
abstract class RequestFactory extends ServerRequestFactory
{

    /**
     * Processes global variables to pass valid arguments for new Request instance
     *
     * @return array
     */
    public static function marshalGlobals(): array
    {
        $server  = static::normalizeServer($_SERVER);
        $files   = static::normalizeFiles($_FILES);
        $headers = static::marshalHeaders($server);

        return [
            'serverParams'  => $server,
            'uploadedFiles' => $files,
            'uri'           => static::marshalUriFromServer($server, $headers),
            'method'        => static::get('REQUEST_METHOD', $server, 'GET'),
            'body'          => 'php://input',
            'headers'       => $headers,
            'cookies'       => $_COOKIE,
            'queryParams'   => $_GET,
            'parsedBody'    => $_POST,
            'protocol'      => static::marshalProtocol($server)
        ];
    }

    /**
     * Return HTTP protocol version (X.Y)
     * @see self::marshalProtocolVersion()
     *
     * @param $server
     * @return string
     */
    protected static function marshalProtocol($server)
    {
        if (! isset($server['SERVER_PROTOCOL'])) {
            return '1.1';
        }

        if (! preg_match('#^(HTTP/)?(?P<version>[1-9]\d*(?:\.\d)?)$#', $server['SERVER_PROTOCOL'], $matches)) {
            throw new \UnexpectedValueException(sprintf(
                'Unrecognized protocol version (%s)',
                $server['SERVER_PROTOCOL']
            ));
        }

        return $matches['version'];
    }

}