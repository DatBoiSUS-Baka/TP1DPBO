class PetShop{
    private String ID;
    private String name;
    private String kategori;
    private int harga;

    PetShop(String ID, String nama, String kategori, int harga){
        this.ID = ID;
        this.name = nama;
        this.kategori = kategori;
        this.harga = harga;
    }
    //  Setter dan Getter untuk atribut yang ada
    public void setId(String id){
        this.ID = id;
    }

    public String getID(){
        return this.ID;
    }

    public void setName(String name){
        this.name = name;
    }

    public String getName(){
        return this.name;
    }

    public void setKategori(String kategori){
        this.kategori = kategori;
    }

    public String getKategori(){
        return this.kategori;
    }

    public void setHarga(int harga){
        this.harga = harga;
    } 

    public int getHarga(){
        return this.harga;
    }

    public void display(){
        System.out.println("----------------------------");
        System.out.println("Id      :" + ID);
        System.out.println("Name    :" + name);
        System.out.println("Kategori:" + kategori);
        System.out.println("Harga   :" + harga);
        System.out.println("----------------------------");
    }

    public void change(String ID, String name, String kategori, int harga){
        this.ID = ID;
        this.name = name;
        this.kategori = kategori;
        this.harga = harga;
    }
}