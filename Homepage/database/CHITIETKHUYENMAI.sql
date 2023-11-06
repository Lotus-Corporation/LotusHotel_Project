create table CHITIETKHUYENMAI(
    MA_CTKM varchar(10) primary key not null,
    MA_KM varchar(10),
    foreign key (MA_KM) references KHUYENMAI(MA_KM),
    GIATRI_PHANTRAM float,
    GIATRI_THUC int,
    MA_LOAIPHONG varchar(3),
    foreign key (MA_LOAIPHONG) references LOAIPHONG(MA_LOAIPHONG),
    MA_DV varchar(10),
    foreign key (MA_DV) references DICHVU(MA_DV)
);

insert into CHITIETKHUYENMAI(MA_CTKM,MA_KM,GIATRI_PHANTRAM,GIATRI_THUC,MA_LOAIPHONG,MA_DV) values
('CTKM01','km01',0.15,null,null,'01'),
('CTKM02','km01',0.15,null,null,'02'),
('CTKM03','km01',0.15,null,null,'03'),
('CTKM04','km01',0.15,null,null,'04'),
('CTKM05','km01',0.15,null,null,'05'),
('CTKM06','km01',0.15,null,null,'06'),
('CTKM07','km01',0.15,null,null,'07'),
('CTKM08','km01',0.15,null,null,'08'),
('CTKM09','km01',0.15,null,null,'09'),
('CTKM10','km01',0.15,null,null,'10'),
('CTKM11','km01',0.15,null,null,'11'),
('CTKM12','km01',0.15,null,null,'12'),
('CTKM13','km01',0.15,null,null,'13'),
('CTKM14','km01',0.15,null,null,'14'),
('CTKM15','km01',0.15,null,null,'15'),
('CTKM16','km01',0.15,null,null,'16'),
('CTKM17','km01',0.15,null,null,'17'),
('CTKM18','km01',0.15,null,null,'18'),
('CTKM19','km01',0.15,null,null,'19'),
('CTKM20','km01',0.15,null,null,'20'),


('CTKM21','km02',null,200000,null,null),


('CTKM22','km03',0.1,null,'STD',null),
('CTKM23','km03',0.1,null,'SUP',null),
('CTKM24','km03',0.1,null,'DLX',null),
('CTKM25','km03',0.1,null,'SUT',null),

('CTKM26','km04',null,200000,null,'11'),

('CTKM27','km05',0.05,null,'STD',null),
('CTKM28','km05',0.05,null,'SUP',null),
('CTKM29','km05',0.05,null,'DLX',null),
('CTKM30','km05',0.05,null,'SUT',null),

('CTKM31','km06',null,1000000,null,null),

('CTKM32','km07',null,100000,null,'12'),

('CTKM33','km08',null,100000,'STD',null),
('CTKM34','km08',null,100000,'SUP',null),
('CTKM35','km08',null,100000,'DLX',null),
('CTKM36','km08',null,100000,'SUT',null),
('CTKM37','km08',null,200000,null,'09'),


('CTKM38','km09',null,200000,'STD',null),
('CTKM39','km09',null,200000,'SUP',null),
('CTKM40','km09',null,200000,'DLX',null),
('CTKM41','km09',null,200000,'SUT',null),
('CTKM42','km09',0.15,null,null,'07'),


('CTKM43','km10',0.2,null,null,null),
('CTKM44','km10',0.5,null,null,'04'),


('CTKM45','km11',0.1,null,'SUT',null),
('CTKM46','km11',0.1,null,null,'15'),
('CTKM47','km11',0.1,null,null,'16'),


('CTKM48','km12',0.1,null,null,'18'),
('CTKM49','km12',0.1,null,null,'17'),
('CTKM50','km12',0.1,null,null,'20')