<?php
/**
 * EAxAI.net - ปราสาทดิจิทัลเพื่อความมั่งคั่งและลิขสิทธิ์
 * Copyright (c) 2026 EAxAI.net All Rights Reserved.
 * ระบบนี้ได้รับการคุ้มครองตามกฎหมายลิขสิทธิ์และทรัพย์สินทางปัญญา
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>EAxAI.net | Digital Fortress</title>
    <!-- Tailwind CSS สำหรับการแสดงผลที่รวดเร็วและสวยงาม -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome สำหรับไอคอนระบบรักษาความปลอดภัย -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap');
        
        body { 
            font-family: 'Sarabun', sans-serif;
            background: radial-gradient(circle at top right, #1e293b, #0f172a);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .status-pulse {
            width: 12px;
            height: 12px;
            background: #4ade80;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 0 rgba(74, 222, 128, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(74, 222, 128, 0); }
            100% { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0); }
        }

        /* ป้องกันการคัดลอกข้อความเพื่อรักษาสิทธิ์เนื้อหา */
        .no-select {
            user-select: none;
            -webkit-user-select: none;
        }
    </style>
</head>
<body class="no-select">

    <div class="w-full max-w-sm mx-auto p-6">
        <div class="glass-card rounded-[2.5rem] p-8 text-center space-y-6">
            
            <!-- ส่วนสัญลักษณ์ความปลอดภัย -->
            <div class="relative inline-block">
                <div class="w-24 h-24 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto border border-blue-400/30">
                    <i class="fas fa-shield-halved text-4xl text-blue-400"></i>
                </div>
                <div class="absolute bottom-1 right-1">
                    <span class="status-pulse"></span>
                </div>
            </div>

            <!-- หัวข้อหลัก -->
            <div class="space-y-2">
                <h1 class="text-3xl font-extrabold text-white tracking-tight">
                    EAxAI<span class="text-blue-400">.net</span>
                </h1>
                <p class="text-blue-300/80 text-sm font-medium uppercase tracking-widest">
                    Digital Fortress Established
                </p>
            </div>

            <!-- รายละเอียดการคุ้มครอง -->
            <div class="bg-black/20 rounded-2xl p-4 text-left border border-white/5">
                <div class="flex items-center space-x-3 text-slate-300 mb-2">
                    <i class="fas fa-check-circle text-green-400 text-xs"></i>
                    <span class="text-xs">SSL Encryption Active</span>
                </div>
                <div class="flex items-center space-x-3 text-slate-300 mb-2">
                    <i class="fas fa-check-circle text-green-400 text-xs"></i>
                    <span class="text-xs">Copyright Protection 2026</span>
                </div>
                <div class="flex items-center space-x-3 text-slate-300">
                    <i class="fas fa-check-circle text-green-400 text-xs"></i>
                    <span class="text-xs">Mobile Responsive Interface</span>
                </div>
            </div>

            <!-- ข้อความปิดท้าย -->
            <p class="text-slate-400 text-sm italic px-4">
                "ความมั่งคั่งและลิขสิทธิ์ของคุณ ถูกปกป้องด้วยระบบที่ชาญฉลาดที่สุด"
            </p>

            <!-- ลิขสิทธิ์ตามกฎหมาย -->
            <div class="pt-6 border-t border-white/10">
                <p class="text-[10px] text-slate-500 uppercase tracking-tighter">
                    © 2026 EAxAI.net | All Rights Reserved.<br>
                    Protected by Digital Law & IP Rights
                </p>
            </div>
        </div>
    </div>

</body>
</html>
