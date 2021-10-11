Program Exemplo_Aula ;
 var
	 horas_aula : Integer;
	 mes_aula : Integer;
	 resultado_aula : Integer;
 Begin
 	 writeln('Seja bem vindo ao sistema de horas');
 	 writeln('Por favor, digite o número de aulas por semana:');
 	 
      readln(horas_aula);
      
      writeln('Quantas semanas tem este mês?');
      
      readln(mes_aula);
      
      resultado_aula := mes_aula * horas_aula;
      
      writeln('O aluno tem ', resultado_aula, ' horas de aula por mês, já que ele faz ', horas_aula, ' horas de aulas por semana.' );
      
      // O aluno tem 8 horas de aula por mês
      
      // Concatenar => É ato de unir String com Integer.
      // É o ato de juntar vários valores de diferentes de variáveis ou de qualquer outro local
      // É juntar tudo dentro de um unico writeln
      // Juntar um texto dinâmico
      // Concatenar eu utilizo o operador ,
      // Espaço é igual a uma letra
      // Espaço é igual a uma string
      
      // O Aluno tem ?? horas de aula por mês, já que ele faz ?? aulas por semana
 End.
