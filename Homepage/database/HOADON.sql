create table HOADON(
    MA_HD varchar(15) primary key not null,
    MA_NV varchar(15) not null,
    MA_PTTT varchar(15) not null,
    MA_KH varchar(15) not null,
    MA_KM varchar(15) ,
    MA_NKDP varchar(15) ,
    MA_NKSD_DICHVU varchar(15),
    NGAYLAP_HD date not null,
    TONGTIEN float
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into HOADON(MA_HD, MA_NV, MA_PTTT, MA_KH, MA_KM, MA_NKDP, MA_NKSD_DICHVU, NGAYLAP_HD, TONGTIEN) values
('HD01','NV02','PTTT03','KH01',null,'NK01','NKDV07','2022/02/04',null),
('HD02','NV04','PTTT01','KH02',null,'NK02','NKDV03','2022/03/06',null),
('HD03','NV06','PTTT03','KH03',null,'NK03','NKDV08','2022/03/10',null),
('HD04','NV08','PTTT02','KH04',null,'NK04',  null  ,'2022/05/30',null),
('HD05','NV09','PTTT02','KH05',null,'NK05','NKDV09','2022/06/02',null),
('HD06','NV11','PTTT01','KH06',null,'NK06','NKDV02','2023/01/01',null),
('HD07','NV13','PTTT03','KH07',null,'NK07',  null  ,'2023/01/05',null),
('HD09','NV16','PTTT01','KH08',null,'NK08','NKDV06','2023/02/10',null),
('HD08','NV18','PTTT03','KH09',null,'NK09','NKDV04','2023/07/06',null),
('HD10','NV19','PTTT01','KH10',null,'NK10','NKDV01','2023/08/23',null),
('HD11','NV02','PTTT02','KH11',null,'NK11',  null  ,'2021/08/23',null),
('HD12','NV04','PTTT02','KH12',null,'NK12','NKDV05','2023/08/30',null),
('HD13','NV06','PTTT03','KH13',null,'NK13',  null  ,'2023/09/02',null),
('HD14','NV08','PTTT01','KH14',null,'NK14',  null  ,'2023/09/15',null),
('HD15','NV09','PTTT02','KH15',null,'NK15',  null  ,'2023/10/02',null),
('HD16','NV11','PTTT02','KH16',null,'NK16',  null  ,'2023/10/03',null),
('HD17','NV13','PTTT01','KH17',null,'NK17',  null  ,'2023/11/22',null),
('HD18','NV16','PTTT03','KH18',null,'NK18',  null  ,'2023/11/26',null),
('HD19','NV18','PTTT03','KH19',null,'NK19',  null  ,'2023/12/01',null),
('HD20','NV19','PTTT02','KH20',null,'NK20','NKDV10','2023/12/12',null)


