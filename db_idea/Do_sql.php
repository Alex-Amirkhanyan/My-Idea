<?php

    class Do_sql
    {

        public function insertion($keys, $values)
        {
            $conn = $this->conn();

            $req = "INSERT INTO `$this->tbl` (`$keys`) VALUES($values)";

            mysqli_query($conn, $req);
        }

        public function deletion($keys, $values)
        {
            $conn = $this->conn();

            $req = "DELETE FROM `$this->tbl` WHERE (`$keys`) = ($values)";

            mysqli_query($conn, $req);
        }

        public function selection($keys, $values)
        {
            $conn = $this->conn();

            $req = "SELECT * FROM `$this->tbl` WHERE (`$keys`) = ($values)";

            $res = mysqli_query($conn, $req);
            var_dump($res);
        }

        public function updation($keys, $values, $data)
        {
            $conn = $this->conn();

            $keys = explode(",", $keys);
            $values = explode(",", $values);

            $eml = $keys[2] . "`";
            $req = "SELECT * FROM `$this->tbl` WHERE ($eml) = ($values[2])";

            $res = mysqli_query($conn, $req);
            $arr = $res->fetch_all();
            $result = $arr[0];


            $keys[0] = substr_replace($keys[0], "`", 0, 0);
            $keys[count($keys)-1] = substr_replace($keys[count($keys)-1], "`", -1, 0);

            for ($i = 0; $i < count($keys); $i++) {
                $request = "UPDATE `$this->tbl` SET $keys[$i] = $values[$i] WHERE `id` = $result[0]";
                mysqli_query($conn, $request);
            }

        }
    }



