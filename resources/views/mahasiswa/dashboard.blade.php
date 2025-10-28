<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Selamat datang, Mahasiswa!</h3>
                    <p class="mb-4">Temukan peluang magang dan lowongan kerja yang sesuai dengan bidang studi Anda.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                        <div class="bg-orange-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-orange-800">Lowongan Magang</h4>
                            <p class="text-sm text-orange-600">Cari peluang magang sesuai program studi</p>
                        </div>
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-indigo-800">Lowongan Kerja</h4>
                            <p class="text-sm text-indigo-600">Temukan peluang karir setelah lulus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>