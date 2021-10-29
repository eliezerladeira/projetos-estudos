#include <stdio.h>
#include <stdlib.h>

int main()
{
    int ano_nascimento = 1993;
    int ano_atual = 2021;

    int resultado = ano_atual - ano_nascimento;

    printf("A pessoa tem %d anos\n\n", resultado);

    //-----------------------------------------
    int hora_cinema = 20;
    int hora_atual = 20;
    int hora_validada = hora_cinema + 30;

    if (hora_atual > hora_cinema + 30) {
        printf("Passou do tempo limite! Nao pode entrar!\n\n");
    } else if (hora_atual < hora_cinema - 30) {
        printf("Nem abriu a porta do cinema!\n\n");
    } else {
        printf("O horario esta certo. Pode entrar!\n\n");
    }

    //-----------------------------------------
    int contador = 1;
    int limite = 10;

    while (contador <= limite) {
        printf("Estamos no primeiro loop\n");

        if (contador ==3) {
            int contador_2 = 5;

            while (contador_2 > 0) {
                printf("Estamos no segundo loop\n");
                contador_2--;
            }
        }
        contador++;
    }

    //-----------------------------------------
    char nome[256];
    char sobrenome[256];
    int nascimento;
    int idade;

    printf("\nQual seu nome?\n");
    scanf("%s", nome);

    printf("\nQual seu sobrenome, %s?\n", nome);
    scanf("%s", sobrenome);

    printf("\nShow de bola, %s... Qual sua idade?\n", nome);
    scanf("%d", &idade);

    printf("\nE qual o ano de seu nascimento?\n");
    scanf("%d", &nascimento);

    printf("\nMuito bom! O %s %s tem %d anos e nasceu em %d", nome, sobrenome, idade, nascimento);

    //-----------------------------------------
    char nome1[256];
    int idade1;

    printf("\nOla! Qual seu nome?\n");
    scanf("%s", &nome1);

    printf("\nQual sua idade?\n");
    scanf("%d", &idade1);

    printf("\n\nNome: %s\nIdade: %d\n", nome1, idade1);

    printf("\nAguarde enquanto lemos seus dados...\n");

    printf("\nA primeira letra do seu nome e: %c", nome1[0]);

    if (idade1 >= 18) {
        printf("\nVoce e adulto!");
    } else if (idade1 >= 12) {
        printf("\nVoce e adolescente!");
    } else {
        printf("\nVoce e crianca!");
    }

    return 0;
}
