<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
      <title>Hesabım | Milyem Gold</title>
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
                <h1 class="py-16 text-center font-display text-4xl font-medium text-jacarta-700 dark:text-white">Hesabım</h1>

                <div class="lg:flex">
                    <!-- Profile -->
                    <?php include('profile-menu.php') ?>

                    <!-- Filters -->
                    <aside class="basis-8/12 lg:pl-5">
                        <div class="flex flex-wrap">
                            <div class="mb-6 w-1/2 px-3">
                                <label for="name" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    İsim<span class="text-red">*</span>
                                </label>
                                <input type="text" id="name" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="surname" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Soyisim<span class="text-red">*</span>
                                </label>
                                <input type="text" id="surname" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="profile-username" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Kullanıcı Adı<span class="text-red">*</span>
                                </label>
                                <input type="text" id="profile-username" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="phone" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Telefon No:<span class="text-red">*</span>
                                </label>
                                <input type="number" id="phone" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="phone" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Doğum Tarihi<span class="text-red">*</span>
                                </label>
                                <input type="date" id="birthdate" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-1/2 px-3">
                                <label for="phone" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    Kimlik No:<span class="text-red">*</span>
                                </label>
                                <input type="number" id="idnumber" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                            <div class="mb-6 w-full px-3">
                                <label for="phone" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white">
                                    E-Posta<span class="text-red">*</span>
                                </label>
                                <input type="email" id="email" required
                                       class="w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-milyem/10 focus:ring-milyem dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"/>
                            </div>
                        </div>
                        <button class="rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                            Güncelle
                        </button>

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
