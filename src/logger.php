<?php

/**
 * @author  Enes Korkut
 * @version 1.0
 * 
 * Description:
 *  PHP Logger with MySQL
**/

class Logger {

    private $entry;

    public function __construct($entry = null) {
        $this->entry = $entry;
    }

    public function showType ($type) {
        if ($type == 0) {
            return '[INFO]';
        } elseif ($type == 1) {
            return '[ERROR]';
        } else {
            return 'ERROR!';
        }
    }

    public function insertLog ($accountID, $type, $message) {
        global $db;
        $insertLog = $db->prepare("INSERT INTO Logs (accountID, entry, type, message, creationDate) VALUES (?, ?, ?, ?, ?)");
        $insertLog->execute(array($accountID, $this->entry, $type, $message, date("Y-m-d H:i:s")));
    }

}
?>