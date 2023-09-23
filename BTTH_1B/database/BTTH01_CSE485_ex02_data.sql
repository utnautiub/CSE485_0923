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
	ten_tloai VARCHAR(50) NOT NULL
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
