/**
* Template Name: DevFolio
* Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
* Updated: Jun 14 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Animate the skills items on reveal
   */
  let skillsAnimation = document.querySelectorAll('.skills-animation');
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function(direction) {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });
  
  // blog mulai sini
document.addEventListener('DOMContentLoaded', function() {
  const postsDiv = document.getElementById('posts');
  const newPostForm = document.getElementById('newPostForm');
  const searchInput = document.getElementById('searchInput');

  // Ambil postingan dari localStorage
  let posts = JSON.parse(localStorage.getItem('posts')) || [];

  // Fungsi untuk menyimpan postingan ke localStorage
  function savePosts() {
      localStorage.setItem('posts', JSON.stringify(posts));
  }

  // Fungsi untuk menampilkan postingan
  function displayPosts(filteredPosts = posts) {
      postsDiv.innerHTML = ''; // Kosongkan konten sebelumnya

      // Loop melalui setiap postingan dan tampilkan di halaman
      filteredPosts.forEach((post, index) => {
          const article = document.createElement('article');

          const titleElement = document.createElement('h3');
          titleElement.textContent = post.title;

          const contentElement = document.createElement('p');
          contentElement.textContent = post.content;

          const dateElement = document.createElement('time');
          dateElement.dateTime = post.date; // Format ISO 8601
          dateElement.textContent = new Date(post.date).toLocaleDateString('id-ID');

          // Tambahkan tombol update dan delete
          const updateButton = document.createElement('button');
          updateButton.textContent = 'Update';
          updateButton.addEventListener('click', () => updatePost(index));

          const deleteButton = document.createElement('button');
          deleteButton.textContent = 'Delete';
          deleteButton.addEventListener('click', () => deletePost(index));

          // Tambahkan elemen ke dalam article
          article.appendChild(titleElement);
          article.appendChild(contentElement);
          article.appendChild(dateElement);
          article.appendChild(updateButton);
          article.appendChild(deleteButton);

          postsDiv.appendChild(article);
      });
  }

  // Fungsi untuk menambah postingan baru
  newPostForm.addEventListener('submit', function(event) {
      event.preventDefault();

      const title = document.getElementById('title').value;
      const content = document.getElementById('content').value;

      // Dapatkan tanggal saat ini
      const date = new Date().toISOString();

      // Tambahkan postingan ke array
      posts.push({ title, content, date });

      // Simpan postingan ke localStorage
      savePosts();

      // Tampilkan postingan baru
      displayPosts();

      // Reset form
      newPostForm.reset();
  });

  // Fungsi untuk memperbarui postingan
  function updatePost(index) {
      const newTitle = prompt('Masukkan judul baru:', posts[index].title);
      const newContent = prompt('Masukkan konten baru:', posts[index].content);

      if (newTitle !== null && newContent !== null) {
          posts[index].title = newTitle;
          posts[index].content = newContent;
          posts[index].date = new Date().toISOString(); // Perbarui tanggal

          // Simpan postingan ke localStorage
          savePosts();

          // Perbarui tampilan
          displayPosts();
      }
  }

  // Fungsi untuk menghapus postingan
  function deletePost(index) {
      posts.splice(index, 1); // Hapus postingan dari array

      // Simpan postingan ke localStorage
      savePosts();

      // Perbarui tampilan
      displayPosts();
  }

  // Fungsi untuk mencari postingan
  searchInput.addEventListener('input', function() {
      const searchTerm = searchInput.value.toLowerCase();

      // Filter postingan berdasarkan judul atau konten
      const filteredPosts = posts.filter(post => {
          return post.title.toLowerCase().includes(searchTerm) ||
                 post.content.toLowerCase().includes(searchTerm);
      });

      // Tampilkan postingan yang sesuai
      displayPosts(filteredPosts);
  });

  // Inisialisasi tampilan
  displayPosts();
});

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();