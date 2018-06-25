<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_dosen extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
        if (!$this->db->table_exists('dosen')) {
            $this->dbforge->add_field( array(
                'nip' => array(
                    'type'           => 'varchar',
                    'constraint'     => 9,
                    'unsigned'       => true,
                    'auto_increment' => true
                ),
                'nm_dosen' => array(
                    'type'       => 'varchar',
                    'constraint' => 50,
                    'null'       => false,
                    'auto_increment' => true
                ),
                'phone' => array(
                    'type'       => 'varchar',
                    'constraint' => 20,
                    'null'       => false
                ),
                'email' => array(
                    'type'       => 'varchar',
                    'constraint' => 50,
                    'null'       => false,
                    'auto_increment' => true
                ),
                'id_role' => array(
                    'type'       => 'int',
                    'constraint' => 11,
                    'null'       => false
                ),
            ));
 
            /**
             * add key and create the table
             */ 
            $this->dbforge->add_key('nip', true);
            $this->dbforge->create_table('dosen');
 
        } //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
        $this->dbforge->drop_table('dosen');
    }
 
 
}
 
/* End of file 004_dosen.php */
/* Location: ./application/migrations/004_dosen.php */