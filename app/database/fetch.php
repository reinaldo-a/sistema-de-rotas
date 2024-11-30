<?php 

    function all($table, $fields = "*") {
        try {
            $connect = connect();

            $query = $connect->query("SELECT $fields FROM {$table}");
            return $query->fetchAll();
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
    }

    function findByTable($table, $key, $value, $fields = '*') {
        try {

            $connect = connect();

            $stmt = $connect->prepare("SELECT $fields FROM $table WHERE $key = :$key");

            $stmt->bindParam(":$key", $value);

            $stmt->execute();

            return $stmt->fetchAll()[0];

        } catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
    }