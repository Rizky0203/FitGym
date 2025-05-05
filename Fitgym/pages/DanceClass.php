<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DanceClass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet">
</head>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.bundle.min.js"></script>

<body>
    <nav
    class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="FitGym.html" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="Lo.jpg" class="h-10" alt="FITGYM Logo"> 
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">FitGym</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="TombolLogin.html">
                <button type="button" class="text-black bg-[#42f5f2] hover:bg-[#42f5da] focus:ring-4 focus:outline-none focus:ring-[#42f5da] font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-[#42f5da] dark:hover:bg-[#42f5da] dark:focus:ring-[#42f5da]">Login</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="Membership2.html"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#42f5da] md:p-0 md:dark:hover:text-[#42f5da] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Membership</a>
                </li>
                <li>
                    <a href="TombolPersonalTrainer.html"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#42f5da] md:p-0 md:dark:hover:text-[#42f5da] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Personal
                        Trainer</a>
                </li>
                <li>
                    <a href="TombolKelas.html"
                    class="block py-2 px-3 text-white bg-[#42f5da] rounded md:bg-transparent md:text-[#42f5da] md:p-0 dark:text-white md:dark:text-[#42f5da]"
                    aria-current="page">Kelas</a>
                </li>
                <li>
                    <a href="TombolTtentangKami.html"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#42f5da] md:p-0 md:dark:hover:text-[#42f5da] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                        Kami</a>
                </li>
                <li>
                    <a href="TombolMerchandise.html"
                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#42f5da] md:p-0 md:dark:hover:text-[#42f5da] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Merchandise</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<style>
        
    body {
        margin: 0;
        font-family: 'Poppins', Arial, sans-serif;
        background: url('https://i.pinimg.com/736x/cb/82/b4/cb82b45123851475059acfb547c77889.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #ffffff;
    }

   
    .hero {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 80px 30px;
        background: rgba(0, 0, 0, 0.7);
        border-radius: 15px;
        margin: 30px;
    }

    .hero .content {
        max-width: 50%;
    }

    .hero h1 {
        font-size: 56px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .hero h1 span {
        color: #ffffff;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .hero button {
        padding: 15px 30px;
        background: #ffffff;
        border: none;
        border-radius: 5px;
        color: #ffffff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .hero button:hover {
        background: #72a74b;
    }

    .hero img {
        max-width: 45%;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

   
    footer {
        background: rgba(0, 0, 0, 0.8);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
    }

    footer a {
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #ffffff;
    }

    footer p {
        font-size: 14px;
        margin: 5px 0;
    }
</style>
</head>
<body>

    <section class="hero">
        <div class="content">
            <h1>Dance <span>Class</span></h1>
            <p>
                Kelas yang memadukan kebugaran dan ekspresi diri dalam gerakan kontemporer yang dinamis. 
                Dirancang untuk meningkatkan kebugaran fisik dan kesehatan mental.
                Kelas ini menawarkan fleksibilitas untuk bereksperimen dengan berbagai gerakan, menjadikannya menarik bagi siapa saja, baik pemula maupun profesional.
                Cocok bagi anda yang ingin meningkatkan kebugaran, menikmati suasana yang energik dan menyenangkan.
            </p>
    
        </div>
        <img src="https://i.pinimg.com/736x/ba/19/14/ba1914045aa541f4a14285fc0b9bfd93.jpg" alt="Mind & Body Class">
    </section>

   
    <footer>
        <p>&copy; 2024 FitGym. All Rights Reserved.</p>
    </footer>
</body>
</html>