<?php
declare(strict_types=1);

namespace Graywings\Exceptions\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class OverflowException extends \OverflowException implements GraywingsException
{
}
