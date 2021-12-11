<?php
/**
 * Created by chen3jian
 * @Date: 2021/12/11 13:50
 * @since：v
 */

namespace Tests;

use jz\helper\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testCamel()
    {
        $this->assertSame('fooBar', Str::camel('foo_bar'));
    }
}
