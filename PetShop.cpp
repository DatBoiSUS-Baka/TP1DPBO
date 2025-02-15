#include <iostream>
#include <string>

using namespace std;

class PetShop{
    private:
        string ID;
        string nama;
        string kategori;
        int harga;
    public:
        PetShop(){
            ID = "";
            nama = "";
            kategori = "";
            harga = 0;
        }
        string get_ID(){
            return ID;
        }
        string get_nama(){
            return nama;
        }
        string get_kategori(){
            return kategori;
        }
        int get_harga(){
            return harga;
        }

        void set_ID(string ID_baru){
            ID = ID_baru;
        }
        void set_nama(string nama_baru){
            nama = nama_baru;
        }
        void set_kategori(string kategori_baru){
            kategori = kategori_baru;
        }
        void set_harga(int harga_baru){
            harga = harga_baru;
        }
        ~PetShop(){}
};