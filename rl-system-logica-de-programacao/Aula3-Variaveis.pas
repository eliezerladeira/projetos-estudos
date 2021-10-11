Program Exemplo_Variaveis ;
 var
 	nome : String;  // aqui estou declarando uma variável.
 	estado : String;
 	pais : String;
	numero : Integer;
	
	idade : Integer;
	ano_atual : Integer;
	resultado: Integer;
	
	// Idade = 13 anos
	// Ano Atual = 2013
	// Ano Atual - Idade = 2000
	
	// Variável nunca pode começar com número
	// Variável nunca pode ter espaço
	// Variável sempre precisa ter um tipo de dado. Ex: String, Integer etc;
	// Depois de declarar a variável, devemos atribuir um valor a ela. Sempre dentro do Begin	
	
	
	// Operações Aritiméticas no Pascal
	// + => Somar
	// - => Diminuir
	// * => Multiplicar
	// div => Dividir
	
	// Vocês irão criar duas variáveis:  horas_aula, mes_aula, resultado_aula => Integer
	// Quantas horas o aluno estuda inglês por mês.
	// Usando o WriteLn vocês irão mostrar o resultado da variável resultado_aula
	
 Begin
 
 	// Aqui estou atribuindo o texto RL System para a variável nome
     nome := 'RL System';
     
     estado := 'RS';
     
     pais := 'Brasil';
     
     numero := 100 + 10;
     
     idade := 30;
     ano_atual := 2013;
     resultado := ano_atual - idade; 
     
     // Estou exibindo o valor da variável nome
     writeln(nome);
     
     writeln(estado);
     
     writeln(pais);
     
     writeln(nome);
     
     writeln(numero);
     
     writeln(resultado);
     
     pais := 'Espanha';
     
     writeln(pais);
     
     writeln('RL System');
 End.
