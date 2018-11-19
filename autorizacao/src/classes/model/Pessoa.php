<?php
	
/**
 * Classe feita para manipulação do objeto Pessoa
 * feita automaticamente com programa gerador de software inventado por
 * @author Jefferson Uchôa Ponte <j.pontee@gmail.com>
 */
class Pessoa {
	private $id;
	private $nome;
	private $endereco;
	private $email;
	private $whatsapp;
	private $pai;
	private $mae;
	private $avopaterno;
	private $avopaterna;
	private $avomaterno;
	private $avomaterna;
	private $bisavopaterno;
	private $bisavopaterna;
	private $bisavomaterno;
	private $bisavomaterna;
	private $linkfoto;
	private $nascimento;
	private $datacasamento;
	private $nomeconjuge;
	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getEndereco() {
		return $this->endereco;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setWhatsapp($whatsapp) {
		$this->whatsapp = $whatsapp;
	}
	public function getWhatsapp() {
		return $this->whatsapp;
	}
	public function setPai($pai) {
		$this->pai = $pai;
	}
	public function getPai() {
		return $this->pai;
	}
	public function setMae($mae) {
		$this->mae = $mae;
	}
	public function getMae() {
		return $this->mae;
	}
	public function setAvopaterno($avopaterno) {
		$this->avopaterno = $avopaterno;
	}
	public function getAvopaterno() {
		return $this->avopaterno;
	}
	public function setAvopaterna($avopaterna) {
		$this->avopaterna = $avopaterna;
	}
	public function getAvopaterna() {
		return $this->avopaterna;
	}
	public function setAvomaterno($avomaterno) {
		$this->avomaterno = $avomaterno;
	}
	public function getAvomaterno() {
		return $this->avomaterno;
	}
	public function setAvomaterna($avomaterna) {
		$this->avomaterna = $avomaterna;
	}
	public function getAvomaterna() {
		return $this->avomaterna;
	}
	public function setBisavopaterno($bisavopaterno) {
		$this->bisavopaterno = $bisavopaterno;
	}
	public function getBisavopaterno() {
		return $this->bisavopaterno;
	}
	public function setBisavopaterna($bisavopaterna) {
		$this->bisavopaterna = $bisavopaterna;
	}
	public function getBisavopaterna() {
		return $this->bisavopaterna;
	}
	public function setBisavomaterno($bisavomaterno) {
		$this->bisavomaterno = $bisavomaterno;
	}
	public function getBisavomaterno() {
		return $this->bisavomaterno;
	}
	public function setBisavomaterna($bisavomaterna) {
		$this->bisavomaterna = $bisavomaterna;
	}
	public function getBisavomaterna() {
		return $this->bisavomaterna;
	}
	public function setLinkfoto($linkfoto) {
		$this->linkfoto = $linkfoto;
	}
	public function getLinkfoto() {
		return $this->linkfoto;
	}
	public function setNascimento($nascimento) {
	    $this->nascimento = $nascimento;
	}
	public function getNascimento() {
	    return $this->nascimento;
	}
	public function setDatacasamento($datacasamento) {
	    $this->datacasamento = $datacasamento;
	}
	public function getDatacasamento() {
	    return $this->datacasamento;
	}
	public function setNomeconjuge($nomeconjuge) {
	    $this->nomeconjuge = $nomeconjuge;
	}
	public function getNomeconjuge() {
	    return $this->nomeconjuge;
	}
}
?>