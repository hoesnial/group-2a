document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
      const faqItem = question.parentElement;
  
      // Menutup semua jawaban terlebih dahulu
      document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
          item.classList.remove('active');
        }
      });
  
      // Toggle aktif pada faqItem yang diklik
      faqItem.classList.toggle('active');
    });
  });
  
