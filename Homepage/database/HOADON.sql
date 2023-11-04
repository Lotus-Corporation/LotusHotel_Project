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
    TONG_KM_GIAM float,
    TONG_HOADON float,
    THOIGIAN_LAP_HD date
);
-- insert into HOADON(MA_NV, MA_PTTT, MA_KH, MA_NKDP, MA_NKSD_DICHVU, THOIGIAN_LAP_HD, TONGTIEN) values
-- ('NV02','PTTT03',1,1,7,'2023/01/04',null),
-- ('NV04','PTTT01',2,2,3,'2023/01/06',null),
-- ('NV06','PTTT03',3,3,null,'2023/02/10',null),
-- ('NV08','PTTT02',4,4,null,'2023/03/14',null),
-- ('NV09','PTTT02',5,5,9,'2023/03/25',null),
-- ('NV11','PTTT01',6,6,2,'2023/04/01',null),
-- ('NV13','PTTT03',7,7,null,'2023/04/23',null),
-- ('NV16','PTTT01',8,8,6,'2023/05/10',null),
-- ('NV18','PTTT03',9,9,4,'2023/05/22',null),
-- ('NV19','PTTT01',10,10,1,'2023/06/20',null),
-- ('NV02','PTTT02',11,11,null,'2023/06/30',null),
-- ('NV04','PTTT02',12,12,5,'2023/07/15',null),
-- ('NV06','PTTT03',13,13,null,'2023/07/18',null),
-- ('NV08','PTTT01',14,14,null,'2023/07/31',null),
-- ('NV09','PTTT02',15,15,null,'2023/08/02',null),
-- ('NV11','PTTT02',16,16,8,'2023/09/01',null),
-- ('NV13','PTTT01',17,17,null,'2023/10/22',null),
-- ('NV16','PTTT03',18,18,null,'2023/12/01',null),
-- ('NV18','PTTT03',19,19,null,'2023/12/23',null),
-- ('NV19','PTTT02',20,20,10,'2023/12/25',null)


