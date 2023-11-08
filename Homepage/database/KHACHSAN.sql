CREATE TABLE NHANVIEN(
MA_NV varchar(10) PRIMARY KEY NOT NULL,
HOTEN varchar(50) NOT NULL,
SDT INT(10),
CHUCVU varchar(50),
DIACHI varchar(100),
CCCD varchar(12),
LUONG FLOAT(9)
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO NHANVIEN(MA_NV, HOTEN, SDT, CHUCVU, DIACHI, CCCD, LUONG) VALUES
('NV01', 'Nguyễn Văn Tài', 0987654321, 'Quản lý', '123 Đường Nguyễn Văn Trỗi, Phường 1, Quận Phú Nhuận, TP.HCM', '1234567890', 10000000),
('NV02', 'Trần Thị Bích', 0976543210, 'Nhân viên', '456 Đường Trần Quang Khải, Phường 2, Quận Tân Bình, TP.HCM', '2134567890', 8000000),
('NV03', 'Lê Văn Hùng', 0965432109, 'Quản lý', '789 Đường Lý Thái Tổ, Phường 3, Quận 10, TP.HCM', '3214567890', 8000000),
('NV04', 'Nguyễn Thị Ngọc', 0954321098, 'Nhân viên', '123 Đường Cách Mạng Tháng Tám, Phường 1, Quận 3, TP.HCM', '4567890123', 8000000),
('NV05', 'Nguyễn Văn Nam', 0943210987, 'Quản lý', '456 Đường Nguyễn Thị Minh Khai, Phường 2, Quận 3, TP.HCM', '5678901234', 10000000),
('NV06', 'Nguyễn Thị Hương', 0932109876, 'Nhân viên', '789 Đường Lê Văn Sỹ, Phường 3, Quận 3, TP.HCM', '6789012345', 8000000),
('NV07', 'Nguyễn Văn Anh', 0921098765, 'Quản lý', '123 Đường Nguyễn Đình Chiểu, Phường 1, Quận 1, TP.HCM', '7890123456', 10000000),
('NV08', 'Nguyễn Thị Hoa', 0910987654, 'Nhân viên', '456 Đường Đồng Khởi, Phường 2, Quận 1, TP.HCM', '8901234567', 8000000),
('NV09', 'Nguyễn Văn Dũng', 0909876543, 'Nhân viên', '789 Đường Lê Lợi, Phường 3, Quận 1, TP.HCM', '9012345678', 8000000),
('NV10', 'Nguyễn Thị Hằng', 0898765432, 'Quản lý', '123 Đường Nguyễn Huệ, Phường 1, Quận 1, TP.HCM', '01234567890', 10000000),
('NV11', 'Trần Thị Hà', 0998765432, 'Nhân viên', '456 Đường Nguyễn Văn Trỗi, Phường 1, Quận Phú Nhuận, TP.HCM', '2134567890', 8000000),
('NV12', 'Lê Văn Sơn', 0987654321, 'Quản lý', '789 Đường Trần Quang Khải, Phường 2, Quận Tân Bình, TP.HCM', '3214567890', 10000000),
('NV13', 'Nguyễn Thị Mai', 0976543210, 'Nhân viên', '123 Đường Lý Thái Tổ, Phường 3, Quận 10, TP.HCM', '4567890123', 8000000),
('NV14', 'Nguyễn Văn Dũng', 0965432109, 'Quản lý', '456 Đường Cách Mạng Tháng Tám, Phường 1, Quận 3, TP.HCM', '5678901234', 8000000),
('NV15', 'Nguyễn Thị Hằng', 0954321098, 'Quản lý', '789 Đường Nguyễn Thị Minh Khai, Phường 2, Quận 3, TP.HCM', '6789012345', 10000000),
('NV16', 'Nguyễn Văn Nam', 0943210987, 'Nhân viên', '123 Đường Lê Văn Sỹ, Phường 3, Quận 3, TP.HCM', '7890123456', 8000000),
('NV17', 'Nguyễn Thị Ngọc', 0932109876, 'Quản lý', '456 Đường Nguyễn Đình Chiểu, Phường 1, Quận 1, TP.HCM', '8901234567', 10000000),
('NV18', 'Nguyễn Văn Tài', 0921098765, 'Nhân viên', '789 Đường Đồng Khởi, Phường 2, Quận 1, TP.HCM', '9012345678', 8000000),
('NV19', 'Trần Thị Bích', 0910987654, 'Nhân viên', '123 Đường Lê Lợi, Phường 3, Quận 1, TP.HCM', '01234567890', 8000000),
('NV20', 'Lê Văn Hùng', 0909876543, 'Quản lý', '456 Đường Nguyễn Huệ, Phường 1, Quận 1, TP.HCM', '2134567890', 10000000);

CREATE TABLE KHACHHANG(
MA_KH int NOT NULL AUTO_INCREMENT PRIMARY KEY,
HOTEN varchar(50) not null,
SDT INT(10) not null,
CCCD varchar(12) not null
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO KHACHHANG(HOTEN,SDT, CCCD) VALUES
('Nguyễn Văn Tài', 0123456789, '001122334455'),
('Trần Thị Bích', 0123456788, '002233445566'),
('Lê Văn Hùng', 0123456787, '003344556677'),
('Phạm Thị Lan',0123456786, '004455667788'),
('Ngô Văn Minh',0123456785, '005566778899'),
('Vũ Thị Nga',0123456784, '006677889900'),
('Đặng Văn Phúc',0123456783, '007788990011'),
('Bùi Thị Quỳnh',0123456782, '008899001122'),
('Hoàng Văn Long',0123456781,'009900112233'),
('Lưu Thị Mai' ,0123456780, '010011223344'),
('Phan Văn Nam' ,0123456779, '011122334455'),
('Nguyễn Thị Oanh' ,0123456778, '012233445566'),
('Trần Văn Phong' ,0123456777, '013344556677'),
('Lê Thị Quế' ,0123456776, '014455667788'),
('Phạm Văn Rừng' ,0123456775, '015566778899'),
('Vũ Thị Sương' , 0123456774, '016677889900'),
('Đặng Văn Toàn' , 0123456773, '017788990011'),
('Bùi Thị Uyên', 0123456772, '018899001122'),
('Hoàng Văn Việt' , 0123456771, '019900112233'),
('Lưu Thị Xuân' , 0123456770, '020011223344');

CREATE TABLE KHACHHANG_ACCOUNT(
USERNAME varchar(10) PRIMARY KEY not null,
HOTEN varchar(50),
EMAIL varchar(100),
SDT INT(11),
CCCD varchar(12),
PASS varchar(50) not null,
ANHKH varchar(100)
);
INSERT INTO KHACHHANG_ACCOUNT(USERNAME,HOTEN,EMAIL,SDT,CCCD,PASS,ANHKH) VALUES
('user1','Bùi Thị Quỳnh','buithiquynh@gmai.com',0123456782,'008459001122','12345','user.png'),
('user2','Hoàng Văn Long','hoangvanlong@gmai.com',0123456893,'009231112233','12345','user.png'),
('user3','Bùi Thị Nhi','buinhi@gmai.com',0124566782,'008899001332','12345','user.png'),
('user4','Hoàng Văn Thanh','thanhne@gmai.com',0148886781,'009900112233','12345','user.png'),
('user5','Nguyễn Thị Yến Trang','trang123@gmai.com',0121567826,'055899001122','12345','user.png'),
('user6','Lưu Thị Mai','maibanhbeo@gmai.com',0123456780,'010011223344','12345','user.png'),
('user7','Đặng Văn Toàn','toancute@gmai.com',0123456773,'017788990011','12345','user.png'),
('user8','Ngô Văn Minh','minh2000@gmai.com',0123456785, '005566778899','12345','user.png'),
('user9','Phạm Văn Rừng','rungpham@gmai.com',0123456775, '015566778899','12345','user.png'),
('user10','trần Hào Kiệt','haokietdeptrai@gmai.com',0287456703,'017784029011','12345','user.png');

create table CHINHANH(
    MA_CN varchar(10) PRIMARY KEY NOT NULL,
    DIACHI varchar(100) NOT NULL,
    TINHTHANH varchar(50) not null,
    SDT int(10),
    MA_NV varchar(10) NOT NULL,
    FOREIGN KEY (MA_NV) REFERENCES NHANVIEN(MA_NV),
    HINHANH char(50)
);
insert into CHINHANH values
('CN01','1, đường Hoàng Liên, quận Sa Pa', 'Lào Cai',0937845210,'NV01','cn1.jpg'),
('CN02','99, đường Bắc Sơn, phường Hoàng Văn Thụ, thành phố Thái Nguyên','Thái Nguyên',0124861202,'NV03','cn2.jpg'),
('CN03','Nà Riềng 2, phường Quỳnh Sơn, Bắc Sơn',' Lạng Sơn',0798245122,'NV05','cn3.jpg'),
('CN04','61 Nguyễn Phúc Chu, phường Minh An, thành phố Hội An',' Quảng Nam',0933258746,'NV07','cn4.jpg'),
('CN05','21 đường Phạm Văn Đồng, phường An Hải Bắc, quận Sơn Trà',' Đà Nẵng',0123456789,'NV10','cn5.jpg'),
('CN06','Đường Du Lịch Số 1, Thôn Măng Đen, Xã Đak Long, Huyện Kon Plong',' Kon Tum',0745612358,'NV12','cn6.jpg'),
('CN07','200 Dã Tượng, Phường Tân An, Thành Phố Buôn Ma Thuột',' Đắk Lắk',0987946130,'NV14','cn7.jpg'),
('CN08','47B Đường Nguyễn Trãi 11, Quận 1',' TP. Hồ Chí Minh',0124719562,'NV15','cn8.jpg'),
('CN09','R2 03-04 Golf Valley, phường 2, Đà Lạt',' Lâm Đồng',0258946735,'NV18','cn9.jpg'),
('CN10','81 đường Phan Ngọc Hiển, phường 4, thành phố Cà Mau',' Cà Mau',0958794564,'NV20','cn10.jpg');

create table LOAIPHONG(
    MA_LOAIPHONG varchar(3) primary key not null,
    LOAIPHONG varchar(20) not null,
    Hinhanh varchar(50) 
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into LOAIPHONG values
('STD','Standard',"phong1.jpg"),
('SUP','Superior',"phong2.jpg"),
('DLX','Deluxe',"phong3.jpg"),
('SUT','Suite',"phong4.jpg");

create table PHONG(
    MA_PHONG varchar(3) not null primary key ,
    MA_LOAIPHONG varchar(3),
    foreign key (MA_LOAIPHONG) references LOAIPHONG(MA_LOAIPHONG),
    TENPHONG varchar(30),
    DONGIAPHONG int,
    MA_CN varchar(10),
    foreign key (MA_CN) references CHINHANH(MA_CN),
    SONGUOITOIDA int not null,
    SOGIUONG int not null,
    ANHPHONG char(50)
);

insert into PHONG values
('569','STD','STD Sa Pa',357000,'CN01',2,1,'STD1.jpg'),
('397','SUP','SUP Sa Pa',459000,'CN01',4,2,'SUP1.jpg'),
('917','DLX','DLX Sa Pa',780000,'CN01',6,2,'DLX1.jpg'),
('578','SUT','SUT Sa Pa',1400000,'CN01',8,3,'SUT1.jpg'),
('782','STD','STD Thái Nguyên',337000,'CN02',2,1,'STD2.jpg'),
('828','SUP','SUP Thái Nguyên',478000,'CN02',4,1,'SUP2.jpg'),
('467','DLX','DLX Thái Nguyên',8760000,'CN02',6,2,'DLX2.jpg'),
('927','SUT','SUT Thái Nguyên',4320000,'CN02',8,3,'SUT2.jpg'),
('567','STD','STD Lạng Sơn',343000,'CN03',2,2,'STD3.jpg'),
('156','SUP','SUP Lạng Sơn',543000,'CN03',4,2,'SUP3.jpg'),
('267','DLX','DLX Lạng Sơn',876000,'CN03',6,2,'DLX3.jpg'),
('752','SUT','SUT Lạng Sơn',2350000,'CN03',8,3,'SUT3.jpg'),
('529','STD','STD Quảng Nam',456000,'CN04',2,1,'STD4.jpg'),
('478','SUP','SUP Quảng Nam',643000,'CN04',4,1,'SUP4.jpg'),
('671','DLX','DLX Quảng Nam',767000,'CN04',6,2,'DLX4.jpg'),
('283','SUT','SUT Quảng Nam',1450000,'CN04',8,3,'SUT4.jpg'),
('176','STD','STD Đà Nẵng',354000,'CN05',2,1,'STD5.jpg'),
('475','SUP','SUP Đà Nẵng',565000,'CN05',4,2,'SUP5.jpg'),
('761','DLX','DLX Đà Nẵng',754000,'CN05',6,2,'DLX5.jpg'),
('468','SUT','SUT Đà Nẵng',1450000,'CN05',8,3,'SUT5.jpg'),
('876','STD','STD Kon Tum',335000,'CN06',2,2,'STD6.jpg'),
('453','SUP','SUP Kon Tum',565000,'CN06',4,2,'SUP6.jpg'),
('282','DLX','DLX Kon Tum',765000,'CN06',6,2,'DLX6.jpg'),
('527','SUT','SUT Kon Tum',2240000,'CN06',8,3,'SUT6.jpg'),
('682','STD','STD Đắk Lắk',334000,'CN07',2,1,'STD7.jpg'),
('572','SUP','SUP Đắk Lắk',435000,'CN07',4,2,'SUP7.jpg'),
('417','DLX','DLX Đắk Lắk',725000,'CN07',6,2,'DLX7.jpg'),
('168','SUT','SUT Đắk Lắk',1760000,'CN07',8,3,'SUT7.jpg'),
('286','STD','STD Hồ Chí Minh',325000,'CN08',2,1,'STD8.jpg'),
('358','SUP','SUP Hồ Chí Minh',487000,'CN08',4,2,'SUP8.jpg'),
('684','DLX','DLX Hồ Chí Minh',723000,'CN08',6,2,'DLX8.jpg'),
('672','SUT','SUT Hồ Chí Minh',1740000,'CN08',8,3,'SUT8.jpg'),
('362','STD','STD Lâm Đồng',378000,'CN09',2,1,'STD9.jpg'),
('359','SUP','SUP Lâm Đồng',453000,'CN09',4,2,'SUP9.jpg'),
('967','DLX','DLX Lâm Đồng',788000,'CN09',6,2,'DLX9.jpg'),
('568','SUT','SUT Lâm Đồng',1830000,'CN09',8,3,'SUT9.jpg'),
('537','STD','STD Cà Mau',376000,'CN10',2,2,'STD10.jpg'),
('562','SUP','SUP Cà Mau',454000,'CN10',4,2,'SUP10.jpg'),
('821','DLX','DLX Cà Mau',784000,'CN10',6,2,'DLX10.jpg'),
('543','SUT','SUT Cà Mau',1870000,'CN10',8,3,'SUT10.jpg');

CREATE TABLE NHATKIDATPHONG
(
MA_NKDP int NOT NULL AUTO_INCREMENT PRIMARY KEY,
MA_KH int,
FOREIGN KEY (MA_KH) REFERENCES KHACHHANG(MA_KH),
NGAYDAT date not null,
NGAYTRAPHONG date not null,
TONGTIENPHONG int
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO NHATKIDATPHONG (MA_KH,NGAYDAT, NGAYTRAPHONG) VALUES
(1, '2022-02-02', '2022-02-04'),
(2, '2022-03-05', '2022-03-06'),
(3, '2022-03-07', '2022-03-10'),
(4, '2022-05-27', '2022-05-30'),
(5, '2022-05-28', '2022-06-02'),
(6, '2022-12-27', '2023-01-01'),
(7, '2023-01-03', '2023-01-05'),
(8, '2023-02-08', '2023-02-10'),
(9, '2022-07-05', '2023-07-06'),
(10, '2022-08-20', '2023-08-23'),
(11, '2022-08-22', '2023-08-23'),
(12, '2022-08-26', '2023-08-30'),
(13, '2022-08-27', '2023-09-02'),
(14, '2022-09-12', '2023-09-15'),
(15, '2022-10-30', '2023-10-02'),
(16, '2022-10-30', '2023-10-03'),
(17, '2022-11-22', '2023-11-22'),
(18, '2022-11-23', '2023-11-26'),
(19, '2022-11-30', '2023-12-01'),
(20, '2022-12-08', '2023-12-12');

CREATE TABLE CHITIETNHATKIDATPHONG (
MA_CTNKDP int NOT NULL AUTO_INCREMENT PRIMARY KEY,
MA_NKDP int,
MA_PHONG varchar(3),
TENPHONG varchar(30),
DONGIAPHONG INT,
FOREIGN KEY (MA_NKDP) REFERENCES NHATKIDATPHONG(MA_NKDP),
FOREIGN KEY (MA_PHONG) REFERENCES PHONG(MA_PHONG)
);
Insert into CHITIETNHATKIDATPHONG (MA_NKDP,MA_PHONG,TENPHONG,DONGIAPHONG)Values
(1,'569','STD Sa Pa',357000),
(1,'397','SUP Sa Pa',459000),
(2,'917','DLX Sa Pa',780000),
(3,'578','SUT Sa Pa',1400000),
(3,'782','STD Thái Nguyên',337000),
(3,'828','SUP Thái Nguyên',478000),
(4,'917','DLX Sa Pa',780000),
(5,'567','STD Lạng Sơn',343000),
(6,'569','STD Sa Pa',357000),
(7,'156','SUP Lạng Sơn',543000),
(7,'417','DLX Đắk Lắk',725000),
(8,'967','DLX Lâm Đồng',788000),
(9,'568','SUT Lâm Đồng',1830000),
(9,'156','SUP Lạng Sơn',543000),
(9,'543','SUT Cà Mau',1870000),
(9,'821','DLX Cà Mau',784000),
(10,'927','SUT Thái Nguyên',4320000),
(11,'467','DLX Thái Nguyên',8760000),
(12,'156','SUP Lạng Sơn',543000),
(13,'529','STD Quảng Nam',456000),
(14,'475','SUP Đà Nẵng',565000),
(15,'527','SUT Kon Tum',2240000),
(16,'286','STD Hồ Chí Minh',325000),
(17,'967','DLX Lâm Đồng',788000),
(18,'397','SUP Sa Pa',459000),
(19,'684','DLX Hồ Chí Minh',723000),
(20,'562','SUP Cà Mau',454000),
(20,'468','SUT Đà Nẵng',1450000);

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
('20','Tổ chức tiệc trong nhà hàng theo yêu cầu', 8000000,'bàn','dv20.jpg');

create table NKSD_DICHVU (
    MA_NKSD_DICHVU int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MA_KH int,
    foreign key (MA_KH) references KHACHHANG(MA_KH),
    TONGTIEN_DV int
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into NKSD_DICHVU(MA_KH,TONGTIEN_DV) values
(10,500000),
(6,3050000),
(2,3500000),
(9,400000),
(12,720000),
(8,850000),
(1,450000),
(3,350000),
(5,854000),
(20,1240000);

create table CHITIET_NKSDDV (
    MA_CT_NKSDDV int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MA_NKSD_DICHVU int,
    foreign keY (MA_NKSD_DICHVU)  references NKSD_DICHVU(MA_NKSD_DICHVU),
    MA_DV varchar(10),
    foreign keY (MA_DV)  references DICHVU(MA_DV),
    TENDV varchar(100),
    SOLUONG int,
    DONGIADV int
);
insert into CHITIET_NKSDDV(MA_NKSD_DICHVU,MA_DV,SOLUONG)VALUES
(1,'01',2),
(1,'13',1),
(2,'18',3),
(3,'01',2),
(3,'12',5),
(3,'17',5),
(4,'06',2),
(4,'07',2),
(5,'19',1),
(5,'20',5),
(5,'13',1),
(5,'09',20),
(6,'12',3),
(6,'06',2),
(6,'17',3),
(7,'02',1),
(8,'08',4),
(8,'07',4),
(9,'14',2),
(9,'06',6),
(10,'01',1),
(10,'12',3),
(10,'17',3);

create table KHUYENMAI(
    MA_KM varchar(10) primary key not null,
    NGAYBATDAU date,
    NGAYKETTHUC date,
    TENKM varchar(100),
    MOTA varchar(200),
    HINHANHKM char(50)
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into KHUYENMAI values
('km01','2023/05/01','2023/07/31','Hello Summer','Giảm 15% tất cả dịch vụ trong mùa hè.','km01.png'),
('km02','2023/10/01','2023/12/31','Honeymoon - Tuần Trang Mật','Giảm 200k cho 3 đêm trở lên.','km02.png'),
('km03','2023/12/23','2023/12/26','Merry Christmas','Giảm 10%/phòng','km03.png'),
('km04','2023/04/30','2023/05/01','Lễ 30/4-1/5','Bữa tối “Seafood Night” vào tối 30/4 - 1/5 tại nhà hàng chỉ với 350k/người.','km04.png'),
('km05','2023/01/01','3000/01/01','Book online','Giảm 5% khi đặt phòng qua website.','km05.png'),
('km06','2023/01/01','3000/01/01','Ưu đãi đặc biệt','Giảm 1.000.000đ khi hóa đơn trên 10.000.000đ','km06.png'),
('km07','2023/01/01','3000/01/01','Combo 3 bữa','Giảm 100k/người khi sử dụng combo ăn sáng/trưa/tối.','km07.png'),
('km08','2023/05/05','2023/10/30','Happy weekend - Ưu đãi cuối tuần','Giảm 100k/phòng và miễn phí bữa sáng.','km08.png'),
('km09','2023/08/31','2023/09/02','Lễ 2/9 Quốc Khánh','Giảm 200k/phòng và giảm 15%/dịch vụ Casino','km09.png'),
('km10','2023/01/01','3000/01/01','Tri ân khách hàng thân thiết','Giảm 20% trên tổng hóa đơn và Giảm 50% / dịch vụ spa.','km10.png'),
('km11','2023/01/01','3000/01/01','Ưu đãi phòng Suite','Giảm 10%/phòng, Giảm 10% dịch vụ chăm sóc trẻ và chăm sóc thú cưng','km11.png'),
('km12','2023/01/01','2024/01/01','Sinh nhật hoành tráng','Giảm 10% Combo Spa-Fitness center, Bể bơi 4 mùa, Tổ chức tiệc trong nhà hàng theo yêu cầu/bàn','km12.png');

create table CHITIETKHUYENMAI(
    MA_CTKM varchar(10) primary key not null,
    MA_KM varchar(10),
    foreign key (MA_KM) references KHUYENMAI(MA_KM),
    GIATRI_PHANTRAM float,
    GIATRI_THUC int,
    MA_LOAIPHONG varchar(3),
    foreign key (MA_LOAIPHONG) references LOAIPHONG(MA_LOAIPHONG),
    MA_DV varchar(10),
    foreign key (MA_DV) references DICHVU(MA_DV)
);

insert into CHITIETKHUYENMAI(MA_CTKM,MA_KM,GIATRI_PHANTRAM,GIATRI_THUC,MA_LOAIPHONG,MA_DV) values
('CTKM01','km01',0.15,null,null,'01'),
('CTKM02','km01',0.15,null,null,'02'),
('CTKM03','km01',0.15,null,null,'03'),
('CTKM04','km01',0.15,null,null,'04'),
('CTKM05','km01',0.15,null,null,'05'),
('CTKM06','km01',0.15,null,null,'06'),
('CTKM07','km01',0.15,null,null,'07'),
('CTKM08','km01',0.15,null,null,'08'),
('CTKM09','km01',0.15,null,null,'09'),
('CTKM10','km01',0.15,null,null,'10'),
('CTKM11','km01',0.15,null,null,'11'),
('CTKM12','km01',0.15,null,null,'12'),
('CTKM13','km01',0.15,null,null,'13'),
('CTKM14','km01',0.15,null,null,'14'),
('CTKM15','km01',0.15,null,null,'15'),
('CTKM16','km01',0.15,null,null,'16'),
('CTKM17','km01',0.15,null,null,'17'),
('CTKM18','km01',0.15,null,null,'18'),
('CTKM19','km01',0.15,null,null,'19'),
('CTKM20','km01',0.15,null,null,'20'),


('CTKM21','km02',null,200000,null,null),


('CTKM22','km03',0.1,null,'STD',null),
('CTKM23','km03',0.1,null,'SUP',null),
('CTKM24','km03',0.1,null,'DLX',null),
('CTKM25','km03',0.1,null,'SUT',null),

('CTKM26','km04',null,200000,null,'11'),

('CTKM27','km05',0.05,null,'STD',null),
('CTKM28','km05',0.05,null,'SUP',null),
('CTKM29','km05',0.05,null,'DLX',null),
('CTKM30','km05',0.05,null,'SUT',null),

('CTKM31','km06',null,1000000,null,null),

('CTKM32','km07',null,100000,null,'12'),

('CTKM33','km08',null,100000,'STD',null),
('CTKM34','km08',null,100000,'SUP',null),
('CTKM35','km08',null,100000,'DLX',null),
('CTKM36','km08',null,100000,'SUT',null),
('CTKM37','km08',null,200000,null,'09'),


('CTKM38','km09',null,200000,'STD',null),
('CTKM39','km09',null,200000,'SUP',null),
('CTKM40','km09',null,200000,'DLX',null),
('CTKM41','km09',null,200000,'SUT',null),
('CTKM42','km09',0.15,null,null,'07'),


('CTKM43','km10',0.2,null,null,null),
('CTKM44','km10',0.5,null,null,'04'),


('CTKM45','km11',0.1,null,'SUT',null),
('CTKM46','km11',0.1,null,null,'15'),
('CTKM47','km11',0.1,null,null,'16'),


('CTKM48','km12',0.1,null,null,'18'),
('CTKM49','km12',0.1,null,null,'17'),
('CTKM50','km12',0.1,null,null,'20');

create table PTTT(
    MA_PTTT varchar(10) primary key not null,
    LOAIPTTT varchar(30) not null
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;
insert into PTTT(MA_PTTT,LOAIPTTT) values
('PTTT01','Tiền Mặt'),
('PTTT02','Banking'),
('PTTT03','Ví Điện Tử');

create table HOADON(
    MA_HD int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MA_NV varchar(10),
    FOREIGN KEY (MA_NV) REFERENCES NHANVIEN(MA_NV),
    MA_PTTT varchar(10),
    FOREIGN KEY (MA_PTTT) REFERENCES PTTT(MA_PTTT),
    MA_KH int,
    FOREIGN KEY (MA_KH) REFERENCES KHACHHANG(MA_KH),
    MA_NKDP int,
    FOREIGN KEY (MA_NKDP) REFERENCES NHATKIDATPHONG(MA_NKDP),
    MA_NKSD_DICHVU int,
    FOREIGN KEY (MA_NKSD_DICHVU) REFERENCES NKSD_DICHVU(MA_NKSD_DICHVU),
    TONG_HOADON float,
    TONG_KM_GIAM float,
    THANHTIEN float,
    THOIGIAN_LAP_HD date
);
insert into HOADON(MA_NV, MA_PTTT, MA_KH, MA_NKDP, MA_NKSD_DICHVU,TONG_HOADON,TONG_KM_GIAM, THOIGIAN_LAP_HD, THANHTIEN) values
('NV02','PTTT03',1,1,7,920000,200000,'2023/01/04',720000),
('NV04','PTTT01',2,2,3,935000,85000,'2023/01/06',850000),
('NV06','PTTT03',3,3,null,1149000,324000,'2023/02/10',825000),
('NV08','PTTT02',4,4,null,2556000,356000,'2023/03/14',2200000),
('NV09','PTTT02',5,5,9,1650000,250000,'2023/03/25',1400000),
('NV11','PTTT01',6,6,2,1605000,100000,'2023/04/01',1505000),
('NV13','PTTT03',7,7,null,3700000,0,'2023/04/23',3700000),
('NV16','PTTT01',8,8,6,980000,100000,'2023/05/10',880000),
('NV18','PTTT03',9,9,4,4752000,432000,'2023/05/22',4320000),
('NV19','PTTT01',10,10,1,2365000,320000,'2023/06/20',2045000),
('NV02','PTTT02',11,11,null,1905000,200000,'2023/06/30',1705000),
('NV04','PTTT02',12,12,5,2893000,345000,'2023/07/15',2548000),
('NV06','PTTT03',13,13,null,980150,100000,'2023/07/18',980050),
('NV08','PTTT01',14,14,null,1300000,200000,'2023/07/31',1100000),
('NV09','PTTT02',15,15,null,1607000,250000,'2023/08/02',1357000),
('NV11','PTTT02',16,16,8,1098540,100000,'2023/09/01',998540),
('NV13','PTTT01',17,17,null,985600,200000,'2023/10/22',785600),
('NV16','PTTT03',18,18,null,1320550,120050,'2023/12/01',1200500),
('NV18','PTTT03',19,19,null,3828000,348000,'2023/12/23',3480000),
('NV19','PTTT02',20,20,10,2254200,200000,'2023/12/25',2054200);

create table CHITIETHOADON(
    MA_CTHD int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    MA_HD int not null ,
    FOREIGN KEY (MA_HD) REFERENCES HOADON(MA_HD),
    MA_KM varchar(10) ,
    FOREIGN KEY (MA_KM) REFERENCES KHUYENMAI(MA_KM),
    TENKM varchar(100),
    GIATRI_PHANTRAM float,
    GIATRI_THUC int,
    LOAI_GIAM_GIA varchar(50)
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into CHITIETHOADON(MA_HD,MA_KM,TENKM,GIATRI_PHANTRAM,GIATRI_THUC,LOAI_GIAM_GIA) values
(1,'km05','Book online',0.05,null,'TREN_TONG_HD'),
(2,'km07','Combo 3 bữa',null,100000,'DICH_VU'),
(3,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(3,'km11','Ưu đãi phòng Suite',0.1,null,'LOAI_PHONG'),
(4,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(5,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(6,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(6,'km12','Sinh nhật hoành tráng',0.1,null,'DICH_VU'),
(7,'km03','Merry Christmas',0.1,null,'LOAI_PHONG'),
(8,'km07','Combo 3 bữa',null,100000,'DICH_VU'),
(8,'km12','Sinh nhật hoành tráng',0.1,null,'DICH_VU'),
(9,'km01','Hello Summer',0.15,null,'DICH_VU'),
(9,'km11','Ưu đãi phòng Suite',0.1,null,'LOAI_PHONG'),
(9,'km11','Ưu đãi phòng Suite',0.1,null,'LOAI_PHONG'),
(10,'km01','Hello Summer',0.15,null,'DICH_VU'),
(10,'km04','Lễ 30/4-1/5',null,200000,'DICH_VU'),
(10,'km11','Ưu đãi phòng Suite',0.1,null,'LOAI_PHONG'),
(11,'km01','Hello Summer',0.15,null,'DICH_VU'),
(11,'km05','Book online',0.05,null,'TREN_TONG_HD'),
(11,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(12,'km01','Hello Summer',0.15,null,'DICH_VU'),
(12,'km05','Book online',0.05,null,'TREN_TONG_HD'),
(12,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(12,'km12','Sinh nhật hoành tráng',0.1,null,'DICH_VU'),
(13,'km01','Hello Summer',0.15,null,'DICH_VU'),
(13,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(14,'km01','Hello Summer',0.15,null,'DICH_VU'),
(14,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(14,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(15,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(15,'km11','Ưu đãi phòng Suite',0.1,null,'DICH_VU'),
(16,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(17,'km09','Lễ 2/9 Quốc Khánh',0.15,null,'DICH_VU'),
(17,'km02','Honeymoon - Tuần Trang Mật',null,200000,'LOAI_PHONG'),
(17,'km08','Happy weekend - Ưu đãi cuối tuần',null,100000,'LOAI_PHONG'),
(18,'km02','Honeymoon - Tuần Trang Mật',null,200000,'LOAI_PHONG'),
(18,'km10','Tri ân khách hàng thân thiết',0.2,null,'TREN_TONG_HD'),
(19,'km02','Honeymoon - Tuần Trang Mật',null,200000,'LOAI_PHONG'),
(19,'km03','Merry Christmas',0.1,null,'LOAI_PHONG'),
(20,'km02','Honeymoon - Tuần Trang Mật',null,200000,'LOAI_PHONG'),
(20,'km03','Merry Christmas',0.1,null,'LOAI_PHONG'),
(20,'km07','Combo 3 bữa',null,100000,'DICH_VU'),
(20,'km11','Ưu đãi phòng Suite',0.1,null,'DICH_VU'),
(20,'km12','Sinh nhật hoành tráng',0.1,null,'DICH_VU');

create table ADMIN(
    TEN_DN varchar(20) primary key not null,
    PASS varchar(20) not null
);
insert into ADMIN values
('lotus','12345'),
('thuthao','12345'),
('yennhi','12345'),
('thaoanh','12345'),
('lehien','12345'),
('anhkiet','12345'),
('haidang','12345')

