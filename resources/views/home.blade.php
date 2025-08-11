@extends('layouts.app')

@section('title', 'จองทัวร์ออนไลน์ - แพ็คเกจทัวร์คุณภาพในราคาดีที่สุด')

@section('content')




    <section class="relative isolate">
        <!-- ใช้ภาพ hero ที่บีบอัดขนาดเล็กลง (ตัวอย่าง: 600px) -->
      <div class="h-[60vh] bg-cover bg-center bg-local"
     style="background-image: url('{{ asset('images/hero/bandner_สำรวจโลกกว้างกับเรา.webp') }}');">
</div>
        <div class="absolute inset-0 -z-10 bg-black/30"></div>

        <div class="absolute inset-0 grid place-items-center">
            <div class="w-full max-w-2xl px-3 text-center text-white">
                <h1 class="text-3xl font-bold sm:text-5xl">สำรวจโลกกว้างกับเรา</h1>
                <p class="mt-2 text-white/80">ดีลทัวร์ต่างประเทศประจำสัปดาห์ อัปเดตราคาเรียลไทม์</p>

                <form class="mx-auto mt-6 grid grid-cols-1 gap-2 sm:grid-cols-5">
                    <input
                        class="sm:col-span-2 rounded-lg border border-white/30 bg-white/10 px-3 py-2 text-sm text-white placeholder-white/70 focus:border-white focus:ring-2 focus:ring-white focus:outline-none"
                        placeholder="ปลายทาง" autocomplete="off">
                    <input type="date"
                        class="rounded-lg border border-white/30 bg-white/10 px-3 py-2 text-sm text-white placeholder-white/70 focus:border-white focus:ring-2 focus:ring-white focus:outline-none">
                    <select
                        class="rounded-lg border border-white/30 bg-white/10 px-3 py-2 text-sm text-white focus:border-white focus:ring-2 focus:ring-white focus:outline-none">
                        <option class="text-gray-900">ทั้งหมด</option>
                        <option class="text-gray-900">กรุ๊ปทัวร์</option>
                        <option class="text-gray-900">ส่วนตัว</option>
                    </select>
                    <button
                        class="rounded-lg bg-orange-500 px-4 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700">
                        ค้นหา
                    </button>
                </form>
            </div>
        </div>
    </section>


    <section class="bg-white py-8">
       <div class="mx-auto max-w-7xl px-4 text-center">
    <h2 class="text-lg font-bold text-orange-600 mt-6 mb-0">
        บริษัททัวร์ในประเทศ ทัวร์ต่างประเทศ ชั้นนำของไทย
    </h2>
    
    <p class="text-sm text-gray-600  mb-6">
        นำเสนอโปรโมชั่นยอดฮิต
    </p>


            <div class="overflow-hidden">
                <div class="flex gap-4 animate-[promo_20s_linear_infinite]">

                    <!-- Slide set 1 -->
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 1" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 2" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 3" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>

                    <!-- Duplicate set for infinite loop -->
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 1" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 2" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>
                    <div class="w-1/5 shrink-0">
                        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1000&auto=format&fit=crop"
                            alt="ภาพ 3" class="w-full aspect-[1/1] object-cover rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes promo {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>




    <!-- Enhanced Featured Tours Section -->
    <section id="packages" class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
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
                <div
                    class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                    <div class="relative h-48 sm:h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="ภูเก็ต" loading="lazy" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <!-- Discount Badge -->
                        <div
                            class="absolute top-4 right-4 bg-gradient-to-r from-red-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg animate-pulse">
                            🔥 ลด 30%
                        </div>

                        <!-- Location Badge -->
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            📍 ภูเก็ต
                        </div>

                        <!-- Heart Icon -->
                        <button
                            class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 sm:p-6">
                        <!-- Rating -->
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center text-yellow-500">
                                <div class="flex">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <span class="ml-2 text-sm font-semibold text-gray-600">4.8 (125 รีวิว)</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                3 วัน 2 คืน
                            </div>
                        </div>

                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
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
                            <button
                                class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                                จองเลย
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Tour Card 2 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                    <div class="relative h-48 sm:h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552550049-db097c9480d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="เชียงใหม่" loading="lazy" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div
                            class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-emerald-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            🆕 ใหม่
                        </div>

                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            🏔️ เชียงใหม่
                        </div>

                        <button
                            class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 sm:p-6">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center text-yellow-500">
                                <div class="flex">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <span class="ml-2 text-sm font-semibold text-gray-600">4.9 (89 รีวิว)</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                4 วัน 3 คืน
                            </div>
                        </div>

                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
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
                            <button
                                class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                                จองเลย
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Tour Card 3 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 w-full">
                    <div class="relative h-48 sm:h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            alt="กรุงเทพ" loading="lazy" decoding="async"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <div
                            class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                            💯 ยอดนิยม
                        </div>

                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            🏛️ กรุงเทพ
                        </div>

                        <button
                            class="absolute bottom-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors duration-300 opacity-0 group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 sm:p-6">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center text-yellow-500">
                                <div class="flex">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <span class="ml-2 text-sm font-semibold text-gray-600">4.7 (156 รีวิว)</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                1 วัน
                            </div>
                        </div>

                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-500 transition-colors duration-300">
                            🏛️ กรุงเทพ เมืองแห่งวัฒนธรรม
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            เที่ยวชมวัดพระแก้ว พระบรมมหาราชวัง ล่องเรือเจ้าพระยา สัมผัสประวัติศาสตร์ไทย
                        </p>

                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs rounded-full">🚌 รถทัวร์</span>
                            <span class="px-2 py-1 bg-green-50 text-green-600 text-xs rounded-full">🍽️ อาหาร 2 มื้อ</span>
                            <span class="px-2 py-1 bg-purple-50 text-purple-600 text-xs rounded-full">🎭
                                ไกด์ท้องถิ่น</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-3xl font-bold text-orange-500">฿1,200</span>
                                <div class="text-xs text-gray-500">ต่อคน (รวมทุกอย่าง)</div>
                            </div>
                            <button
                                class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 transform hover:scale-105 group-hover:shadow-lg w-full sm:w-auto">
                                จองเลย
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced View All Button -->
            <div class="text-center mt-10 sm:mt-16">
                <a href="{{ route('packages') }}"
                    class="group inline-flex items-center bg-white border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-6 py-3 sm:px-10 sm:py-4 rounded-2xl font-bold transition-all duration-300 transform hover:scale-105 hover:shadow-xl text-base sm:text-lg">
                    <span class="mr-3">🌟</span>
                    ดูแพ็คเกจทั้งหมด
                    <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <p class="text-gray-500 text-sm mt-3">เลือกจากแพ็คเกจทัวร์กว่า 200+ โปรแกรม</p>
            </div>
        </div>
    </section>


    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-orange-600">เลือกทัวร์ที่ใช่ในสไตล์คุณ</h2>
            </div>

            <!-- Tabs -->
            <div class="flex justify-center space-x-6 border-b border-gray-200 mb-8">
                <button class="tab-btn pb-2 text-sm font-semibold text-orange-600 border-b-2 border-orange-600"
                    data-tab="popular">ทัวร์สนใจมากที่สุด</button>
                <button class="tab-btn pb-2 text-sm font-semibold text-gray-500 hover:text-orange-600"
                    data-tab="cheap">ทัวร์ราคาถูก</button>
                <button class="tab-btn pb-2 text-sm font-semibold text-gray-500 hover:text-orange-600"
                    data-tab="premium">ทัวร์พรีเมี่ยม</button>
                <button class="tab-btn pb-2 text-sm font-semibold text-gray-500 hover:text-orange-600"
                    data-tab="discount">ทัวร์ที่ลดราคา</button>
            </div>

            <!-- Cards Container -->
            <div id="tab-contents">
                <!-- Popular -->
                <div class="tab-content grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="popular">
                    <!-- Card -->
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?q=80&w=1000&auto=format&fit=crop"
                            alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-xs text-gray-500 mb-2">
                                <span class="bg-red-500 text-white px-2 py-0.5 rounded mr-2">3 วัน 2 คืน</span>
                                <span>ฮ่องกง ดิสนีย์แลนด์</span>
                            </div>
                            <h3 class="font-semibold text-sm text-gray-900">ทัวร์ฮ่องกง ดิสนีย์แลนด์ #3เซียนดิสนีย์</h3>
                            <p class="mt-2 text-orange-600 font-bold">15,551 บาท</p>
                            <button
                                class="mt-3 w-full rounded-full bg-orange-500 px-4 py-2 text-white text-sm hover:bg-orange-600">รายละเอียด</button>
                        </div>
                    </div>
                    <!-- More cards ... -->
                </div>

                <!-- Cheap -->
                <div class="tab-content hidden grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="cheap">
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1000&auto=format&fit=crop"
                            alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-xs text-gray-500 mb-2">
                                <span class="bg-red-500 text-white px-2 py-0.5 rounded mr-2">4 วัน 3 คืน</span>
                                <span>เวียดนาม</span>
                            </div>
                            <h3 class="font-semibold text-sm text-gray-900">ทัวร์เวียดนาม ดานัง ฮอยอัน</h3>
                            <p class="mt-2 text-orange-600 font-bold">9,999 บาท</p>
                            <button
                                class="mt-3 w-full rounded-full bg-orange-500 px-4 py-2 text-white text-sm hover:bg-orange-600">รายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Premium -->
                <div class="tab-content hidden grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="premium">
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?q=80&w=1000&auto=format&fit=crop"
                            alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-xs text-gray-500 mb-2">
                                <span class="bg-red-500 text-white px-2 py-0.5 rounded mr-2">6 วัน 4 คืน</span>
                                <span>สวิตเซอร์แลนด์</span>
                            </div>
                            <h3 class="font-semibold text-sm text-gray-900">ทัวร์สวิตเซอร์แลนด์ เทือกเขาแอลป์</h3>
                            <p class="mt-2 text-orange-600 font-bold">69,900 บาท</p>
                            <button
                                class="mt-3 w-full rounded-full bg-orange-500 px-4 py-2 text-white text-sm hover:bg-orange-600">รายละเอียด</button>
                        </div>
                    </div>
                </div>

                <!-- Discount -->
                <div class="tab-content hidden grid gap-6 sm:grid-cols-2 lg:grid-cols-4" id="discount">
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1000&auto=format&fit=crop"
                            alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <div class="flex items-center text-xs text-gray-500 mb-2">
                                <span class="bg-green-500 text-white px-2 py-0.5 rounded mr-2">ลดราคา</span>
                                <span>ญี่ปุ่น ฟุกุโอกะ</span>
                            </div>
                            <h3 class="font-semibold text-sm text-gray-900">ทัวร์ญี่ปุ่น ฟุกุโอกะ คุมาโมโตะ</h3>
                            <p class="mt-2 text-orange-600 font-bold">26,999 บาท</p>
                            <button
                                class="mt-3 w-full rounded-full bg-orange-500 px-4 py-2 text-white text-sm hover:bg-orange-600">รายละเอียด</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- ผลงานจัดทัวร์คุณภาพ บางส่วน จากลูกค้าที่ให้ความไว้วางใจจากเรา --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Heading -->
            <div class="mb-10 text-center">
                <h2 class="text-2xl font-extrabold text-orange-600 sm:text-3xl">
                    ผลงานจัดทัวร์คุณภาพ บางส่วน จากลูกค้าที่ให้ความไว้วางใจจากเรา
                </h2>
            </div>

            <!-- Top block: big left + two small right -->
            <div class="grid gap-6 lg:grid-cols-6">
                <!-- Big feature -->
                <article class="lg:col-span-4">
                    <div class="overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                        <div class="aspect-[16/9] w-full overflow-hidden">
                            <img src="https://plus.unsplash.com/premium_photo-1661887262365-1d6a1cf3da22?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="h-full w-full object-cover" alt="รีวิวทัวร์ – ฮ่องกง มาเก๊า">
                        </div>
                        <div class="p-5">
                            <span
                                class="inline-flex items-center rounded-full bg-orange-50 px-2.5 py-1 text-xs font-semibold text-orange-600">รีวิวทริป</span>
                            <h3 class="mt-3 text-lg font-semibold text-gray-900">
                                รีวิวทริป ฮ่องกง ไหว้พระ ช้อปจุใจ
                            </h3>
                            <p class="mt-2 text-sm text-gray-600 line-clamp-2">
                                ทริปทำบุญไหว้พระและช้อปปิ้งสุดเพลิน เดินทางสะดวกสบาย พักทำเลดีใกล้แหล่งช้อป
                            </p>
                            <div class="mt-4 flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=96&auto=format&fit=crop"
                                    class="h-9 w-9 rounded-full object-cover" alt="avatar">
                                <div class="text-xs text-gray-500">
                                    <div class="font-medium text-gray-700">คุณ อารีย์ สุขทวี</div>
                                    <div>พนักงานบริษัท • เดินทาง 18–20 ก.ค. 68</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Right small cards -->
                <div class="lg:col-span-2 grid gap-6">
                    <article class="overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                        <div class="aspect-[16/10]">
                            <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?q=80&w=1200&auto=format&fit=crop"
                                class="h-full w-full object-cover" alt="รีวิวทริป – ไต้หวัน">
                        </div>
                        <div class="p-5">
                            <span
                                class="inline-block rounded-full bg-orange-50 px-2.5 py-1 text-xs font-semibold text-orange-600">รีวิวทริป</span>
                            <h3 class="mt-2 text-base font-semibold text-gray-900">รีวิวทริป ไต้หวัน ไหว้พระ ขอพร</h3>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">ทริปขอพรเสริมดวงและชิมสตรีทฟู้ดชื่อดัง</p>
                            <div class="mt-3 flex items-center gap-3 text-xs text-gray-500">
                                {{-- <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2b?q=80&w=96&auto=format&fit=crop" --}}
                                    class="h-8 w-8 rounded-full object-cover" alt="">
                                <span>คุณ กันยารัตน์ • 19–21 ก.ค. 68</span>
                            </div>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                        <div class="aspect-[16/10]">
                            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1200&auto=format&fit=crop"
                                class="h-full w-full object-cover" alt="รีวิวทริป – จิ่วไจ้โกว">
                        </div>
                        <div class="p-5">
                            <span
                                class="inline-block rounded-full bg-orange-50 px-2.5 py-1 text-xs font-semibold text-orange-600">รีวิวทริป</span>
                            <h3 class="mt-2 text-base font-semibold text-gray-900">รีวิวทริป จิ่วไจ้โกว ค่ำคืนสุดโรแมนติก
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 line-clamp-2">ธรรมชาติอลังการ น้ำใสสีมรกต อากาศดีทั้งทริป
                            </p>
                            <div class="mt-3 flex items-center gap-3 text-xs text-gray-500">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=96&auto=format&fit=crop"
                                    class="h-8 w-8 rounded-full object-cover" alt="">
                                <span>คุณ อนพนธ์ • 17–20 ก.ค. 68</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Bottom mosaic -->
            <div class="mt-8 grid gap-6 lg:grid-cols-12">
                <!-- left small text card -->
                <article class="lg:col-span-4 overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                    <!-- ภาพหลัก -->
                    <div class="aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1591076232271-e80adf362a13?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8SG9uZyUyMEtvbmclMjB3b3JzaGlwfGVufDB8fDB8fHww"
                            class="h-full w-full object-cover" alt="รีวิวทริป ฮ่องกง ไหว้พระ ราคาดีเว่อร์">
                    </div>

                    <!-- เนื้อหา -->
                    <div class="p-6">
                        <h3 class="text-base font-semibold text-gray-900">รีวิวทริป ฮ่องกง ไหว้พระ ราคาดีเว่อร์</h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-3">
                            เส้นทางยอดฮิต ไหว้พระดัง เดินทางใกล้ ราคาคุ้มค่ามาก ลูกค้าประทับใจ
                        </p>
                        <div class="mt-4 flex items-center gap-3 text-xs text-gray-500">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=96&auto=format&fit=crop"
                                class="h-8 w-8 rounded-full object-cover" alt="Avatar">
                            <span>คุณ ศุภมาศ • กลุ่มเล็ก 17 ท่าน</span>
                        </div>
                    </div>
                </article>


                <!-- center image card -->
                <article class="lg:col-span-4 overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                    <div class="aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1635772512104-98695c3a73f1?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Sml1emhhaWdvdXxlbnwwfHwwfHx8MA%3D%3D"
                            class="h-full w-full object-cover" alt="รีวิว – ไหว้พระจีน">
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-semibold text-gray-900">รีวิวทริป จีน ฮาร์บิน & จิ่วไจ้โกว</h3>
                        <p class="mt-1 text-sm text-gray-600 line-clamp-2">อากาศดี วิวเขียวสวยงาม โปรแกรมยืดหยุ่น</p>
                    </div>
                </article>

                <!-- right big image card -->
                <article class="lg:col-span-4 overflow-hidden rounded-2xl bg-white shadow ring-1 ring-black/5">
                    <div class="aspect-[16/10]">
                        <img src="https://images.unsplash.com/photo-1504218727796-db522606b16f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fFN3aXR6ZXJsYW5kfGVufDB8fDB8fHww"
                            class="h-full w-full object-cover" alt="รีวิว – ธรรมชาติยุโรป">
                    </div>
                    <div class="p-5">
                        <h3 class="text-base font-semibold text-gray-900">รีวิวทริป สวิตเซอร์แลนด์ วิวภูเขาและทะเลสาบ</h3>
                        <p class="mt-1 text-sm text-gray-600 line-clamp-2">หมู่บ้านสวย รถไฟพาโนรามา ลูกค้าชื่นชอบมาก</p>
                    </div>
                </article>
            </div>

            <!-- CTA -->
            <div class="mt-10 text-center">
                <a href="#reviews"
                    class="inline-flex items-center justify-center rounded-full bg-orange-500 px-6 py-3 text-sm font-semibold text-white shadow hover:bg-orange-600">
                    ดูรีวิวทั้งหมด
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">รับประกันคุณภาพ</h3>
                    <p class="text-gray-600 text-sm">บริการคุณภาพสูง พร้อมทีมงานมืออาชีพ</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">ราคาดีที่สุด</h3>
                    <p class="text-gray-600 text-sm">ราคาเป็นธรรม พร้อมโปรโมชั่นพิเศษตลอดปี</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">สนับสนุน 24/7</h3>
                    <p class="text-gray-600 text-sm">ให้การสนับสนุนตลอด 24 ชั่วโมง</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
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
            <div
                class="absolute top-10 left-10 w-32 h-32 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-0 right-20 w-32 h-32 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-32 h-32 bg-red-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white">
                <!-- Icon -->
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-8">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
                                <svg class="absolute right-4 top-4 w-5 h-5 text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <button
                                class="bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-300 hover:to-yellow-400 text-black px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                                <span class="flex items-center">
                                    🎯 สมัครสมาชิก
                                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </span>
                            </button>
                        </div>

                        <!-- Benefits -->
                        <div class="mt-6 grid grid-cols-2 gap-4 text-left">
                            <div class="flex items-center text-white/90 text-sm">
                                <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                ข่าวสารล่าสุด
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                โปรโมชั่นพิเศษ
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                ส่วนลดสมาชิก
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <svg class="w-4 h-4 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
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
        const tabBtns = document.querySelectorAll(".tab-btn");
        const tabContents = document.querySelectorAll(".tab-content");

        tabBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                tabBtns.forEach(b => {
                    b.classList.remove("text-orange-600", "border-orange-600", "border-b-2");
                    b.classList.add("text-gray-500");
                });
                btn.classList.add("text-orange-600", "border-orange-600", "border-b-2");
                btn.classList.remove("text-gray-500");

                const target = btn.dataset.tab;
                tabContents.forEach(content => {
                    content.classList.add("hidden");
                    if (content.id === target) {
                        content.classList.remove("hidden");
                    }
                });
            });
        });
    </script>

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
                }, {
                    passive: true
                });

                heroSection.addEventListener('mouseleave', () => {
                    slideInterval = setInterval(nextSlide, 5000);
                }, {
                    passive: true
                });
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
        }, {
            passive: false
        });
    </script>
@endpush
