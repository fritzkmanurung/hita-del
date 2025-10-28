<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Dosen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Selamat datang, Dosen!</h3>
                    <p class="mb-4">Bagikan informasi lowongan kerja dan magang untuk mahasiswa.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                        <div class="bg-teal-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-teal-800">Buat Postingan</h4>
                            <p class="text-sm text-teal-600">Bagikan lowongan magang atau kerja</p>
                        </div>
                        <div class="bg-cyan-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-cyan-800">Postingan Saya</h4>
                            <p class="text-sm text-cyan-600">Kelola postingan yang telah dibuat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>