Program Exemplo_Variaveis ;
 var
 	nome : String;  // aqui estou declarando uma vari�vel.
 	estado : String;
 	pais : String;
	numero : Integer;
	
	idade : Integer;
	ano_atual : Integer;
	resultado: Integer;
	
	// Idade = 13 anos
	// Ano Atual = 2013
	// Ano Atual - Idade = 2000
	
	// Vari�vel nunca pode come�ar com n�mero
	// Vari�vel nunca pode ter espa�o
	// Vari�vel sempre precisa ter um tipo de dado. Ex: String, Integer etc;
	// Depois de declarar a vari�vel, devemos atribuir um valor a ela. Sempre dentro do Begin	
	
	
	// Opera��es Aritim�ticas no Pascal
	// + => Somar
	// - => Diminuir
	// * => Multiplicar
	// div => Dividir
	
	// Voc�s ir�o criar duas vari�veis:  horas_aula, mes_aula, resultado_aula => Integer
	// Quantas horas o aluno estuda ingl�s por m�s.
	// Usando o WriteLn voc�s ir�o mostrar o resultado da vari�vel resultado_aula
	
 Begin
 
 	// Aqui estou atribuindo o texto RL System para a vari�vel nome
     nome := 'RL System';
     
     estado := 'RS';
     
     pais := 'Brasil';
     
     numero := 100 + 10;
     
     idade := 30;
     ano_atual := 2013;
     resultado := ano_atual - idade; 
     
     // Estou exibindo o valor da vari�vel nome
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
