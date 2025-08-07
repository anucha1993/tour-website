@extends('layouts.app')

@section('title', 'จองท            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">วันเดินทาง</label>
                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">จำนวนคน</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                    <option>1 คน</option>
                    <option>2 คน</option>
                    <option>3-5 คน</option>
                    <option>มากกว่า 5 คน</option>
                </select>
            </div>
            <div class="md:col-span-1 flex items-end">
                <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-colors">พ็คเกจทัวร์คุณภาพในราคาดีที่สุด')

@section('content')
<!-- Hero Section - 40% ของพื้นที่หลัก -->
<section class="relative h-[60vh] bg-gradient-to-r from-orange-500 to-orange-700 flex items-center">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80');">
    </div>
    <div class="relative z-10 container mx-auto px-4">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                เริ่มต้นการเดินทาง<br>
                <span class="text-yellow-400">ที่น่าจดจำ</span>
            </h1>
            <p class="text-xl text-gray-200 mb-8">
                ค้นพบจุดหมายปลายทางที่สวยงามทั่วโลก พร้อมแพ็คเกจทัวร์คุณภาพในราคาที่เป็นธรรม
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#packages" class="bg-yellow-500 hover:bg-yellow-600 text-black px-8 py-3 rounded-lg font-semibold transition-colors inline-flex items-center justify-center">
                    ดูแพ็คเกจทัวร์
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#contact" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-orange-600 px-8 py-3 rounded-lg font-semibold transition-colors inline-flex items-center justify-center">
                    ติดต่อเรา
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Search Section - 10% ของพื้นที่หลัก -->
<section class="bg-white shadow-lg -mt-16 relative z-20 mx-4 md:mx-8 rounded-xl">
    <div class="container mx-auto px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">ประเภททัวร์</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                    <option>ทัวร์ในประเทศ</option>
                    <option>ทัวร์ต่างประเทศ</option>
                    <option>ทัวร์ 1 วัน</option>
                </select>
            </div>
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">จุดหมาย</label>
                <input type="text" placeholder="ค้นหาจุดหมาย..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">วันเดินทาง</label>
                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="md:col-span-1">
                <label class="block text-sm font-medium text-gray-700 mb-2">จำนวนผู้เดินทาง</label>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>1 คน</option>
                    <option>2 คน</option>
                    <option>3-5 คน</option>
                    <option>6+ คน</option>
                </select>
            </div>
            <div class="md:col-span-1 flex items-end">
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                    ค้นหา
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Tours Section - 25% ของพื้นที่หลัก -->
<section id="packages" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">แพ็คเกจทัวร์ยอดนิยม</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">ค้นพบแพ็คเกจทัวร์ที่ได้รับความนิยมสูงสุด พร้อมสถานที่ท่องเที่ยวที่สวยงามและประสบการณ์ที่น่าจดจำ</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tour Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="ภูเก็ต" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        ลด 30%
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.8 (125 รีวิว)</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">ภูเก็ต 3 วัน 2 คืน</h3>
                    <p class="text-gray-600 text-sm mb-4">เที่ยวเกาะพีพี นั่งเรือหางยาว ชมความงามของทะเลอันดามัน</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-orange-500">฿8,500</span>
                            <span class="text-sm text-gray-500 line-through ml-2">฿12,000</span>
                        </div>
                        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tour Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1552550049-db097c9480d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="เชียงใหม่" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        ใหม่
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.9 (89 รีวิว)</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">เชียงใหม่ 4 วัน 3 คืน</h3>
                    <p class="text-gray-600 text-sm mb-4">เที่ยวดอยสุเทพ ล่องแก่ง ช้อปปิ้งถนนคนเดิน</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-orange-500">฿6,900</span>
                        </div>
                        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tour Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="กรุงเทพ" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.7 (156 รีวิว)</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">กรุงเทพ 1 วัน</h3>
                    <p class="text-gray-600 text-sm mb-4">เที่ยวชมวัดพระแก้ว พระบรมมหาราชวัง ล่องเรือเจ้าพระยา</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-orange-500">฿1,200</span>
                        </div>
                        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('packages') }}" class="bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-8 py-3 rounded-lg font-semibold transition-colors inline-flex items-center">
                ดูแพ็คเกจทั้งหมด
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section - 15% ของพื้นที่หลัก -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">ทำไมต้องเลือกเรา</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">เราให้บริการด้วยประสบการณ์และความเชี่ยวชาญมากว่า 15 ปี</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">รับประกันคุณภาพ</h3>
                <p class="text-gray-600 text-sm">บริการคุณภาพสูง พร้อมทีมงานมืออาชีพ</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">ราคาดีที่สุด</h3>
                <p class="text-gray-600 text-sm">ราคาเป็นธรรม พร้อมโปรโมชั่นพิเศษตลอดปี</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">สนับสนุน 24/7</h3>
                <p class="text-gray-600 text-sm">ให้การสนับสนุนตลอด 24 ชั่วโมง</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">ความพึงพอใจ</h3>
                <p class="text-gray-600 text-sm">ลูกค้าให้คะแนนความพึงพอใจเฉลี่ย 4.8/5</p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section - 10% ของพื้นที่หลัก -->
<section class="py-16 bg-orange-500">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h2 class="text-3xl font-bold mb-4">รับข่าวสารและโปรโมชั่นพิเศษ</h2>
            <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
                สมัครรับข่าวสารเพื่อรับโปรโมชั่นและข้อเสนอพิเศษก่อนใครอีกมากมาย
            </p>
            <div class="max-w-lg mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="กรอกอีเมลของคุณ..." class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-8 py-3 rounded-lg font-semibold transition-colors">
                    สมัครสมาชิก
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpush
