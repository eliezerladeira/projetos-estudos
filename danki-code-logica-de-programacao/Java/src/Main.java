import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		int pontos = 0;
		
		System.out.println("Bem-vindo! Pressione S para continuar...");
		String string = scanner.nextLine();
		
		if (string.equals("S")) {
			System.out.println("Qual a capital do Brasil?");
			string = scanner.nextLine();
			
			if (string.equals("Brasilia")) {
				pontos++;
				System.out.println("Voc� pontuou!");
				System.out.println("Voc� deseja continuar ou desistir? (s/d)");
				string = scanner.nextLine();
				
				if (string.equals("s")) {
					// pr�xima pergunta
					System.out.println("Em qual continente fica o Brasil?");
					string = scanner.nextLine();
					
					if (string.equals("america do sul")) {
						pontos++;
						System.out.println("Voc� pontuou!");
						System.out.println("Qual � esta linguagem de programa��o?");
						string = scanner.nextLine();
						
						if (string.equals("java")) {
							pontos++;
							System.out.println("Voc� ganhou!");						
							System.out.println("Sua pontua��o final foi de " + pontos);
						} else {
							System.out.println("Game over! Sua pontua��o foi de: " + pontos);	
						}
						
					} else {
						System.out.println("Game over! Sua pontua��o foi de: " + pontos);	
					}
				} else {
					System.out.println("Game over! Sua pontua��o foi de: " + pontos);					
				}
			} else {
				System.out.println("Game over! Sua pontua��o foi de: " + pontos);
			}
		} else {
			System.out.println("Acabou o jogo. Voc� pontuou 0");
		}
	}
}
