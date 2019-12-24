<?php
class pedidosController extends controller
{

    public function index()
    {
    }

    //funcao para adicionar.
    public function add()
    {
        $dados = array();

        if (!empty($_POST['nf'])) {
            $nf = addslashes($_POST['nf']);
            $produto = addslashes($_POST['produto']);
            $preco = number_format($_POST['preco'],2,".","");

            $pedido = new Pedidos();
            if ($pedido->add($nf, $produto, $preco)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . 'pedidos/add');
            }
        }

        $this->loadTemplate('add', $dados);
    }

    //funcao para editar.
    public function edit($id)
    {
        $dados = array();

        if (!empty($id)) {
            $pedido = new Pedidos();


            if(!empty($_POST['nf'])) {
                $nf = $_POST['nf'];
                $produto = $_POST['produto'];
                $preco = str_replace(",",".",$_POST['preco']);

                $pedido->edit($nf, $produto, $preco, $id);
            }else {
                $dados['info'] = $pedido->get($id);

                if(isset($dados['info']['id'])) {
                    $this->loadTemplate('edit', $dados);
                    exit;
                }
            }
         }

        header("Location: ".BASE_URL);
    }

        //funcao para excluir.
        public function delete($id)
        {
            if(!empty($id)) {
                $pedido = new Pedidos();
                $pedido->del($id);

                header("Location: ".BASE_URL);
            }
        }


}