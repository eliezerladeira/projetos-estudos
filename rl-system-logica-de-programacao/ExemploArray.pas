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
      nomes[4] := 'Jos�';
      nomes[5] := 'Algu�m';
      
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
     
     // Array => � tamb�m uma vari�vel. S� que � uma vari�vel que voc� pode armazenar v�rios valores.
 End.
