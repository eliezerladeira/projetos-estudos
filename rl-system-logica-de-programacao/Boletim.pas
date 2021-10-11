Program Pzim ;
var
   b1 : Integer;
   b2 : Integer;
   b3 : Integer;
   b4 : Integer;
   resultado : Integer;
   nome : String;
   result : boolean;
 Begin
 	 
      writeln('------ Sistema de Boletin -------');
      writeln('Digite o nome do aluno:');
      readln(nome);
      
      writeln('Digite a nota total do Bimestre 1:');
      readln(b1);
      
      writeln('Digite a nota total do Bimestre 2:');
      readln(b2);
      
      writeln('Digite a nota total do Bimestre 3:');
      readln(b3);
      
      writeln('Digite a nota total do Bimestre 4:');
      readln(b4);
      
      resultado := (b1 + b2 + b3 + b4) div 4;
      writeln(resultado);
      
      if resultado > 4 then
      begin
          writeln('O aluno ', nome, ' passou de ano, com o total de: ', resultado);
      end
      else
      begin
      	writeln('O aluno ', nome, ' não passou de ano, porque sua média foi de ', resultado);
      end;
      
     result := resultado > 4;
 	writeln(result);
  
  
  // Verdadeiro ou Falso => True ou False
  // O que está entre o IF é uma expressão booleana
  // Integer, String, Real (Double), Boolean => Tipos Primitivos    
  // Sintaxe
  // Se eu usar um ELSE (no pascal), no IF, o END do IF não pode ter ponto e virgula (;)
  // Else => Se não
  // Then : Então
  // > : Maior
  // < : Menor
  // if => Se
  // Operadores Condicional
  // Estrutura Condicional
  // ()
  // * /
  // + -
  // 10 + 10 + 10 + 10 = 40 / 4 = 10
  // 10 / 4
  // 4 Bimestres
  // 10
  // 50%
  // 2
  // 8
  // 9
  // 5
  // 24 / 4
  // 6
  // * - +
  
 End.
