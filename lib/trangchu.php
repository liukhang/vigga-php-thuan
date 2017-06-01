<?php

function TinMoiNhat_BonTin()
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách
	$sql = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,6";
	 
	return mysqli_query($conn,$sql);
}

function TinXemNhieuNhat()
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách
	$sql = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,6";
	 
	return mysqli_query($conn,$sql);
}
/*
function QuangCao($vitri)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách
	$sql = "SELECT * FROM quangcao WHERE vitri = $vitri";
	
	return mysqli_query($conn,$sql);
}
*/
function DanhSachTheLoai()
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách
	$sql = "SELECT * FROM theloai";
	
	return mysqli_query($conn,$sql);
}
function DanhSachLoaiTin_TheoTheLoai($idTL)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM loaitin WHERE idTL = $idTL";
	
	return mysqli_query($conn,$sql);
}
function TinMoi_BenTrai($idTL)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC ";
	
	return mysqli_query($conn,$sql);
}
function TinTheoLoaiTin($idLT)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC";
	
	return mysqli_query($conn,$sql);
}
function TinTheoLoaiTin_PhanTrang($idLT,$from,$sotin1trang)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT $from,$sotin1trang";
	
	return mysqli_query($conn,$sql);
}
function TinTheoTheLoai($idTL)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LIMIT 0,10";
	
	return mysqli_query($conn,$sql);
}
function ViGa($idTL)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT TenTL FROM theloai,tin WHERE tin.idTL = theloai.idTL AND tin.idTL = $idTL ";
	
	return mysqli_query($conn,$sql);
}
function breadCrumb($idLT)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT TenTL,Ten FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL AND idLT = $idLT ";
	
	return mysqli_query($conn,$sql);
}
function ChiTietTin($idTin)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idTin = $idTin";
	
	return mysqli_query($conn,$sql);
}
function TinCungLoaiTin($idTin,$idLT)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE idTin <> $idTin AND idLT ORDER BY RAND() LIMIT 0,3";
	
	return mysqli_query($conn,$sql);
}
function CapNhatSoLanXemTin($idTin)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin = $idTin";
	
	return mysqli_query($conn,$sql);
}
function TimKiem($tukhoa)
{
	$conn = mysqli_connect('localhost', 'root', '', 'vigga');
	 mysqli_set_charset($conn,"utf8");

	// Câu SQL lấy danh sách

	$sql = "SELECT * FROM tin WHERE TieuDe REGEXP '$tukhoa' ORDER BY idTin DESC";
	
	return mysqli_query($conn,$sql);
}
?>
