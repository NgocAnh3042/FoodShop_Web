<x-auth-layout title="Đăng ký tài khoản">
    <div class="flex flex-col w-full py-8 md:py-12 px-4 sm:px-6 lg:px-8 items-center justify-center">
        <div
            class="w-full max-w-5xl rounded-3xl shadow-xl overflow-hidden bg-surface-container-lowest grid grid-cols-1 lg:grid-cols-12 min-h-[760px] relative">

            <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between bg-surface-container-lowest">
                <div>
                    <x-auth.sections.register.intro />
                    <x-auth.sections.register.signup-form />
                    <x-auth.sections.register.social-signup />
                </div>

                <x-auth.sections.register.login-note />
            </div>

            <x-auth.sections.register.reward-panel />

        </div>
    </div>
</x-auth-layout>
