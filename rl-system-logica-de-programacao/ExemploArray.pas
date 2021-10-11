Program Pzim ;
var
	nome_completo : String;
	nomes : array[1..5] of String;
	idades : array[1..2] of Integer;
 Begin
      nome_completo := 'Rafael Silva';
      
	 nomes[1] := 'Rafael';
      nomes[2] := 'Rodrigo';
      nomes[3] := 'Pedro';
      nomes[4] := 'José';
      nomes[5] := 'Alguém';
      
      writeln(nome_completo);
      
      writeln(nomes[1]);
      writeln(nomes[2]);
      writeln(nomes[3]);
      writeln(nomes[4]);
      writeln(nomes[5]);
      
      idades[1] := 100;
      idades[2] := 50;
      
      writeln(idades[1]);
      writeln(idades[2]);
     
     // Array => É também uma variável. Só que é uma variável que você pode armazenar vários valores.
 End.
