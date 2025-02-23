<x-guest-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-20 lg:py-16 lg:grid-cols-12">
            <div class="w-full p-6 mx-auto bg-white rounded-lg shadow dark:bg-gray-800 sm:max-w-xl lg:col-span-6 sm:p-8">
                <h1 class="mb-2 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Daftar Akun Pemilik Kos
                </h1>
                <form class="mt-4 space-y-6 sm:mt-6" method="POST" action="{{ route('register.owner.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="grid gap-6 sm:grid-cols-2">
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nama lengkap')" />
                            <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                                :value="old('name')" autocomplete="name" placeholder="e.g. Bonnie Green" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required autocomplete="username" placeholder="example@.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone Number (optional) -->
                        <div class="mt-4">
                            <x-input-label for="phone_number" :value="__('No telepon')" />
                            <x-text-input id="phone_number" class="block w-full mt-1" type="text" name="phone_number"
                                :value="old('phone_number')" placeholder="Nomot telephon" />
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>

                        <!-- Address (optional) -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Alamat')" />
                            <x-text-input id="address" class="block w-full mt-1" type="text" name="address"
                                :value="old('address')" placeholder="alamat" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block w-full mt-1" type="password" name="password"
                                autocomplete="new-password" placeholder="*******" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                                name="password_confirmation" autocomplete="new-password" placeholder="*******" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                        <div class="px-5 text-center text-gray-500 dark:text-gray-400">or</div>
                        <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                    </div>
                    <div class="space-y-3">
                        <a href="#"
                            class="w-full inline-flex items-center justify-center py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 21 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_13183_10121)">
                                    <path
                                        d="M20.3081 10.2303C20.3081 9.55056 20.253 8.86711 20.1354 8.19836H10.7031V12.0492H16.1046C15.8804 13.2911 15.1602 14.3898 14.1057 15.0879V17.5866H17.3282C19.2205 15.8449 20.3081 13.2728 20.3081 10.2303Z"
                                        fill="#3F83F8" />
                                    <path
                                        d="M10.7019 20.0006C13.3989 20.0006 15.6734 19.1151 17.3306 17.5865L14.1081 15.0879C13.2115 15.6979 12.0541 16.0433 10.7056 16.0433C8.09669 16.0433 5.88468 14.2832 5.091 11.9169H1.76562V14.4927C3.46322 17.8695 6.92087 20.0006 10.7019 20.0006V20.0006Z"
                                        fill="#34A853" />
                                    <path
                                        d="M5.08857 11.9169C4.66969 10.6749 4.66969 9.33008 5.08857 8.08811V5.51233H1.76688C0.348541 8.33798 0.348541 11.667 1.76688 14.4927L5.08857 11.9169V11.9169Z"
                                        fill="#FBBC04" />
                                    <path
                                        d="M10.7019 3.95805C12.1276 3.936 13.5055 4.47247 14.538 5.45722L17.393 2.60218C15.5852 0.904587 13.1858 -0.0287217 10.7019 0.000673888C6.92087 0.000673888 3.46322 2.13185 1.76562 5.51234L5.08732 8.08813C5.87733 5.71811 8.09302 3.95805 10.7019 3.95805V3.95805Z"
                                        fill="#EA4335" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_13183_10121">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Sign up with Google
                        </a>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Dengan
                                    melanjutkan pendaftaran, Anda menyetujui Syarat & Ketentuan <a
                                        class="font-medium text-primary-600 dark:text-primary-500 hover:underline"
                                        href="#">Syarat & Ketentuan</a> and <a
                                        class="font-medium text-primary-600 dark:text-primary-500 hover:underline"
                                        href="#">Privacy Policy</a>.</label>
                            </div>
                        </div>
                    </div>
                    <x-primary-button class="w-full py-2.5 text-base text-center font-semibold flex justify-center">
                        Daftar
                    </x-primary-button>
                </form>
                <div class="mt-4 space-y-3">
                    <div class="flex items-start justify-center text-center">
                        <p class="text-sm font-light text-gray-500 dark:text-gray-300">
                            Sudah punya akun?
                            <button id="openModal"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                                Masuk
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="mr-auto place-self-center lg:col-span-6">
                <img class="hidden mx-auto lg:flex"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/illustration.svg"
                    alt="illustration">
            </div>
        </div>
    </section>
</x-guest-layout>
