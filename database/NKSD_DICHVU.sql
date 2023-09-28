create table NKSD_DICHVU (
    MA_NKSD_DICHVU nvarchar(10) not null primary key ,
    MA_KH nvarchar(10) not null,
    foreign key (MA_KH) references KHACHHANG(MA_KH)
    );

insert into NKSD_DICHVU values
('NKDV01','KH10'),
('NKDV02','KH06'),
('NKDV03','KH02'),
('NKDV04','KH09'),
('NKDV05','KH12'),
('NKDV06','KH08'),
('NKDV07','KH01'),
('NKDV08','KH03'),
('NKDV09','KH05'),
('NKDV10','KH20')
