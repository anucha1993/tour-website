




<!-- Main Header Section - Desktop Version -->
<div class="hidden md:block bg-white w-full font-roboto border-b border-gray-200">
    <div class="container max-w-7xl mx-auto flex flex-row items-center justify-between py-2 px-4">
        <!-- Logo -->
        <div class="flex items-center min-w-[350px]">
            <img src="/images/logo-nexttrip.svg" 
                 alt="Next Trip Holiday - บริการจองทัวร์ออนไลน์" 
                 class="h-20 w-auto mr-8" 
                 width="120" 
                 height="80"
                 loading="eager" />
        </div>
        <!-- Contact & Social -->
        <div class="flex flex-row items-center flex-1 justify-end">
            <!-- Contact Block -->
            <div class="flex flex-col items-end pr-8 border-r-2 border-gray-100 h-full justify-center">
                <span class="text-orange-500 font-bold text-base">ศูนย์บริการช่วยเหลือ</span>
                <span class="font-bold text-2xl flex items-center">
                    <svg class="w-7 h-7 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v2a2 2 0 01-2.18 2A19.86 19.86 0 013 5.18 2 2 0 015 3h2a2 2 0 012 1.72c.2 1.38.5 2.72.88 4a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.58 6.58l1.27-1.27a2 2 0 012.11-.45c1.28.38 2.62.68 4 0.88A2 2 0 0122 16.92z"/>
                    </svg>
                    <a href="tel:021369144" class="text-orange-500 hover:text-blue-700 transition-colors" aria-label="โทรศัพท์ 02-136-9144">02-136-9144</a>
                </span>
                <span class="text-xs font-medium" style="color: #3451a1;">Hotline : 091-091-6364 , 091-091-6463 (ตลอดเวลา)</span>
                <span class="text-xs font-medium text-gray-500">เปิดให้บริการ จันทร์ - เสาร์ 09.00 น. - 18.00 น.</span>
            </div>
            <!-- LINE Block -->
            <div class="flex flex-col items-center px-8 border-r-2 border-gray-100 h-full justify-center">
                <span class="text-orange-500 font-bold text-base flex items-center mb-1">
                    <img src="{{asset('images/line_share.svg')}}" 
                         alt="LINE" 
                         class="w-6 h-6 mr-1" 
                         width="24" 
                         height="24"
                         loading="lazy">
                    เราพร้อมช่วยคุณ
                </span>
                <span class="text-base font-bold" style="color: #3451a1;">@nexttripholiday</span>
            </div>
            <!-- Social Block -->
            <div class="flex flex-col items-center pl-8 h-full justify-center">
                <span class="text-orange-500 text-xs">ติดตามเราที่ช่องทาง</span>
                <div class="flex space-x-2 mt-1">
                    <a href="#" class="text-blue-600" aria-label="Facebook">
                        <img src="{{asset('images/facebook.svg')}}" 
                             alt="Facebook" 
                             width="24" 
                             height="24" 
                             loading="lazy">
                    </a>
                    <a href="#" class="text-red-600" aria-label="YouTube">
                        <img src="{{asset('images/youtube.svg')}}" 
                             alt="YouTube" 
                             width="24" 
                             height="24" 
                             loading="lazy">
                    </a>
                    <a href="#" class="text-pink-500" aria-label="Instagram">
                        <img src="{{asset('images/instagram.svg')}}" 
                             alt="Instagram" 
                             width="24" 
                             height="24" 
                             loading="lazy">
                    </a>
                    <a href="#" class="text-black" aria-label="TikTok">
                        <img src="{{asset('images/tiktok.svg')}}" 
                             alt="TikTok" 
                             width="24" 
                             height="24" 
                             loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Header Section -->
<div class="md:hidden bg-white w-full font-roboto border-b border-gray-200">
    <div class="flex items-center justify-between px-4 py-3">
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" 
                class="text-gray-600 hover:text-orange-500 focus:outline-none focus:text-orange-500"
                aria-label="เปิดเมนู"
                aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        
        <!-- Logo -->
        <div class="flex-1 flex justify-center">
            <img src="/images/logo-nexttrip.svg" 
                 alt="Next Trip Holiday - บริการจองทัวร์ออนไลน์" 
                 class="h-12 w-auto" 
                 width="80" 
                 height="48"
                 loading="eager" />
        </div>
        
        <!-- Contact Button -->
        <a href="tel:021369144" 
           class="text-orange-500 hover:text-orange-600 focus:outline-none"
           aria-label="โทรศัพท์ 02-136-9144">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M22 16.92v2a2 2 0 01-2.18 2A19.86 19.86 0 013 5.18 2 2 0 015 3h2a2 2 0 012 1.72c.2 1.38.5 2.72.88 4a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.58 6.58l1.27-1.27a2 2 0 012.11-.45c1.28.38 2.62.68 4 0.88A2 2 0 0122 16.92z"/>
            </svg>
        </a>
    </div>
    
    <!-- Mobile Contact Info (Collapsible) -->
    <div class="px-4 pb-3 border-t border-gray-100">
        <div class="text-center">
            <p class="text-sm text-orange-500 font-semibold">ศูนย์บริการช่วยเหลือ</p>
            <a href="tel:021369144" class="text-lg font-bold text-orange-500">02-136-9144</a>
        </div>
    </div>
