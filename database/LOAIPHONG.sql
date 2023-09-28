create table LOAIPHONG(
    MA_LOAIPHONG nvarchar(4) primary key not null,
    LOAIPHONG nvarchar(20) not null,
    Hinhanh nvarchar(10) 
) ;
insert into LOAIPHONG values
('STD','Standard',"phong1.jpg"),
('SUP','Superior',"phong2.jpg"),
('DLX','Deluxe',"phong3.jpg"),
('SUT','Suite',"phong4.jpg")
