<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User: Chapai
 * Date: 9/26/13
 * Time: 10:30
 */

class Migration_Add_messages extends MY_Migration {
    public function up()
    {
        $this->db->query("
            CREATE TABLE IF NOT EXISTS articles (
                id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                content VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
            ) ENGINE=MyISAM;");
    }

    public function down()
    {
        $this->db->query("DROP TABLE IF EXISTS articles");
    }
}