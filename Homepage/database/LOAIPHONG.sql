create table LOAIPHONG(
    MA_LOAIPHONG varchar(4) primary key not null,
    LOAIPHONG varchar(20) not null,
    Hinhanh varchar(10) 
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;
insert into LOAIPHONG values
('STD','Standard',"phong1.jpg"),
('SUP','Superior',"phong2.jpg"),
('DLX','Deluxe',"phong3.jpg"),
('SUT','Suite',"phong4.jpg")