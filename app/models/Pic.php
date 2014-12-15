<?php


class Pic extends Eloquent {

 public function owner() {
        # Pic belongs to Owner
        return $this->belongsTo('Owner');
    }

    //public function shares() {
        # Pics belong to many Shares     
       // return $this->belongsToMany('Share');
   // }

}
