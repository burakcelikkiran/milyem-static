<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
      <title>Güvenlik | Milyem Gold</title>
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
                <h1 class="py-16 text-center font-display text-4xl font-medium text-jacarta-700 dark:text-white">Güvenlik</h1>

                <!-- Records / Filter -->
                <div class="lg:flex">
                    <!-- Profile -->
                    <?php include('profile-menu.php') ?>

                    <!-- Filters -->
                    <aside class="basis-8/12 lg:pl-5">
                        <div class="flex flex-wrap justify-center">
                            <div class="mb-6 w-2/3 px-3">
                                <label for="old_password" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Eski Şifre<span class="text-red">*</span>
                                </label>
                                <input type="password" id="old_password" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-2/3 px-3">
                                <label for="old_password" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Yeni Şifre<span class="text-red">*</span>
                                </label>
                                <input type="password" id="new_password" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-2/3 px-3">
                                <label for="password_confirm" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Yeni Şifre Tekrar<span class="text-red">*</span>
                                </label>
                                <input type="password" id="password_confirm" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                        </div>
                        <div class="w-full flex justify-center">
                            <button class="rounded-full bg-milyem py-3 px-8 text-center font-semibold text-white shadow-milyem-volume transition-all hover:bg-accent-dark">
                                Güncelle
                            </button>
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