</div>


<!-- Navigation Bar - Desktop Version -->
<nav class="hidden md:block w-full bg-[#f7f7ff] border-b border-gray-200 font-roboto">
    <div class="container max-w-7xl mx-auto flex flex-row items-center justify-between px-4 h-12">
        <div class="flex flex-row items-center space-x-2">
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                ทัวร์ต่างประเทศ
            </a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">ทัวร์ในประเทศ</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">ทัวร์โปรโมชั่น</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">ทัวร์ตามเทศกาล</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">แพ็กเกจทัวร์</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">รับจัดกรุ๊ปทัวร์</a>
            <span class="text-gray-400">|</span>
            <a href="#" class="text-gray-700 font-medium px-1 py-0.5 text-xs hover:text-orange-500 transition-colors">รอบรู้เรื่องเที่ยว</a>
        </div>
        <div class="flex flex-row items-center space-x-2">
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs hover:text-orange-600 transition-colors">
                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
                เข้าสู่ระบบ/สมัครสมาชิก
            </a>
            <span class="text-gray-400">|</span>
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs hover:text-orange-600 transition-colors">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span class="relative">
                    <span>ค้นหา</span>
                    <span class="absolute -top-2 -right-4 bg-orange-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                </span>
            </a>
            <span class="text-gray-400">|</span>
            <a href="#" class="flex items-center text-orange-500 font-bold px-1 py-0.5 text-xs hover:text-orange-600 transition-colors">
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

<!-- Mobile Navigation Menu (Hidden by default) -->
<div id="mobile-menu" class="md:hidden hidden bg-white border-b border-gray-200 shadow-lg transform transition-all duration-300 ease-in-out">
    <div class="px-4 py-3 space-y-3">
        <!-- Navigation Links -->
        <div class="space-y-2">
            <a href="#" class="flex items-center text-orange-500 font-bold py-3 px-4 rounded-lg bg-gradient-to-r from-orange-50 to-orange-100 border-l-4 border-orange-500 transform hover:scale-105 transition-all duration-200">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                ทัวร์ต่างประเทศ
            </a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">ทัวร์ในประเทศ</a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">ทัวร์โปรโมชั่น</a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">ทัวร์ตามเทศกาล</a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">แพ็กเกจทัวร์</a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">รับจัดกรุ๊ปทัวร์</a>
            <a href="#" class="block text-gray-700 font-medium py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 hover:text-orange-500 transform hover:scale-105 transition-all duration-200">รอบรู้เรื่องเที่ยว</a>
        </div>
        
        <!-- Divider -->
        <div class="border-t border-gray-200 pt-3">
            <!-- User Actions -->
            <div class="space-y-2">
                <a href="#" class="flex items-center text-orange-500 font-bold py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-100 transform hover:scale-105 transition-all duration-200">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    เข้าสู่ระบบ/สมัครสมาชิก
                </a>
                <a href="#" class="flex items-center text-orange-500 font-bold py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-100 transform hover:scale-105 transition-all duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" fill="none"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    ค้นหา
                </a>
                <a href="#" class="flex items-center text-orange-500 font-bold py-3 px-4 rounded-lg hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-100 transform hover:scale-105 transition-all duration-200">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c2.54 0 4.04 2.04 4.5 2.88C12.96 5.04 14.46 3 17 3c3.08 0 5.5 2.42 5.5 5.5 0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    รายการโปรด
                </a>
            </div>
        </div>
        
        <!-- Contact Info -->
        <div class="border-t border-gray-200 pt-3">
            <div class="text-center space-y-3 bg-gradient-to-r from-gray-50 to-blue-50 p-4 rounded-lg">
                <div class="flex items-center justify-center space-x-3">
                    <img src="{{asset('images/line_share.svg')}}" alt="LINE" class="w-6 h-6">
                    <span class="text-sm font-medium text-gray-700">@nexttripholiday</span>
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-700 transform hover:scale-110 transition-all duration-200">
                        <img src="{{asset('images/facebook.svg')}}" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="#" class="text-red-600 hover:text-red-700 transform hover:scale-110 transition-all duration-200">
                        <img src="{{asset('images/youtube.svg')}}" alt="YouTube" class="w-6 h-6">
                    </a>
                    <a href="#" class="text-pink-500 hover:text-pink-600 transform hover:scale-110 transition-all duration-200">
                        <img src="{{asset('images/instagram.svg')}}" alt="Instagram" class="w-6 h-6">
                    </a>
                    <a href="#" class="text-black hover:text-gray-700 transform hover:scale-110 transition-all duration-200">
                        <img src="{{asset('images/tiktok.svg')}}" alt="TikTok" class="w-6 h-6">
                    </a>
                </div>
                <div class="text-xs text-gray-500 mt-2">
                    Hotline: 091-091-6364 (ตลอดเวลา)
                </div>
            </div>
        </div>
    </div>
</div>

