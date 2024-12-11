<!DOCTYPE html>
<html lang="TR" dir="ltr">
  <head>
      <title>İletişim | Milyem Gold</title>
      <?php include('head.php') ?>
  </head>

  <body
    class="overflow-x-hidden font-body text-jacarta-500 dark:bg-jacarta-900" itemscope itemtype="http://schema.org/WebPage">
    <!-- Header -->
    <?php include('header.php') ?>

    <main>
        <section class="relative bg-contain bg-right-top bg-no-repeat pt-32 pb-16">
            <div class="container relative z-10">
                <h1 class="text-center font-display text-4xl font-medium text-jacarta-700">İletişim</h1>
            </div>
        </section>

        <!-- Contact -->
        <section class="relative py-24 dark:bg-jacarta-800">
            <picture class="pointer-events-none absolute inset-0 -z-10 dark:hidden">
                <img src="/img/milyem/gradient-inpage.png" alt="gradient" class="h-full w-full" />
            </picture>
            <picture class="pointer-events-none absolute inset-0 -z-10 hidden dark:block">
                <img src="/img/milyem/gradient-inpage.png" alt="gradient dark" class="h-full w-full" />
            </picture>
            <div class="mx-auto max-w-5xl">
                <div class="lg:flex">
                    <!-- Contact Form -->
                    <div class="mb-12 lg:mb-0 lg:w-2/3 lg:pr-12">
                        <h2 class="mb-4 font-display text-xl text-jacarta-700 dark:text-white text-center">Sorularınızı Bize İlet</h2>
                        <form>
                            <div class="flex space-x-7">
                                <div class="mb-6 w-1/2">
                                    <label for="name" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white"
                                    >İsim Soyisim<span class="text-red">*</span></label
                                    >
                                    <input
                                            name="name"
                                            class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-[#D0AA49]/10 focus:ring-[#D0AA49] dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                            id="name"
                                            type="text"
                                            required
                                    />
                                </div>

                                <div class="mb-6 w-1/2">
                                    <label for="email" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white"
                                    >E-Posta<span class="text-red">*</span></label
                                    >
                                    <input
                                            name="email"
                                            class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-[#D0AA49]/10 focus:ring-[#D0AA49] dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                            id="email"
                                            type="email"
                                            required
                                    />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="mb-1 block font-display text-sm text-jacarta-700 dark:text-white"
                                >İletmek İstediğiniz Mesaj<span class="text-red">*</span></label
                                >
                                <textarea
                                        id="message"
                                        class="contact-form-input w-full rounded-lg border-jacarta-100 py-3 hover:ring-2 hover:ring-[#D0AA49]/10 focus:ring-[#D0AA49] dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white dark:placeholder:text-jacarta-300"
                                        required
                                        name="message"
                                        rows="5"
                                ></textarea>
                            </div>

                            <div class="mb-6 flex items-center space-x-2">
                                <input
                                        type="checkbox"
                                        id="contact-form-consent-input"
                                        name="agree-to-terms"
                                        class="h-5 w-5 self-start rounded border-jacarta-200 text-jacarta-700 checked:bg-[#D0AA49] focus:ring-accent/20 focus:ring-offset-0 dark:border-jacarta-500 dark:bg-jacarta-600"
                                />
                                <label for="contact-form-consent-input" class="text-sm dark:text-jacarta-200">
                                    <a href="/kvkk.php" class="text-[#D0AA49] underline">KVKK maddelerini</a> onaylıyorum
                                </label>
                            </div>

                            <button
                                    type="submit"
                                    class="rounded-full bg-[#D0AA49] py-3 px-8 text-center font-semibold text-white shadow-milyem-volume transition-all hover:bg-[#d0aa49ad] hover:text-[#000000]"
                                    id="contact-form-submit"
                            >
                                Gönder
                            </button>

                            <div
                                    id="contact-form-notice"
                                    class="relative mt-4 hidden rounded-lg border border-transparent p-4"
                            ></div>
                        </form>
                    </div>

                    <!-- Info -->
                    <div class="lg:w-1/3 lg:pl-5">
                        <h2 class="mb-4 font-display text-xl text-jacarta-700 dark:text-white text-center">İletişim Bilgileri</h2>
                        <div
                                class="rounded-2.5xl border border-[#D0AA49] bg-white p-10 dark:border-jacarta-600 dark:bg-jacarta-700"
                        >
                            <div class="mb-6 flex items-center space-x-5">
                  <span
                          class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-jacarta-100 bg-light-base dark:border-jacarta-600 dark:bg-jacarta-700"
                  >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            class="fill-[#D0AA49]"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                              d="M9.366 10.682a10.556 10.556 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296 11.422 11.422 0 0 0 4.583 1.364 1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995c-.53.055-1.064.082-1.602.082C9.94 21 3 14.06 3 5.5c0-.538.027-1.072.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.422 11.422 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294l-1.238.884zm-2.522-.657l1.9-1.357A13.41 13.41 0 0 1 7.647 5H5.01c-.006.166-.009.333-.009.5C5 12.956 11.044 19 18.5 19c.167 0 .334-.003.5-.01v-2.637a13.41 13.41 0 0 1-3.668-1.097l-1.357 1.9a12.442 12.442 0 0 1-1.588-.75l-.058-.033a12.556 12.556 0 0 1-4.702-4.702l-.033-.058a12.442 12.442 0 0 1-.75-1.588z"
                      />
                    </svg>
                  </span>

                                <div>
                                    <span class="block font-display text-base text-jacarta-700 dark:text-white">Telefon</span>
                                    <a href="tel:+905554443322" class="text-sm hover:text-accent dark:text-jacarta-300">+90 555 444 33 22</a>
                                </div>
                            </div>
                            <div class="mb-6 flex items-center space-x-5">
                  <span
                          class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-jacarta-100 bg-light-base dark:border-jacarta-600 dark:bg-jacarta-700"
                  >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            class="fill-[#D0AA49]"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                              d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"
                      />
                    </svg>
                  </span>

                                <div>
                                    <span class="block font-display text-base text-jacarta-700 dark:text-white">Adres</span>
                                    <address class="text-sm not-italic dark:text-jacarta-300">Acıbadem Mah. Gömeç Sok. <br>
                                        Akgün İş Merkezi No:37/4 <br>
                                        34660 Kadıköy / İstanbul
                                    </address>
                                </div>
                            </div>
                            <div class="flex items-center space-x-5">
                  <span
                          class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-jacarta-100 bg-light-base dark:border-jacarta-600 dark:bg-jacarta-700"
                  >
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            width="24"
                            height="24"
                            class="fill-[#D0AA49]"
                    >
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                              d="M2.243 6.854L11.49 1.31a1 1 0 0 1 1.029 0l9.238 5.545a.5.5 0 0 1 .243.429V20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.283a.5.5 0 0 1 .243-.429zM4 8.133V19h16V8.132l-7.996-4.8L4 8.132zm8.06 5.565l5.296-4.463 1.288 1.53-6.57 5.537-6.71-5.53 1.272-1.544 5.424 4.47z"
                      />
                    </svg>
                  </span>

                                <div>
                                    <span class="block font-display text-base text-jacarta-700 dark:text-white">E-Posta</span>
                                    <a
                                            href="mailto:info@thornebilisim.com"
                                            class="text-sm not-italic hover:text-accent dark:text-jacarta-300"
                                    >info@thornebilisim.com</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- JS Scripts -->
    <?php include('script.php') ?>

  </body>
</html>
