create table PTTT(
    MA_PTTT varchar(10) primary key not null,
    LOAIPTTT varchar(30) not null
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;
insert into PTTT(MA_PTTT,LOAIPTTT) values
('PTTT01','Tiền Mặt'),
('PTTT02','Banking'),
('PTTT03','Ví Điện Tử')
