Program Exemplo_Aula ;
 var
	 horas_aula : Integer;
	 mes_aula : Integer;
	 resultado_aula : Integer;
 Begin
 	 writeln('Seja bem vindo ao sistema de horas');
 	 writeln('Por favor, digite o n�mero de aulas por semana:');
 	 
      readln(horas_aula);
      
      writeln('Quantas semanas tem este m�s?');
      
      readln(mes_aula);
      
      resultado_aula := mes_aula * horas_aula;
      
      writeln('O aluno tem ', resultado_aula, ' horas de aula por m�s, j� que ele faz ', horas_aula, ' horas de aulas por semana.' );
      
      // O aluno tem 8 horas de aula por m�s
      
      // Concatenar => � ato de unir String com Integer.
      // � o ato de juntar v�rios valores de diferentes de vari�veis ou de qualquer outro local
      // � juntar tudo dentro de um unico writeln
      // Juntar um texto din�mico
      // Concatenar eu utilizo o operador ,
      // Espa�o � igual a uma letra
      // Espa�o � igual a uma string
      
      // O Aluno tem ?? horas de aula por m�s, j� que ele faz ?? aulas por semana
 End.
