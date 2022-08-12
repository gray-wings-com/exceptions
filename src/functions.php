<?php
declare(strict_types=1);

use Graywings\Exceptions\ErrorExceptions\CompileErrorException;
use Graywings\Exceptions\ErrorExceptions\CompileWarningException;
use Graywings\Exceptions\ErrorExceptions\CoreErrorException;
use Graywings\Exceptions\ErrorExceptions\CoreWarningException;
use Graywings\Exceptions\ErrorExceptions\DeprecatedErrorException;
use Graywings\Exceptions\ErrorExceptions\ErrorException;
use Graywings\Exceptions\ErrorExceptions\NoticeException;
use Graywings\Exceptions\ErrorExceptions\ParseException;
use Graywings\Exceptions\ErrorExceptions\RecoverableErrorException;
use Graywings\Exceptions\ErrorExceptions\StrictException;
use Graywings\Exceptions\ErrorExceptions\UserDeprecatedException;
use Graywings\Exceptions\ErrorExceptions\UserErrorException;
use Graywings\Exceptions\ErrorExceptions\UserNoticeException;
use Graywings\Exceptions\ErrorExceptions\UserWarningException;
use Graywings\Exceptions\ErrorExceptions\WarningException;

/**
 * @return void
 * @noinspection PhpDocMissingThrowsInspection
 */
function initErrorhandler(): void
{
    set_error_handler(function (
        int    $severity,
        string $message,
        string $file,
        int    $line
    ) {
        $argument = [$message, 0, $severity, $file, $line];
        /** @noinspection PhpUnhandledExceptionInspection */
        match ($severity) {
            E_ERROR => throw new ErrorException(...$argument),
            E_WARNING => throw new WarningException(...$argument),
            E_PARSE => throw new ParseException(...$argument),
            E_NOTICE => throw new NoticeException(...$argument),
            E_CORE_ERROR => throw new CoreErrorException(...$argument),
            E_CORE_WARNING => throw new CoreWarningException(...$argument),
            E_COMPILE_ERROR => throw new CompileErrorException(...$argument),
            E_COMPILE_WARNING => throw new CompileWarningException(...$argument),
            E_USER_ERROR => throw new UserErrorException(...$argument),
            E_USER_WARNING => throw new UserWarningException(...$argument),
            E_USER_NOTICE => throw new UserNoticeException(...$argument),
            E_STRICT => throw new StrictException(...$argument),
            E_RECOVERABLE_ERROR => throw new RecoverableErrorException(...$argument),
            E_DEPRECATED => throw new DeprecatedErrorException(...$argument),
            E_USER_DEPRECATED => throw new UserDeprecatedException(...$argument)
        };
    });
}
