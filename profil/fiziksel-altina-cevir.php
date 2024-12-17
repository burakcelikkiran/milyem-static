<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
      <title>Fiziksel Altına Çevir | Milyem Gold</title>
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
                <h1 class="py-16 text-center font-display text-4xl font-medium text-jacarta-700 dark:text-white">Fiziksel Altına Çevir</h1>

                <!-- Records / Filter -->
                <div class="lg:flex">
                    <!-- Profile -->
                    <?php include('profile-menu.php') ?>

                    <!-- Filters -->
                    <aside class="basis-8/12 lg:pl-5">
                        <div class="flex-wrap flex justify-center">
                            <div class="w-full p-3 pt-0 dark:border-jacarta-600 dark:bg-jacarta-700 mb-12">
                                <div class="rounded-2.5xl border border-jacarta-100 bg-white text-center transition-shadow hover:shadow-xl">
                                    <div class="mb-9 -mt-8 inline-flex h-[5.5rem] w-[5.5rem] items-center justify-center rounded-full border border-jacarta-100 bg-white dark:border-jacarta-600 dark:bg-jacarta-700">
                                        <picture>
                                            <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/webp/milyem/100_100.webp" type="image/webp">
                                            <source srcset="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/100_100.png" type="image/png">
                                            <img src="https://thorne.fra1.cdn.digitaloceanspaces.com/milyem/milyem/100_100.png" alt="milyem gold" class="rounded-2lg" loading="lazy">
                                        </picture>
                                    </div>
                                    <h3 class="mb-4 font-display text-xl text-jacarta-700 dark:text-white">9456 MİLYEM</h3>
                                    <p class="text-red pb-4">*Minimum Dönüştürebileceğiniz altın tutarı 35 Gr (35.000 MLYM) olmalıdır.</p>
                                    <div class="flex space-x-4 justify-around w-full mb-4">
                                        <div class="cursor-pointer group flex items-center rounded-2.5xl border border-[#caa754] bg-white py-4 px-3 2xl:px-5 transition-shadow group-hover:shadow-lg dark:border-transparent dark:bg-jacarta-700">
                                            <a href="#" class="block">
                                                <span class="font-bold text-base text-jacarta-700 group-hover:text-[#caa754] dark:text-white whitespace-nowrap">Fiziki Altın Randevusu Al</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
