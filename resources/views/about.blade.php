@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 to-blue-800 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
            เกี่ยวกับเรา
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            ผู้เชี่ยวชาญด้านการท่องเที่ยวที่มีประสบการณ์กว่า 15 ปี
        </p>
    </div>
</div>

<!-- Company Story -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">เรื่องราวของเรา</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    TourBooking ก่อตั้งขึ้นในปี 2008 ด้วยความมุ่งมั่นที่จะสร้างประสบการณ์การท่องเที่ยวที่ดีที่สุดให้กับลูกค้าทุกท่าน 
                    เราเริ่มต้นจากบริษัททัวร์เล็กๆ และได้เติบโตมาเป็นหนึ่งในผู้ให้บริการท่องเที่ยวชั้นนำของประเทศ
                </p>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    ด้วยทีมงานมืออาชีพที่มีความรู้และประสบการณ์ในการออกแบบและจัดทริปท่องเที่ยว 
                    เราได้ให้บริการลูกค้ามากกว่า 50,000 คน และสร้างความประทับใจในทุกการเดินทาง
                </p>
                <div class="flex space-x-6 mt-8">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">15+</div>
                        <div class="text-sm text-gray-500">ปีประสบการณ์</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">50,000+</div>
                        <div class="text-sm text-gray-500">ลูกค้าที่ใช้บริการ</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600">1,000+</div>
                        <div class="text-sm text-gray-500">ทริปท่องเที่ยว</div>
                    </div>
                </div>
            </div>
            <div class="lg:pl-8">
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <span class="text-gray-500 text-lg">รูปภาพบริษัท</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">ค่านิยมของเรา</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                เราเชื่อในการสร้างประสบการณ์ที่ดีที่สุดด้วยหลักการที่ชัดเจน
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">คุณภาพเป็นเลิศ</h3>
                <p class="text-gray-600">เราให้ความสำคัญกับคุณภาพในทุกขั้นตอนของการให้บริการ</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">ความปลอดภัย</h3>
                <p class="text-gray-600">ความปลอดภัยของลูกค้าคือสิ่งสำคัญที่สุดในทุกการเดินทาง</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">บริการใจ</h3>
                <p class="text-gray-600">เราให้บริการด้วยใจและความเอาใจใส่ในทุกรายละเอียด</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">ทีมของเรา</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                ทีมงานมืออาชีพที่พร้อมดูแลคุณในทุกการเดินทาง
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gray-200 rounded-full w-32 h-32 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-gray-500">รูปภาพ</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-1">คุณสมชาย จันทร์เพ็ญ</h3>
                <p class="text-blue-600 mb-2">ผู้อำนวยการ</p>
                <p class="text-gray-600 text-sm">ประสบการณ์ 20 ปีในธุรกิจท่องเที่ยว</p>
            </div>
            <div class="text-center">
                <div class="bg-gray-200 rounded-full w-32 h-32 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-gray-500">รูปภาพ</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-1">คุณสมหญิง ใจดี</h3>
                <p class="text-blue-600 mb-2">ผู้จัดการฝ่ายขาย</p>
                <p class="text-gray-600 text-sm">เชี่ยวชาญการออกแบบทริปตามความต้องการ</p>
            </div>
            <div class="text-center">
                <div class="bg-gray-200 rounded-full w-32 h-32 mx-auto mb-4 flex items-center justify-center">
                    <span class="text-gray-500">รูปภาพ</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-1">คุณสมศักดิ์ ใส่ใจ</h3>
                <p class="text-blue-600 mb-2">ไกด์ท่องเที่ยว</p>
                <p class="text-gray-600 text-sm">มัคคุเทศก์ที่ได้รับใบอนุญาตระดับประเทศ</p>
            </div>
        </div>
    </div>
</div>

<!-- Certificates -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">การรับรองและใบอนุญาต</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                เราได้รับการรับรองจากหน่วยงานต่างๆ ที่เกี่ยวข้อง
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-blue-600 text-2xl font-bold mb-2">TAT</div>
                    <p class="text-sm text-gray-600">การท่องเที่ยวแห่งประเทศไทย</p>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-green-600 text-2xl font-bold mb-2">TTAA</div>
                    <p class="text-sm text-gray-600">สมาคมตัวแทนท่องเที่ยวไทย</p>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-purple-600 text-2xl font-bold mb-2">ISO</div>
                    <p class="text-sm text-gray-600">มาตรฐาน ISO 9001:2015</p>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <div class="text-red-600 text-2xl font-bold mb-2">IATA</div>
                    <p class="text-sm text-gray-600">สมาคมขนส่งทางอากาศ</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
