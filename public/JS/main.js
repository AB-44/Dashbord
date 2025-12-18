// البحث عن جميع الأزرار التي تحمل الفئة 'dropdown-btn'
const dropdownBtns = document.querySelectorAll(".dropdown-btn");

dropdownBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        // تحديد القائمة المنسدلة (Menu) والسهم (Arrow) المرتبطين بهذا الزر
        const menu = btn.nextElementSibling;
        const arrow = btn.querySelector(".dropdown-arrow");

        // التحقق مما إذا كانت القائمة مفتوحة حالياً (isOpen)
        const isOpen = menu.style.maxHeight !== "0px" && menu.style.maxHeight !== "";

        if (isOpen) {
            // حالة الإغلاق: السهم يتجه إلى اليسار (الاتجاه الأساسي للأيقونة)
            menu.style.maxHeight = "0px";
            // الاتجاه الافتراضي للرمز هو اليسار، لذا نستخدم 0 درجة أو أي قيمة أخرى تجعله لليسار
            arrow.style.transform = "rotate(0deg)";
        } else {
            // حالة الفتح: السهم يتجه إلى الأسفل (نحتاج 270 درجة أو -90 درجة دوران)
            menu.style.maxHeight = "200px";
            // 270deg = لليسار (0) -> للأعلى (90) -> لليمين (180) -> للأسفل (270)
            arrow.style.transform = "rotate(270deg)"; // <--- تم التعديل هنا ليتجه للأسفل
        }
    });
});
