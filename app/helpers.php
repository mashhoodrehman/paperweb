	<?php
    if (!function_exists('sendImage')) {


    function sendImage($file , $size){
        $ext = $file->getClientOriginalExtension();

        if ($ext != 'docx' || $ext != 'pdf' || $ext != 'gif') {
           $newFilename = "s_img_" . time() . "_" . $file->getClientOriginalName();
            $img = \Image::make($file);
            // $img->fit(30, 30)->save($destinationPath . '/' . $newFilename);
            $path = 'upload';
            // $file->move($destinationPath, $newFilename);
            $img->resize($size['width'] , $size['height'])->save($path.'/' . $newFilename);
            $picPath = $newFilename;
            $finalPath =$path.'/' . $newFilename;
            return $finalPath;
        } else {
            return $message = 'kindly select Valid Image';
        }
    }


  }