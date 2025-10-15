<style>
    .carousel-indicators [data-bs-target] {
      width: 12px !important;
      height: 12px !important;
      border-radius: 50px;
      background-color: #127a81 !important;
      border-top: unset !important;
      border-bottom: unset !important;
    }

    .text-fill-white,
    .text-fill-white:before {
      color: #000000;
      -webkit-text-fill-color: #000000 !important;
      padding: 0px 40px;
    }

    .marquee-vertical {
      --marquee-height: 250px;
      --duration: 20s;
    }

    .marquee-vertical {
      position: relative;
      height: var(--marquee-height);
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .marquee-group {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0;
      flex-shrink: 0;
      animation: scrollY var(--duration) linear infinite;
    }

    .marquee-item {
      transition: all 0.3s ease-in-out;
      background-color: #FFFFFF;
      box-shadow: 0px 0px 30px 0px rgba(63, 43, 43, 0.05);
      padding: 14px 14px;
      border-radius: 12px;
      border: 1px solid rgb(178 228 239 / 60%);
      cursor: pointer;
      box-shadow: rgb(173 216 230 / 0%) 0px 10px 20px, rgb(173 216 230 / 18%) 0px 6px 6px;
      height: 100%;
      margin: 5px 0;
    }

    .marquee-item img {
      max-height: 30px;
      object-fit: contain;
    }

    .vertical-marquee h2 {
      font-style: normal;
      font-weight: 700;
      font-size: 42px;
      line-height: 54px;
      color: #0E1871;
    }

    @keyframes scrollY {
      from {
        transform: translateY(0);
      }
      to {
        transform: translateY(-100%);
      }
    }

    @supports not (animation: scrollY) {
      .marquee-group {
        animation: none;
      }
    }

    marquee.marquee-reverse .marquee_group {
      animation-direction: reverse;
      animation-delay: -3s;
    }

    .marquee-group {
      animation: scrollY var(--duration) linear infinite;
    }

    .marquee-vertical.marquee-reverse .marquee-group {
      animation-direction: reverse;
      animation-delay: -3s;
    }

    @media screen and (max-width:992px) {
      .vertical-marquee h2 {
        font-size: 34px;
      }
    }

    @media screen and (max-width:768px) {
      .vertical-scroll-mobile-width-33 {
        width: 33.3%;
      }
      .space-diplay-none{
        display: none;
      }
      .testimonial-slide .testimonial-info .mobile-testimonial-p{
        font-size: 14px;
      }
      .review-readmore a .btn{
        font-size: 14px !important;
      }
    }

    @media screen and (max-width:574px) {
      .vertical-marquee {
        padding-left: 12px;
        padding-right: 12px;
        padding-bottom: 40px;
      }

      .vertical-marquee h2 {
        font-size: 22px;
        line-height: 30px;
        text-align: center;
      }
    }

    .vertical-marquee {
      overflow-x: hidden;
    }

    .review-readmore a .btn {
      background: linear-gradient(to right, #127a81 20%, #0b7078 40%, #1a596e 50%, #2b4063 70%, #342758 80%, #512663 100%);
      font-size: 18px;
      line-height: 23px;
      color: #fff;
      padding: 8px 42px;
      font-family: var(--body-font);
      font-weight: 600;
      overflow: hidden;
      border-radius: 50px;
      cursor: pointer;
      letter-spacing: .5px;
      border: none;
      margin: auto;
      display: block;
      text-align: center;
    }

    .review-readmore {
      margin-top: 26px;
    }
</style>
