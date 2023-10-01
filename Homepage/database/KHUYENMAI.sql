create table KHUYENMAI(
    MA_KM nvarchar(10) primary key not null,
    TENKM nvarchar(100),
    MOTA nvarchar(200),
    NGAYBATDAU date,
    NGAYKETTHUC date,
    DOITUONGAPDUNG nvarchar(100),
    MA_LOAIPHONG nvarchar(3),
    foreign key (MA_LOAIPHONG) references LOAIPHONG(MA_LOAIPHONG),
    HINHANHKM char(50)
) 


insert into KHUYENMAI(MA_KM,TENKM,MOTA,NGAYBATDAU,NGAYKETTHUC,DOITUONGAPDUNG,MA_LOAIPHONG,HINHANHKM) values
('km01','Hello Summer','Giảm 15% tất cả dịch vụ trong mùa hè.','2023-05-01','2023-07-31',null,null,'khuyenmai/km01.png'),
('km02','Honeymoon - Tuần Trang Mật','Giảm 200k cho 3 đêm trở lên.','2023-10-1','2023-12-31','ngày trả-ngày đặt>3 ',null,'khuyenmai/km02.png'),
('km03','Merry Christmas','Giảm 10%/phòng','2023-12-23','2023-12-26',null,null,'khuyenmai/km03.png'),
('km04','Lễ 30/4-1/5','Bữa tối “Seafood Night” vào tối 30/4 - 1/5 tại nhà hàng chỉ với 350k/người.','2023-04-30','2023-05-01',null,null,'khuyenmai/km04.png'),
('km05','Book online','Giảm 5% khi đặt phòng qua website.','2023-01-01','3000-01-01',null,null,'khuyenmai/km05.png'),
('km06','Ưu đãi đặc biệt','Giảm 1.000.000đ khi hóa đơn trên 10.000.000đ','2023-01-01','3000-01-01','Tổng tiền > 10.000.000đ',null,'khuyenmai/km06.png'),
('km07','Combo 3 bữa','Giảm 100k/người khi sử dụng combo ăn sáng/trưa/tối.','2023-01-01','3000-01-01',null,null,'khuyenmai/km07.png'),
('km08','Happy weekend - Ưu đãi cuối tuần','Giảm 100k/phòng và miễn phí bữa sáng.','2023-09-22','2023-09-23',null,null,'khuyenmai/km08.png'),
('km09','Lễ 2/9 Quốc Khánh','Giảm 200k/phòng và giảm 15%/dịch vụ Casino','2023-08-31','2023-09-02',null,null,'khuyenmai/km09.png'),
('km10','Tri ân khách hàng thân thiết','Giảm 20% trên tổng hóa đơn và Giảm 50% / dịch vụ spa.','2023-01-01','3000-01-01','Tích điểm hóa đơn > 50đ',null,'khuyenmai/km10.png'),
('km11','Ưu đãi phòng Suite','Giảm 10%/phòng, Giảm 10% dịch vụ chăm sóc trẻ và chăm sóc thú cưng','2023-01-01','3000-01-01',null,'SUT','khuyenmai/km11.png'),
('km12','Sinh nhật hoành tráng','Giảm 10% Combo Spa-Fitness center, Bể bơi 4 mùa, Tổ chức tiệc trong nhà hàng theo yêu cầu/bàn' , '2023-01-01' , '2024-01-01',null,null,'khuyenmai/km12.png')