<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_detailprivatechat extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('detailprivatechat')) {
    		$this->dbforge->add_field( array(
    			'id_detprivate' => array(
					'type'           => 'int',
					'constraint'     => 11,
					'unsigned'       => true,
					'auto_increment' => true
    			),
    			'tanggal' => array(
					'type'       => 'date',
					'null'       => false
    			),
    			'sender' => array(
					'type'       => 'varchar',
					'constraint' => 50,
					'null'       => false,
                    'auto_increment' => true
    			),
                'pesan' => array(
                    'type'       => 'text',
                    'constraint' => 500,
                    'null'       => false,
                    'auto_increment' => true
                ),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('id_detprivate', true);
    		$this->dbforge->create_table('detailprivatechat');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('detailprivatechat');
    }
 
 
}
 
/* End of file 009_detailprivatechat.php */
/* Location: ./application/migrations/009_detailprivatechat.php */