<?php


class Img
{
    private $image_id_car;
    private $image_url;
    private $is_main;
    private $count;

    public function getImage_id_car()
    {
        return $this->image_id_car;
    }

    public function getImage_url()
    {
        return $this->image_url;
    }

    public function getIs_main()
    {
        return $this->is_main;
    }

    public function getCount()
    {
        return $this->count;
    }


    public function setImage_id_car($Image_id_car)
    {
        $this->image_id_car = $Image_id_car;
    }

    public function setImage_url($Image_url)
    {
        $this->image_url = $Image_url;
    }

    public function setIs_main($Is_main)
    {
        $this->is_main = $Is_main;
    }

    public function setCount($Count)
    {
        $this->count = $Count;
    }
}