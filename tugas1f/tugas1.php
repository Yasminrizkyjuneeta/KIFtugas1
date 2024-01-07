<?php
    class Mahasiswa {
       var $nama;
       var $program_studi;
       var $nim;
       var $ipk;
    
        function setNama($nama){
            $this->nama = $nama;      
        }

        function setProgram_Studi($program_studi){
            $this->program_studi = $program_studi;      
        }

        function setNIM($nim){
            $this->nim = $nim;      
        }

        function setIPK($ipk){
            $this->ipk = $ipk;      
        }
    }    

    $yasmin = new Mahasiswa();
    $yasmin->setNama('Yasmin');
    $yasmin->setProgram_Studi('IT & Design');
    $yasmin->setNIM('1818118');
    $yasmin->setIPK('3.99');

    
    echo 'Mahasiswa '. $yasmin->nama. ' program studi '. $yasmin->program_studi. ' dengan NIM '. $yasmin->nim. ' memiliki IPk '. $yasmin->ipk;

?>