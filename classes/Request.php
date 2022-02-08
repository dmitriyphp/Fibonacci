<?php

namespace Input;

class Request
{
    /**
     * Returns request parameter
     * @return int
     */
    public function get(): int
    {
        if ($this->isCli()) {
            $result = $this->getCliArg();
        } else {
            $result = $this->getUrlArg();
        }
        return intval($result);
    }

    /**
     * Returns request parameter from URL
     * @return mixed|null
     */
    private function getUrlArg()
    {
        if (isset($_GET['n'])) {
            return $_GET['n'];
        } elseif (isset($_POST['n'])) {
            return $_POST['n'];
        }
        return null;
    }

    /**
     * Returns request parameter from console
     * @return false|mixed|string|null
     */
    private function getCliArg()
    {
        $arg = getopt('n:');
        return $arg['n'] ?? null;
    }

    /**
     * Checks if current mode is console
     * @return bool
     */
    private function isCli(): bool
    {
        return php_sapi_name() == 'cli';
    }
}