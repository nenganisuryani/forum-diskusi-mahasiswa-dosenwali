<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_kelas extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('kelas')) {
    		$this->dbforge->add_field( array(
    			'id_kelas' => array(
					'type'           => 'int',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true
    			),
    			'nm_kelas' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false,
                    'auto_increment' => true
    			),
                'wali_dosen' => array(
                    'type'       => 'varchar',
                    'constraint' => 50,
                    'null'       => false,
                    'auto_increment' => true
                ),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('id_kelas', true);
    		$this->dbforge->create_table('kelas');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('kelas');
    }
 
 
}
 
/* End of file 004_kelas.php */
/* Location: ./application/migrations/004_kelas.php */