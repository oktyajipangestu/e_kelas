<?php


Route::post('/tambahAdmin', 'Admin@tambahAdmin');
Route::post('/loginAdmin', 'Admin@loginAdmin');
Route::post('/hapusAdmin', 'Admin@hapusAdmin');
Route::post('/listAdmin', 'Admin@listAdmin');
Route::post('/tambahKonten', 'Konten@tambahKonten');
Route::post('/ubahKonten', 'Konten@ubahKonten');
