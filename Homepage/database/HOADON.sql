create table HOADON(
    MA_HD varchar(10) primary key not null,
    MA_NV varchar(10) not null ,
    FOREIGN KEY (MA_NV) REFERENCES NHANVIEN(MA_NV),
    MA_PTTT varchar(10) not null ,
    FOREIGN KEY (MA_PTTT) REFERENCES PTTT(MA_PTTT),
    MA_KH varchar(10) ,
    FOREIGN KEY (MA_KH) REFERENCES KHACHHANG(MA_KH),
    MA_NKDP varchar(10) ,
    FOREIGN KEY (MA_NKDP) REFERENCES NHATKIDATPHONG(MA_NKDP),
    MA_NKSD_DICHVU varchar(10),
    FOREIGN KEY (MA_NKSD_DICHVU) REFERENCES NKSD_DICHVU(MA_NKSD_DICHVU),
    NGAYLAP_HD date not null,
    TONGTIEN float
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into HOADON(MA_HD, MA_NV, MA_PTTT, MA_KH, MA_NKDP, MA_NKSD_DICHVU, NGAYLAP_HD, TONGTIEN) values
('HD01','NV02','PTTT03','KH01','NK01','NKDV07','2023/01/04',null),
('HD02','NV04','PTTT01','KH02','NK02','NKDV03','2023/01/06',null),
('HD03','NV06','PTTT03','KH03','NK03',  null  ,'2023/02/10',null),
('HD04','NV08','PTTT02','KH04','NK04',  null  ,'2023/03/14',null),
('HD05','NV09','PTTT02','KH05','NK05','NKDV09','2023/03/25',null),
('HD06','NV11','PTTT01','KH06','NK06','NKDV02','2023/04/01',null),
('HD07','NV13','PTTT03','KH07','NK07',  null  ,'2023/04/23',null),
('HD09','NV16','PTTT01','KH08','NK08','NKDV06','2023/05/10',null),
('HD08','NV18','PTTT03','KH09','NK09','NKDV04','2023/05/22',null),
('HD10','NV19','PTTT01','KH10','NK10','NKDV01','2023/06/20',null),
('HD11','NV02','PTTT02','KH11','NK11',  null  ,'2023/06/30',null),
('HD12','NV04','PTTT02','KH12','NK12','NKDV05','2023/07/15',null),
('HD13','NV06','PTTT03','KH13','NK13',  null  ,'2023/07/18',null),
('HD14','NV08','PTTT01','KH14','NK14',  null  ,'2023/07/31',null),
('HD15','NV09','PTTT02','KH15','NK15',  null  ,'2023/08/02',null),
('HD16','NV11','PTTT02','KH16','NK16','NKDV08','2023/09/01',null),
('HD17','NV13','PTTT01','KH17','NK17',  null  ,'2023/10/22',null),
('HD18','NV16','PTTT03','KH18','NK18',  null  ,'2023/12/01',null),
('HD19','NV18','PTTT03','KH19','NK19',  null  ,'2023/12/23',null),
('HD20','NV19','PTTT02','KH20','NK20','NKDV10','2023/12/25',null)


