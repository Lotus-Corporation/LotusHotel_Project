create table CHITIETKHUYENMAI(
    MA_CTKM varchar(10) primary key not null,
    MA_KM varchar(10),
    foreign key (MA_KM) references KHUYENMAI(MA_KM),
    GIATRI float not null,
    MA_LOAIPHONG varchar(3),
    foreign key (MA_LOAIPHONG) references LOAIPHONG(MA_LOAIPHONG),
    MA_DV varchar(10),
    foreign key (MA_DV) references DICHVU(MA_DV)
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into CHITIETKHUYENMAI(MA_CTKM,MA_KM,GIATRI,MA_LOAIPHONG,MA_DV) values
('CTKM01','km01',0.15,null,'DV01'),
('CTKM02','km01',0.15,null,'DV02'),
('CTKM03','km01',0.15,null,'DV03'),
('CTKM04','km01',0.15,null,'DV04'),
('CTKM05','km01',0.15,null,'DV05'),
('CTKM06','km01',0.15,null,'DV06'),
('CTKM07','km01',0.15,null,'DV07'),
('CTKM08','km01',0.15,null,'DV08'),
('CTKM09','km01',0.15,null,'DV09'),
('CTKM10','km01',0.15,null,'DV10'),
('CTKM11','km01',0.15,null,'DV11'),
('CTKM12','km01',0.15,null,'DV12'),
('CTKM13','km01',0.15,null,'DV13'),
('CTKM14','km01',0.15,null,'DV14'),
('CTKM15','km01',0.15,null,'DV15'),
('CTKM16','km01',0.15,null,'DV16'),
('CTKM17','km01',0.15,null,'DV17'),
('CTKM18','km01',0.15,null,'DV18'),
('CTKM19','km01',0.15,null,'DV19'),
('CTKM20','km01',0.15,null,'DV20'),


('CTKM21','km02',200000,null,null),


('CTKM22','km03',0.1,'STD',null),
('CTKM23','km03',0.1,'SUP',null),
('CTKM24','km03',0.1,'DLX',null),
('CTKM25','km03',0.1,'SUT',null),

('CTKM26','km04',200000,null,'DV11'),

('CTKM27','km05',0.05,'STD',null),
('CTKM28','km05',0.05,'SUP',null),
('CTKM29','km05',0.05,'DLX',null),
('CTKM30','km05',0.05,'SUT',null),

('CTKM31','km06',1000000,null,null),

('CTKM32','km07',100000,null,'DV12'),

('CTKM33','km08',100000,'STD',null),
('CTKM34','km08',100000,'SUP',null),
('CTKM35','km08',100000,'DLX',null),
('CTKM36','km08',100000,'SUT',null),
('CTKM37','km08',200000,null,'DV09'),


('CTKM38','km09',200000,'STD',null),
('CTKM39','km09',200000,'SUP',null),
('CTKM40','km09',200000,'DLX',null),
('CTKM41','km09',200000,'SUT',null),
('CTKM42','km09',0.15,null,'DV07'),


('CTKM43','km10',0.2,null,null),
('CTKM44','km10',0.5,null,'DV04'),


('CTKM45','km11',0.1,'SUT',null),
('CTKM46','km11',0.1,null,'DV15'),
('CTKM47','km11',0.1,null,'DV16'),


('CTKM48','km12',0.1,null,'DV18'),
('CTKM49','km12',0.1,null,'DV17'),
('CTKM50','km12',0.1,null,'DV20')