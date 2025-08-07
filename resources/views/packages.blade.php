@extends('layouts.app')

@section('title', 'แพ็คเกจทัวร์ทั้งหมด')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">แพ็คเกจทัวร์ทั้งหมด</h1>
            <p class="text-xl text-blue-100">ค้นพบจุดหมายปลายทางที่น่าตื่นตาตื่นใจ</p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="bg-white py-8 shadow-sm border-b">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap gap-4 items-center justify-between">
            <div class="flex flex-wrap gap-4">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option>ทุกประเภท</option>
                    <option>ทัวร์ในประเทศ</option>
                    <option>ทัวร์ต่างประเทศ</option>
                    <option>ทัวร์ 1 วัน</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option>ทุกราคา</option>
                    <option>ต่ำกว่า 5,000 บาท</option>
                    <option>5,000 - 10,000 บาท</option>
                    <option>10,000 - 20,000 บาท</option>
                    <option>มากกว่า 20,000 บาท</option>
                </select>
                
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option>ทุกระยะเวลา</option>
                    <option>1 วัน</option>
                    <option>2-3 วัน</option>
                    <option>4-7 วัน</option>
                    <option>มากกว่า 7 วัน</option>
                </select>
            </div>
            
            <div class="flex items-center gap-2">
                <span class="text-gray-600">เรียงตาม:</span>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option>ความนิยม</option>
                    <option>ราคา: ต่ำไปสูง</option>
                    <option>ราคา: สูงไปต่ำ</option>
                    <option>ระยะเวลา</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Tours Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Tour Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow tour-card">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="ภูเก็ต" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        ลด 30%
                    </div>
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        3 วัน 2 คืน
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.8</span>
                        <span class="ml-1 text-gray-500 text-sm">(125)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">ภูเก็ต เกาะพีพี ทะเลใส</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">เที่ยวเกาะพีพี นั่งเรือหางยาว ชมความงามของทะเลอันดามัน ดำน้ำดูปะการัง</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-blue-600">฿8,500</span>
                            <span class="text-sm text-gray-500 line-through ml-2">฿12,000</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            ดูรายละเอียด
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tour Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow tour-card">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1552550049-db097c9480d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="เชียงใหม่" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        ใหม่
                    </div>
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        4 วัน 3 คืน
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.9</span>
                        <span class="ml-1 text-gray-500 text-sm">(89)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">เชียงใหม่ ดอยสุเทพ</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">เที่ยวดอยสุเทพ ล่องแก่ง ช้อปปิ้งถนนคนเดิน สัมผัสวัฒนธรรมล้านนา</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-blue-600">฿6,900</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            ดูรายละเอียด
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tour Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow tour-card">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="กรุงเทพ" class="w-full h-full object-cover">
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        1 วัน
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.7</span>
                        <span class="ml-1 text-gray-500 text-sm">(156)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">กรุงเทพ วัดพระแก้ว</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">เที่ยวชมวัดพระแก้ว พระบรมมหาราชวัง ล่องเรือเจ้าพระยา ช้อปปิ้งเยาวราช</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-blue-600">฿1,200</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            ดูรายละเอียด
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tour Card 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow tour-card">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="ญี่ปุ่น" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        ฮิต
                    </div>
                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                        5 วัน 4 คืน
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-yellow-500 mb-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-sm">4.9</span>
                        <span class="ml-1 text-gray-500 text-sm">(203)</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">ญี่ปุ่น โตเกียว โอซาก้า</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">เที่ยวโตเกียว โอซาก้า ชมซากุระ ช้อปปิ้ง ลิ้มรสอาหารญี่ปุ่นแท้</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xl font-bold text-blue-600">฿35,900</span>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors">
                            ดูรายละเอียด
                        </button>
                    </div>
                </div>
            </div>

            <!-- Add more tour cards as needed -->
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-1">
                <button class="px-3 py-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                    ก่อนหน้า
                </button>
                <button class="px-3 py-2 bg-blue-600 text-white rounded-lg">1</button>
                <button class="px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">2</button>
                <button class="px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">3</button>
                <button class="px-3 py-2 text-gray-500">...</button>
                <button class="px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">10</button>
                <button class="px-3 py-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                    ถัดไป
                </button>
            </nav>
        </div>
    </div>
</section>
@endsection
