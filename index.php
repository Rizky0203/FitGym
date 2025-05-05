<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: Login/Login2.php");
    exit;
}

include 'includes/header.php';

if (isset($_GET['pages'])) {
    include "pages/" . $_GET['pages'] . ".php";
} else {
    ?>
   <header class="bg-center bg-no-repeat bg-cover bg-[url('https://fithub.id/_next/image?url=https%3A%2F%2Fphoto-fhad-fithub.s3.ap-southeast-1.amazonaws.com%2FNow_Hiring_Digital_Ads_PT_Horizontal_Banner_1_bb87b73d20.jpg&w=1920&q=75')] bg-gray-300">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-60">
    <div class="max-w-7xl mx-auto py-20 px-4 text-center text-white">
        <h1 class="text-4xl font-bold">Selamat Datang di Website Kami , <h2 class="text-2xl font-semibold text-center"><?php echo $_SESSION['nama']; ?>!</h2>
        </h1>
        <p class="mt-4 text-lg">Kami menyediakan layanan terbaik untuk Anda.</p>
        <br>
    </div>
    </div>
</header>
<br>
<br>
<br>
    <div class="w-screen">
        <div class="flex flex-row justify-center gap-1 ">
            <div id="controls-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->   
                <div class="relative h-10 overflow-hidden rounded-lg md:h-96 size-100 flex:justify-between z-0">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i.pinimg.com/736x/73/8a/f5/738af543c687cfd7cf7cb48586d556f8.jpg" class="absolute block w-full " alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://i.pinimg.com/736x/83/20/fc/8320fcfbbeba44eb1d63c373258a901e.jpg" class="absolute block w-full " alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i.pinimg.com/736x/ec/e7/4d/ece74d9febba53b45ca4eccb86c992f8.jpg" class="absolute block w-full " alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i.pinimg.com/736x/00/37/6a/00376a613fed34da5f2288a11c4c9453.jpg" class="absolute block w-full " alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://i.pinimg.com/736x/f6/fc/61/f6fc61b5e6503c0cabedd0e25439a9a2.jpg" class="absolute block w-full " alt="...">
                    </div>
                </div>
                
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <div class="flex flex-col pl-10">
                <br>
                <br>
                <br>
                <div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-[#42f5f2] to-sky-300 text-transparent bg-clip-text dark:from-[#42f5f2] dark:to-[#42f5f2] pb-5">
                        Kami membawa kebugaran ke kehidupan Anda,membantu Anda mencapai gaya hidup sehat di Indonesia .</span>
                    </h1>
                </div>
                <div>
                    <p class="pb-5">Klik tombol di bawah ini untu melihat informasi lebih lengkap tentang kami</p>
                </div>
                <div>
                    <a href="TombolTtentangKami.html">
                    <button type="button" class="text-dark bg-[#42f5f2] hover:bg-[#42f5da] focus:ring-4 focus:outline-none focus:ring-[#42f5da] font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#42f5da] dark:hover:bg-[#42f5da] dark:focus:ring-[#42f5da]">Lihat informasi</a>
                    </button>
                    <a href="Membership2.html">
                    <button class="text-dark bg-[#42f5f2] hover:bg-[#42f5da] focus:ring-4 focus:outline-none focus:ring-[#42f5da] font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#42f5da] dark:hover:bg-[#42f5da] dark:focus:ring-[#42f5da]">
                        Lihat Paket Membership</a>
                        </button>
                </div>
            </div>
        </div>
      </div>
    
    <!-- Features Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center">Kelas Membership</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Kelas Reguler</h3>
                    <p class="mt-2">Nikmati akses ke fasilitas gym dasar dengan harga terjangkau. Kelas Reguler dirancang untuk Anda yang ingin mulai hidup sehat tanpa perlu biaya besar. Dapatkan akses ke alat-alat gym standar dan ruang olahraga yang nyaman. Cocok untuk pemula yang ingin membangun rutinitas kebugaran.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Kelas Premium</h3>
                    <p class="mt-2">Tingkatkan pengalaman olahraga Anda dengan Kelas Premium! Akses fasilitas gym yang lebih lengkap, alat modern, dan pilihan kelas olahraga yang beragam. Nikmati sesi personal trainer terbatas, ruang ganti yang lebih privat, serta minuman gratis untuk mendukung performa terbaik Anda. Pilihan ideal bagi Anda yang menginginkan lebih dari sekadar rutinitas.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Kelas VIP</h3>
                    <p class="mt-2">Rasakan pengalaman eksklusif dengan Kelas VIP! Dapatkan akses tak terbatas ke semua fasilitas dan kelas olahraga, sesi personal trainer tanpa batas, serta layanan premium seperti spa, sauna, dan camilan sehat gratis. Dengan akses 24/7 dan fasilitas mewah, Kelas VIP memastikan kenyamanan dan kebugaran Anda berada di level tertinggi. Pilihan sempurna untuk gaya hidup premium.</p>
                </div>
            </div>
        </div>
    </section>
    
    <div style="width: 90%; margin: 0 auto; text-align: left;">
        <h1 style="font-size: 2rem; color: #333;">Lokasi</h1>
        <div id="map" style="width: 100%; height: 400px; border: 1px solid #ccc; border-radius: 10px;">
          <!-- Masukkan iframe atau konten peta di sini -->
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6533837240167!2d107.63827205927585!3d-6.931967148108565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e871951102dd%3A0xbe962e1d03ebf4cf!2sFIT%20GYM!5e0!3m2!1sen!2sid!4v1735972966290!5m2!1sen!2sid" 
            style="width: 100%; height: 100%; border: 0;" 
            allowfullscreen="" 
            loading="lazy"></iframe>
        </div>
      </div>
</body> 
</html>
<?php
}
?>
   
  





   

<?php include 'includes/footer.php'; ?>