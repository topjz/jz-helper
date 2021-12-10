<?php
/**
 * Created by chen3jian
 * Date: 2021/12/10
 * Time: 15:19
 */

namespace jz\helper;

/**
 * 文件操作类
 * Created by chen3jian
 * Date: 2021/12/10
 * Time: 18:33
 * Class File
 * @package jz\helper
 */
class File
{
    /**
     * @var array 文件列表
     */
    protected static $fileList = [];

    /**
     * 递归扫描指定路径下的所有文件夹
     * @param $path string 文件路径
     * @param $data array 文件列表
     * @since：v1.0
     * @Time: 2021/12/10 18:28
     */
    public static function searchDir(string $path, array &$data)
    {
        if (is_dir($path)) {
            $dp = dir($path);
            while ($file = $dp->read()) {
                if ($file != '.' && $file != '..') {
                    static::searchDir($path . '/' . $file, $data);
                }
            }
            $dp->close();
        }

        if (is_file($path)) {
            $new_path = str_replace(".png", "big.png", $path);
            copy($path, $new_path);
            unlink($path);
            $data[] = $new_path;
        }
    }

    /**
     * 获取指定目录下的所有图片
     * @param $path string 路径
     * @return array
     * @since：v1.0
     * @Time: 2021/12/10 18:23
     */
    public static function getFileList(string $path): array
    {
        static::searchDir($path, static::$fileList);
        return static::$fileList;
    }
}