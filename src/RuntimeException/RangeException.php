<?php
declare(strict_types=1);

namespace Graywings\Exceptions\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class RangeException extends \RangeException implements GraywingsException
{
}
