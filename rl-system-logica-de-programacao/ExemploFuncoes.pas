Program Pzim ;
var
	nome : String;
	total_nome : Integer;
 Begin
      writeln('Digite seu nome:');
      readln(nome);
      
      total_nome := length(nome);
      
      if total_nome < 4 then
      begin
          writeln('Voc� deveria digitar no min 4 char.');
      end
      else
      begin
      	 writeln('Sucesso. Voc� digitou ', upcase(nome) );
      end;
      
      
      // UPCASE => Fun��o (ou comando) que transforma todas as letras a para A 
      // LENGTH => Retorna, o n�mero total de char que a String possui
 End.
