<?php

namespace QuarkCMS\Quark\Console;

require(__DIR__.'/../helpers.php');

class UpdateCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public static function handle()
    {
        self::publishAssets();
    }

    /**
     * 发布UI引擎资源
     *
     * @return void
     */
    public static function publishAssets()
    {
        $resourceAssets = __DIR__.'/../../public';
        $assets = __DIR__.'/../../../../../public/admin';

        $dirs = get_folder_dirs($resourceAssets);
        $files = get_folder_files($resourceAssets);

        if(is_array($dirs)) {
            foreach ($dirs as $key => $value) {
                $dirPath = $resourceAssets.'/'.$value;
                copy_dir_to_folder($dirPath, $assets);
            }
        }

        if(is_array($files)) {
            foreach ($files as $key => $value) {
                $filePath = $resourceAssets.'/'.$value;
                copy_file_to_folder($filePath, $assets);
            }
        }
    }
}