<?php

/**
 * Classe feita para manipulação do objeto Pessoa
 * feita automaticamente com programa gerador de software inventado por
 * @author Jefferson Uchôa Ponte <j.pontee@gmail.com>
 */
class PessoaController
{

    private $post;

    private $view;

    private $dao;

    public function PessoaController()
    {
        $this->view = new PessoaView();
        $this->dao = new PessoaDAO();
    }

    public function cadastrar()
    {
        $this->view->mostraFormInserir();
        if (! isset($_POST['enviar_pessoa'])) {
            return;
        }
        if (! (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['email']) && isset($_POST['whatsapp']) && isset($_POST['pai']) && isset($_POST['mae']) && isset($_POST['avopaterno']) && isset($_POST['avopaterna']) && isset($_POST['avomaterno']) && isset($_POST['avomaterna']) && isset($_POST['bisavopaterno']) && isset($_POST['bisavopaterna']) && isset($_POST['bisavomaterno']) && isset($_POST['bisavomaterna']))) {
            echo "Incompleto";
            return;
        }
        
        $arquivo_temp = $_FILES['linkfoto']['tmp_name'];
        $arquivo_nome = $_FILES['linkfoto']['name'];
        
        $array_arquivo_nome = explode(".", $arquivo_nome);
        $extensao = end($array_arquivo_nome);
        $novonome = uniqid() . '.' . $extensao;
        if(strtolower($extensao) == 'php'){
            echo "Extensão Proibida.";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=index.php?pagina=pessoa">';
            return;
        }
        
        if (! move_uploaded_file($arquivo_temp, 'upload/' . $novonome)) {
            echo "Erro ao tentar inserir arquivo";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=index.php?pagina=pessoa">';
            return;
        }
        
        $pessoa = new Pessoa();
        $pessoa->setNome($_POST['nome']);
        $pessoa->setEndereco($_POST['endereco']);
        $pessoa->setEmail($_POST['email']);
        $pessoa->setWhatsapp($_POST['whatsapp']);
        $pessoa->setPai($_POST['pai']);
        $pessoa->setMae($_POST['mae']);
        $pessoa->setAvopaterno($_POST['avopaterno']);
        $pessoa->setAvopaterna($_POST['avopaterna']);
        $pessoa->setAvomaterno($_POST['avomaterno']);
        $pessoa->setAvomaterna($_POST['avomaterna']);
        $pessoa->setBisavopaterno($_POST['bisavopaterno']);
        $pessoa->setBisavopaterna($_POST['bisavopaterna']);
        $pessoa->setBisavomaterno($_POST['bisavomaterno']);
        $pessoa->setBisavomaterna($_POST['bisavomaterna']);
		$pessoa->setNascimento ( $_POST ['nascimento'] );		
		$pessoa->setDatacasamento ( $_POST['datacasamento'] );		
		$pessoa->setNomeconjuge ( $_POST['nomeconjuge'] );	
		
        $pessoa->setLinkfoto($novonome);
        if ($this->dao->inserir($pessoa)) {
            $sessao = new Sessao();
            $sessao->criaSessao($this->dao->getConexao()
                ->lastInsertId(), Sessao::NIVEL_COMUM, $pessoa->getNome());
            echo "Sucesso";
        } else {
            echo "Fracasso";
        }
        
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=index.php?pagina=pessoa">';
    }

    public function listarJSON()
    {
        $lista = $this->dao->retornaLista();
        $listagem['lista'] = array();
        foreach ($lista as $linha) {
            $listagem['lista'][] = array(
                'id' => $linha->getId(),
                'nome' => $linha->getNome(),
                'endereco' => $linha->getEndereco(),
                'email' => $linha->getEmail(),
                'whatsapp' => $linha->getWhatsapp(),
                'pai' => $linha->getPai(),
                'mae' => $linha->getMae(),
                'avopaterno' => $linha->getAvopaterno(),
                'avopaterna' => $linha->getAvopaterna(),
                'avomaterno' => $linha->getAvomaterno(),
                'avomaterna' => $linha->getAvomaterna(),
                'bisavopaterno' => $linha->getBisavopaterno(),
                'bisavopaterna' => $linha->getBisavopaterna(),
                'bisavomaterno' => $linha->getBisavomaterno(),
                'bisavomaterna' => $linha->getBisavomaterna(),
				'linkfoto' => $linha->getLinkfoto (), 
				'nascimento' => $linha->getNascimento (), 
				'datacasamento' => $linha->getDatacasamento (), 
				'nomeconjuge' => $linha->getNomeconjuge ()
            
            );
        }
        echo json_encode($listagem);
    }

    public function deletar(){
        if(!isset($_GET['deletar'])){
            return;
        }
        echo "Tem certeza que deseja deletar este cadastro? ";
        echo '<br><a href="?deletar='.$_GET['deletar'].'&certeza=1">Tenho certeza!</a>';
        if(isset($_GET['certeza'])){
            $pessoa = new Pessoa();
            $pessoa->setId(intval($_GET['deletar']));
            if($this->dao->excluir($pessoa)){
                echo "<br>Cadastro deletado com sucesso";
            }else{
                echo "<br>Erro ao tentar deletar";
            }
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=index.php?pagina=pessoa">';
        }
        
    }
    public function listar()
    {
        
        $this->deletar();
        $lista = $this->dao->retornaLista();
        $this->view->mostraLista($lista);
    }

    public function ficha(Pessoa $pessoa)
    {
        $this->dao->selecionar($pessoa);
        $this->view->mostrarFicha($pessoa);
    }
}
?>