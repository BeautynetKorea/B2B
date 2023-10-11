<main>
<div class='w-100'>
  <div id="bannerCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item banner active">
        <img src='//beautynetkorea.daouimg.com/2023_b2b/b2b_main_open.jpg' class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item banner">
        <img src="/img/banilaco_banner.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button id="bannerPrev" class="carousel-control-prev shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button id="bannerNext" class="carousel-control-next shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div class='introduction'>
  <div class='d-flex flex-row w-70 justify-content-center mx-auto border-dark mt-5'>
    <div class='w-50'>
      <p class='title fs-1 manlope800'>Unique shopping experience</p>
      <p class='title fs-1 manlope800'>with BEAUTYNETKOREA</p>
      <p><br></p>
      <p class='pretendard'>BEAUTYNETKOREA is a global network specializing in Korean beauty.</p>
      <p class='pretendard'>Based in South Korea, the company offers a wide range of cosmetics,</p>
      <p class='pb-3 pretendard'>skincare, and beauty-related items sourced from popular Korean brands.</p>
      <p class='pretendard'>BEAUTYNETKOREA has gained recognition for its extensive product</p>
      <p class='pretendard'>selection, competitive pricing, and commitment to providing customers</p>
      <p class='pretendard'>with access to the latest trends in K-beauty.</p>
      <button class='btn get-started mt-5'>
        GET STARTED
      </button>
      <button class='btn learn-more mt-5'>
        LEARN MORE
      </button>
    </div>
    <div class='w-50 my-auto'>
      <div id="infoCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src='/img/image_1.jpg' class="d-block w-80 align-middle mx-auto align-items-center" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/image_2.jpg" class="d-block w-80 align-middle mx-auto align-items-center" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/image_3.jpg" class="d-block w-80 align-middle mx-auto align-items-center" alt="...">
        </div>
      </div>
      <button id="infoPrev" class="carousel-control-prev shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button id="infoNext" class="carousel-control-next shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
    </div>
  </div>
</div>
<div class='ourbrands'>
  <div class='w-75 mx-auto justify-content-center'>
    <p class='title fs-1 manlope800 text-center'>OUR BRANDS</p>
    <p class='title fs-4 manlope800 text-center italic'>Private Brands</p>
    <div class='w-80 d-flex flex-row mx-auto mb-5'>
      <div class='w-33 text-center'>
        <img src='/img/brand_logo/b2b_logo_Eyenlip.jpg' class='border border-1 rounded-1'>
      </div>
      <div class='w-33 text-center'>
        <img src='/img/brand_logo/b2b_logo_Fabyou.jpg' class='border border-1 rounded-1'>
      </div>
      <div class='w-33 text-center'>
        <img src='/img/brand_logo/b2b_logo_Sumhair.jpg' class='border border-1 rounded-1'>
      </div>
    </div>
    <p class='title fs-4 manlope800 text-center italic'>Other Brands</p>
    <div>
      <div id="brandCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <ul class='d-flex flex-wrap w-75 justify-content-between mx-auto px-1'>
            <?php $idx = 0; ?>
            <?php foreach ( $brandList as $brand ) : ?>
            <?php $idx++; ?>
            <li class='w-19 text-center border border-1 d-block rounded-1 fs-5
                    <?=(($idx % 5) > 0 ? 'me-2' : '')?>
                    <?=($idx > 5 ) ? 'mt-3': ''?>' >
              <a href="https://eyenlip.co.kr/" target="blank">
                <img class='w-85' src="/img/brand_logo/top20/<?=($brand)?>" />
              </a>
            </li>
            <?php endforeach; ?>
            </ul>
          </div>
          <div class="carousel-item">
            <ul class='d-flex flex-wrap w-75 justify-content-between mx-auto px-1'>
            <?php $idx = 0; ?>
            <?php foreach ( $brandList as $brand ) : ?>
            <?php $idx++; ?>
            <li class='w-19 text-center border border-1 d-block rounded-1 fs-5
                    <?=(($idx % 5) > 0 ? 'me-2' : '')?>
                    <?=($idx > 5 ) ? 'mt-3': ''?>' >
              <a href="https://eyenlip.co.kr/" target="blank">
                <img class='w-85' src="/img/brand_logo/top20/<?=($brand)?>" />
              </a>
            </li>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <button id="brandPrev" class="carousel-control-prev shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button id="brandNext" class="carousel-control-next shadow-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
