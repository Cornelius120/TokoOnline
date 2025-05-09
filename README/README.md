# 📘 Project: MengenalLaravel

Portofolio ini dibuat untuk memenuhi Latihan Mandiri 2 pada mata kuliah Web Programming II.  
Topik: _Implementasi Unit Kompetensi Software Development – Menulis Kode Sesuai Guidelines dan Best Practice_

---

## ✅ Tujuan

Mengembangkan aplikasi Laravel dasar yang mencakup:

- Instalasi Laravel project
- Menjalankan aplikasi Laravel secara lokal
- Menambahkan route sesuai best practice
- Membuat dan menggunakan controller
- Menampilkan tampilan (view) melalui controller

---

## ⚙️ Instalasi Project

1. Membuat project Laravel dengan Composer:

   ```bash
   composer create-project laravel/laravel MengenalLaravel
   ```

2. Mengatur struktur folder:
   - Proyek diletakkan di `C:\Laravel10\MengenalLaravel`
   - Dibuka menggunakan Visual Studio Code

---

## 🚀 Menjalankan Program

Untuk menjalankan project Laravel:

```bash
cd C:\Laravel10\MengenalLaravel
php artisan serve
```

Akses aplikasi melalui browser:

```
http://127.0.0.1:8000
```

---

## 🌐 Routing

Semua route ditulis di file `routes/web.php` menggunakan pendekatan controller:

```php
use App\Http\Controllers\LatihanController;

Route::get('/gettabel', [LatihanController::class, 'getTabel']);
Route::get('/getform', [LatihanController::class, 'getForm']);
```

---

## 🧠 Controller

Controller `LatihanController` dibuat menggunakan artisan command:

```bash
php artisan make:controller LatihanController
```

### Isi dari controller:

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getTabel()
    {
        return view('latihan.tabel');
    }

    public function getForm()
    {
        return view('latihan.form');
    }
}
```

---

## 🖼️ View

Tampilan disimpan di `resources/views/latihan/`:

### `form.blade.php`

```html
<h2>Form Input Data</h2>
<form>
  <label>Nama:</label>
  <input type="text" name="nama" /><br />
  <label>Umur:</label>
  <input type="number" name="umur" /><br />
  <button type="submit">Kirim</button>
</form>
```

### `tabel.blade.php`

```html
<h2>Data Tabel</h2>
<table border="1">
  <tr>
    <th>Nama</th>
    <th>Umur</th>
  </tr>
  <tr>
    <td>Rian</td>
    <td>21</td>
  </tr>
</table>
```

---

## 🎯 Hasil

Aplikasi berhasil menampilkan:

- Form input (`/getform`)
- Tabel data (`/gettabel`)
- Semua route dikendalikan oleh controller
- Struktur file rapi, sesuai standar Laravel

---

## 🏁 Status

✅ Latihan Mandiri 2 selesai  
📚 Siap untuk dokumentasi portofolio dan presentasi tugas

---

## 🖼️ Tampilan Aplikasi

### Form Input

![Form Input](public/images/ss-getform.png)

### Tabel Data

![Tabel Data](public/images/ss-gettabel.png)

## 👨‍💻 Developer

Nama : Cornelius Sembiring  
Kelas : 17.6B.03  
NIM : 17221213  
Fakultas: Teknik & Informatika  
Jurusan : Teknologi Informasi
