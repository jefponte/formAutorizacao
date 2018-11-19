<?php
				
/**
 * Classe de visao para Pessoa
 * @author Jefferson Uchôa Ponte <j.pontee@gmail.com>
 *
 */				
class PessoaView {
    public function mostraFormInserir() {	
		echo '
<script>
function mudarNome() {
    var x = document.getElementById("nome").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

        <form action="" method="post" enctype="multipart/form-data">
					<fieldset>
						<legend>
							AUTORIZAÇÃO
						</legend>
						<label for="nome">*Meu nome:</label><br>
						<input type="text" placeholder="Fulano de Tal dos Anzóis Mourão" name="nome" onchange="mudarNome()" id="nome" required/><br>
						<label for="endereco">Endereço:</label><br>
						<input type="text" name="endereco" placeholder="Rua Fulano de Tal, nº xxx  -  CEP:  00.000-00" id="endereco" /><br>
						<label for="email">Endereço de e-mail válido:</label><br>
						<input type="email" name="email" placeholder="fulanodetal@gmail.com" id="email"/><br>
						<label for="whatsapp">*Número de whatsapp:</label><br>
						<input type="text" name="whatsapp" id="whatsapp" required/><br>
						<label for="pai">*Nome de meu pai:</label><br>
						<input type="text" name="pai" id="pai" required/><br>
						<label for="mae">*Nome de minha mãe:</label><br>
						<input type="text" name="mae" id="mae" required/><br>
						<label for="avopaterno">Nome de meu avô paterno:</label><br>
						<input type="text" name="avopaterno" id="avopaterno" /><br>
						<label for="avopaterna">Nome de minha avó paterna:</label><br>
						<input type="text" name="avopaterna" id="avopaterna" /><br>
						<label for="avomaterno">Nome de meu avô materno:</label><br>
						<input type="text" name="avomaterno" id="avomaterno" /><br>
						<label for="avomaterna">Nome de minha avó materna:</label><br>
						<input type="text" name="avomaterna" id="avomaterna" /><br> 
						<label for="bisavopaterno">Nome de meu bisavô paterno:</label><br>
						<input type="text" name="bisavopaterno" id="bisavopaterno" /><br>
						<label for="bisavopaterna">Nome de minha bisavó paterna:</label><br>
						<input type="text" name="bisavopaterna" id="bisavopaterna" /><br>
						<label for="bisavomaterno">Nome de meu bisavô materno:</label><br>
						<input type="text" name="bisavomaterno" id="bisavomaterno" /><br>
						<label for="bisavomaterna">Nome de minha bisavó materna:</label><br>
						<input type="text" name="bisavomaterna" id="bisavomaterna" /><br>
						<label for="nascimento">Data de meu nascimento:</label><br>
						<input type="date" name="nascimento" id="nascimento" /><br>
						<label for="datacasamento">Data de Meu Casamento:</label><br>
						<input type="date" name="datacasamento" id="datacasamento" /><br>
						<label for="nomeconjuge">Nome de meu Cônjuge:</label><br>
						<input type="text" name="nomeconjuge" id="nomeconjuge" /><br>
						<label for="linkfoto">Minha Foto:</label><br>
						<input type="file" name="linkfoto" id="linkfoto" required/><br>

                        <p> * campos obrigatórios</p>
                        <p>Eu, <b id="demo">XXXXXX XXXXXXX XXXXXXX</b>, desejo e autorizo figurar na publicação de responsabilidade de Francisco Renato Miranda Mourão, sem ônus para o autor, onde constam vários trechos de árvores genealógicas, entre eles o que diz respeito ao ramo representado pelos meus ascendentes acima. Os dados são estes, constantes do presente formulário e podem ser utilizados caso se enquadre na sequência genealógica construída.</p>
						<input type="submit" name="enviar_pessoa" value="Confirmar">
					</fieldset>
				</form>';
	}	
	public function mostraLista($lista){
	    echo '<table border="1"><thead>';
	    echo '<tr>';
	    echo '<th>Id</th>';
	    echo '<th>Nome</th>';
	    echo '<th>Endereco</th>';
	    echo '<th>Email</th>';
	    echo '<th>Whatsapp</th>';
	    echo '<th>Pai</th>';
	    echo '<th>Mae</th>';
	    echo '<th>Foto</th>';
	    echo '<th>Apagar</th>';
	    echo '</thead></tr><tbody>';
	    foreach ( $lista as $pessoa) {
	        echo '<tr>';
	        echo '<td>'.$pessoa->getId ().'</td>';
	        echo '<td><a href="?idpessoa='.$pessoa->getId().'">'.$pessoa->getNome ().'</a></td>';
	        echo '<td>'.$pessoa->getEndereco ().'</td>';
	        echo '<td>'.$pessoa->getEmail ().'</td>';
	        echo '<td>'.$pessoa->getWhatsapp ().'</td>';
	        echo '<td>'.$pessoa->getPai ().'</td>';
	        echo '<td>'.$pessoa->getMae ().'</td>';
	        echo '<td><img width="60" src="upload/'.$pessoa->getLinkfoto ().'" /></td>';
	        echo '<td><a href="?deletar='.$pessoa->getId().'">Deletar</a></td>';
	        echo '</tr>';
	    }
	    echo '</tbody></table>';
	    
	}
	public function mostrarFicha(Pessoa $pessoa){
	    if(file_exists('upload/'.$pessoa->getLinkfoto())){
	        echo '<div class="foto">';
	        echo '<img width="150" src="upload/'.$pessoa->getLinkfoto().'" />';
	        echo '</div>';
	    }
	    echo '<div class="">';
	    echo 'Nome: '.$pessoa->getNome().'<br>';
	    echo 'Endereço: '.$pessoa->getEndereco().'<br>';
	    echo 'Endereço de e-mail: '.$pessoa->getEmail().'<br>';
	    echo 'Whatsapp: '.$pessoa->getWhatsapp().'<br>';
	    echo 'Pai: '.$pessoa->getPai().'<br>';
	    echo 'Mãe: '.$pessoa->getMae().'<br>';
	    echo 'Avô Paterno: '.$pessoa->getAvopaterno().'<br>';
	    echo 'Avó Paterna: '.$pessoa->getAvopaterna().'<br>';
	    echo 'Avô Materno: '.$pessoa->getAvomaterno().'<br>';
	    echo 'Avó Materna: '.$pessoa->getAvomaterna().'<br>';
	    echo 'Bisavô Paterno: '.$pessoa->getBisavopaterno().'<br>';
	    echo 'Bisavó Paterna: '.$pessoa->getBisavopaterna().'<br>';
	    echo 'Bisavô Materno: '.$pessoa->getBisavomaterno().'<br>';
	    echo 'Bisavó Materna: '.$pessoa->getBisavomaterna().'<br>';
	    
	    
	    echo 'Data de nascimento: '.date('d/m/Y', strtotime($pessoa->getNascimento())).'<br>';
	    echo 'Data de Casamento: '.date('d/m/Y', strtotime($pessoa->getDatacasamento())).'<br>';
	    echo 'Nome do Cônjuge: '.$pessoa->getNomeconjuge().'<br>';
	    
	    
	  
       
        echo '</div>';
	}
}