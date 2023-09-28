CREATE TABLE NHANVIEN(
MA_NV nVARCHAR(10) PRIMARY KEY NOT NULL,
HOTEN nVARCHAR(50) NOT NULL,
SDT INT(10),
CHUCVU NVARCHAR(50),
DIACHI NVARCHAR(100),
CCCD NVARCHAR(12),
LUONG FLOAT(9)
) ENGINE= InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO NHANVIEN(MA_NV, HOTEN, SDT, CHUCVU, DIACHI, CCCD, LUONG) VALUES
('NV01', 'Nguyễn Văn Tài', 0987654321, 'Quản lý', '123 Đường Nguyễn Văn Trỗi, Phường 1, Quận Phú Nhuận, TP.HCM', '1234567890', 10000000),
('NV02', 'Trần Thị Bích', 0976543210, 'Nhân viên', '456 Đường Trần Quang Khải, Phường 2, Quận Tân Bình, TP.HCM', '2134567890', 8000000),
('NV03', 'Lê Văn Hùng', 0965432109, 'Quản lý', '789 Đường Lý Thái Tổ, Phường 3, Quận 10, TP.HCM', '3214567890', 8000000),
('NV04', 'Nguyễn Thị Ngọc', 0954321098, 'Nhân viên', '123 Đường Cách Mạng Tháng Tám, Phường 1, Quận 3, TP.HCM', '4567890123', 8000000),
('NV05', 'Nguyễn Văn Nam', 0943210987, 'Quản lý', '456 Đường Nguyễn Thị Minh Khai, Phường 2, Quận 3, TP.HCM', '5678901234', 10000000),
('NV06', 'Nguyễn Thị Hương', 0932109876, 'Nhân viên', '789 Đường Lê Văn Sỹ, Phường 3, Quận 3, TP.HCM', '6789012345', 8000000),
('NV07', 'Nguyễn Văn Anh', 0921098765, 'Quản lý', '123 Đường Nguyễn Đình Chiểu, Phường 1, Quận 1, TP.HCM', '7890123456', 10000000),
('NV08', 'Nguyễn Thị Hoa', 0910987654, 'Nhân viên', '456 Đường Đồng Khởi, Phường 2, Quận 1, TP.HCM', '8901234567', 8000000),
('NV09', 'Nguyễn Văn Dũng', 0909876543, 'Nhân viên', '789 Đường Lê Lợi, Phường 3, Quận 1, TP.HCM', '9012345678', 8000000),
('NV10', 'Nguyễn Thị Hằng', 0898765432, 'Quản lý', '123 Đường Nguyễn Huệ, Phường 1, Quận 1, TP.HCM', '01234567890', 10000000),
('NV11', 'Trần Thị Hà', 0998765432, 'Nhân viên', '456 Đường Nguyễn Văn Trỗi, Phường 1, Quận Phú Nhuận, TP.HCM', '2134567890', 8000000),
('NV12', 'Lê Văn Sơn', 0987654321, 'Quản lý', '789 Đường Trần Quang Khải, Phường 2, Quận Tân Bình, TP.HCM', '3214567890', 10000000),
('NV13', 'Nguyễn Thị Mai', 0976543210, 'Nhân viên', '123 Đường Lý Thái Tổ, Phường 3, Quận 10, TP.HCM', '4567890123', 8000000),
('NV14', 'Nguyễn Văn Dũng', 0965432109, 'Quản lý', '456 Đường Cách Mạng Tháng Tám, Phường 1, Quận 3, TP.HCM', '5678901234', 8000000),
('NV15', 'Nguyễn Thị Hằng', 0954321098, 'Quản lý', '789 Đường Nguyễn Thị Minh Khai, Phường 2, Quận 3, TP.HCM', '6789012345', 10000000),
('NV16', 'Nguyễn Văn Nam', 0943210987, 'Nhân viên', '123 Đường Lê Văn Sỹ, Phường 3, Quận 3, TP.HCM', '7890123456', 8000000),
('NV17', 'Nguyễn Thị Ngọc', 0932109876, 'Quản lý', '456 Đường Nguyễn Đình Chiểu, Phường 1, Quận 1, TP.HCM', '8901234567', 10000000),
('NV18', 'Nguyễn Văn Tài', 0921098765, 'Nhân viên', '789 Đường Đồng Khởi, Phường 2, Quận 1, TP.HCM', '9012345678', 8000000),
('NV19', 'Trần Thị Bích', 0910987654, 'Nhân viên', '123 Đường Lê Lợi, Phường 3, Quận 1, TP.HCM', '01234567890', 8000000),
('NV20', 'Lê Văn Hùng', 0909876543, 'Quản lý', '456 Đường Nguyễn Huệ, Phường 1, Quận 1, TP.HCM', '2134567890', 10000000)