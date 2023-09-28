create table PTTT(
    MA_PTTT nvarchar(10) primary key not null,
    LOAIPTTT nvarchar(30) not null
) ;
insert into PTTT(MA_PTTT,LOAIPTTT) values
('PTTT01','Tiền Mặt'),
('PTTT02','Banking'),
('PTTT03','Ví Điện Tử')
