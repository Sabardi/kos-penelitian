<x-guest-layout>

    {{-- supaya mirip dengan login --}}
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="w-full p-0 p-6 mx-auto bg-white rounded-none shadow dark:bg-gray-800 sm:max-w-md lg:max-w-md sm:rounded-lg sm:p-6">
                <div
                    class="w-full h-full p-6 transition-all duration-300 sm:h-auto sm:max-w-full">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between pb-4 border-b-2 border-primary/20">
                        <h2 class="text-2xl font-bold sm:text-xl text-primary">Masuk / Daftar</h2>
                    </div>

                    <!-- Modal Content -->
                    <div class="mt-6 space-y-6">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-4">
                            @csrf
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" class="mb-1" />
                                <x-text-input id="email" class="w-full px-4 py-2 border rounded-lg" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="email"
                                    placeholder="example@.com" />
                                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm" />
                            </div>

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Password')" class="mb-1" />
                                <x-text-input id="password" class="w-full px-4 py-2 border rounded-lg" type="password"
                                    name="password" required autocomplete="current-password" placeholder="*******" />
                                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm" />
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="flex items-center justify-between">
                                <label class="flex items-center space-x-2">
                                    <input id="remember_me" type="checkbox"
                                        class="border-gray-300 rounded text-primary focus:ring-primary/80">
                                    <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="text-sm text-primary hover:text-primary/80"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                    </a>
                                @endif
                            </div>

                            <x-primary-button
                                class="w-full py-2.5 text-base text-center font-semibold flex justify-center">
                                Masuk
                            </x-primary-button>
                        </form>

                        <!-- Registration Link -->
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Belum punya akun?
                                <button id="openModalregister" class="font-medium text-primary hover:text-primary/80">
                                    Daftar disini
                                </button>
                            </p>
                        </div>

                        <!-- Separator -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 text-gray-500 bg-white">atau</span>
                            </div>
                        </div>

                        <!-- Social Login -->
                        <div class="space-y-4">
                            <a href="#"
                                class="flex items-center justify-center w-full px-4 py-2.5 space-x-2 text-gray-900 bg-white border rounded-lg hover:border-primary/50 hover:bg-gray-50 transition-colors">
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
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span> Sign in with Google</span>
                            </a>
                        </div>

                        <!-- Footer Terms -->
                        <div class="pt-4 text-center border-t border-gray-100">
                            <p class="text-xs text-gray-500">
                                Dengan melanjutkan, Anda menyetujui
                                <a href="#" class="text-primary hover:text-primary/80">Syarat & Ketentuan</a>
                            </p>
                        </div>
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
