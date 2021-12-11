<?php
/**
 * Created by chen3jian
 * @Date: 2021/12/11 13:40
 * @since：v
 */

namespace Tests;

use jz\helper\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    public function testGetFileList(){
        $a = File::getFileList(dirname(__DIR__) . DIRECTORY_SEPARATOR);
        var_dump($a);
        $this->assertNotEmpty($a);
    }
}