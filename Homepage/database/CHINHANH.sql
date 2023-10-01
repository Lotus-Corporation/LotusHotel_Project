create table CHINHANH(
    MA_CN varchar(10) PRIMARY KEY NOT NULL,
    DIACHI varchar(100) NOT NULL,
    SDT int(10),
    MA_NV varchar(10) NOT NULL,
    FOREIGN KEY (MA_NV) REFERENCES NHANVIEN(MA_NV)
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into CHINHANH(MA_CN,DIACHI,SDT,MA_NV) values
('CN01','1, đường Hoàng Liên, quận Sa Pa, tỉnh Lào Cai',0937845210,'NV01'),
('CN02','99, đường Bắc Sơn, phường Hoàng Văn Thụ, thành phố Thái Nguyên, tỉnh Thái Nguyên',0124861202,'NV03'),
('CN03','Nà Riềng 2, phường Quỳnh Sơn, Bắc Sơn, tỉnh Lạng Sơn',0798245122,'NV05'),
('CN04','61 Nguyễn Phúc Chu, phường Minh An, thành phố Hội An, tỉnh Quảng Nam',0933258746,'NV07'),
('CN05','21 đường Phạm Văn Đồng, phường An Hải Bắc, quận Sơn Trà, Đà Nẵng',0123456789,'NV10'),
('CN06','Đường Du Lịch Số 1, Thôn Măng Đen, Xã Đak Long, Huyện Kon Plong, Tỉnh Kon Tum',0745612358,'NV12'),
('CN07','200 Dã Tượng, Phường Tân An, Thành Phố Buôn Ma Thuột, Tỉnh Đắk Lắk',0987946130,'NV14'),
('CN08','47B Đường Nguyễn Trãi 11, Quận 1, TP. Hồ Chí Minh',0124719562,'NV15'),
('CN09','R2 03-04 Golf Valley, phường 2, Đà Lạt, tỉnh Lâm Đồng',0258946735,'NV18'),
('CN10','81 đường Phan Ngọc Hiển, phường 4, thành phố Cà Mau, tỉnh Cà Mau',0958794564,'NV20')
