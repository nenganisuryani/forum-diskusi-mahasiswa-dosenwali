<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_login extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('login')) {
    		$this->dbforge->add_field( array(
    			'id_log' => array(
					'type'           => 'int',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true
    			),
    			'identity' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false
    			),
    			'username' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false
    			),
    			'pass' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false
    			),
                'id_role' => array(
                    'type'       => 'int',
                    'constraint' => 50,
                ),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('id_log', true);
    		$this->dbforge->create_table('login');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('login');
    }
 
 
}
 
/* End of file 002_add_user.php */
/* Location: ./application/migrations/002_add_user.php */