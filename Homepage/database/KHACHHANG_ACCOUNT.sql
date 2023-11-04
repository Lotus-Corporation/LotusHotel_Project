CREATE TABLE KHACHHANG_ACCOUNT(
USERNAME varchar(10) PRIMARY KEY not null,
HOTEN varchar(50),
EMAIL varchar(100),
SDT INT(11),
CCCD varchar(12),
PASS varchar(50) not null
)ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO KHACHHANG_ACCOUNT(USERNAME,HOTEN,EMAIL,SDT,CCCD,PASS) VALUES
('user1','Bùi Thị Quỳnh','buithiquynh@gmai.com',0123456782,'008899001122','12345'),
('user2','Hoàng Văn Long','hoangvanlong@gmai.com',0123456781,'009900112233','12345')