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
('km12','2023/01/01','2024/01/01','Sinh nhật hoành tráng','Giảm 10% Combo Spa-Fitness center, Bể bơi 4 mùa, Tổ chức tiệc trong nhà hàng theo yêu cầu/bàn','km12.png')
