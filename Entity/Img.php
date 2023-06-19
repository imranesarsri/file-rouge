<?php
class Img
{
    // Img properties
    private $image_id_car; // Private property to store the ID of the car image
    private $image_url; // Private property to store the URL of the image
    private $is_main; // Private property to indicate if the image is the main image
    private $count; // Private property to store the count of the image

    public function getImage_id_car()
    {
        return $this->image_id_car;
    }
    // Getter method to retrieve the ID of the car image

    public function getImage_url()
    {
        return $this->image_url;
    }
    // Getter method to retrieve the URL of the image

    public function getIs_main()
    {
        return $this->is_main;
    }
    // Getter method to retrieve the status of the image (main or not)

    public function getCount()
    {
        return $this->count;
    }
    // Getter method to retrieve the count of the image

    public function setImage_id_car($Image_id_car)
    {
        $this->image_id_car = $Image_id_car;
    }
    // Setter method to set the ID of the car image

    public function setImage_url($Image_url)
    {
        $this->image_url = $Image_url;
    }
    // Setter method to set the URL of the image

    public function setIs_main($Is_main)
    {
        $this->is_main = $Is_main;
    }
    // Setter method to set the status of the image (main or not)

    public function setCount($Count)
    {
        $this->count = $Count;
    }
    // Setter method to set the count of the image
}