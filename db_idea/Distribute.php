<?php

    require_once  "Do_sql.php";

    class Distribute extends Do_sql
    {

        protected $data = [];
        protected $action;
        protected $tbl;

        public function __construct($arr, $act)
        {
            $this->data = $arr;
            $this->action = $act;

            $this->infos();
        }

        public function conn()
        {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $email = $this->data['email'];

            $db = substr($email, 0, 1);
            $this->tbl = $db . substr($email, 1, 1);

            return $conn = new mysqli($host, $user, $pass, $db);
        }

        public function infos()
        {
            $arr = array();
            foreach($this->data as $key => $array) {
                array_push($arr, $key);
            }
            $key_result = implode("`,`",$arr);

            $vals = implode("','",$this->data);
            $val_result = substr_replace($vals, "'", 0, 0);
            $val_result = $val_result .= "'";

            $this->distribute($key_result, $val_result, $this->action);
        }

        public function distribute($keys, $values, $action)
        {
            switch($action) {
                case 'insert' : $this->insertion($keys, $values);
                    break;
                case 'delete' : $this->deletion($keys, $values);
                    break;
                case 'select' : $this->selection($keys, $values);
                    break;
                case 'update' : $this->updation($keys, $values, $this->data);
                    break;
            }
        }

    }
    
    $data = [
        'firstname' => "lakale",
        'lastname' => "pealeyan",
        'email' => "polale@gmail.com"
    ];

    $new_data = [
        'email' => "ukale@gmail.com"
    ];

    $upd_data = [
        'firstname' => "lekoeoapakel",
        'lastname' => "jsonyan",
        'email' => "polale@gmail.com"
    ];

//    $obj = new Distribute($upd_data, 'update');