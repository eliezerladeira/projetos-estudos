#include <stdio.h>
#include <stdlib.h>

int main()
{
    char player1[256];
    char player2[256];

    printf("Player 1, sua vez: ");
    scanf("%s", &player1);

    printf("\nPlayer 2, sua vez: ");
    scanf("%s", &player2);

    printf("\nAguarde, estamos calculando o resultado...");

    if (strcmp(player1, "papel") == 0) {
        if (strcmp(player2, "papel") == 0) {
            printf("\nEmpate!");
        } else if (strcmp(player2, "tesoura") == 0) {
            printf("\nPlayer 2 ganhou, porque tesoura corta papel!");
        } else if (strcmp(player2, "pedra") == 0) {
            printf("\nPlayer 1 ganhou, porque papel embrulha pedra");
        } else {
            printf("\nO player 2 jogou uma informacao invalida!");
        }
    } else if (strcmp(player1, "tesoura") == 0) {
        if (strcmp(player2, "papel") == 0) {
            printf("\nPlayer 1 ganhou, porque tesoura corta papel!");
        } else if (strcmp(player2, "tesoura") == 0) {
            printf("\nEmpate!");
        } else if (strcmp(player2, "pedra") == 0) {
            printf("\nPlayer 2 ganhou, porque pedra esmaga tesoura!");
        } else {
            printf("\nO player 2 jogou uma informacao invalida!");
        }
    } else if (strcmp(player1, "pedra") == 0) {
        if (strcmp(player2, "papel") == 0) {
            printf("\nPlayer 2 ganhou, porque papel embrulha pedra");
        } else if (strcmp(player2, "tesoura") == 0) {
            printf("\nPlayer 1 ganhou, porque pedra esmaga tesoura!");
        } else if (strcmp(player2, "pedra") == 0) {
            printf("\nEmpate!");
        } else {
            printf("\nO player 2 jogou uma informacao invalida!");
        }
    } else {
        printf("\nVocê jogou uma informação invalida!");
    }

    return 0;
}
