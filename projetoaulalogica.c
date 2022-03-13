#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(){

/*
locais seguros: tomate, cenoura
locais de risco: abacaxi, cebola

*/
    char easteregg[50] = "ehe";
    char ch; 
    char str[50];
    char str2[50] = "cenoura";
    char str3[50] = "tomate";
    char str4[50] = "abacaxi";
    char str5[50] = "cebola";

printf("Você está sendo seguida?\n");
        scanf("%c", &ch); 
           getchar();
     
 switch ( ch ){  
   case 's': printf("Chamar a policia?\n");
        scanf("%c", &ch); 
            getchar();
      if(ch == 's'){
printf("190\n"); }
     break;  
   case 'n': printf("Se sente segura?\n"); 
        scanf("%c", &ch); 
          getchar();
      if(ch == 'n'){
printf("Chamar a policia?\n");}
     else if(ch == 's'){
printf("okay\n"); }
       scanf("%c", &ch); 
         getchar();
     if(ch == 's'){
printf("190\n");}
     else if(ch == 'n'){
printf("okay\n"); }
    break; }


printf("Onde você está?\n");
      scanf("%s", &str); 
    if(strcmp(str,str2)==0){
printf("Você está em (cenoura), lugar seguro!");}
    else if(strcmp(str,str3)==0){
printf("Você está em (tomate), lugar seguro!"); }
    else if(strcmp(str,str4)==0){
printf("Você está em (abacaxi), lugar de risco!, vá para (tomate).");}
    else if(strcmp(str,str5)==0){
printf("Você está em (cebola), lugar de risco!, vá para (cenoura)."); }
    else if(strcmp(str,easteregg)==0){printf("https://www.youtube.com/watch?v=dQw4w9WgXcQ\n");}
    else{
printf("Lugar não especificado\n"); }
    scanf("%");
printf("Boa viagem! :) \n");

    return 0;
  }