<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Langkah langkah membuat aplikasi

Langkah ke 1: composer create-project laravel/laravel:^9.0 master_laravel9
langkah ke 2:mengcopy folder master_laravel langsung paste aja namanya sikom_1
langkah ke 3: masuk ke cmd ketik cd sikom1
langkah ke 4: membuka folder di viscod
langkah ke 5: membuat database di migrasi 
langkah ke 6:buka terminal php artisan make:model Buku -m (membuat model sekaligus migrasi)
langkah ke 7:buka folder migrations tambahkan kolom yang ada di tabel soal
-buku
     $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->timestamps();

langkah ke 8:php artisan make:model KategoriBuku -m
-kategori buku
      $table->id();
            $table->string('nama_kategori');
            $table->timestamps();

langkah ke 9:php artisan make:model KategoriBuku_Relasi -m
-kategoribuku_relasi
     $table->id();
            $table->foreignId('buku_id')->constrained('bukus');
            $table->foreignId('kategori_id')->constrained('kategori_bukus');
            $table->timestamps();

langkah ke 10:php artisan make:model  Peminjaman -m
-peminjaman
     $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('buku_id')->constrained('bukus');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('status_peminjaman');
            $table->timestamps();

langkah ke 11:php artisan make:model Koleksi_Pribadi -m
-koleksi_pribadi
     $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('buku_id')->constrained('buku');
            $table->timestamps();




langkah ke 12:php artisan make:model ulasan_bukus -m
-ulasan buku
     $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('buku_id')->constrained('bukus');
            $table->text('ulasan');
            $table->integer('rating');
            $table->timestamps();

langkah ke 13: buka migration lalu samain ($table2nya) sama di soal, di tambahkan nama_lengkap,alamat,role,verifikasi.
-users
     $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->enum('role', ['administrator', 'petugas', 'peminjam']);
            $table->enum('verifikasi', ['belum', 'sudah']);
            $table->timestamps();

langkah ke 14: jalankan perintah di terminal “php artisan migrate” trus yes trus bikin di php my admin (baru) sikom_1 trus ke env trus yang DB_DATABASE di ganti jadi sikom_1

langkah 15:masuk ke model buku
-buku
protected $guarded = ['id']; //MENGATUR HANYA COLOMN ID YANG TIDAK BOLEH DI ISI(dikomen
    //RELASI DI MODEL BUKU(dikomen)
    public function ulasanbuku() //RELASI ULASAN BUKU
    {
        return $this->hasMany (UlasanBuku::class);
    }
    //RELASI DARI MODEL BUKU KE KOLEKSI PRIBADI(dikomen)
    public function koleksipribadi() 
    {
        return $this->hasMany (KoleksiPribadi::class);
    }
    //RELASI DARI MODEL BUKU KE KATEGORI BUKU RELASI (dikomen)
    public function kateoribuku_relasi() 
    {
        return $this->hasMany (Kategori_Buku_Relasi::class);
    }
    //RELASI DARI MODEL BUKU KE PEMINJAMAN (dikomen)
    public function peminjaman() 
    {
        return $this->hasMany (Peminjaman::class);
    }
}
langkah ke 16: masuk ke kategori relasi buku tambahkan

class KategoriBuku_Relasi extends model
{
     use HasFactory;
     protected $guarded = [‘id’]; //MENGATUR HANYA COLOM ID YANG TIDAK BOLEH DI      ISI
     //RELASI DI MODEL BUKU KE KATEGORI BUKU RELASI
     public function buku()
     {
          return $this->belongsTo (KategoriBuku::class);
     }
}

langkah ke 17: masuk ke kategori buku

class KategoriBuku extends Model
{
     use HasFactory;
      
}
langkah ke 18:masuk ke koleksi pribadi 
class KoleksiPribadi extends Model
{
     use HasFactory;
     protected $guerded = [‘id’]; //MENGATUR HANYA ID YANG TIDAK BOLEH DI ISI   (dikomen)

