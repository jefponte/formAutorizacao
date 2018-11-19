<?php
		
/**
 * Classe feita para manipulação do objeto Pessoa
 * feita automaticamente com programa gerador de software inventado por
 * @author Jefferson Uchôa Ponte
 *
 *
 */
class PessoaDAO extends DAO {
	
	
	public function inserir(Pessoa $pessoa){
		
		$sql = "INSERT INTO pessoa(nome, endereco, email, whatsapp, pai, mae, avopaterno, avopaterna, avomaterno, avomaterna, bisavopaterno, bisavopaterna, bisavomaterno, bisavomaterna, linkfoto)
				VALUES(:nome, :endereco, :email, :whatsapp, :pai, :mae, :avopaterno, :avopaterna, :avomaterno, :avomaterna, :bisavopaterno, :bisavopaterna, :bisavomaterno, :bisavomaterna, :linkfoto)";
			$nome = $pessoa->getNome();
			$endereco = $pessoa->getEndereco();
			$email = $pessoa->getEmail();
			$whatsapp = $pessoa->getWhatsapp();
			$pai = $pessoa->getPai();
			$mae = $pessoa->getMae();
			$avopaterno = $pessoa->getAvopaterno();
			$avopaterna = $pessoa->getAvopaterna();
			$avomaterno = $pessoa->getAvomaterno();
			$avomaterna = $pessoa->getAvomaterna();
			$bisavopaterno = $pessoa->getBisavopaterno();
			$bisavopaterna = $pessoa->getBisavopaterna();
			$bisavomaterno = $pessoa->getBisavomaterno();
			$bisavomaterna = $pessoa->getBisavomaterna();
			$linkfoto = $pessoa->getLinkfoto();
		try {
			$db = $this->getConexao();
			$stmt = $db->prepare($sql);		
			$stmt->bindParam("nome", $nome, PDO::PARAM_STR);		
			$stmt->bindParam("endereco", $endereco, PDO::PARAM_STR);		
			$stmt->bindParam("email", $email, PDO::PARAM_STR);		
			$stmt->bindParam("whatsapp", $whatsapp, PDO::PARAM_STR);		
			$stmt->bindParam("pai", $pai, PDO::PARAM_STR);		
			$stmt->bindParam("mae", $mae, PDO::PARAM_STR);		
			$stmt->bindParam("avopaterno", $avopaterno, PDO::PARAM_STR);		
			$stmt->bindParam("avopaterna", $avopaterna, PDO::PARAM_STR);		
			$stmt->bindParam("avomaterno", $avomaterno, PDO::PARAM_STR);		
			$stmt->bindParam("avomaterna", $avomaterna, PDO::PARAM_STR);		
			$stmt->bindParam("bisavopaterno", $bisavopaterno, PDO::PARAM_STR);		
			$stmt->bindParam("bisavopaterna", $bisavopaterna, PDO::PARAM_STR);		
			$stmt->bindParam("bisavomaterno", $bisavomaterno, PDO::PARAM_STR);		
			$stmt->bindParam("bisavomaterna", $bisavomaterna, PDO::PARAM_STR);		
			$stmt->bindParam("linkfoto", $linkfoto, PDO::PARAM_STR);
			return $stmt->execute();
		} catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}
	public function excluir(Pessoa $pessoa){
		$id = $pessoa->getId();
		$sql = "DELETE FROM pessoa WHERE id = :id";
		
		try {
			$db = $this->getConexao();
			$stmt = $db->prepare($sql);
			$stmt->bindParam("id", $id, PDO::PARAM_INT);
			return $stmt->execute();
	
		} catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}
	public function alterar(){
		//Aqui vc escreve o codigo pra alterar pessoa
	
	}
	
	public function retornaLista() {
		$lista = array ();
		$sql = "SELECT * FROM pessoa LIMIT 1000";
		$result = $this->getConexao ()->query ( $sql );
	
		foreach ( $result as $linha ) {
				
			$pessoa = new Pessoa();

			$pessoa->setId( $linha ['id'] );
			$pessoa->setNome( $linha ['nome'] );
			$pessoa->setEndereco( $linha ['endereco'] );
			$pessoa->setEmail( $linha ['email'] );
			$pessoa->setWhatsapp( $linha ['whatsapp'] );
			$pessoa->setPai( $linha ['pai'] );
			$pessoa->setMae( $linha ['mae'] );
			$pessoa->setAvopaterno( $linha ['avopaterno'] );
			$pessoa->setAvopaterna( $linha ['avopaterna'] );
			$pessoa->setAvomaterno( $linha ['avomaterno'] );
			$pessoa->setAvomaterna( $linha ['avomaterna'] );
			$pessoa->setBisavopaterno( $linha ['bisavopaterno'] );
			$pessoa->setBisavopaterna( $linha ['bisavopaterna'] );
			$pessoa->setBisavomaterno( $linha ['bisavomaterno'] );
			$pessoa->setBisavomaterna( $linha ['bisavomaterna'] );
			$pessoa->setLinkfoto( $linha ['linkfoto'] );
			$lista [] = $pessoa;
		}
		return $lista;
	}			
				
	public function selecionar(Pessoa $pessoa){
	    
	    $id = $pessoa->getId();
	    $sql = "SELECT * FROM pessoa WHERE id = $id LIMIT 1";
	    $result = $this->getConexao ()->query ( $sql );
	    
	    foreach ( $result as $linha ) {
	        
	        $pessoa->setNome( $linha ['nome'] );
	        $pessoa->setEndereco( $linha ['endereco'] );
	        $pessoa->setEmail( $linha ['email'] );
	        $pessoa->setWhatsapp( $linha ['whatsapp'] );
	        $pessoa->setPai( $linha ['pai'] );
	        $pessoa->setMae( $linha ['mae'] );
	        $pessoa->setAvopaterno( $linha ['avopaterno'] );
	        $pessoa->setAvopaterna( $linha ['avopaterna'] );
	        $pessoa->setAvomaterno( $linha ['avomaterno'] );
	        $pessoa->setAvomaterna( $linha ['avomaterna'] );
	        $pessoa->setBisavopaterno( $linha ['bisavopaterno'] );
	        $pessoa->setBisavopaterna( $linha ['bisavopaterna'] );
	        $pessoa->setBisavomaterno( $linha ['bisavomaterno'] );
	        $pessoa->setBisavomaterna( $linha ['bisavomaterna'] );
	        $pessoa->setLinkfoto( $linha ['linkfoto'] );
	    }
	    return $pessoa;
	}
}