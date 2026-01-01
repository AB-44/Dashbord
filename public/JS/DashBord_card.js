  const ctx = document.getElementById('attendanceChart').getContext('2d');

    // بيانات الحضور (مثال: نسبة الغياب لكل شهر)
    const data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          label: 'Late',
          data: [55, 58, 57, 35, 38, 65, 68, 48, 47, 48, 49, 48], // نسبة التأخير
          backgroundColor: '#f57c00', // برتقالي
          borderColor: '#f57c00',
          borderWidth: 1
        },
        {
          label: 'Absent',
          data: [45, 42, 43, 65, 62, 35, 32, 52, 53, 52, 51, 52], // نسبة الغياب
          backgroundColor: '#90caf9', // أزرق فاتح
          borderColor: '#90caf9',
          borderWidth: 1
        }
      ]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false // سنستخدم ليدج مخصص بدلاً من اللي في المخطط
          },
          tooltip: {
            callbacks: {
              title: function(context) {
                return context[0].label; // الشهر
              },
              label: function(context) {
                const datasetLabel = context.dataset.label;
                const value = context.raw;
                return `${datasetLabel}: ${value}%`;
              }
            },
            backgroundColor: '#1e293b',
            titleColor: '#ffffff',
            bodyColor: '#ffffff',
            borderColor: '#475569',
            borderWidth: 1,
            cornerRadius: 6,
            padding: 10
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            ticks: {
              color: '#ffffff',
              callback: function(value) {
                return value + '%';
              }
            },
            grid: {
              color: '#334155'
            }
          },
          x: {
            ticks: {
              color: '#ffffff'
            },
            grid: {
              display: false
            }
          }
        },
        layout: {
          padding: {
            top: 10,
            right: 10,
            bottom: 10,
            left: 10
          }
        }
      }
    };

    new Chart(ctx, config);

    // زر التنزيل (يمكنك ربطه بـ PDF أو CSV لاحقًا)
    document.querySelector('.download-btn').addEventListener('click', function() {
      alert('تم تنزيل التقرير!');
      // يمكنك هنا استخدام مكتبة مثل jsPDF أو table2excel لإنشاء ملف
    });