<div class='join-us'>
  <div class='w-75 mx-auto'>
    <p class='title fs-1 manlope800 text-center'>Join us to get unique</p>
    <p class='title fs-1 manlope800 text-center'>shopping experience</p>
    <div class='d-flex flex-row text-center mt-4 pt-4'>
      <div class='w-25 justify-content-center'>
        <div class='d-flex flex-column'>
          <p class='manlope700 sub-title text-break'>Fill out</p>
          <p class='manlope700 sub-title text-break pb-3'>registration form</p>
        </div>
        <div class='d-flex flex-column pb-5'>
          <p class='pretendard'>This verification process ensures</p>
          <p class='pretendard'>you're a business owner seeking</p>
          <p class='pretendard'>wholesale opportunities.</p>
          <p class='pretendard'>Please note that approval may</p>
          <p class='pretendard'>take up to 24 hours.</p>
        </div>
        <div class='d-flex flex-column'>
          <img src="/img/icon1.png" class='icon-image'>
        </div>
      </div>
      <div class='w-25 justify-content-center'>
        <div class='d-flex flex-column'>
          <p class='manlope700 sub-title'>Choose the best</p>
          <p class='manlope700 sub-title pb-3'>products you need</p>
        </div>
        <div class='d-flex flex-column pb-5'>
          <p class='pretendard'>Explore our curated recommendations</p>
          <p class='pretendard'>and streamline your search with our</p>
          <p class='pretendard'>user-friendly filtering options to find</p>
          <p class='pretendard'>the perfect products for your business.</p>
          <p class='pretendard'><br></p>
        </div>
        <div class='d-flex flex-column'>
          <img src="/img/icon2.png" class='icon-image'>
        </div>
      </div>
      <div class='w-25 justify-content-center'>
        <div class='d-flex flex-column'>
          <p class='manlope700 sub-title'>Check out, pay &</p>
          <p class='manlope700 sub-title pb-3'>track shipment</p>
        </div>
        <div class='d-flex flex-column pb-5'>
          <p class='pretendard'>We've streamlined our wholesale</p>
          <p class='pretendard'>experience, prioritizing transparency,</p>
          <p class='pretendard'>safety, and security in both payment</p>
          <p class='pretendard'>and shipping processes.</p>
          <p class='pretendard'><br></p>
        </div>
        <div class='d-flex flex-column'>
          <img src="/img/icon3.png" class='icon-image'>
        </div>
      </div>
      <div class='w-25 justify-content-center'>
        <div class='d-flex flex-column'>
          <p class='manlope700 sub-title'>Check previous orders</p>
          <p class='manlope700 sub-title pb-3'>and plan new ones</p>
        </div>
        <div class='d-flex flex-column pb-5'>
          <p class='pretendard'>Stay ahead of the curve with our</p>
          <p class='pretendard'>latest updates! Explore our B2C</p>
          <p class='pretendard'>website, monthly newsletter,</p>
          <p class='pretendard'>and social channels to discover</p>
          <p class='pretendard'>your next best-selling product.</p>
        </div>
        <div class='d-flex flex-column'>
          <img src="/img/icon4.png" class='icon-image'>
        </div>
      </div>
    </div>
    <div class='d-flex flex-row justify-content-center join-us-group'>
      <button class='btn terms mx-4'>
        <p>WHOLESALE ORDER</p>
        <P>TERMS AND CONDITIONS</P>
      </button>
      <button class='btn manual mx-4' onclick="location.href='/board/getboard/1/2'">DETAILED USER MANUAL</button>
    </div>
  </div>
</div>
</main>