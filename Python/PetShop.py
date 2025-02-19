class PetShop:
    def __init__(self, ID, name, kategori, harga):
        self.__ID = ID
        self.__name = name
        self.__kategori = kategori
        self.__harga = harga
    
    # Getter dan setter untuk atribut yang ada
    def getID(self):
        return self.__ID
    def setID(self, ID):
        self.__ID = ID
    
    def getName(self):
        return self.__name
    def setName(self, name):
        self.__name = name
    
    def getKategori(self):
        return self.__kategori
    def setKategori(self, kategori):
        self.__kategori = kategori

    def getHarga(self):
        return self.__harga
    def setHarga(self, harga):
        self.__harga = harga

    def display(self):
        print("------------------------")
        print(f"Id      : {self.__ID}")
        print(f"Name    : {self.__name}")
        print(f"Kategori: {self.__kategori}")
        print(f"Harga   : {self.__harga}")
        print("------------------------")
    
    def change(self, Id, name, kategori, harga):
        self.__ID = Id
        self.__name = name
        self.__kategori = kategori
        self.__harga = harga