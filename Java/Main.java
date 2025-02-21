import java.util.Scanner;
import java.util.LinkedList;
public class Main{
    public static void main(String[] args){
        LinkedList<PetShop> listBarang = new LinkedList<>();

        boolean stop = false;
        int input = 0;
        do{
            System.out.println("\n|===========================|");
            System.out.println("| 1 = Tampilkan list barang |");
            System.out.println("| 2 = Tambah barang ke list |");
            System.out.println("| 3 = Ubah data barang list |");
            System.out.println("| 4 = Hapus data barang list|");
            System.out.println("| 5 = Cari barang dalam list|");
            System.out.println("|-1 = Keluar dari program   |");
            System.out.println("|===========================|");
            System.out.println("Masukkan input mu jusseyo\n");
            Scanner scanner = new Scanner(System.in);
            input = scanner.nextInt();
            scanner.nextLine();
            switch(input){
                case 1:
                    // Menampilkan data yang tersedia
                    if(listBarang.isEmpty()){
                        System.out.println("List kosong");
                    }else{
                        for(PetShop item : listBarang){
                            item.display();
                        }
                    }
                    break;
                case 2:
                    // Menambahkan data baru
                    System.out.println("Masukkan nama peralatan: (ID, nama, kategori, harga)");
                    String id = scanner.next();
                    String nama = scanner.next();
                    String kategori = scanner.next();
                    int harga = scanner.nextInt();
                    
                    listBarang.add(new PetShop(id, nama, kategori, harga)); 
                    System.out.println("Peralatan berhasil ditambahkan!");
                    break;
                case 3:
                    // Mengubah data yang diingkan
                    System.out.println("Masukkan ID yang ingin diubah:");
                    String IdCari = scanner.next();

                    boolean found = false;
                    for(PetShop item : listBarang){
                        if(item.getID().equals(IdCari) && !found){
                            found = true;
                            System.out.println("Masukkan data baru");
                            String ID_edit = scanner.next();
                            String name_edit = scanner.next();
                            String kategori_edit = scanner.next();
                            int harga_edit = scanner.nextInt();

                            item.setId(ID_edit);
                            item.setName(name_edit);
                            item.setKategori(kategori_edit);
                            item.setHarga(harga_edit);

                            System.out.println("Data sudah diperbarui!");
                        }
                    }
                    if(!found){
                        System.out.println("Tidak ditemukan");
                    }
                    break;
                case 4:
                    // Menghapus data yang diinginkan
                    System.out.println("Masukkan ID yang ingin dihapus:");
                    IdCari = scanner.next();

                    boolean found_delete = false;
                    for(PetShop item : listBarang){
                        if(item.getID().equals(IdCari) && !found_delete){
                            found_delete = true;
                            listBarang.remove(item);
                        }
                    }
                    if(!found_delete){
                        System.out.println("Tidak ditemukan");
                    }
                    break;
                case 5:
                    // Mencari data yang diinginkan berdasarkan nama produk
                    System.out.println("Masukkan nama barang yang ingin dicari:");
                    String nameCari = scanner.next();

                    boolean find = false;
                    for(PetShop item : listBarang){
                        if(item.getName().equals(nameCari) && !find){
                            find = true;
                            item.display();
                        }
                    }
                    if(!find){
                        System.out.println("Tidak ditemukan barang dengan nama tersebut.");
                    }
                    break;
                case -1:
                    stop = true;
                    break;
                default:
                    System.out.println("Keknya ga valid");
            }
       }while (stop == false);
    }
}