@extends('layouts.app')

@section('title', 'จองทัวร์ออนไลน์ - แพ็คเกจทัวร์คุณภาพในราคาดีที่สุด')

@section('content')



<section class="relative isolate">
  <div class="h-[70svh] bg-[url('https://plus.unsplash.com/premium_photo-1661878091370-4ccb8763756a?q=80&w=1332&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-fixed"></div>
  <div class="absolute inset-0 -z-10 bg-black/40"></div>

  <div class="absolute inset-0 grid place-items-center">
    <div class="w-full max-w-4xl px-4 text-center text-white ">
      <h1 class="text-4xl font-extrabold sm:text-5xl">สำรวจโลกกว้างกับเรา</h1>
      <p class="mt-2 text-white/90">ดีลทัวร์ต่างประเทศประจำสัปดาห์ อัปเดตราคาเรียลไทม์</p>

      <form class="mx-auto mt-6 grid grid-cols-1 gap-3 sm:grid-cols-5">
        <input 
          class="sm:col-span-2 rounded-lg border border-white/50 bg-white/20 px-3 py-2 text-sm text-white placeholder-white/80 focus:border-white focus:ring-2 focus:ring-white focus:outline-none" 
          placeholder="ปลายทาง">
        
        <input 
          type="date" 
          class="rounded-lg border border-white/50 bg-white/20 px-3 py-2 text-sm text-white placeholder-white/80 focus:border-white focus:ring-2 focus:ring-white focus:outline-none">
        
        <select 
          class="rounded-lg border border-white/50 bg-white/20 px-3 py-2 text-sm text-white focus:border-white focus:ring-2 focus:ring-white focus:outline-none">
          <option class="text-gray-900">ทั้งหมด</option>
          <option class="text-gray-900">กรุ๊ปทัวร์</option>
          <option class="text-gray-900">ส่วนตัว</option>
        </select>
        
        <button 
          class="rounded-lg bg-orange-500  px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700">
          ค้นหา
        </button>
      </form>
    </div>
  </div>
</section>




<!-- Enhanced Featured Tours Section -->
<section id="packages" class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-100 rounded-full mb-6">
                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                ✨ แพ็คเกจทัวร์ยอดนิยม
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                ค้นพบแพ็คเกจทัวร์ที่ได้รับความนิยมสูงสุด พร้อมสถานที่ท่องเที่ยวที่สวยงาม
                <span class="block text-orange-500 font-semibold mt-2">และประสบการณ์ที่น่าจดจำตลอดชีวิต</span>
            </p>
        </div>
        
        <!-- Tours Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Enhanced Tour Card 1 -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                <div class="relative h-48 sm:h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="ภูเก็ต" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Discount Badge -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-red-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg animate-pulse">
                        🔥 ลด 30%
                    </div>
                    
                    <!-- Location Badge -->
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                        📍 ภูเก็ต
                    </div>
                    
                    <!-- Heart Icon -->
                    <button class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="p-4 sm:p-6">
                    <!-- Rating -->
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center text-yellow-500">
                            <div class="flex">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-sm font-semibold text-gray-600">4.8 (125 รีวิว)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            3 วัน 2 คืน
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
                        🏝️ ภูเก็ต เกาะในฝัน
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        เที่ยวเกาะพีพี นั่งเรือหางยาว ชมความงามของทะเลอันดามัน พร้อมกิจกรรมน้ำที่น่าตื่นเต้น
                    </p>
                    
                    <!-- Features -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded-full">🏨 โรงแรม 4⭐</span>
                        <span class="px-2 py-1 bg-green-50 text-green-600 text-xs rounded-full">🍽️ อาหาร 6 มื้อ</span>
                        <span class="px-2 py-1 bg-purple-50 text-purple-600 text-xs rounded-full">🚗 รถปรับอากาศ</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-3xl font-bold text-orange-500">฿8,500</span>
                            <span class="text-sm text-gray-500 line-through ml-2">฿12,000</span>
                            <div class="text-xs text-gray-500">ต่อคน (รวมทุกอย่าง)</div>
                        </div>
                        <button class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced Tour Card 2 -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                <div class="relative h-48 sm:h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552550049-db097c9480d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="เชียงใหม่" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        🆕 ใหม่
                    </div>
                    
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                        🏔️ เชียงใหม่
                    </div>
                    
                    <button class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="p-4 sm:p-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center text-yellow-500">
                            <div class="flex">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-sm font-semibold text-gray-600">4.9 (89 รีวิว)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            4 วัน 3 คืน
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
                        🌸 เชียงใหม่ ดินแดนล้านนา
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        เที่ยวดอยสุเทพ ล่องแก่ง ช้อปปิ้งถนนคนเดิน สัมผัสวัฒนธรรมล้านนาแท้
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded-full">🏨 โรงแรม 4⭐</span>
                        <span class="px-2 py-1 bg-green-50 text-green-600 text-xs rounded-full">🍽️ อาหาร 8 มื้อ</span>
                        <span class="px-2 py-1 bg-purple-50 text-purple-600 text-xs rounded-full">🎭 วัฟนธรรม</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-3xl font-bold text-orange-500">฿6,900</span>
                            <div class="text-xs text-gray-500">ต่อคน (รวมทุกอย่าง)</div>
                        </div>
                        <button class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced Tour Card 3 -->
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                <div class="relative h-48 sm:h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="กรุงเทพ" 
                         loading="lazy"
                         decoding="async"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        💯 ยอดนิยม
                    </div>
                    
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                        🏛️ กรุงเทพ
                    </div>
                    
                    <button class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="p-4 sm:p-6">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center text-yellow-500">
                            <div class="flex">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-sm font-semibold text-gray-600">4.7 (156 รีวิว)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            1 วัน
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
                        🏛️ กรุงเทพ เมืองแห่งวัฒนธรรม
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        เที่ยวชมวัดพระแก้ว พระบรมมหาราชวัง ล่องเรือเจ้าพระยา สัมผัสประวัติศาสตร์ไทย
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded-full">🚌 รถทัวร์</span>
                        <span class="px-2 py-1 bg-green-50 text-green-600 text-xs rounded-full">🍽️ อาหาร 2 มื้อ</span>
                        <span class="px-2 py-1 bg-purple-50 text-purple-600 text-xs rounded-full">🎭 ไกด์ท้องถิ่น</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-3xl font-bold text-orange-500">฿1,200</span>
                            <div class="text-xs text-gray-500">ต่อคน (รวมทุกอย่าง)</div>
                        </div>
                        <button class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                            จองเลย
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced View All Button -->
        <div class="text-center mt-10 sm:mt-16">
            <a href="{{ route('packages') }}" class="group inline-flex items-center bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-6 py-3 sm:px-10 sm:py-4 rounded-2xl font-bold transition-all duration-300 transform hover:scale-105 hover:shadow-xl text-base sm:text-lg">
                <span class="mr-3">🌟</span>
                ดูแพ็คเกจทั้งหมด
                <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <p class="text-gray-500 text-sm mt-3">เลือกจากแพ็คเกจทัวร์กว่า 200+ โปรแกรม</p>
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
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
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

