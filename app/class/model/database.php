<?php
    require_once "../app/config/config.php";
    
    Class dbConnect{
        
        private function Connect2Database(){
            try {
                $dbConn = new PDO{"mysql:host='DB_HOST'; dbname='DB_NAME'", 'DB_USER', 'DB_PASS'};
                
            }
            
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

