// Ketika dokumen sudah siap maka jalankan function di dalamnya
$(function() {

    // Menjalankan event apabila tombol Tambah Data Mahasiswa diklik
    $('.tombolTambahData').on('click', function() {

        // Mengubah isi html dari judul modal yang id-nya formModalLabel
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        
        // Mengubah isi html dari button Ubah Data yang berada di class modal-footer dan memiliki type submit
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // Mengubah attribute action di form yg berada di class modal-content
        $('.modal-content form').attr('action', 'http://localhost/phpmvc/13-Searching/public/mahasiswa/tambah');

        // Menghapus isi-isi form di modal
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
        
    });

    
    // Menjalankan event apabila tombol Edit diklik
    $('.tampilModalUbah').on('click', function() {

        // Mengubah isi html dari judul modal yang id-nya formModalLabel
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        
        // Mengubah isi html dari button Tambah Data yg berada di class modal-footer dan memiliki type submit
        $('.modal-footer button[type=submit]').html('Ubah Data');

        // Mengubah attribute action di form yg berada di class modal-content
        $('.modal-content form').attr('action', 'http://localhost/phpmvc/13-Searching/public/mahasiswa/ubah');
        
        // Mengambil data id dari tombol Edit dan menyimpannya ke dalam variable id
        const id = $(this).data('id');


        $.ajax({

            // Mengirim data ke suatu url dengan mengggunakan ajax
            url: 'http://localhost/phpmvc/13-Searching/public/mahasiswa/getUbah',     // Method getUbah berfungsi untuk mereturn data mahasiswa sesuai dengan id yg dikirimkan
            // Data yg akan dikirim ke url
            data: {id : id},                                    // id sebelah kiri -> nama data yg dikirimkan, id sebelah kanan -> isi datanya
            // Metode yg akan digunakan untuk mengirim data
            method: 'post',
            // Type data yg akan diterima
            dataType: 'json',
            // Menjalankan function berikut apabila success
            success: function(data) {                           // parameter data -> data yg didapatkan dari url apabila method-nya mereturn data

                // Mengisi tiap-tiap inputan dengan data yg didapatkan dari url
                $('#nama').val(data.nama);          // Mengubah isi (value) dari inputan yg id-nya nama dengan data nama
                $('#nim').val(data.nim);            // Mengubah isi (value) dari inputan yg id-nya nim dengan data nim
                $('#email').val(data.email);        // Mengubah isi (value) dari inputan yg id-nya email dengan data email
                $('#jurusan').val(data.jurusan);    // Mengubah isi (value) dari inputan yg id-nya jurusan dengan data jurusan
                $('#id').val(data.id);              // Mengubah isi (value) dari inputan yg id-nya id dengan data id
            }

        });

        
        
    });
    
    
    
});



/*
    NB :
        - $(’<css selector>’).on(’click’, function() { <action> }); ~> Berfungsi untuk menjalankan suatu function saat suatu class/id diklik.

        - $(’<css selector>’).html()                                ~> Berfungsi untuk mengubah isi html dari suatu class/id.
        - $(’<css selector>’).html(<isi html>);

        - json_encode()                                             ~> Berfungsi untuk mengubah nilai-nilai di PHP menjadi dalam bentuk json.
        - json_encode(<nilai-nilai di PHP>);



*/

