<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
    <title>Milyem Gold</title>
      <?php include('head.php') ?>
  </head>

  <body
    class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope itemtype="http://schema.org/WebPage">
    <!-- Header -->
    <?php include('header.php') ?>

    <main class="pt-[5.5rem] lg:pt-24">
        <!-- 404 -->
        <section class="relative py-16 dark:bg-jacarta-800 md:py-24">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src="/img/gradient_light.jpg" alt="gradient" class="h-full w-full" />
            </picture>
            <div class="container">
                <div class="mx-auto max-w-lg text-center">
                    <img src="img/404.png" alt="" class="mb-16 inline-block" />
                    <h1 class="mb-6 font-display text-4xl text-jacarta-700 dark:text-white md:text-6xl">Page Not Found!</h1>
                    <p class="mb-12 text-lg leading-normal dark:text-jacarta-300">
                        Oops! The page you are looking for does not exist. It might have been moved or deleted.
                    </p>
                    <a
                            href="index.php"
                            class="inline-block rounded-full bg-accent py-3 px-8 text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark"
                    >Navigate Back Home</a
                    >
                </div>
            </div>
        </section>
        <!-- end 404 -->
    </main>

    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- JS Scripts -->
    <?php include('script.php') ?>

  </body>
</html>
