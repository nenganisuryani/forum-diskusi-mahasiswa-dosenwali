<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_headdiskus extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
        if (!$this->db->table_exists('headdiskus')) {
            $this->dbforge->add_field( array(
                'id_hdiskus' => array(
                    'type'           => 'int',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true
                ),
                'topik' => array(
                    'type'       => 'varchar',
                    'constraint' => 50,
                    'null'       => false,
                    'auto_increment' => true
                ),
                'deskripsi' => array(
                    'type'       => 'varchar',
                    'constraint' => 500,
                    'null'       => false,
                    'auto_increment' => true
                ),
                'tgl' => array(
                    'type'       => 'date',
                    'null'       => false,
                ),
                'nip_dosen' => array(
                    'type'       => 'varchar',
                    'constraint' => 9,
                    'null'       => false,
                    'auto_increment' => true
                ),
            ));
 
            /**
             * add key and create the table
             */ 
            $this->dbforge->add_key('id_hdiskus', true);
            $this->dbforge->create_table('headdiskus');
 
        } //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
        $this->dbforge->drop_table('headdiskus');
    }
 
 
}
 
/* End of file 007_headdiskus.php */
/* Location: ./application/migrations/007_headdiskus.php */