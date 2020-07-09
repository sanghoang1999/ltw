<?php
    include('database.php');
    class M_user extends database {
        public function getUsers() {

            $sql="SELECT id,username,user_level FROM users where user_level != 1 ";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        
        public function deleteUser($id) {
            $sql="DELETE from users WHERE id = $id";
            $this->setQuery($sql);
            
            return $this->execute();
        }
    }
?>