<!-- Enhanced Newsletter Section -->
<section class="py-20 bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-20 w-32 h-32 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-32 h-32 bg-red-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center text-white">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-8">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                📧 รับข่าวสารและโปรโมชั่นพิเศษ
            </h2>
            <p class="text-xl text-orange-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                สมัครรับข่าวสารเพื่อรับโปรโมชั่นและข้อเสนอพิเศษก่อนใครอีกมากมาย
                <span class="block text-yellow-200 font-semibold mt-2">✨ พร้อมส่วนลดสุดพิเศษสำหรับสมาชิกใหม่</span>
            </p>
            
            <!-- Newsletter Form -->
            <div class="max-w-lg mx-auto">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="flex-1 relative">
                            <input type="email" placeholder="กรอกอีเมลของคุณ..." 
                                   class="w-full px-6 py-4 rounded-xl text-gray-900 bg-white/95 backdrop-blur-sm focus:outline-none focus:ring-4 focus:ring-yellow-400/50 border-0 placeholder-gray-500 font-medium">
                            <svg class="absolute right-4 top-4 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <button class="bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-300 hover:to-yellow-400 text-black px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                            <span class="flex items-center">
                                🎯 สมัครสมาชิก
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                    
                    <!-- Benefits -->
                    <div class="mt-6 grid grid-cols-2 gap-4 text-left">
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            ข่าวสารล่าสุด
                        </div>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            โปรโมชั่นพิเศษ
                        </div>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            ส่วนลดสมาชิก
                        </div>
                        <div class="flex items-center text-white/90 text-sm">
                            <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            ทัวร์เอกสิทธิ์
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Trust Badge -->
            <div class="mt-8 text-orange-100 text-sm">
                🔒 ข้อมูลของคุณปลอดภัย เราไม่แชร์อีเมลกับบุคคลที่สาม
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Optimize for performance - Run after DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle - only if element exists
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu) {
                    mobileMenu.classList.toggle('hidden');
                }
            });
        }

        // Hero Background Slideshow - Optimized
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const indicators = document.querySelectorAll('.slide-indicator');
        const totalSlides = slides.length;

        if (totalSlides === 0) return; // Exit if no slides

        function showSlide(index) {
            // Use requestAnimationFrame for smooth animations
            requestAnimationFrame(() => {
                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.style.opacity = '1';
                        slide.style.transform = 'scale(1)';
                        slide.classList.add('active');
                    } else {
                        slide.style.opacity = '0';
                        slide.style.transform = 'scale(1.05)';
                        slide.classList.remove('active');
                    }
                });

                // Update indicators efficiently
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === index);
                    indicator.style.backgroundColor = i === index ? 
                        'rgba(255, 255, 255, 0.9)' : 'rgba(255, 255, 255, 0.5)';
                });
            });

            currentSlide = index;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Debounced slideshow for better performance
        let slideInterval = setInterval(nextSlide, 5000);

        // Manual control via indicators - Use event delegation
        const indicatorContainer = document.querySelector('.absolute.bottom-4.right-8');
        if (indicatorContainer) {
            indicatorContainer.addEventListener('click', (e) => {
                if (e.target.classList.contains('slide-indicator')) {
                    const index = parseInt(e.target.dataset.slide);
                    clearInterval(slideInterval);
                    showSlide(index);
                    // Restart auto slideshow
                    slideInterval = setInterval(nextSlide, 5000);
                }
            });
        }

        // Pause slideshow on hover - Use passive listeners
        const heroSection = document.querySelector('section');
        if (heroSection) {
            heroSection.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            }, { passive: true });

            heroSection.addEventListener('mouseleave', () => {
                slideInterval = setInterval(nextSlide, 5000);
            }, { passive: true });
        }

        // Initialize first slide
        showSlide(0);

        // Preload next images for smoother transitions
        function preloadNextImages() {
            slides.forEach((slide, index) => {
                if (index > 0 && index <= 2) { // Preload first 3 images
                    const img = new Image();
                    const bgImage = slide.style.backgroundImage;
                    const url = bgImage.slice(5, -2); // Remove url(" and ")
                    img.src = url;
                }
            });
        }

        // Preload after initial render
        setTimeout(preloadNextImages, 1000);
    });

    // Smooth scrolling for anchor links - Use passive listeners
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a[href^="#"]');
        if (link) {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    }, { passive: false });
</script>
@endpush
