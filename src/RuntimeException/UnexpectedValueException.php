<?php
declare(strict_types=1);

namespace Graywings\Exceptions\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class UnexpectedValueException extends \UnexpectedValueException implements GraywingsException
{
}
