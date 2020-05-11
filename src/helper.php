<?php
// +----------------------------------------------------------------------
// | Topjz
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://topjz.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: chen3jian <chen3jian@gmail.com>
// +----------------------------------------------------------------------

if (!function_exists('throw_if')) {
    /**
     * 按条件抛异常
     *
     * @param mixed            $condition
     * @param Throwable|string $exception
     * @param array            ...$parameters
     * @return mixed
     *
     * @throws Throwable
     */
    function throw_if($condition, $exception, ...$parameters)
    {
        if ($condition) {
            throw (is_string($exception) ? new $exception(...$parameters) : $exception);
        }

        return $condition;
    }
}