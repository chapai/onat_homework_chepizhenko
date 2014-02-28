<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 9/26/13
 * Time: 9:36
 * To change this template use File | Settings | File Templates.
 */
class CH_Migration extends CI_Migration
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Wrapper function for the protected _get_version.
     * Get's the database current version
     *
     * @access	public
     * @return	integer	Current DB Migration version
     */
    public function get_db_version() {
        return parent::_get_version();
    }

    /**
     * Retrieves current file system version
     *
     * @access	public
     * @return	integer	Current file system Migration version
     */
    public function get_fs_version() {
        return $this->_migration_version;
    }
}