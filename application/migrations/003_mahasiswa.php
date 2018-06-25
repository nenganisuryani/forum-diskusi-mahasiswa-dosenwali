<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_mahasiswa extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('mahasiswa')) {
    		$this->dbforge->add_field( array(
    			'nrp' => array(
					'type'           => 'varchar',
					'constraint'     => 9,
					'unsigned'       => true,
					'auto_increment' => true
    			),
    			'nm_mahasiswa' => array(
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
                'id_kelas' => array(
                    'type'       => 'int',
                    'constraint' => 11,
                    'null'       => false
                ),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('nrp', true);
    		$this->dbforge->create_table('mahasiswa');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('mahasiswa');
    }
 
 
}
 
/* End of file 003_mahasiswa.php */
/* Location: ./application/migrations/003_mahasiswa.php */