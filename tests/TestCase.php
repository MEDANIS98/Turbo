<?php

declare(strict_types=1);

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Set the currently logged in user for the application.
     *
     * @param Illuminate\Contracts\Auth\Authenticatable
     *
     * @return App\User authenticated
     */
    protected function login($user = null)
    {
        $user = $user ?: create(User::class);
        $this->be($user);

        return $this;
    }

    /**
     * Get log information
     *
     * Get today's log file and convert its content to array
     *
     * @return array $log
     **/
    protected function getLogInfo()
    {
        $log = explode(PHP_EOL, file_get_contents($this->getLogFileFullPath()));
        return $log;
    }

    /**
     * Get log file full path
     *
     * resolve the log file system path in storage
     *
     * @return string $logFilePullPath the path to the log file
     **/
    private function getLogFileFullPath()
    {
        $date = now()->format('Y-m-d');
        $logfileFullpath = storage_path("logs/laravel-{$date}.log");
        return $logfileFullpath;
    }

    /**
     * Get index of logged message
     *
     * Get log line index number of the message
     *
     * @param string $title the logged message title
     * @param array $log log content
     * @return int line index number
     **/
    protected function getIndexOfAloggedMessage($title, array $log)
    {
        // Remove the last line CRLF
        for ($i = count($log) - 1; $i >= 0; $i--) { // Start at the end of the array 12
            // reduce line each time and stop when reach 0
            if (strpos($log[$i], $title) !== false) { // Strict checking for line index 0 is false
                return $i;
            }
        }
        $this->fail('No information found in the log file ' . $this->getLogFileFullPath());
    }
}
