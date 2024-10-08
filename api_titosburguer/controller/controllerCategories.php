<?php

class controllerCategories{
    //  Criação de uma nova categoria
    public function save($data){
        try{

            $modelCategories = new modelCategories();
            return $modelCategories->save($data);

        }catch(PDOException $e){
            return false;

        }
    }

    public function listAll(){
        try{

        $modelCategories = new modelCategories();
            return$modelCategories->listAll();


        }catch(PDOException $e){
            return false;
        }
    }

    public function searchById($id){
        try{

        $modelCategories = new modelCategories();
            return$modelCategories->searchById($id);

        }catch(PDOException $e){
            return false;
        }
    }

    public function update($id, $data){
        try{

        $modelCategories = new modelCategories();
            return$modelCategories->update($id, $data);


        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){

        try{

        $modelCategories = new modelCategories();
            return$modelCategories->delete($id);


        }catch(PDOException $e){
            return false;
        }
    }
}


?>