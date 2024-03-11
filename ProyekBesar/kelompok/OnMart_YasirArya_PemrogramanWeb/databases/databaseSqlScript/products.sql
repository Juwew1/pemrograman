show databases;

use tugas_besar_pw;

show tables;

create table products
(
    kode_produk   varchar(15)  not null,
    nama_produk   varchar(255) not null,
    jenis_produk  varchar(20)  not null,
    stok_produk   int(4)       not null,
    harga_produk  int          not null default 0,
    expire_date   varchar(20)  not null,
    gambar_produk varchar(255) not null,
    created_at    timestamp             default current_timestamp,
    primary key (kode_produk)
) engine = innodb;

desc products;

select * from products;

SELECT SUM(stok_produk) AS total_stok FROM products;