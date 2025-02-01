<?php

namespace App\Http\Services\Image;


/**
 * Class ImageToolsService
 * 
 * این کلاس به عنوان یک سرویس کمکی برای مدیریت تنظیمات و عملیات پایه‌ای مربوط به تصاویر استفاده می‌شود.
 * این کلاس شامل متدهایی برای تنظیم و دریافت اطلاعات مربوط به تصاویر، دایرکتوری‌ها، فرمت‌ها و نام‌های تصاویر است.
 */

class ImageToolsService
{

    protected $image;
    protected $exclusiveDirectory;
    protected $imageDirectory;
    protected $imageName;
    protected $imageFormat;
    protected $finalImageDirectory;
    protected $finalImageName;


       /**
     * تنظیم فایل تصویر.
     *
     * @param mixed $image فایل تصویر
     */
    public function setImage($image){
        $this->image = $image;
    }

    
    /**
     * دریافت دایرکتوری اختصاصی.
     *
     * @return string دایرکتوری اختصاصی
     */
    public function getExclusiveDirectory(){
        return $this->exclusiveDirectory;
    }

     /**
     * تنظیم دایرکتوری اختصاصی.
     *
     * @param string $exclusiveDirectory دایرکتوری اختصاصی
     */
    public function setExclusiveDirectory($exclusiveDirectory){
        $this->exclusiveDirectory = trim($exclusiveDirectory. '/\\');
    }


      /**
     * دریافت دایرکتوری تصویر.
     *
     * @return string دایرکتوری تصویر
     */
    public function getImageDirectory(){
        return $this->imageDirectory;
    }


        /**
     * تنظیم دایرکتوری تصویر.
     *
     * @param string $imageDirectory دایرکتوری تصویر
     */
    public function setImageDirectory($imageDirectory){
        $this->imageDirectory = trim($imageDirectory. '/\\');
    }


      /**
     * دریافت نام تصویر.
     *
     * @return string نام تصویر
     */
    public function getImageName(){
      return $this->imageName;
   }

      /**
     * تنظیم نام تصویر.
     *
     * @param string $imageName نام تصویر
     */
  public function setImageName($imageName){
     $this->imageName = $imageName;
  }

    /**
     * تنظیم نام تصویر بر اساس نام اصلی فایل.
     *
     * @return bool|void نتیجه عملیات
     */
  public function setCurrentImageName(){
    return !empty($this->image) ? $this->setImageName(pathinfo($this->image->getClinetOriginalName(), PATHINFO_FILENAME)) : false;
  }


   /**
     * دریافت فرمت تصویر.
     *
     * @return string فرمت تصویر
     */
  public function getImageFormat(){
    return $this->imageFormat;
  }


    /**
     * تنظیم فرمت تصویر.
     *
     * @param string $imageFormat فرمت تصویر
     */
  public function setImageFormat($imageFormat){
    $this->imageFormat = $imageFormat;
  }


    /**
     * دریافت دایرکتوری نهایی تصویر.
     *
     * @return string دایرکتوری نهایی تصویر
     */
  public function getFinalImageDirectory(){
    return $this->finalImageDirectory;
  }


    /**
     * تنظیم دایرکتوری نهایی تصویر.
     *
     * @param string $finalImageDirectory دایرکتوری نهایی تصویر
     */
  public function setFinalImageDirectory($finalImageDirectory){
    $this->finalImageDirectory = $finalImageDirectory;
  }


   /**
     * تنظیم نام نهایی تصویر.
     *
     * @param string $finalImageName نام نهایی تصویر
     */
  public function setFinalImageName($finalImageName){
    $this->finalImageName = $finalImageName;
  }


     /**
     * دریافت نام نهایی تصویر.
     *
     * @return string نام نهایی تصویر
     */
  public function getFinalImageName(){
    return $this->finalImageName;
  }


  
    /**
     * بررسی وجود دایرکتوری و ایجاد آن در صورت عدم وجود.
     *
     * @param string $imageDirectory مسیر دایرکتوری
     */
  public function checkImageDirectory($imageDirectory){
    if(!file_exists($imageDirectory)){
      //  mkdir($imageDirectory,666, true);
      mkdir($imageDirectory,0777, true);

    }
  }


     /**
     * دریافت آدرس کامل تصویر.
     *
     * @return string آدرس کامل تصویر
     */
  public function getImageAddress(){
    return $this->finalImageDirectory . DIRECTORY_SEPARATOR . $this->finalImageName;
  }


     /**
     * متد provider برای تنظیم مقادیر پیش‌فرض و آماده‌سازی اطلاعات تصویر.
     * این متد دایرکتوری، نام و فرمت تصویر را تنظیم می‌کند.
     */
  public function provider(){

    $this->getImageDirectory() ?? $this->setImageDirectory(date('Y') . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
    $this->getImageName() ?? $this->setImageName(time());
    $this->getImageFormat() ?? $this->setImageFormat($this->image->extension());


    $finalImageDirectory = empty($this->getExclusiveDirectory()) ? $this->getImageDirectory() : $this->getExclusiveDirectory() . DIRECTORY_SEPARATOR . $this->getImageDirectory();

    $this->setFinalImageDirectory($finalImageDirectory);
    $this->setFinalImageName($this->getImageName() . "." . $this->getImageFormat());

    $this->checkImageDirectory(
      $this->getFinalImageDirectory()
    );

  }

}