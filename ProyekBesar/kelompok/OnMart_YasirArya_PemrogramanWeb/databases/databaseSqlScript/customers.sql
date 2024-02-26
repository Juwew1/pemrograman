show databases;

create database tugas_besar_PW;

use tugas_besar_PW;

create table customers
(
    email      varchar(255) not null,
    nama       varchar(150) not null,
    no_telepon varchar(13)  not null,
    alamat     text,
    primary key (email)
) engine = innodb;

show tables;

desc customers;

select *
from customers;

alter table customers
    add column created_at timestamp default current_timestamp after alamat;