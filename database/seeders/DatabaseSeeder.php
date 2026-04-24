<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use App\Models\Event; // <--- JANGAN LUPA IMPORT MODEL EVENT-NYA
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // 1. Akun admin utama (Cukup pakai create langsung)
        User::create([
            'name' => 'Admin amikom',
            'email' => 'admin@amikom.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Kategori Seminar
        $category = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        // 3. Kategori Entertaiment (Disimpan ke variabel $category2)
        $category2 = Category::firstOrCreate([
            'name' => 'Entertaiment',
            'slug' => 'entertaiment',
        ]);

        $category3 = Category::firstOrCreate([
            'name' => 'UI/UX Masterclass',
            'slug' => 'ui/ux masterclass',
        ]);

        $category4 = Category::firstOrCreate([
            'name' => 'E-Sprot U-Camp',
            'slug' => 'e-sport u-camp',
        ]);

        $category5 = Category::firstOrCreate([
            'name' => 'Tech & Hackathon',
            'slug' => 'texh & hackaton',
        ]);

        $category6 = Category::firstOrCreate([
            'name' => 'Career Preparation',
            'slug' => 'career preparation',
        ]);

        $category7 = Category::firstOrCreate([
            'name' => 'Creative & Art',
            'slug' => 'creative & aart',
        ]);

        // 4. Masukkan Event, gunakan Model Event, bukan Category
        Event::create([
            'category_id' => $category2->id, // Sekarang $category2->id sudah bisa dibaca
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $category->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        // 1. Event untuk Kategori UI/UX Masterclass ($category3)
        Event::create([
            'category_id' => $category3->id,
            'title' => 'Figma Prototyping Workshop',
            'description' => 'Pelajari cara membuat prototype interaktif menggunakan Figma langsung dari expert industri.',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Lab Komputer 1 Amikom',
            'price' => 75000,
            'stock' => 40,
            'poster_path' => 'posters/figma-workshop.png',
        ]);

        Event::create([
            'category_id' => $category3->id,
            'title' => 'UX Research for Beginners',
            'description' => 'Pahami kebutuhan pengguna dan tingkatkan kualitas produk digitalmu lewat riset yang tepat.',
            'date' => '2026-06-20 13:00:00',
            'location' => 'Ruang Citra 1',
            'price' => 50000,
            'stock' => 50,
            'poster_path' => 'posters/ux-research.png',
        ]);

        // 2. Event untuk Kategori Tech & Hackathon ($category5)
        Event::create([
            'category_id' => $category5->id,
            'title' => 'Amikom HackFest 24-Hours',
            'description' => 'Bangun solusi inovatif dalam 24 jam dan menangkan total hadiah puluhan juta rupiah!',
            'date' => '2026-07-10 08:00:00',
            'location' => 'Amikom Innovation Park',
            'price' => 150000,
            'stock' => 30, // Stok tim
            'poster_path' => 'posters/hackfest-2026.png',
        ]);

        Event::create([
            'category_id' => $category5->id,
            'title' => 'Web Development Challenge',
            'description' => 'Kompetisi membuat website responsif dengan tema teknologi masa depan untuk mahasiswa.',
            'date' => '2026-07-25 10:00:00',
            'location' => 'Online (Zoom)',
            'price' => 35000,
            'stock' => 100,
            'poster_path' => 'posters/web-challenge.png',
        ]);

        // 3. Event untuk Kategori Career Preparation ($category6)
        Event::create([
            'category_id' => $category6->id,
            'title' => 'Bedah CV & Mock Interview',
            'description' => 'Persiapkan dirimu menembus perusahaan impian dengan review CV langsung dari praktisi HRD.',
            'date' => '2026-08-05 09:00:00',
            'location' => 'Ruang Auditorium Amikom',
            'price' => 25000,
            'stock' => 150,
            'poster_path' => 'posters/bedah-cv.png',
        ]);

        Event::create([
            'category_id' => $category6->id,
            'title' => 'LinkedIn Profile Optimization',
            'description' => 'Bangun personal branding profesional di LinkedIn agar mudah dilirik oleh para recruiter (headhunter).',
            'date' => '2026-08-12 15:30:00',
            'location' => 'Online (Google Meet)',
            'price' => 20000,
            'stock' => 200,
            'poster_path' => 'posters/linkedin-optim.png',
        ]);

        // 4. Event untuk Kategori Creative & Art ($category7)
        Event::create([
            'category_id' => $category7->id,
            'title' => 'Digital Illustration Class',
            'description' => 'Belajar teknik ilustrasi digital modern menggunakan Procreate dan Photoshop dari ilustrator profesional.',
            'date' => '2026-09-05 10:00:00',
            'location' => 'Creative Hub Amikom',
            'price' => 60000,
            'stock' => 30,
            'poster_path' => 'posters/digital-art.png',
        ]);

        Event::create([
            'category_id' => $category7->id,
            'title' => 'Photography Street Photography',
            'description' => 'Hunting foto di sudut-sudut kota Yogyakarta dengan teknik komposisi dan storytelling yang menarik.',
            'date' => '2026-09-15 16:00:00',
            'location' => 'Malioboro, Yogyakarta',
            'price' => 45000,
            'stock' => 50,
            'poster_path' => 'posters/street-photo.png',
        ]);

        // 5. Event untuk Kategori E-Sport U-Camp ($category4)
        Event::create([
            'category_id' => $category4->id,
            'title' => 'Mobile Legends Campus Championship',
            'description' => 'Kompetisi Mobile Legends antar kampus se-DIY dengan total hadiah jutaan rupiah dan kesempatan masuk timnas MLBB.',
            'date' => '2026-10-10 09:00:00',
            'location' => 'Gedung Olahraga Amikom',
            'price' => 100000, // Harga per tim
            'stock' => 64, // Kuota tim
            'poster_path' => 'posters/mlbb-champs.png',
        ]);

        Event::create([
            'category_id' => $category4->id,
            'title' => 'Valorant Collegiate Cup',
            'description' => 'Turnamen Valorant untuk mahasiswa dengan format 5v5 dan sistem eliminasi ganda.',
            'date' => '2026-10-20 10:00:00',
            'location' => 'PC Arena Amikom',
            'price' => 120000,
            'stock' => 32,
            'poster_path' => 'posters/valorant-cup.png',
        ]);


    }
}