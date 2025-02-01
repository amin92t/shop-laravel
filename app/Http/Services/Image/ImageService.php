<?php

namespace App\Http\Services\Image;

use Illuminate\Support\Facades\Config;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Services\Image\ImageToolsService;


/**
 * Class ImageService
 * 
 * این کلاس برای مدیریت عملیات مربوط به تصاویر مانند ذخیره، تغییر اندازه، ایجاد تصاویر ایندکس شده و حذف تصاویر استفاده می‌شود.
 */
class ImageService extends ImageToolsService
{

    public function save($image){
        $this->setImage($image);

        $this->provider();

        $result = Image::read($image->getRealPath())->save(public_path($this->getImageAddress()), null, $this->getImageFormat());


        return $result ? $this->getImageAddress() : false;


    }


      /**
     * تغییر اندازه تصویر و ذخیره آن در مسیر مشخص شده.
     *
     * @param mixed $image فایل تصویری که باید ذخیره شود.
     * @param int $width عرض مورد نظر تصویر.
     * @param int $height ارتفاع مورد نظر تصویر.
     * @return string|false مسیر ذخیره شده تصویر یا false در صورت عدم موفقیت.
     */

    public function fitAndSave($image, $width, $height){

        $this->setImage($image);

        $this->provider();

   
        $result = Image::read($image->getRealPath())->resize($width, $height)->save(public_path($this->getImageAddress()), null, $this->getImageFormat());


        return $result ? $this->getImageAddress() : false;

    }

    
    /**
     * ایجاد تصاویر ایندکس شده با اندازه‌های مختلف و ذخیره آنها.
     *
     * @param mixed $image فایل تصویری که باید ذخیره شود.
     * @return array|false آرایه‌ای شامل مسیرهای تصاویر ایندکس شده یا false در صورت عدم موفقیت.
     */


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

            $result = Image::read($image->getRealPath())->resize($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()), null, $this->getImageFormat());


            if($result){
                $indexArray[$sizeAlias] = $this->getImageAddress();
            }else{
                return false;
            }

        }

         $images['indexArray'] = $indexArray;
         $images['directory'] = $this->getFinalImageDirectory();
         $images['currentImage'] = Config::get('image.default-current-index-image');

         return $images;

    }



    
    /**
     * حذف یک تصویر از مسیر مشخص شده.
     *
     * @param string $imagePath مسیر فایل تصویری که باید حذف شود.
     * @return void
     */

    public function deleteImage($imagePath){
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
    }


     /**
     * حذف تمامی تصاویر ایندکس شده و دایرکتوری مربوطه.
     *
     * @param array $images آرایه‌ای شامل اطلاعات تصاویر ایندکس شده.
     * @return void
     */
    public function deleteIndex($images){
        $directory = public_path($images['directory']);
        $this->deleteDiretoryAndFiles($directory);
    }


     /**
     * حذف یک دایرکتوری و تمامی فایل‌های داخل آن.
     *
     * @param string $directory مسیر دایرکتوری که باید حذف شود.
     * @return bool نتیجه عملیات حذف.
     */
    public function deleteDiretoryAndFiles($directory){

        if(!is_dir($directory)){
            return false;
        }

        $files = glob($directory. DIRECTORY_SEPARATOR .'*', GLOB_MARK);

        foreach($files as $file){

            if(is_dir($file)){
                $this->deleteDiretoryAndFiles($file);
            }else{
                unlink($file);
            }

        }

        $result = rmdir($directory);
        return $result;

    }

}