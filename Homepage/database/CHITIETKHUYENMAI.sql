create table CHITIETKHUYENMAI(
    MA_KM varchar(10) ,
    foreign key (MA_KM) references KHUYENMAI(MA_KM),
    GIATRI float not null,
    MA_CTNKDP varchar(10),
    foreign key (MA_CTNKDP) references CHITIETNHATKIDATPHONG(MA_CTNKDP),
    MA_DV varchar(10),
    foreign key (MA_DV) references DICHVU_KS(MA_DV)
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into CHITIETKHUYENMAI(MA_KM,GIATRI,MA_CTNKDP,MA_DV) values
('km01',0.15,null,null),
('km02',200000,null,null),
('km03',0.1,'CTDP2',null),
('km04',200000,null,'DV11'),
('km05',0.05,'CTDP7',null),
('km06',1000000,null,null),
('km07',100000,null,'DV12'),
('km08',100000,'CTDP10',null),
('km08',200000,null,'DV09'),
('km09',200000,'CTDP4',null),
('km09',0.15,null,'DV07'),
('km10',0.2,null,null),
('km10',0.5,null,'DV04'),
('km11',0.1,'CTDP17',null),
('km11',0.1,null,'DV15'),
('km11',0.1,null,'DV16'),
('km12',0.1,null,'DV18'),
('km12',0.1,null,'DV17'),
('km12',0.1,null,'DV20')