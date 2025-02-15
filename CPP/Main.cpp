#include "PetShop.cpp"

int main(){
    PetShop peralatan[10];
    
    int counter = 0;
    
    bool stop = false;
    
    do
    {
        string pilihan;
        cin >> pilihan;

        if (pilihan == "Tampilkan")
        {
            int i = 0;
            while (i < 10)
            {
                if (peralatan[i].get_ID().empty())
                {
                    i++;
                }else{
                    cout << "ID: " << peralatan[i].get_ID() + '\n';
                    cout << "Nama: " << peralatan[i].get_nama() + '\n';
                    cout << "Kategori: " << peralatan[i].get_kategori() + '\n';
                    cout << "Harga: " << peralatan[i].get_harga() + '\n';
                    i++;
                }
            }
            
        }else if (pilihan == "Tambahkan")
        {
            if (counter < 10)
            {
                if (peralatan[counter].get_ID().empty())
                {
                    string temp1, temp2, temp3;
                    cin >> temp1;
                    peralatan[counter].set_ID(temp1);
                    
                    cin >> temp2;
                    peralatan[counter].set_nama(temp2);
                    
                    cin >> temp3;
                    peralatan[counter].set_kategori(temp3);
                    
                    int temp_harga;
                    cin >> temp_harga;
                    peralatan[counter].set_harga(temp_harga);
                    
                }else{
                    counter++;
                    string temp1, temp2, temp3;
                    cin >> temp1;
                    peralatan[counter].set_ID(temp1);
                    
                    cin >> temp2;
                    peralatan[counter].set_nama(temp2);
        
                    cin >> temp3;
                    peralatan[counter].set_kategori(temp3);
                    
                    int temp_harga;
                    cin >> temp_harga;
                    peralatan[counter].set_harga(temp_harga);
                }
            }else{
                cout << "Barang sudah penuh!" << endl;
            }
        }else if (pilihan == "Ubah")
        {
            string cari;
            cout << "Masukkan ID yang ingin dicari\n";
            cin >> cari;
            int i = 0;
            while (peralatan[i].get_ID() != cari)
            {
                i++;
            }
            
            string temp1, temp2, temp3;
            int temp_harga;
            cin >> temp1 >> temp2 >> temp3 >> temp_harga;
            peralatan[i].set_ID(temp1);
            peralatan[i].set_nama(temp2);
            peralatan[i].set_kategori(temp3);
            peralatan[i].set_harga(temp_harga);
        }else if (pilihan == "Hapus")
        {
            string cari;
            cout << "Masukkan ID yang ingin dicari\n";
            cin >> cari;
            int i = 0;
            while (peralatan[i].get_ID() != cari)
            {
                i++;
            }
            
            peralatan[i].set_ID("");
            peralatan[i].set_nama("");
            peralatan[i].set_kategori("");
            peralatan[i].set_harga(0);
        }else if (pilihan == "Cari")
        {
            string cari;
            cout << "Masukkan ID yang ingin dicari\n";
            cin >> cari;
            int i = 0;
            while (peralatan[i].get_ID() != cari)
            {
                i++;
            }
            
            cout << "ID: " << peralatan[i].get_ID() + '\n';
            cout << "Nama: " << peralatan[i].get_nama() + '\n';
            cout << "Kategori: " << peralatan[i].get_kategori() + '\n';
            cout << "Harga: " << peralatan[i].get_harga() + '\n';
        }else if (pilihan == "stop")
        {
            stop = true;
        }
    } while (stop == false);
    return 0;
}
