#include<stdio.h>
#include<conio.h>

int main ()
{
	char nama [25];
	int umur;
	char alamat [50];
	
	printf("Masukkan nama anda :");gets (nama);
	printf("Masukkanalamat anda : ");gets (alamat);
	printf("Masukkan umur anda :");scanf("%d",&umur);
	
	printf("\nNamaanda : %s",nama);
	printf("\nAlamat anda : %s",alamat);
	printf("\nUmuranda :%d",umur);
	
	
	return 0;
}
