<?php
	$conn = mysqli_connect('localhost', 'root', '', 'wisata');
if(!$conn){
	exit('gagal koneksi database'.mysqli_connect_error());}
