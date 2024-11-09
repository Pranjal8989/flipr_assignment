<?php

if ( !defined( 'BASEPATH' ) )
exit( 'No direct script access allowed' );

class ProjectM extends CI_Model {

    public function getProjects() {
        $query = 'SELECT * FROM projects where 1 ';
        $result = $this->db->query( $query );
        return $result->result_array();
    }

}

?>