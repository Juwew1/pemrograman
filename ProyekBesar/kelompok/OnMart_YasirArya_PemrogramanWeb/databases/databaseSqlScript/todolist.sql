show databases;

use tugas_besar_pw;

show tables;

create table todolist
(
    id         int  not null auto_increment,
    pesan      text,
    created_at date not null default CURRENT_TIMESTAMP,
    primary key (id)
) engine = innodb;

desc todolist;

select *
from todolist;

DELETE
FROM todolist
WHERE id = 1;

alter table todolist
    add column status varchar(10) default 'belum' after pesan;

select *
from todolist;

select count(status) as totalStatus
from todolist
where todolist.status = 'belum';
