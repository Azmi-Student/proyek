let currentSlideIndex = 0;
const slides = document.querySelectorAll('.artikel-slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
  // Hapus kelas aktif dari slide dan titik saat ini
  slides[currentSlideIndex].classList.remove('active-slide');
  dots[currentSlideIndex].classList.remove('active-dot');

  // Perbarui indeks slide saat ini
  currentSlideIndex = index;

  // Tambahkan kelas aktif ke slide dan titik yang baru
  slides[currentSlideIndex].classList.add('active-slide');
  dots[currentSlideIndex].classList.add('active-dot');
}
document.addEventListener('DOMContentLoaded', () => {

  // Inisialisasi slide dan titik pertama
  showSlide(0);

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const questionButton = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    
    questionButton.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');
      
      if (isOpen) {
        // Jika sedang terbuka, tutup
        answer.style.maxHeight = `${answer.scrollHeight}px`; // Set terlebih dahulu untuk memastikan tidak ada glitch
        requestAnimationFrame(() => {
          answer.style.maxHeight = '0px';
          answer.style.opacity = '0'; // Perlahan memudarkan
        });
        item.classList.remove('active');
      } else {
        // Buka jawaban
        item.classList.add('active');
        answer.style.maxHeight = '0px'; // Set ke 0px terlebih dahulu
        requestAnimationFrame(() => {
          answer.style.maxHeight = `${answer.scrollHeight}px`; // Lalu buka ke tinggi maksimal
          answer.style.opacity = '1'; // Tampilkan secara bertahap
        });
      }
    });
  });
});


function toggleDropdown(event) {
  event.preventDefault(); // Mencegah default action
  event.stopPropagation(); // Menghentikan event bubbling

  const dropdownMenu = document.querySelector('.dropdown-menu');
  const isOpen = dropdownMenu.style.display === 'block';

  // Tampilkan atau sembunyikan menu
  dropdownMenu.style.display = isOpen ? 'none' : 'block';
}

// Menutup dropdown jika klik di luar elemen
document.addEventListener('click', () => {
  const dropdownMenu = document.querySelector('.dropdown-menu');
  dropdownMenu.style.display = 'none';
});


