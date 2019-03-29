<?php

namespace App;

use Intervention\Image\Facades\Image;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class UploadImage extends Model
{
	public  function  uploadSingle($savePath, $image,$width,$height)
	{

		$filename = md5(now().basename($image)).'.'.pathinfo($image, PATHINFO_EXTENSION);
		$location = $savePath . $filename;
		Image::make($image)->fit($width, $height, function ($constraint) {
			$constraint->upsize();
		})->save($location);
		ImageOptimizer::optimize($location);
		return $location;
	} 
}
