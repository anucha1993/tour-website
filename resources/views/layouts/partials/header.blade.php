




<!-- Main Header Section (ตามภาพตัวอย่าง) -->
<div class="bg-white w-full font-roboto border-b border-gray-200">
    <div class="container max-w-7xl mx-auto flex flex-row items-center justify-between py-2 px-4">
        <!-- Logo -->
        <div class="flex items-center min-w-[350px]">
            <img src="/images/logo-nexttrip.svg" alt="Next Trip Holiday" class="h-20 w-auto mr-8" />
        </div>
        <!-- Contact & Social -->
        <div class="flex flex-row items-center flex-1 justify-end">
            <!-- Contact Block -->
            <div class="flex flex-col items-end pr-8 border-r-2 border-gray-100 h-full justify-center flex-1">
                <span class="text-orange-500 font-bold text-base">ศูนย์บริการช่วยเหลือ</span>
                <span class="font-bold text-2xl flex items-center">
                    <svg class="w-7 h-7 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v2a2 2 0 01-2.18 2A19.86 19.86 0 013 5.18 2 2 0 015 3h2a2 2 0 012 1.72c.2 1.38.5 2.72.88 4a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.58 6.58l1.27-1.27a2 2 0 012.11-.45c1.28.38 2.62.68 4 0.88A2 2 0 0122 16.92z"/>
                    </svg>
                    <a href="tel:021369144" class="text-orange-500 hover:text-blue-700 transition-colors">02-136-9144</a>
                </span>
                <span class="text-xs font-medium" style="color: #3451a1;">Hotline : 091-091-6364 , 091-091-6463 (ตลอดเวลา)</span>
                <span class="text-xs font-medium text-gray-500">เปิดให้บริการ จันทร์ - เสาร์ 09.00 น. - 18.00 น.</span>
            </div>
            <!-- LINE Block -->
            <div class="flex flex-col items-center px-8 border-r-2 border-gray-100 h-full justify-center flex-1">
                <span class="text-orange-500 font-bold text-base flex items-center mb-1">
                    <img src="{{asset('images/line_share.svg')}}" alt="" class="w-6 h-6 mr-1">
                    เราพร้อมช่วยคุณ
                </span>
                <span class="text-base font-bold" style="color: #3451a1;">@nexttripholiday</span>
            </div>
            <!-- Social Block -->
            <div class="flex flex-col items-center pl-8 h-full justify-center flex-1">
                <span class="text-orange-500 text-xs">ติดตามเราที่ช่องทาง</span>
                <div class="flex space-x-2 mt-1">
                    <a href="#" class="text-blue-600"><img src="{{asset('images/facebook.svg')}}" alt=""></a>
                    <a href="#" class="text-red-600"><img src="{{asset('images/youtube.svg')}}" alt=""></a>
                    <a href="#" class="text-pink-500"><img src="{{asset('images/instagram.svg')}}" alt=""></a>
                    <a href="#" class="text-black"><img src="{{asset('images/tiktok.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Navigation Bar -->
<nav class="w-full bg-[#f7f7ff] border-b border-gray-200 font-roboto">
    <div class="container max-w-7xl mx-auto flex flex-row items-center justify-between px-4 h-12">
        <div class="flex flex-row items-center space-x-2">
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                ทัวร์ต่างประเทศ
            </a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">ทัวร์ในประเทศ</a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">ทัวร์โปรโมชั่น</a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">ทัวร์ตามเทศกาล</a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">แพ็กเกจทัวร์</a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">รับจัดกรุ๊ปทัวร์</a>
            <span class="text-gray-400"></span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs">รอบรู้เรื่องเที่ยว</a>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <span class="text-gray-400"></span>
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                เข้าสู่ระบบ/สมัครสมาชิก
            </a>
            <span class="text-gray-400"></span>
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span class="relative">
                    <span>ค้นหา</span>
                    <span class="absolute -top-2 -right-4 bg-orange-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                </span>
            </a>
            <span class="text-gray-400"></span>
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c2.54 0 4.04 2.04 4.5 2.88C12.96 5.04 14.46 3 17 3c3.08 0 5.5 2.42 5.5 5.5 0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span class="relative">
                    <span>0</span>
                </span>
            </a>
        </div>
    </div>
</nav>

