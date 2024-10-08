<?php

require_once("..//services/connectionDB.php");
class modelCategories{

    //criar uma nova categoria 
    public function save($data){
        try {
            $category_name = htmlspecialchars($data["category_name"], ENT_NOQUOTES);
            $image = htmlspecialchars($data["image"], ENT_NOQUOTES);

            $conn = connectionDB::connect();
            $save = $conn->prepare("INSERT INTO tblCategories(category_name, image, id_status, created_at) VALUES (:category_name, :image, 2, NOW())");
            $save->bindParam(":category_name", $category_name);
            $save->bindParam(":image", $image);
            $save->execute();

            return true;
            
        } catch (PDOException $e) {
            return false;
        }
    }

    //listar todas as categorias
    public function listAll(){
        try {
            $conn = connectionDB::connect();
            $list = $conn->query("SELECT * FROM tblCategories");
            $result = $list->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (\PDOException $e) {
            return false;
        }
    }

    // listar categorias por id
    public function searchById($id){
        try {

            $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

            $conn = connectionDB::connect();
            $search = $conn->prepare("SELECT * FROM tblCategories WHERE id_category = :id");
            $search->bindParam(":id", $id);
            $search->execute();
            $result = $search->fetch(PDO::FETCH_ASSOC);

            return $result;


        } catch (PDOException $e) {
            return false;
        }
    }

    //Atualizar categorias por id
    public function update($id, $data) {
        try {

            $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
            $category_name = htmlspecialchars($data["category_name"], ENT_NOQUOTES);
            $image = htmlspecialchars($data["image"], ENT_NOQUOTES);
            $id_status = filter_var($data["id_status"], FILTER_SANITIZE_NUMBER_INT);

            $conn = connectionDB::connect();
            $update = $conn->prepare("UPDATE tblCategories SET category_name = :category_name, image = :image, id_status = :id_status, updated_at = NOW() WHERE id_category = :id_category");
            $update->bindParam(":category_name", $category_name);
            $update->bindParam(":image", $image);
            $update->bindParam(":id_status", $id_status);
            $update->bindParam(":id_category", $id);
            $update->execute();

            return true;

        } catch(PDOException $e) {
            return false;
        }
    }


    

    //deletar categoria por ID
    public function delete($id){
        try {
            $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

            $conn = connectionDB::connect();
            $delete = $conn->prepare("DELETE FROM tblCategories WHERE id_category = :id");
            $delete->bindParam(":id", $id);
            $delete->execute();

            return true;

        } catch (PDOException $e) {
            
            return false;
        }
    }


}

?>