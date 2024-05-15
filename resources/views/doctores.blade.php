<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Doctores registrados en el sistema') }}
        </h2>
    <!-- Tabla extraida de Tailwind css -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre Completo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Especialidad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teléfono
                    </th>
                    <th scope="col" class="px-6 py-3">
                        --
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Luis Carlos Galán Vázquez
                    </th>
                    <td class="px-6 py-4">
                        Pediatra
                    </td>
                    <td class="px-6 py-4">
                        834-213-9772
                    </td>
                    <td class="px-6 py-4">
                        --
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Sofia Bustamante Cárdenas
                    </th>
                    <td class="px-6 py-4">
                        Neurólogo
                    </td>
                    <td class="px-6 py-4">
                        834-123-7821
                    </td>
                    <td class="px-6 py-4">
                        --
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Sergio Antonio Garza Nava
                    </th>
                    <td class="px-6 py-4">
                        N/A
                    </td>
                    <td class="px-6 py-4">
                        834-241-8212
                    </td>
                    <td class="px-6 py-4">
                        --
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Gabriela Blackmore Duque
                    </th>
                    <td class="px-6 py-4">
                        Cirujano
                    </td>
                    <td class="px-6 py-4">
                        834-312-8721
                    </td>
                    <td class="px-6 py-4">
                        --
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Blasco Ramírez Estrada
                    </th>
                    <td class="px-6 py-4">
                        Maxilofacial
                    </td>
                    <td class="px-6 py-4">
                        834-124-4532
                    </td>
                    <td class="px-6 py-4">
                        --
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </x-slot>
</x-app-layout>