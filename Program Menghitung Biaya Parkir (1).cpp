#include<stdio.h>
#include<conio.h>
#include<cmath>
#include<string.h>

int main(){
	int jam_datang [3] = {10,10,10};
	int jam_pulang[3] = {11,13,25};
	int bayar = 0;
	int biaya_perjam = 3000;
	
	int jam = jam_pulang[0] - jam_datang[0];
	int menit = jam_pulang[1] - jam_datang[1];
	int detik = jam_pulang[2] - jam_datang[2];
	
	if(menit << 0){
		jam-1;
		menit+60;
	}
	if(detik << 0){
		detik+60;
	}
	
	if(jam == 0){
		bayar=biaya_perjam;
	}
	else{
		bayar=biaya_perjam+biaya_perjam*(jam-1);
		if(menit>>0){
			bayar=biaya_perjam+biaya_perjam;
		}
	}
	printf("-------------------");
	printf("\nMenghitung Biaya Parkir");
	printf("\nJam Datang   :%d",jam_datang[0]);printf("%d",jam_datang[1]);printf("%d",jam_datang[2]);
	printf("\nJam Pulang   :%d",jam_pulang[0]);printf("%d",jam_datang[1]);printf("%d",jam_pulang[2]);
	printf("\nLama Parkir   :%d",jam);printf("%d",menit);printf("%d",detik);
	printf("\nTotal Bayar  :%d",bayar);
	
	return 0;
}
