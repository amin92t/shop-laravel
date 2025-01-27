<?php

namespace App\Http\Services\Image;

use Illuminate\Support\Facades\Config;
use Intervention\Image\Laravel\Facades\Image;



class ImageService extends ImageToolsService
{

    public function save($image){
        $this->setImage($image);

        $this->provider();

        $result = Image::read($image->getRealPath())->save(public_path($image->getImageAddress()), null, $this->getImageFormat());

        return $result ? $this->getImageAddress() : false;


    }

    public function fitAndSave($image, $width, $height){

        $this->setImage($image);

        $this->provider();

   
        $result = Image::read($image->getRealPath())->resize($width, $height)->save(public_path($image->getImageAddress()), null, $this->getImageFormat());

        return $result ? $this->getImageAddress() : false;

    }

    public function createIndexAndSave($image){
        $this->setImage($image);

        $imageSizes = Config::get('image.index-image-sizes');

        $this->getImageDirectory() ?? $this->setImageDirectory(date('Y') . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
        $this->setImageDirectory($this->getImageDirectory() . DIRECTORY_SEPARATOR . time());

        $this->getImageName() ?? $this->setImageName(time());

        $imageName = $this->getImageName();
        
        $indexArray = [];

        foreach($imageSizes as $sizeAlias => $imageSize){

            $currentImageSize = $imageName . "_" . $sizeAlias;

            $this->setImageName($currentImageSize);

            $this->provider();

            $result = Image::read($image->getRealPath())->resize($imageSize['width'], $imageSize['height'])->save(public_path($image->getImageAddress()), null, $this->getImageFormat());

            if($result){
                $indexArray[$sizeAlias] = $this->getImageAddress();
            }else{
                return false;
            }

        }

         $image['indexArray'] = $indexArray;
         $image['directory'] = $this->getFinalImageDirectory();
         $image['currentImage'] = Config::get('image.default-current-index-image');

    }

}