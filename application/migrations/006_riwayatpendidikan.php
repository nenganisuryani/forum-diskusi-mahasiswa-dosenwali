<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_riwayatpendidikan extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
        if (!$this->db->table_exists('riwayatpendidikan')) {
            $this->dbforge->add_field( array(
                'id_riwayat' => array(
                    'type'           => 'int',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true
                ),
                'detail_pendidikan' => array(
                    'type'       => 'varchar',
                    'constraint' => 100,
                    'null'       => false,
                    'auto_increment' => true
                ),
            ));
 
            /**
             * add key and create the table
             */ 
            $this->dbforge->add_key('id_riwayat', true);
            $this->dbforge->create_table('riwayatpendidikan');
 
        } //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
        $this->dbforge->drop_table('riwayatpendidikan');
    }
 
 
}
 
/* End of file 006_riwayatpendidikan.php */
/* Location: ./application/migrations/006_riwayatpendidikan.php */