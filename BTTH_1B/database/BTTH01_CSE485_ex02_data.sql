CREATE TABLE tacgia (
	ma_tgia INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	ten_tgia VARCHAR(100) NOT NULL,
	hinh_tgia VARCHAR(100)
)

DROP TABLE tacgia

insert into tacgia (ten_tgia, hinh_tgia) VALUES ('Bùi Tuấn Tú', 'picture000');
insert into tacgia (ten_tgia, hinh_tgia) VALUES ('Nhacvietplus', 'picture001');
insert into tacgia (ten_tgia, hinh_tgia) VALUES ('MTP', 'picture002');


CREATE TABLE theloai (
	ma_tloai INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	ten_tloai VARCHAR(50) NOT NULL UNIQUE
)

DROP TABLE theloai

insert into theloai (ten_tloai) VALUES ('Nhạc chữ tình');
insert into theloai (ten_tloai) VALUES ('Nhạc trung cổ');
insert into theloai (ten_tloai) VALUES ('Nhạc baroque');

CREATE TABLE baiviet (
	ma_bviet INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	tieude VARCHAR(200) NOT NULL,
	ten_bhat VARCHAR(100) NOT NULL,
	ma_tloai INT UNSIGNED NOT NULL,
	tomtat TEXT NOT NULL,
	noidung TEXT,
	ma_tgia INT UNSIGNED NOT NULL,
	ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	hinhanh VARCHAR(200),
	FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
	FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)  
)

DROP TABLE baiviet

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Tình yêu', 'I Will Always Love You', 01, 'Nói về tình yêu ...', 'abcdef', 02, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Hy vọng', 'Yêu', 01, 'Nói về tình yêu ...', 'abcdef', 02, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, ma_tgia, hinhanh) 
VALUES ('Tình yêu', 'Anh yêu em', 01, 'abcdef', 03, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Sông', 'Anh không thương em', 02, 'Nói về tình yêu ...', 'abcdef', 03, 'picture004' );

insert into baiviet (tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) 
VALUES ('Thương nhau', 'I Will Always Love You', 03, 'Nói về tình yêu ...', 'abcdef', 01, 'picture004' );


SELECT * FROM baiviet
SELECT * FROM tacgia
SELECT * FROM theloai



/* a. Liệt kê các bài viết về các bài hát thuộc thể loại nhạc trữ tình */
SELECT * FROM baiviet WHERE ma_tloai LIKE 1
/* b. Liệt kê các bài viết của tác giả “Nhacvietplus” */
SELECT * FROM baiviet WHERE ma_tgia LIKE 2
SELECT baiviet.* FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia LIKE 'Nhacvietplus'
/* c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. */
SELECT * FROM theloai
SELECT * FROM baiviet
SELECT * FROM theloai WHERE ma_tloai NOT IN (SELECT DISTINCT ma_tloai FROM baiviet);
/* d.	Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. */
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, 
       tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet 
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;
/* e.	Tìm thể loại có số bài viết nhiều nhất*/
SELECT theloai.ten_tloai, ma_tloai FROM theloai JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai
ORDER BY COUNT(ma_bviet) DESC
LIMIT 1;
/* f.	Liệt kê 2 tác giả có số bài viết nhiều nhất */
SELECT tacgia.ten_tgia, ma_tgia FROM tacgia JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia

/* g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” */
SELECT * FROM baiviet WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%'
/* h.	Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” */
SELECT * FROM baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%'
/* i.	Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả */
CREATE VIEW vw_Music AS
/* j.	Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. */
CREATE PROCEDURE sp_DSBaiViet (IN ten_tloai VARCHAR(50))

/* k.	Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo./
ALTER TABLE theloai ADD SLBaiViet INT UNSIGNED NOT NULL DEFAULT 0;
CREATE TRIGGER tg_CapNhatTheLoai AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
	UPDATE theloai SET SLBaiViet = SLBaiViet + 1 WHERE ma_tloai = NEW.ma_tloai;
END;

/* l.	Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng Đăng nhập/Quản trị trang web. */

CREATE TABLE users (
	ma_user INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	ten_user VARCHAR(50) NOT NULL UNIQUE,
	matkhau VARCHAR(50) NOT NULL,
	quyen INT UNSIGNED NOT NULL DEFAULT 0
)

