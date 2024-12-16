<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
      <title>Siparişlerim | Milyem Gold</title>
      <?php include('../head.php') ?>
  </head>

  <body class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope itemtype="http://schema.org/WebPage">
    <!-- Header -->
    <?php include('../header.php') ?>

    <main>
        <!-- Activity -->
        <section class="relative py-24">
            <picture class="pointer-events-none absolute inset-0 -z-10 hidden dark:block">
                <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/webp/milyem/gradient-inpage.webp" type="image/webp">
                <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/gradient-inpage.png" type="image/png">
                <img src="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/gradient-inpage.png" class="h-full w-full" />
            </picture>
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/webp/milyem/gradient-inpage.webp" type="image/webp">
                <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/gradient-inpage.png" type="image/png">
                <img src="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/gradient-inpage.png" class="h-full w-full" />
            </picture>
            <div class="container">
                <h1 class="py-16 text-center font-display text-4xl font-medium text-jacarta-700 dark:text-white">Siparişlerim</h1>

                <!-- Records / Filter -->
                <div class="lg:flex">
                    <!-- Profile -->
                    <?php include('profile-menu.php') ?>

                    <!-- Filters -->
                    <aside class="basis-8/12 lg:pl-5">
                        <div class="mb-3 rounded-lg bg-green p-4 font-display text-md font-medium text-white flex items-center justify-between">
                            <span>Sipariş No:</span>
                            <span>Sipariş Tarihi</span>
                            <span>Adet</span>
                            <span>Durum</span>
                            <span>İşlem</span>
                        </div>
                        <div class="mb-14 divide-y divide-jacarta-100 overflow-hidden rounded-lg border border-jacarta-100 dark:divide-jacarta-600 dark:border-jacarta-600 dark:bg-jacarta-700">
                            <div class="flex items-center justify-between py-4 px-5 bg-white">
                                <span class="font-medium text-jacarta-700 dark:text-white">ORDR-002345</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">06/08/2024</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">3.456 MLYM</span>
                                <span class="text-orange-bright">Beklemede</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">
                                  <svg version="1.1" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                      <path d="M256.01,77.77c-194.37,0-252.78,168.49-253.3,170.2L0,256l2.69,8.06c0.55,1.69,58.96,170.18,253.33,170.18 c194.35,0,252.76-168.49,253.28-170.18L512,256l-2.69-8.03C508.77,246.25,450.36,77.77,256.01,77.77z M256.01,357.85 c-56.17,0-101.85-45.68-101.85-101.85s45.68-101.85,101.85-101.85c56.15,0,101.85,45.68,101.85,101.85S312.16,357.85,256.01,357.85 z"/>
                                      <circle cx="256.01" cy="256" r="50.92"/>
                                    </g>
                                  </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between py-4 px-5 bg-white">
                                <span class="font-medium text-jacarta-700 dark:text-white">ORDR-002345</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">06/08/2024</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">3.456 MLYM</span>
                                <span class="text-green">Tamamlandı</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">
                                  <svg version="1.1" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                      <path d="M256.01,77.77c-194.37,0-252.78,168.49-253.3,170.2L0,256l2.69,8.06c0.55,1.69,58.96,170.18,253.33,170.18 c194.35,0,252.76-168.49,253.28-170.18L512,256l-2.69-8.03C508.77,246.25,450.36,77.77,256.01,77.77z M256.01,357.85 c-56.17,0-101.85-45.68-101.85-101.85s45.68-101.85,101.85-101.85c56.15,0,101.85,45.68,101.85,101.85S312.16,357.85,256.01,357.85 z"/>
                                      <circle cx="256.01" cy="256" r="50.92"/>
                                    </g>
                                  </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between py-4 px-5 bg-white">
                                <span class="font-medium text-jacarta-700 dark:text-white">ORDR-002345</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">06/08/2024</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">3.456 MLYM</span>
                                <span class="text-red">İptal Edildi</span>
                                <span class="font-medium text-jacarta-700 dark:text-white">
                                  <svg version="1.1" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                      <path d="M256.01,77.77c-194.37,0-252.78,168.49-253.3,170.2L0,256l2.69,8.06c0.55,1.69,58.96,170.18,253.33,170.18 c194.35,0,252.76-168.49,253.28-170.18L512,256l-2.69-8.03C508.77,246.25,450.36,77.77,256.01,77.77z M256.01,357.85 c-56.17,0-101.85-45.68-101.85-101.85s45.68-101.85,101.85-101.85c56.15,0,101.85,45.68,101.85,101.85S312.16,357.85,256.01,357.85 z"/>
                                      <circle cx="256.01" cy="256" r="50.92"/>
                                    </g>
                                  </svg>
                                </span>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </section>
        <!-- end activity -->
    </main>

    <!-- Footer -->
    <?php include('../footer.php') ?>
    <?php include('../script.php') ?>
  </body>
</html>
