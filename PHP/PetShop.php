<?php

class PetShop{
    private $ID = "";
    private $name = "";
    private $kategori = "";
    private $harga = "";
    private $foto = "";
    function __construct($ID, $name, $kategori, $harga, $foto){
        $this->ID  = $ID;
        $this->name = $name;
        $this->kategori = $kategori;
        $this->harga = $harga;
        $this->foto = $foto;
    }

    // Setter dan Getter untuk atribut yang ada
    function setID($ID){
        $this->ID = $ID;
    }
    function getID(){
        return $this->ID;
    }

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    
    function setKategori($kategori){
        $this->kategori = $kategori;
    }
    function getKategori(){
        return $this->kategori;
    }

    function setHarga($harga){
        $this->harga = $harga;
    }
    function getHarga(){
        return $this->harga;
    }

    function setFoto($foto){
        $this->foto = $foto;
    }
    function getFoto(){
        return $this->foto;
    }


    // Method untuk menampilkan data yang ada
    function display(){
        echo "ID        : " . $this->ID . "\n";
        echo "Name      : " . $this->name . "\n";
        echo "Kategori  : " . $this->kategori . "\n";
        echo "Harga     : " . $this->harga . "\n";
    }
}

?>