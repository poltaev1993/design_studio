<?php

namespace App\Helpers;

class ImageHelper
{
    /**
     * Image save function
     *
     * @param $file
     * @param string $folder
     * @return null|string
     */
    public static function make($file, $folder = 'default')
    {
        $dir = '/uploads/' . $folder . '/';

        $destinationPath = public_path() . $dir;

        $extension = $file->getClientOriginalExtension();

        $filename = str_random(40) . '.' . $extension;

        while( file_exists($destinationPath . $filename) )
            $filename = str_random(40) . '.' . $extension;

        $upload_success = $file->move($destinationPath, $filename);

        if ($upload_success)
        {
            return $dir . $filename;
        }

        return null;
    }
}