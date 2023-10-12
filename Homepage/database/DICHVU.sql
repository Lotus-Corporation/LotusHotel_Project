create table DICHVU (
    MA_DV varchar(10) not null primary key ,
    TENDV varchar(100) not null,
    DONGIADV int not null,
    DONVITINH varchar(100) not null,
    HINHANHDV varchar(10) not null
)  ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into DICHVU values
('DV01','Giặt ủi quần áo',55000,'kg','dv1.jpg'),
('DV02','Cho thuê xe tự lái',880000,'24 giờ','dv2.jpg'),
('DV03','Xe đưa đón sân bay',399000,'lần đưa/đón','dv3.jpg'),
('DV04','Spa',825000,'người','dv4.jpg'),
('DV05','Fitness center',1250000,'người','dv5.jpg'),
('DV06','Sân golf và sân tennis',2500000,'người','dv6.jpg'),
('DV07','Casino',1050000,'vé-24h','dv7.jpg'),
('DV08','Quầy bar',700000,'người','dv8.jpg'),
('DV09','Ăn sáng',200000,'người','dv9.jpg'),
('DV10','Ăn trưa',450000,'người','dv10.jpg'),
('DV11','Ăn tối',550000,'người','dv11.jpg'),
('DV12','Combo ăn sáng/trưa/tối',1000000,'người','dv12.jpg'),
('DV13','Dọn phòng',250000,'lần','dv13.jpg'),
('DV14','Phòng họp',300000,'giờ','dv14.jpg'),
('DV15','Chăm sóc trẻ',405000,'giờ','dv15.jpg'),
('DV16','Chăm sóc thú cưng',175000,'24 giờ','dv16.jpg'),
('DV17','Bể bơi 4 mùa',370000,'người','dv17.jpg'),
('DV18','Combo Spa-Fitness center',2000000,'người','dv18.jpg'),
('DV19','Trang trí phòng theo chủ đề',799000,'phòng','dv19.jpg'),
('DV20','Tổ chức tiệc trong nhà hàng theo yêu cầu', 8000000,'bàn','dv19.jpg')


