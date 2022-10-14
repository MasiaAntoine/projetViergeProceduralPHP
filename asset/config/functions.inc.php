<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/assets/config/essentialFunctions.inc.php';

    //Exemple de selection d'une seule donnée
    function select($id) {
        $bdd = connexion_db();
        $stmt = $bdd->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);
        $r = $stmt->fetch();
        $stmt->closeCursor();
        return $r;
    }

    //Exemple de selection de plusieurs données
    function selectAll() {
        $bdd = connexion_db();
        $stmt = $bdd->prepare("SELECT * FROM users");
        $stmt->execute();
        $r = $stmt->fetchAll();
        $stmt->closeCursor();
        return $r;
    }

    //Exemple de modification
    function update($id,$name) {
        $bdd = connexion_db();
        $stmt = $bdd->prepare("UPDATE users SET Name = :name WHERE id = :id");
        $stmt->execute([
            ':id' => $id,
            ':name' => $name
        ]);
        $r = $stmt->rowCount();
        $stmt->closeCursor();
        return $r;
    }

    //Exemple de suppression
    function delete($id) {
        $bdd = connexion_db();
        $stmt = $bdd->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);
        $r = $stmt->rowCount();
        $stmt->closeCursor();
        return $r;
    }

    //Exemple d'ajout
    function add($nom,$prenom,$email,$password) {
        $bdd = connexion_db();
        $stmt = $bdd->prepare("INSERT INTO users(nom,prenom,mail,password) VALUES (:nom,:prenom,:email,:password)");
        $stmt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":password" => $password
        ]);
        $r = $stmt->rowCount();
        $stmt->closeCursor();
        return $r;
    }