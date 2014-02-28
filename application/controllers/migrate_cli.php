<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 9/26/13
 * Time: 10:22
 * To change this template use File | Settings | File Templates.
 */

class Cli extends CI_Controller {
    private $args = array(); // Contains CLI arguments, except controller name and its method

    public function __construct() {
        parent::__construct();
        if(!$this->input->is_cli_request()) {
            show_404();
        }
        $this->output->enable_profiler(FALSE);
        $this->args = array_slice($_SERVER['argv'], 3);

    }

    public function migration() {
        if ( !is_array($this->args) || empty($this->args)) {
            print ( "Usage: php index.php cli migration [OPTIONS]\n\n" );
            print ( "Options are:\n" );
            print ( "-l, --last\t\tupdate database to the latest version\n" );
            print ( "-c, --current\t\t show current versions of database and code\n" );
            exit;
        }
        for ( $i=0; $i<count($this->args); $i++ ) {
            $arg = $this->args[$i];
            if ( $arg=="-l" || $arg=="--last" ) {
                print "Updating your database to the latest version..\n";
                if (!$this->migration->current()) {
                    print $this->migration->error_string().'\n';
                    exit;
                }
                else print "Update complete!\n";
            }
            elseif ( $arg=="-c" || $arg=="--current" ) {
                print 'Current code version is:\t'. $this->migration->get_fs_version().'\n';
                print 'Current database version is:\t'.$this->migration->get_db_version().'\n';
            }
        }
    }
}