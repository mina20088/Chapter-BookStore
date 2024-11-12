import './bootstrap';
import 'bootstrap'
import '@fortawesome/fontawesome-free'
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import.meta.glob(['../images/**'])


const swiper  = new Swiper(".swiper",{
    // Optional parameters
    modules: [Navigation,Pagination],
    loop: true,
    slidesPerView: 5,
    spaceBetween: 30,
    breakpoints: {
        320: {
            slidesPerView:1,
            spaceBetween:30,
        },
        576:{
            slidesPerView:1,
            spaceBetween:1,
        },
        768:{
            slidesPerView:2,
            spaceBetween:4,
        },
        992:{
            slidesPerView:3,
            spaceBetween:3,
        },
        1200:{
            slidesPerView: 3,
            spaceBetween: 4,
        },
        1400: {
            slidesPerView:4,
            spaceBetween: 5
        }

    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
