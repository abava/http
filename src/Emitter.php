<?php declare(strict_types = 1);

namespace Abava\Http;

use Abava\Http\Contract\EmitterContract;
use Zend\Diactoros\Response\SapiEmitter;

/**
 * Class Emitter
 * @package Abava\Http
 */
class Emitter extends SapiEmitter implements EmitterContract {}