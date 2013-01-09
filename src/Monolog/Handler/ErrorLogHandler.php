<?php

namespace Monolog\Handler;

/**
 * Writes messages using error_log
 * 
 * @author Ivan Metlushko <metlushko@gmail.com>
 */
class ErrorLogHandler extends AbstractProcessingHandler
{
    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
        error_log((string) $record['formatted']);
    }
}
