<?php
    Class Usuario
    {
        private $pdo;

        public $msgErro = "";

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;

            try
            {
                $pdo = new PDO("mysql:dbname=".$nome, $usuario, $senha);
            }
            catch(PDOexception $erro)
            {
                $msgErro = $erro->getMessage();
            }
        }

        public function cadastrar($nome, $telefone, $email, $senha)
        {

            global $pdo;
            
            //verificar se o email já está cadastrado
            $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :m");
            // :arimura siginfica que colocamos um apelido na variável email do PHP
            $sql->bindValue(":m",$email);
            $sql->execute();

            //verificar se existe o email cadastrado
            if($sql->rowCount() > 0)
            {
                return false;
            }
            else
            {
                //cadastrar usuário
                $sql = $pdo->prepare("INSERT INTO usuario (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $sql->bindValue(":n", $nome); 
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", $senha);
                $sql->execute();
                return false;
            }

        }



    }


?>