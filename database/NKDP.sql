CREATE TABLE NHATKIDATPHONG
(
MA_NKDP nvarchar(10) primary key not null,
MA_KH nvarchar(10),
NGAYDAT date not null,
NGAYTRAPHONG date not null,
TRANGTHAI nvarchar(50) not null,
FOREIGN KEY (MA_KH) REFERENCES KHACHHANG(MA_KH)
);


INSERT INTO NHATKIDATPHONG (MA_NKDP, MA_KH, NGAYDAT, NGAYTRAPHONG, TRANGTHAI)
VALUES
('NK01', 'KH01', '2022-02-02', '2022-02-04', 'Occupied'),
('NK02', 'KH02', '2022-03-05', '2022-03-06', 'Stayover'),
('NK03', 'KH03', '2022-03-07', '2022-03-10', 'Due out'),
('NK04', 'KH04', '2022-05-27', '2022-05-30', 'Skipper'),
('NK05', 'KH05', '2022-05-28', '2022-06-02', 'Occupied'),
('NK06', 'KH06', '2022-12-27', '2023-01-01', 'Occupied'),
('NK07', 'KH07', '2023-01-03', '2023-01-05', 'Skipper'),
('NK08', 'KH08', '2023-02-08', '2023-02-10', 'Due out'),
('NK09', 'KH09', '2022-07-05', '2023-07-06', 'Occupied'),
('NK10', 'KH10', '2022-08-20', '2023-08-23', 'Occupied'),
('NK11', 'KH11', '2022-08-22', '2023-08-23', 'Occupied'),
('NK12', 'KH12', '2022-08-26', '2023-08-30', 'Occupied'),
('NK13', 'KH13', '2022-08-27', '2023-09-02', 'Occupied'),
('NK14', 'KH14', '2022-09-12', '2023-09-15', 'Occupied'),
('NK15', 'KH15', '2022-10-30', '2023-10-02', 'Occupied'),
('NK16', 'KH16', '2022-10-30', '2023-10-03', 'Occupied'),
('NK17', 'KH17', '2022-11-22', '2023-11-22', 'Occupied'),
('NK18', 'KH18', '2022-11-23', '2023-11-26', 'Occupied'),
('NK19', 'KH19', '2022-11-30', '2023-12-01', 'Occupied'),
('NK20', 'KH20', '2022-12-08', '2023-12-12', 'Occupied');
