<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_roleuser extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('roleuser')) {
    		$this->dbforge->add_field( array(
    			'id_role' => array(
					'type'           => 'int',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true
    			),
    			'nm_role' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false
    			),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('id_role', true);
    		$this->dbforge->create_table('roleuser');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('roleuser');
    }
 
 
}
 
/* End of file 002_roleuser.php */
/* Location: ./application/migrations/002_roleuser.php */