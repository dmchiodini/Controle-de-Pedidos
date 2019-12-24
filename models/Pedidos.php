<?php
class Pedidos extends model {

    //pegar todos os dados no banco.
    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM pedidos";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    //adicionar um novo pedido no banco.
    public function add($nf, $produto, $preco) {
        if($this->nfExists($nf) == false) {

            $sql = "INSERT INTO pedidos (nf, produto, preco) VALUES (:nf, :produto, :preco)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":nf", $nf);
            $sql->bindValue("produto", $produto);
            $sql->bindValue("preco", $preco);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    //pegar informações de um único pedido através do id.
    public function get($id) {
        $array = array();

        $sql = "SELECT * FROM pedidos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
            return $array;
    }

    //editar pedido no banco através do id.
    public function edit($nf, $produto, $preco, $id) {
        $sql = "UPDATE pedidos SET nf = :nf, produto = :produto, preco = :preco WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nf", $nf);
        $sql->bindValue(":produto", $produto);
        $sql->bindValue(":preco", $preco);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    //deletar pedido no banco através do id.
    public function del($id) {
        $sql = "DELETE FROM pedidos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    //verificar se nota fiscal já existe no banco.
    private function nfExists($nf) {
        $sql = "SELECT * FROM pedidos WHERE nf = :nf";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":nf", $nf);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


}