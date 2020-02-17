<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace republica;

/**
 * Description of contactos
 *
 * @author Juan Carrillo
 */
class contactos {

// **********************
// ATTRIBUTE DECLARATION
// **********************

    protected $id;
    protected $name;
    protected $empresa;
    protected $telefono;
    protected $email;
    protected $comments;
    protected $created_at;

// **********************
// CONSTRUCTION
// **********************

    function __construct() {
        
    }

// ************************************************************************************
// SELECT dependiendo de las condiones recibidas desde el programa llamado se parsea
//          el archivo json para cargar las comparaciones y tambien los nombres de las variables
//          para una lectura de todos los registros que cumplan la condicion
// *************************************************************************************

    function leetodos_contactos($db) {
        $estado = 'INIT';
        try {
            $sql = 'SELECT * FROM contactos';
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!$registro) {
                $estado = 'OK';
            } else {
                $estado = 'TODOS';
            }
        } catch (PDOException $e) {
            $estado .= $e->getMessage();
        }

        return $estado;
    }

    function genLimpia_contactos() {
        $_SESSION['contactos']['name'] = 'no disponible';
        $_SESSION['contactos']['empresa'] = 'no disponible';
        $_SESSION['contactos']['telefono'] = 'no disponible';
        $_SESSION['contactos']['email'] = 'no disponible';
        $_SESSION['contactos']['comments'] = 'no disponible';
    }

    function adiciona_contactos($db) {
        $estado = 'INIT';
        try {
            $sql = 'INSERT INTO contactos (  name, empresa, telefono, email, comments) VALUES ( :name, :empresa, :telefono, :email, :comments)';
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':name', $_SESSION['contactos']['name']);
            $stmt->bindParam(':empresa', $_SESSION['contactos']['empresa']);
            $stmt->bindParam(':telefono', $_SESSION['contactos']['telefono']);
            $stmt->bindParam(':email', $_SESSION['contactos']['email']);
            $stmt->bindParam(':comments', $_SESSION['contactos']['comments']);
            $stmt->execute();
        } catch (PDOException $e) {
            $estado .= $e->getMessage();
        }
        return $estado;
    }

// **********************
// GETTER METHODS
// **********************


    function getid() {
        return $this->id;
    }

    function getname() {
        return $this->name;
    }

    function getempresa() {
        return $this->empresa;
    }

    function gettelefono() {
        return $this->telefono;
    }

    function getemail() {
        return $this->email;
    }

    function getcomments() {
        return $this->comments;
    }

    function getcreated_at() {
        return $this->created_at;
    }

// **********************
// SETTER METHODS
// **********************


    function setid($val) {
        $this->id = $val;
    }

    function setname($val) {
        $this->name = $val;
    }

    function setempresa($val) {
        $this->empresa = $val;
    }

    function settelefono($val) {
        $this->telefono = $val;
    }

    function setemail($val) {
        $this->email = $val;
    }

    function setcomments($val) {
        $this->comments = $val;
    }

    function setcreated_at($val) {
        $this->created_at = $val;
    }

}
