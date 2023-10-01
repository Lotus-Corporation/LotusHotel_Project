create table HOADON(
    MA_HD varchar(15) primary key not null,
    MA_NV varchar(15) not null,
    MA_PTTT varchar(15) not null,
    MA_KH varchar(15) not null,
    MA_KM varchar(15) not null,
    MA_NKDP varchar(15) ,
    MA_NKSD_DICHVU varchar(15),
    NGAYLAP_HD date not null,
    TONGTIEN float not null
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into HOADON(MA_HD, MA_NV, MA_PTTT, MA_KH, MA_KM, MA_NKDP, MA_NKSD_DICHVU, NGAYLAP_HD, TONGTIEN) values
('HD01','NV02','PTTT03','KH01','km01','NK01','NKDV07','2022/02/04',5000000),
('HD02','NV04','PTTT01','KH02','km02','NK02','NKDV03','2022/03/06',1000000),
('HD03','NV06','PTTT03','KH03','km03','NK03','NKDV08','2022/03/10',8000000),
('HD04','NV08','PTTT02','KH04','km04','NK04',  null  ,'2022/05/30',3000000), 
('HD05','NV09','PTTT02','KH05','km05','NK05','NKDV09','2022/06/02',7000000), 
('HD06','NV11','PTTT01','KH06','km06','NK06','NKDV02','2023/01/01',2000000),
('HD07','NV13','PTTT03','KH07','km07','NK07',  null  ,'2023/01/05',9000000),
('HD09','NV16','PTTT01','KH08','km08','NK08','NKDV06','2023/02/10',4000000),
('HD08','NV18','PTTT03','KH09','km09','NK09','NKDV04','2023/07/06',6000000),
('HD10','NV19','PTTT01','KH10','km10','NK10','NKDV01','2023/08/23',10000000),
('HD11','NV02','PTTT02','KH11','km11','NK11',  null  ,'2021/08/23',2000000),
('HD12','NV04','PTTT02','KH12','km12','NK12','NKDV05','2023/08/30',5000000),
('HD13','NV06','PTTT03','KH13','km13','NK13',  null  ,'2023/09/02',1000000),
('HD14','NV08','PTTT01','KH14','km14','NK14',  null  ,'2023/09/15',8000000),
('HD15','NV09','PTTT02','KH15','km15','NK15',  null  ,'2023/10/02',3000000),
('HD16','NV11','PTTT02','KH16','km16','NK16',  null  ,'2023/10/03',7000000),
('HD17','NV13','PTTT01','KH17','km17','NK17',  null  ,'2023/11/22',4000000),
('HD18','NV16','PTTT03','KH18','km18','NK18',  null  ,'2023/11/26',6000000),
('HD19','NV18','PTTT03','KH19','km19','NK19',  null  ,'2023/12/01',9000000),
('HD20','NV19','PTTT02','KH20','km20','NK20','NKDV10','2023/12/12',1000000);

