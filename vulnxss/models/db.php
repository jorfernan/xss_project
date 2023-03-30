<?php

class Database {
    private $pdo;
    
    public function __construct($filename) {
        if (!file_exists($filename)) {
            throw new Exception('Database configuration file not found');
        }
        $config = parse_ini_file($filename);
        $dsn = "{$config['driver']}:host={$config['host']};dbname={$config['database']}";
        $this->pdo = new PDO($dsn, $config['username'], $config['password']);
    }
    
    public function certifyCredentials($username, $password) {
        $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM usuarios WHERE username = :username AND passwd = :password');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    public function getComments($n = null) {
        $query = 'SELECT * FROM comentario';
        if ($n !== null) {
            $query .= ' LIMIT ' . (int) $n;
        }
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception('Error en la obtención de comentarios: ' . $e->getMessage());
        }
    }
    
    public function createComment($username, $comment) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO comentario (username, texto) VALUES (:username, :comment)');
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            throw new Exception('Error en la creación del comentario: ' . $e->getMessage());
        }
    }

    public function createUser($username, $password) {
        try {
            $stmt = $this->pdo->prepare('INSERT INTO usuarios (username, passwd) VALUES (:username, :password)');
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            throw new Exception('Error en la creación del usuario: ' . $e->getMessage());
        }
    }
}

