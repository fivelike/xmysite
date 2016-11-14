use xmy;
create table accounts(
    uid int unsigned not null auto_increment primary key,
    username char(16) not null,
    password char(60),
    nickname char(20)
) ;
