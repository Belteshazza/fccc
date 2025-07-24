<?php
/**
 * Created by Eddy Godwin Udom
 * Date: 08/04/2018
 * Time: 8:40 AM
 * Version: Symfony 4
 */

namespace App\Model\DatabaseBackup;


use mysqli;

class DatabaseBackup
{

    protected $dbusername;
    protected $dbpassword;
    protected $dbname;

    public function __construct()
    {
        $db_url = $_ENV['DATABASE_URL'];

        $db_url = mb_substr($db_url,8);

        // get and set db username
        $name_stop = strpos($db_url,':');

        $this->dbusername = mb_substr($db_url,0,$name_stop);

        $count_name = $name_stop+1;


        // trim db url to remove dbusernamename
        $db_url = mb_substr($db_url,$count_name);


        // get and set db password
        $pw_stop = strpos($db_url,'@');

        $this->dbpassword = mb_substr($db_url,0,$pw_stop);

        $count_pw = $pw_stop + 1;

        // trim db url to remove dbpassword
        $db_url = mb_substr($db_url,$count_pw);


        // get and set dbname
        $localhost_stop = (strpos($db_url,'/') + 1);

        $this->dbname = mb_substr($db_url,$localhost_stop);

    }


    public function export()
    {
        $options = array(
            'db_host'=> 'localhost',  //mysql host
            'db_uname' => $this->dbusername,  //user
            'db_password' => $this->dbpassword, //pass
            'db_to_backup' => $this->dbname, //database name
            'db_backup_path' => 'backup', //where to backup
            'db_exclude_tables' => array() //tables to exclude
        );

        $this->backup_mysql_database($options);

    }


    public function get_details()
    {
        $options = array(
            'db_host'=> 'localhost',  //mysql host
            'db_uname' => $this->dbusername,  //user
            'db_password' => $this->dbpassword, //pass
            'db_to_backup' => $this->dbname, //database name
           
        );

        return $options;

    }


    public function backup_mysql_database($options){
        $mtables = array(); $contents = "-- Database: `".$options['db_to_backup']."` --\n";

        $mysqli = new mysqli($options['db_host'], $options['db_uname'], $options['db_password'], $options['db_to_backup']);
        if ($mysqli->connect_error) {
            die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }

        $results = $mysqli->query("SHOW TABLES");

        while($row = $results->fetch_array()){
            if (!in_array($row[0], $options['db_exclude_tables'])){
                $mtables[] = $row[0];
            }
        }

        foreach($mtables as $table){
            $contents .= "-- Table `".$table."` --\n";

            $results = $mysqli->query("SHOW CREATE TABLE ".$table);
            while($row = $results->fetch_array()){
                $contents .= $row[1].";\n\n";
            }

            $results = $mysqli->query("SELECT * FROM ".$table);
            $row_count = $results->num_rows;
            $fields = $results->fetch_fields();
            $fields_count = count($fields);

            $insert_head = "INSERT INTO `".$table."` (";
            for($i=0; $i < $fields_count; $i++){
                $insert_head  .= "`".$fields[$i]->name."`";
                if($i < $fields_count-1){
                    $insert_head  .= ', ';
                }
            }
            $insert_head .=  ")";
            $insert_head .= " VALUES\n";

            if($row_count>0){
                $r = 0;
                while($row = $results->fetch_array()){
                    if(($r % 400)  == 0){
                        $contents .= $insert_head;
                    }
                    $contents .= "(";
                    for($i=0; $i < $fields_count; $i++){
                        $row_content =  str_replace("\n","\\n",$mysqli->real_escape_string($row[$i]));

                        switch($fields[$i]->type){
                            case 8: case 3:
                            $contents .=  $row_content;
                            break;
                            default:
                                $contents .= "'". $row_content ."'";
                        }
                        if($i < $fields_count-1){
                            $contents  .= ', ';
                        }
                    }
                    if(($r+1) == $row_count || ($r % 400) == 399){
                        $contents .= ");\n\n";
                    }else{
                        $contents .= "),\n";
                    }
                    $r++;
                }
            }
        }

        if (!is_dir ( $options['db_backup_path'] )) {
            mkdir ( $options['db_backup_path'], 0777, true );
        }

        $backup_file_name = $options['db_to_backup'] . " sql-backup- " . date( "d-m-Y--h-i-s").".sql";

        $fp = fopen($options['db_backup_path'] . '/' . $backup_file_name ,'w+');
        if (($result = fwrite($fp, $contents))) {
            //echo "Backup file created '--$backup_file_name' ($result)";

        }
        fclose($fp);


        $file = 'backup/'.$backup_file_name;

        if(!$file){ // file does not exist
            die('file not found');
        } else {
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");

            // read the file from disk
            readfile($file);
        }


        return $backup_file_name;
    }

}