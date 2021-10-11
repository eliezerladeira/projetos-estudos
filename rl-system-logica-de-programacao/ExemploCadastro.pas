Program Pzim ;
 var
 	txt : text;
	nome : String;
	total_nome : Integer;  
 Begin
 	assign(txt, 'C:\\rlsystem\cadastros.txt'); 
 	writeln('Digite o nome a ser salvo:');
 	readln(nome);
 	
 	total_nome := length(nome);
 	
 	if total_nome > 4 then
 	begin
 	    	append(txt);
 		writeln(txt, nome);
 		writeln('Gravado com sucesso.');
 	end
 	else
 	begin
 	    	writeln('Erro, porque você colocou um nome pequeno.');
 	end;
 	
 
 	close(txt);
 End.