     RELASI ANTAR TABLE(dikomen)
     RELASI DARI MODEL USER KE KOLEKSI PRIBASI (dikomen)
     public function user()
     {
          BELUM SELESAI

Langkah ke 19: buka peminjaman
class Peminjaman extends Model
{
     use Hasfactory;
     [belum selesai

langkah ke 20: buka model ulasan buku
class UlasanBuku
     [belum selesai]

langkah 21:masuk ke folder model file user di tambahkan ‘username’,
     ‘email’,’password’,’nama_lengkap”, ‘alamat’, ‘role’, ‘varifikasi’,lalu di  tambah
     ];

PHP ARTISAN TINKER(ngecek relasi)

langkah 22:trus isi di php my admin di sikom_1 trus ka insert ketik apa aja yang di kolom gede,karena ini contoh judul: sikancil penerbit: wiwin

langkah 23:trus ke template azira trus copy folder aset trus tempel ke folder sikom_1 folder public

langkah 24:buka tamplate azira, trus buka bagian html trus klik kanan trus klik view page source trus kodinganya di copy di tempel file layout.blade.pphp

langkah 25: bikin folder namanya template_back 
langkah 26: di dalam folder bikin file namanya layout.blade.php isinya kodingan           html SAMPE SINI
Langkah 27: arahin ke aset trus klik cntrl d di teken trus sampe akhir,trus asetnya hupus sampe image.

Langkah 28: di tambah kurung kurawal  trus kurung buka kutip di dalamnya terdapat aseet trus save

langkah 29: masuk ke routes trus ke web php di tambah bikin folder baru (‘_template_back.layout’)

LANGKAH 30: buat file di (‘_template_back.layout’) nama filenya navheader.blade.php
           cari ke bawah ke angka 46 trus klik trus copy dari div 46 sampai div           lagi,

langkah 31: trus masukan ke file navheader.blade.php trus balik lagi ke file layout  kasih kode include di no 46, trus save,di no 51 sampe 324

langkah 32: trus copy trus cntrl x, di template back bikin file baru namanya sidebar.blade.php trus ke file layout trus ketik include di no 50

langkah 33: php artisan serve 

langkah 34: di bagian seedebar dari 53 tutup sampe 269

langkah 35: klik no 53 scroll ke bawah klik shift trus klik kiri trus delete

langkah 36: trus ketik php artisan serve

langkah 37: di folder tamplet back di file sidebardi no 51 lihat ke kanan ada             dasbor trus dasbor ganti jadi buku  trus save

langkah 38: masuk ke folder layout trus di template  
     dari main header sampe main header lagi di copy pindahin ke file navheader

langkah 39: dari 104 sampe 1110 di tutup

langkah 40: trus dari 59 sampe 1110 di hupus

langkah 41: trus di no 56 container (dikomen)

langkah 42: trus di no 59 (‘content’)

langkah 43: di save

langkah 44:di bagian view bikin folder namanya data_buku trus bikin file namanya index.blade.php

langkah 45: di dalam index klik @extends(‘_template_back.layout) ngambil kodingan dari file tersebut

langkah 46: trus @section(‘content’)

langkah 47:trus @ensection

langkah 48:trus ketik di terminal php artisan make:controller BukuController -r trus enter

langkah 49: trus buka web php trus bikin ROUTE BARU(di komen) paling bawah

langkah 50: trus route ::resource(‘buku’, BukuController::class);

langkah 51: trus di atasnya di tambah di no 6 klik use app\http\Controller\BukuController;

langkah 52: trus kalo udah, buka file folder app/http/controller trus masuk ke file buku 

langkah 53: trus di no 16 di tambah return view arahin ke data buku (‘data_buku_index’);

 langkah 54: trus save trus di index tambahkan di no 4 data buku

langkah 56: trus buka browser trus ganti url /buku

57: mengahapus fitur yang tidak di perlukan.

nevheader

58: rubah bagian not hider cari no 16 trus tutup jadi 16-48

59: dari 15 sampe 48 di tutup trus di drop trus delete

60. balik lagi ke viscod cari no 22 trus di lipet sampe 34

61: klo udah no 22 sampe 40 di blok trus di hupus 

62: di no 20 sampe 23 di pus

63.balik ke nap hider hupus notif sama email trus cari di 

64.trus di no 59,67di lipet trus di blok di trus di hupus
trus di bagian bawah no 56-61 di tutup trus di hupus

65.buka lagi di naphider dari 59-145 di blok di hupus

66.trus cek hasilnya

67.trus buka template azira pilih aja yang mana 

68.kalo udah buka di hed saider buka di bagian pages trus 

69.klik trus scroll ke bawah ada yang tables

70.trus klik basic tables

71.trus cari simple table trus copy trus di bagian atas klik kanan

72.ctrl+u

73.trus cntrl+f trus cntrl+v

74.trus cari 637 

75.636-739 copy 

76.balik lagi ke viskod buka data buku index

77.no 4 di index hupus ganti sama itu trus paste

78.paling bawah div hijau di atasnya bikin div 107 

79.trus cek di broser (contoh 10876)/buku

80.ilangin grafik2 yang di atas

81.buka viscod data buku di bagian index cari class namanya my auto di no 15-45 blok trus delete

82.trus membuat tombol create data

83.buka di viscod index data buku hanya no28 di drop trus di hupus

84.h4 hupus

89.trus bikin <a href=”” class=”btn btn-primary”>Tambah Data</a>

90.bagian bawah ada div class car bodi tambah (mt-3”>)

kelewat

100.di data buku bikin file namanya form_create.blade.php

101.di form create ini isi kodingan di index copy semua pindahin ke form create

102.di clas teble resvonsip di tutup trus hupus

103.masuk ke controler data buku trus arahkan function ke form create tadi

104.lihat tampilan klik tambah data 

105.masuk ke tamplate azira cari form my out trus pake arigmen

106.copy alitmen klik kanan 

107.row sampe row lagi copy 730-770

108.trus masuk ke viscod ke form 

109.no 19 tutup trus blok hupus trus paste yang tadi di copy

110.trus cek hasilnya 

111.trus balik lagi ke yang tadi trus di no 23 ganti jadi form input data buku

112.trus yang no 25 bek clas gannti sama harap untuk mengisi semuaa input

113.cek hasil

114.masuk ke form create  jadi judul buku di ganti

115.di input di tambah name =”judul”

116.scroll ke bawah

117.class name di ganti jadi penulis sama kaya judul cuman di ganti jadi class name

118.lanjut ke bawah bagian email, email di isi dengan penerbit trus teks di ganti jadi text

119.lanjut bikin 1 inputan 

120.copy bagian no 44 lipet trus di blok trus alt+shift+bawah 

121.penerbit ganti jadi tahun terbit di bawah ganti jadi tahun terbit dan type di ganti jadi number

122.cek aplikasi

123.trus cari ke form trus ke bawah register jadi simpan  di sebelum simpan tambahkan type “submit”

124.dibawah harap diisi semua input bikin garis baru di tambah<form action=”” method=”post></form>
kelewat

125.button cencel
 kelewat

“{{ route(‘buku.store’)

126.masuk ke controler buku cari functio public function store tambahkan

{
     dd(kelewat

127.request samain sama yang kita isi

128.buka buku controler yang public function yang di bawahnya komen

129.bikin sebuah variabel 

130.controller samain sama yang udah karena ini mah tidak ada yang di ganti   

kalo udah 

131.buka data buku bagian index 

132.no
nama
emailnya di sesuaikan sama yang di kontroler trus tambahkan action, action ini fungsinya untuk update dan delete

134.dari 47 di tutup trus blok trus dalete

135.di bawan action di tambahkan @foreach( $collection as $item) trus colellectionnya di ganti jadi buku

ti th di tambah
{{ $loop->i

136.membuat aler 
di view bikin folder namannya komponent di dalam komponent ini bikin 1 file namanya pesan.blade.php di dalam pesan no 1 tulis <-!--- PESAN SUKSES --->

137.copy dari lara bahan ujikom 
(didalamnya file pesan.blade.php  ada yang buat sukses dan buat error)

138.masuk ke folder data buku terus bagian from create di bawah harap untuk mngisi semua di kasih @include(‘_component.pesan’) include ini di copy trus masuk ke data buku index trus di bawah route create buku di paste

139.trus cek tampilan 
140. trus coba klik tombol cancel 
di from create di bawah yang clas di copy sampai 0.5
yang di bawahnya di hapus trus di kasih < a href=”ini paste yang di copy”>BACK</a>

141.data buku index buka trus buka 49 trus enter <td></td> trus enter  di tengsh trngah td di kasih a href =”{{ route(‘buku.edit’’,$dt->id)}}class=”btn btn-sm btn-warning”>EDIT</a>

142.buka bagian controler file controler buka function edit bikin 
$sdt = Buku::find($id);
return view(‘data_buku.form_edit’,compact(‘dt’));

143.masuk ke bagian data buku trus bikin file baru namanya form_edit.blade.php di bagian bagian form create di copy semua trus paste ke form edit yang asalnya form data buku di ganti jadi edit

144.di form edit di no 36 di kasih”{{$dt->judul }}” trus copy dari value di copy trus paste di bagian input di ganti jadi penulis scrol ke atas trus no 29 di ganti di csrf di kasih method (‘PUT’) trus save trus coba buka di halaman webnya

145.masuk ke buku controller cari public function store trus copy dari $ request sampe return redirec

146.cari pablic update trus paste
147.trus yng create hupus ganti jadi Buku::where(‘id’,$id)->update($data):
di bawahnya di ganti jadi data berhasil 

148.bikin fitur delete
149.buka viscod trus masuk ke data buku, di bagian td kan ada tipe edit di bawahnya 
<form action=”method”=”post”>
<button type=”submit” class=”btn btn-sm btn-danger”>Delete</button>
@csrf @method(‘DELETE’) trus arahin ke {{route(‘buku.destory’.$item->)}}

kelewat

150.masuk ke buku controler cari public function destory di dalamnya 

151.Buku::find($id)->delete();->with(‘succes’,’data berhasil di simpan’)

152.trus balik lagi ke index.blade trus di crom di tambahkan on submite=”return confirm(‘Apakah anda yakin ingin menghapus data ini?’)”action  isi lagi table-bordered table-hover table-striped
 
 kelewat 

152.membuat exsport untuk pdf 
 pertama buka terminal jalankan perintah composer require barryvdh/laravel-
 
153.membuat login 

154.bikin folder di view namanya template_auth trus bikin file namanya layout.blade.php 

155.buka template azira buka costum pages

156.klik kanan view pages

157.cntl a copy semua trus buka viscod template di layout trus di paste cntrl d hupus aset nya trus kasih kurung kurawal 2 kali trus asset tambahin lagi asetts di no 45 di tutup sampe no 78 di cut klo udh di cut di ksih @ yield('content')trus bikin folder baru di view nama foldernya auth trus bikin file namanya login.blade.php trus enter di no 1 di ketik @extends('_template_auth.layout') trus @section('content')

file yang tadi di cut di paste di bawahnya

masuk ke web php no 17 di komen sampe 19 trus bikin route buat login  Route::get sebelum ini bikin dlu controlernya di terminal php artisan make:controller loginController trus ketik public function login()
{
     return view('auth.login');
}
buks web php route::get('/',[Logincontroller::class,login])

tambhkan use app\http\controller\logincontroller; 


menghapus tulisan di dasboard

masuk ke folder auth trus ketik login web 

yang webnya di hupus trus scroll ke bawah di bagian 30-33 ada sig as main  trus tutup trus bloh trus hupus trus mengubah di tampilan input di bagian interiur email yang teks di ganti jadi email vuluenya di hupus trus di kasih kurung kurawal di dalamnya ketik old (‘email’) kalo udah di kasih name nama namenya yaitu email pindsh ke bawah bagian input password emailnya jadi password di block di tambah type submite  scroll ke atas kasih method =pos dibawahnya kasih csrf index html di hupus trus tambahin ke route klo udah buka web php di sini bikin route baru trus post namanya sama yang tadi yaitu out trus arahin ke bagian login kasih klas namanya auth jangan lupa; di kasih name namanya login trus buka login controller disini kita bikin function baru namanya request $request buka folder data base trus buka databes sider fublic function mas panggil dulu nama model trus klik user::create ([ jangan lupa use di atas ngarah ke model user di bawahnya di bikin nama kolom dari ini adalah username misalkan nama username admin 1 email admin 1@gmali.com panggil nama has make 2243 buat password nama lengkap trus role role di kasih administrator perivikasi trus pake alamat =subang trus buka terminal di viscod namanya php artisan db seed paling bawah trus masuk ke login 

trus download dompdf omposer require barryvdh/laravel-dompdf

ke controller bagian login kita cari public function auth bukin validasi trus di kasih email email wajib di isi password wajib di isi password.min password minimal 5 karakter
trus bikin if (auth::atempt($validasi)) {
			$request->session()->regenerate;

return direct()->route(‘buku.index’); di kasih pesan (‘succes’,’berhasil login’);

trus tambah return back(); 

trus coba login pake email sama passwordnya yang tadi di buat

logout bikin di web

trus masuk ke navheader cari ke bawah no 72  hupus 123 sisain 1 yang di bawah trus arahin ke logout buka login controller di bawah bikin public function logout tambah auth 

auth::logout();
return redirect()->route(‘login’)

menjalankan excel php artisan 

exsport pdf sama exsport excel ke lewat

export exsel masuk ke web . Php 

kalo udah buka buku controller 

public function export_excel

