# Debugging Sederhana

## 1. Masalah

Saat menjalankan perintah Git pada terminal, muncul pesan error:

```text
git : The term 'git' is not recognized as the name of a cmdlet, function, script file, or operable program.
```

## 2. Penyebab

Git belum terpasang pada komputer atau sistem Windows belum mengenali Git melalui PATH.

## 3. Proses Perbaikan

Saya melakukan pengecekan dengan perintah:

```bash
git --version
```

Karena Git belum dikenali, saya melakukan instalasi Git for Windows. Setelah proses instalasi selesai, terminal dan VS Code dibuka kembali.

Kemudian dilakukan pengecekan ulang menggunakan:

```bash
git --version
```

Jika versi Git sudah muncul, Git berhasil dikenali oleh sistem.

## 4. Hasil

Setelah Git berhasil dikenali, perintah Git dapat digunakan kembali. Repository project dapat dibuat menggunakan:

```bash
git init
```

## 5. Kesimpulan

Error terjadi karena Git belum tersedia atau belum dikenali oleh sistem. Setelah Git diinstal dan terminal dibuka kembali, perintah Git dapat digunakan secara normal.
