CREATE TABLE KHACHHANG_ACCOUNT(
USERNAME varchar(10) PRIMARY KEY not null,
HOTEN varchar(50),
EMAIL varchar(100),
SDT INT(11),
CCCD varchar(12),
PASS varchar(50) not null
);

INSERT INTO KHACHHANG_ACCOUNT(USERNAME,HOTEN,EMAIL,SDT,CCCD,PASS) VALUES
('user1','Bùi Thị Quỳnh','buithiquynh@gmai.com',0123456782,'008459001122','12345'),
('user2','Hoàng Văn Long','hoangvanlong@gmai.com',0123456893,'009231112233','12345'),
('user3','Bùi Thị Nhi','buinhi@gmai.com',0124566782,'008899001332','12345'),
('user4','Hoàng Văn Thanh','thanhne@gmai.com',0148886781,'009900112233','12345'),
('user5','Nguyễn Thị Yến Trang','trang123@gmai.com',0121567826,'055899001122','12345'),
('user6','Lưu Thị Mai','maibanhbeo@gmai.com',0123456780,'010011223344','12345'),
('user7','Đặng Văn Toàn','toancute@gmai.com',0123456773,'017788990011','12345'),
('user8','Ngô Văn Minh','minh2000@gmai.com',0123456785, '005566778899','12345'),
('user9','Phạm Văn Rừng','rungpham@gmai.com',0123456775, '015566778899','12345'),
('user10','trần Hào Kiệt','haokietdeptrai@gmai.com',0287456703,'017784029011','12345');
