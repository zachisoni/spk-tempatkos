# KOS An

Sistem pendukung keputusan dengan metode SAW berbentuk web menggunakan framwork laravel sebagai tugas akhir dari mata kuliah Sistem Pendukung Keputusan, Framework Programming dan Software Quality Asurance

Untuk menjalankan sistem ini secara local, ikuti lankgah-langkah berikut:
1. clone repository ini. Buka git bash/terminal/cmd, lalu jalankan:

        git clone https://github.com/mfhmiii/spk-tempatkos.git


2. Buat database baru bernama `spk_project`
3. Update Dependencies composer. Buka termial/Command Line, masuk ke direktori project, lalu jalankan :


        composer upgrade


4. Copy .env.example, lalu ganti nama menjadi .env . Di Terminal/Command Line, jalankan :


        cp .env.example .env


5. Buat App Key


        php artisan key:generate


6. Migrasi database

        php artisan migrate


7. Install dependencies node


        npm install


8. Jalankan npm agar tampilan menjadi lebih bagus, dan perubahan pada UI akan langsung terlihat


        npm run dev


8. Jalankan sistem


        php artisan serve


9. Buka alamat yang tampil, contohnya http://127.0.0.1:8000/