<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-flash for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-flash/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Zend\Expressive\Flash\Exception;

use InvalidArgumentException;

use function sprintf;

class InvalidHopsValueException extends InvalidArgumentException implements ExceptionInterface
{
    public static function valueTooLow(string $key, int $hops) : self
    {
        return new self(sprintf(
            'Hops value specified for flash message "%s" was too low; must be greater than 0, received %d',
            $key,
            $hops
        ));
    }
}
