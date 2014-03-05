<?php
/**
 * Created by Aagam Shah
 * Date: 14/2/14
 * Time: 4:40 PM
 */

class Complain {

    public $name,$id,$location,$time,$upvotes,$img_loc;

    public function __construct($arg1){
        $this->name = $arg1;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setLoc($loc) {
        $this->location = $loc;
    }

    public function getLoc() {
        return $this->location;
    }

    public function setImgLoc($imgLoc) {
        $this->img_loc = $imgLoc;
    }

    public function getImgLoc() {
        $this->img_loc;
    }

} 