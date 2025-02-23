<!-- Registration Choice Modal -->
<div id="authModalRegister"
    class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black/50 backdrop-blur-sm">
    <div
        class="w-full h-full p-6 transition-all duration-300 bg-white shadow-xl rounded-xl sm:h-auto sm:w-96 sm:max-w-full sm:rounded-2xl sm:m-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between pb-4 border-b-2 border-primary/20">
            <h2 class="text-2xl font-bold sm:text-xl text-primary">Daftar Sebagai</h2>
            <button id="closeModalRegister"
                class="p-1 text-3xl transition-colors text-primary/60 hover:text-primary sm:text-xl">
                &times;
            </button>
        </div>

        <!-- Modal Content -->
        <div class="mt-6 h-[calc(100%-80px)] sm:h-auto overflow-y-auto space-y-4">
            <div class="text-center">
                <p class="text-gray-600">Pilih jenis akun yang ingin dibuat:</p>
            </div>

            <div class="flex flex-col gap-4">
                <a href="{{ route('register.pencari-kos') }}"
                    class="block w-full px-6 py-4 text-lg font-semibold text-center text-black transition-colors shadow-md bg-primary rounded-xl hover:bg-primary/90 sm:py-3 sm:text-base">
                    🧑💼 Pencari Kos
                </a>
                <a href="{{ route('register.owner-kos') }}"
                    class="block w-full px-6 py-4 text-lg font-semibold text-center text-black transition-colors shadow-md bg-secondary rounded-xl hover:bg-secondary/90 sm:py-3 sm:text-base">
                    🏠 Pemilik Kos
                </a>
            </div>
            <div class="pt-4 text-sm text-center text-gray-500">
                <p>Sudah punya akun?
                    <button class="text-primary hover:text-primary/80" onclick="toggleModals()">
                        Masuk disini
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    // Modal Elements
    const registerModal = document.getElementById("authModalRegister");
    const openRegisterModal = document.getElementById("openModalregister");
    const closeRegisterModal = document.getElementById("closeModalRegister");

    // Toggle Functions
    const toggleRegisterModal = () => registerModal.classList.toggle('hidden');

    // Toggle Between Modals
    const toggleModals = () => {
        registerModal.classList.add('hidden');
        document.getElementById("authModal").classList.remove('hidden');
    };

    // Event Listeners
    openRegisterModal?.addEventListener("click", toggleRegisterModal);
    closeRegisterModal?.addEventListener("click", toggleRegisterModal);

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target === registerModal) toggleRegisterModal();
    });

    // Prevent modal from closing when clicking inside
    registerModal.addEventListener('click', (e) => {
        e.stopPropagation();
    });
</script>
