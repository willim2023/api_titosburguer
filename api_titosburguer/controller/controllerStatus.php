<?php

class controllerStatus{
    public function getAll(){
        try{

            $modelStatus = new modelStatus();
            return $modelStatus->getAll();

        }catch(PDOException $e){
            return false;
        }
    }

    public function getById($idStatus){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->getById($idStatus);

        }catch(PDOException $e){
            return false;
        }
    }

    public function save($data){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->save($data);

        }catch(PDOException $e){
            return false;
        }
    }

    public function update($idStatus, $data){
        try{
            $modelStatus = new modelStatus();
            return $modelStatus->update($idStatus, $data);

        }catch(PDOException){

        }
    }

    public function delete($idStatus){
        try{

            $modelStatus = new modelStatus();
            return $modelStatus->delete($idStatus);

        }catch(PDOException $e){
            return false;
        }
    }
}


?>