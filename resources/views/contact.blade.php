@extends('layouts.app')

@section('title', 'ติดต่อเรา')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-r from-blue-600 to-blue-800 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
            ติดต่อเรา
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            พร้อมให้บริการและตอบคำถามของคุณตลอด 24 ชั่วโมง
        </p>
    </div>
</div>

<!-- Contact Information -->
<div class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Office -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">สำนักงานใหญ่</h3>
                <p class="text-gray-600 leading-relaxed">
                    123 ถนนสุขุมวิท แขวงคลองตัน<br>
                    เขตวัฒนา กรุงเทพฯ 10110<br>
                    อาคารทัวร์บุ๊คกิ้ง ชั้น 5-8
                </p>
            </div>

            <!-- Phone -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">โทรศัพท์</h3>
                <p class="text-gray-600 leading-relaxed">
                    สายด่วน: 02-123-4567<br>
                    มือถือ: 081-234-5678<br>
                    แฟกซ์: 02-123-4568
                </p>
            </div>

            <!-- Email -->
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">อีเมล</h3>
                <p class="text-gray-600 leading-relaxed">
                    ทั่วไป: info@tourbooking.com<br>
                    จองทัวร์: booking@tourbooking.com<br>
                    สำหรับสื่อมวลชน: pr@tourbooking.com
                </p>
            </div>
        </div>

        <!-- Contact Form and Map -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ส่งข้อความถึงเรา</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">
                                ชื่อ *
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">
                                นามสกุล *
                            </label>
                            <input type="text" id="last_name" name="last_name" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            อีเมล *
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                            เบอร์โทรศัพท์
                        </label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">
                            หัวข้อ *
                        </label>
                        <select id="subject" name="subject" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">เลือกหัวข้อ</option>
                            <option value="booking">จองทัวร์</option>
                            <option value="inquiry">สอบถามข้อมูล</option>
                            <option value="complaint">ร้องเรียน</option>
                            <option value="suggestion">ข้อเสนอแนะ</option>
                            <option value="other">อื่นๆ</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">
                            ข้อความ *
                        </label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="กรุณาระบุรายละเอียดข้อความของคุณ..."></textarea>
                    </div>

                    <div class="flex items-center">
                        <input id="consent" name="consent" type="checkbox" required
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="consent" class="ml-2 block text-sm text-gray-900">
                            ฉันยินยอมให้บริษัทติดต่อกลับและใช้ข้อมูลส่วนบุคคลตาม
                            <a href="#" class="text-blue-600 hover:text-blue-500">นโยบายความเป็นส่วนตัว</a>
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium">
                        ส่งข้อความ
                    </button>
                </form>
            </div>

            <!-- Map and Business Hours -->
            <div>
                <!-- Map -->
                <div class="mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">แผนที่</h3>
                    <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                        <span class="text-gray-500 text-lg">Google Maps</span>
                    </div>
                </div>

                <!-- Business Hours -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">เวลาทำการ</h3>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">จันทร์ - ศุกร์</span>
                                <span class="font-medium">9:00 - 18:00 น.</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">เสาร์</span>
                                <span class="font-medium">9:00 - 17:00 น.</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">อาทิตย์</span>
                                <span class="font-medium">10:00 - 16:00 น.</span>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 mt-4 pt-4">
                            <p class="text-sm text-gray-600">
                                <strong>หมายเหตุ:</strong> สำหรับกรณีฉุกเฉินหรือต้องการติดต่อนอกเวลา 
                                กรุณาโทร 081-234-5678 (24 ชั่วโมง)
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">ติดตามเราได้ที่</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-800 text-white rounded-lg flex items-center justify-center hover:bg-blue-900 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3.27V.5h-4.5C10.8.5 9.5 3.26 9.5 5.46v1.99h-3v4h3V24h5v-12.5h3.85l.42-4z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-pink-600 text-white rounded-lg flex items-center justify-center hover:bg-pink-700 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624.001 11.99-5.367 11.99-11.988C24.007 5.369 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">คำถามที่พบบ่อย</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                คำตอบสำหรับคำถามที่ลูกค้าถามบ่อย
            </p>
        </div>
        <div class="max-w-3xl mx-auto space-y-4">
            <div class="bg-white rounded-lg shadow-md">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-gray-900">จะจองทัวร์ได้อย่างไร?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">คุณสามารถจองทัวร์ได้ 3 วิธี: 1) ผ่านเว็บไซต์ออนไลน์ 2) โทรติดต่อสำนักงาน 3) มาที่สำนักงานโดยตรง</p>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-gray-900">สามารถยกเลิกการจองได้หรือไม่?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">สามารถยกเลิกได้ตามเงื่อนไขแต่ละทัวร์ โดยทั่วไปต้องแจ้งล่วงหน้าอย่างน้อย 7-14 วัน อาจมีค่าธรรมเนียมการยกเลิก</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md">
                <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-medium text-gray-900">ราคาทัวร์รวมอะไรบ้าง?</span>
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="px-6 pb-4">
                    <p class="text-gray-600">ราคาทัวร์ปกติจะรวม ที่พัก อาหาร ค่าเข้าชมสถานที่ต่างๆ รถโค้ช ไกด์ และประกันการเดินทาง รายละเอียดจะระบุชัดเจนในแต่ละแพ็คเกจ</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
