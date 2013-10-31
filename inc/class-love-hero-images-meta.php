<?php
class Hero_Meta {
    function __construct($id) {
        $this->page_meta = get_post_meta( $id );
        $this->prefix = '_hero_';
    }
    public function get( $field = '' ) {
        $data = $this->page_meta[$this->prefix . $field][0];
        if ( $data ) {
            return $data;
        }
    }
}