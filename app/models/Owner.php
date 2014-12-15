<?php


class Owner extends Eloquent {

    public function pic() {
        # Owner has many Pics
        # Define a one-to-many relationship.
        return $this->hasMany('Pic');
		}

}
