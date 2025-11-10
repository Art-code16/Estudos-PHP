<?php
// Configurações para conexão com o banco de dados sis_academico
// Utilizado PHP 7.4.33  pacote Wampserver 3.3.0  
// Pode utilizar também conexão mysqli, o arquivo cadastro_aluno.html deve ser adaptado. 

// Declação das variáveis.



$host = "localhost";  // Nome do servidor local onde o banco de dados está hospedado. 
$usuario = "root";    // Nome de usuário do banco de dados,  aquele que tem acesso irrestrito a todos os componentes do sistema
$senha = "Art0801.";       // Senha do banco de dados.
$banco = "crud"; // Nome do banco de dados que será acessado.

// try = 	bloco de "TENTAR", ele é usado para envolver o código que pode gerar exceções.
// O código dentro deste bloco é executado e qualquer exceção que ocorrer será "capturada" pelo bloco `catch`.
try { 
  
    /* Estabelece a conexão com o banco de dados utilizando PDO.
	
	   O PDO (PHP Data Objects) define uma interface de conexão a banco de dados leve
       e consistente para PHP. Há a possibilidade de utilização de diversos drivers de
	   conexão que implementam a interface do PDO para vários tipos de bancos de dados.
*/
	// Esta linha de código cria uma instância da classe PDO para estabelecer uma conexão com o banco de dados MySQL.
   // Os parâmetros passados para o construtor do PDO são: 
	
	
	
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
  
  // Habilitar exceções para erros de PDO
	
   // Define o atributo ERRMODE do objeto de conexão PDO para ERRMODE_EXCEPTION.
   // Isso configura o modo de tratamento de erros do PDO para lançar exceções em caso de erros SQL.
   // Isso é útil para capturar exceções e lidar com erros de maneira mais eficaz durante a execução do código.
   // Quando ocorrer um erro SQL, o PDO lançará uma exceção do tipo PDOException com detalhes do erro.
   // Isso permite que o código capture e lide com erros de forma mais estruturada e informativa.
   // -> esse operador é conhecido informamente como SETA, o manual chama ele de T_OBJECT_OPERATOR serve para ACESSAR PROPRIEDADES ou MÉTODOS de um objeto
   // MÉTODO (coleção de propriedades).
   
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// o bloco catch é usado para lidar com exceções que podem ocorrer durante a execução do código dentro do bloco try	   
// catch = "pegar, capturar". Tratar erros de conexão.
// Se houver algum erro na conexão com o banco de dados, o bloco catch será executado. 

// catch(PDOException $e) { ... }`: Ele é executado quando uma exceção do tipo `PDOException`
// é lançada dentro do bloco `try`. `$e` é uma variável que representa a exceção capturada. 
} catch(PDOException $e) {

// Ele exibe uma mensagem de erro, incluindo detalhes da exceção, usando a função die(). Isso encerra a execução do script PHP após exibir a mensagem de erro.
// O `.$e->getMessage()` obtém a mensagem de erro específica que foi lançada na exceção capturada, e ela será exibida junto com a mensagem geral de erro. 
    die('Não foi possível conectar ao banco de dados. Erro detectado: ' . $e->getMessage());
}

?>