
const dropdownBtns = document.querySelectorAll(".dropdown-btn");
dropdownBtns.forEach(btn => {
    btn.addEventListener("click", () => {

        const menu = btn.nextElementSibling;

        const arrow = btn.querySelector(".dropdown-arrow");

        const isOpen = menu.style.maxHeight !== "0px" && menu.style.maxHeight !== "";

        if (isOpen) {
            menu.style.maxHeight = "0px";
            arrow.style.transform = "rotate(0deg)";
        } else {
            menu.style.maxHeight = "200px";
            arrow.style.transform = "rotate(270deg)";
        }
    });
});


  const avatar = document.querySelector('.avatar');
  const dropdownMenu = document.getElementById('dropdownMenu2');

  // إظهار القائمة عند النقر
  avatar.addEventListener('click', function(e) {
    e.stopPropagation(); // لمنع التفاعل مع العناصر الأخرى
    dropdownMenu.classList.toggle('show');
  });

  // إخفاء القائمة عند النقر في أي مكان آخر في الصفحة
  document.addEventListener('click', function(e) {
    if (!avatar.contains(e.target)) {
      dropdownMenu.classList.remove('show');
    }
  });

  // إضافة حدث للعناصر داخل القائمة (اختياري)
  document.querySelectorAll('.dropdown-item2').forEach(item => {
    item.addEventListener('click', function() {
      alert('تم اختيار: ' + this.textContent.trim());
      dropdownMenu.classList.remove('show'); // إغلاق القائمة بعد الاختيار
    });
  });


