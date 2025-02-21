from PetShop import PetShop

# Membuat list untuk list of object
listBarang = []

stop = False
masukkan = 0

while not stop:
    print("\n|===========================|")
    print("| 1 = Tampilkan list barang |")
    print("| 2 = Tambah barang ke list |")
    print("| 3 = Ubah data barang list |")
    print("| 4 = Hapus data barang list|")
    print("| 5 = Cari barang dalam list|")
    print("|-1 = Keluar dari program   |")
    print("|===========================|")
    masukkan = int(input('Masukkan input mu jusseyo: '))
    if masukkan == -1:
        stop = True
    elif masukkan == 1:

        # Tampilkan list barang
        if not listBarang:
            print("List kosong")
        else:
            for items in listBarang:
                items.display()

    elif masukkan == 2:
        # Tambah barang ke list
        idBaru = input("Masukkan id barang : ")
        namaBaru = input("Masukkan nama barang : ")
        kategoriBaru = input("Masukkan kategori barang : ")
        hargaBaru = int(input("Masukkan harga barang : "))

        listBarang.append(PetShop(idBaru, namaBaru, kategoriBaru, hargaBaru))
        print("Peralatan berhasil ditambahkan!")
    elif masukkan == 3:
        # Mengubah data yang diinginkan
        idCari = input("Masukkan ID barang yang ingin diubah : ")
        found = False
        for items in listBarang:
            if idCari == items.getID() and not found:
                found = True
                idBaru = input("Masukkan id baru : ")
                namaBaru = input("Masukkan nama baru : ")
                kategoriBaru = input("Masukkan kateori baru : ")
                hargaBaru = input("Masukkan harga baru : ")
                
                items.setID(idBaru)
                items.setName(namaBaru)
                items.setKategori(kategoriBaru)
                items.setHarga(hargaBaru)

                print("Data sudah diperbarui!")
        if not found:
            print("Tidak ditemukan")
    elif masukkan == 4:
        # Mengahapus data yang diinginkan
        idCari = input("Masukkan ID barang yang ingin dihapus : ")
        found = False
        for i, items in enumerate(listBarang):
            if idCari == items.getID() and not found:
                found = True
                del listBarang[i]
                print("Berhasil dihapus!")
        if not found:
            print("Tidak ditemukan")
    elif masukkan == 5:
        # Mencari data yang diinginkan berdasarkan nama produk
        nameCari = input("Masukkan nama barang yang ingin dicari : ")
        found = False

        for items in listBarang:
            if items.getName() == nameCari and not found:
                found = True
                items.display()