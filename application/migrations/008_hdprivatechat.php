<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @author Neng Ani Suryani <nngnsryn@gmail.com>
 * @since 0.1
 * @category Migrations
 */
class Migration_hdprivatechat extends CI_Migration
{
    /**
     * Lets create user table
     */
 
    public function up()
    {
    	if (!$this->db->table_exists('hdprivatechat')) {
    		$this->dbforge->add_field( array(
    			'id_private' => array(
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
    			'tanggal' => array(
					'type'       => 'date',
					'null'       => false
    			),
    			'nip_dosen' => array(
					'type'       => 'varchar',
					'constraint' => 9,
					'null'       => false,
                    'auto_increment' => true
    			),
                'nrp_mahasiswa' => array(
                    'type'       => 'varchar',
                    'constraint' => 9,
                    'null'       => false,
                    'auto_increment' => true
                ),
                'approve' => array(
                    'type'       => 'int',
                    'constraint' => 5,
                ),
    		));
 
    		/**
    		 * add key and create the table
    		 */	
    		$this->dbforge->add_key('id_private', true);
    		$this->dbforge->create_table('hdprivatechat');
 
    	} //else
    }
 
    /**
     * To drop the table
     */
    
    public function down()
    {
    	$this->dbforge->drop_table('hdprivatechat');
    }
 
 
}
 
/* End of file 008_hdprivatechat.php */
/* Location: ./application/migrations/008_hdprivatechat.php */