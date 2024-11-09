<?php

if ( !defined( 'BASEPATH' ) )
exit( 'No direct script access allowed' );

class ClientsM extends CI_Model {

    public function getClients() {
        $query = 'SELECT * FROM clients where 1 ';
        $result = $this->db->query( $query );
        return $result->result_array();
    }

}

?>