create table DICHVU (
    MA_DV varchar(10) not null primary key ,
    TENDV varchar(100) not null,
    DONGIADV int not null,
    DONVITINH varchar(100) not null,
    HINHANHDV varchar(10) not null
)  ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into DICHVU values
('01','Giặt ủi quần áo',55000,'kg','dv1.jpg'),
('02','Cho thuê xe tự lái',880000,'24 giờ','dv2.jpg'),
('03','Xe đưa đón sân bay',399000,'lần đưa/đón','dv3.jpg'),
('04','Spa',825000,'người','dv4.jpg'),
('05','Fitness center',1250000,'người','dv5.jpg'),
('06','Sân golf và sân tennis',2500000,'người','dv6.jpg'),
('07','Casino',1050000,'vé-24h','dv7.jpg'),
('08','Quầy bar',700000,'người','dv8.jpg'),
('09','Ăn sáng',200000,'người','dv9.jpg'),
('10','Ăn trưa',450000,'người','dv10.jpg'),
('11','Ăn tối',550000,'người','dv11.jpg'),
('12','Combo ăn sáng/trưa/tối',1000000,'người','dv12.jpg'),
('13','Dọn phòng',250000,'lần','dv13.jpg'),
('14','Phòng họp',300000,'giờ','dv14.jpg'),
('15','Chăm sóc trẻ',405000,'giờ','dv15.jpg'),
('16','Chăm sóc thú cưng',175000,'24 giờ','dv16.jpg'),
('17','Bể bơi 4 mùa',370000,'người','dv17.jpg'),
('18','Combo Spa-Fitness center',2000000,'người','dv18.jpg'),
('19','Trang trí phòng theo chủ đề',799000,'phòng','dv19.jpg'),
('20','Tổ chức tiệc trong nhà hàng theo yêu cầu', 8000000,'bàn','dv20.jpg')


