<?php

require('conexao.php');

class User extends conexao
{
    // Trazer um único usuário especifico


    public function getUser(string $value, string $field = "id"): array
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM users WHERE $field = :value"
        );

        $query->bindParam(':value', $value, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user ? $user : [];
    }


    // Traremos apenas dados do usuário AUTENTICADO

    public function getMe()
    {
        $query = $this->pdo->prepare(
            "SELECT * FROM users WHERE id = :value"
        );

        $query->bindParam(':value', $_SESSION['id'], PDO::PARAM_STR);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }


    // Criaremos um novo usuário baseado no registro


    public function postUser(array $data): bool
    {
        try {
            $query = $this->pdo->prepare(
                "INSERT INTO users VALUES (null,:name,:email,:password)"
            );

            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

            $query->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $query->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $query->bindParam(':password', $data['password'], PDO::PARAM_STR);

            return $query->execute();
        } catch (PDOException $exception) {
            echo "eae deu merda";
            die();
        }
    }
    //update
    public function updateUser(array $data): bool
    {
        try {
            $query = $this->pdo->prepare(
                "UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id"
            );

            $data['senha'] = password_hash($data['senha'], PASSWORD_BCRYPT);

            $query->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $query->bindParam(':ra', $data['ra'], PDO::PARAM_STR);
            $query->bindParam(':senha', $data['senha'], PDO::PARAM_STR);
            $query->bindParam(':id', $data['id'], PDO::PARAM_INT);

            return $query->execute();
        } catch (PDOException $exception) {
            echo "erro";
            die();
        }
    }

    //delete

    public function deleteUser(int $id): bool
    {
        try {
            $query = $this->pdo->prepare(
                "DELETE FROM users WHERE id=:id"
            );

            $query->bindParam(':id', $id, PDO::PARAM_INT);

            return $query->execute();
        } catch (PDOException $exception) {
            echo "erro";
            die();
        }
    }
}
