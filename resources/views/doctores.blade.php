<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de doctores registrados en el sistema') }}
        </h2>
    <!-- Tabla extraida de Tailwind css -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre(s)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido(s)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Especialidad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teléfono
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Correo
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Luis Carlos
                    </th>
                    <td class="px-6 py-4">
                        Galán Vázquez
                    </td>
                    <td class="px-6 py-4">
                        Pediatra
                    </td>
                    <td class="px-6 py-4">
                        834-213-9772
                    </td>
                    <td class="px-6 py-4">
                        lgalanv@doctors.com
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Sofia
                    </th>
                    <td class="px-6 py-4">
                        Bustamante Cárdenas
                    </td>
                    <td class="px-6 py-4">
                        Neurólogo
                    </td>
                    <td class="px-6 py-4">
                        834-123-7821
                    </td>
                    <td class="px-6 py-4">
                        sbustamantec@doctors.cm
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Sergio Antonio
                    </th>
                    <td class="px-6 py-4">
                        Garza Nava
                    </td>
                    <td class="px-6 py-4">
                        N/A
                    </td>
                    <td class="px-6 py-4">
                        834-241-8212
                    </td>
                    <td class="px-6 py-4">
                        sgarzan@doctors.com
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Gabriela
                    </th>
                    <td class="px-6 py-4">
                        Blackmore Duque
                    </td>
                    <td class="px-6 py-4">
                        Cirujano
                    </td>
                    <td class="px-6 py-4">
                        834-312-8721
                    </td>
                    <td class="px-6 py-4">
                        gblackmored@doctors.com
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Blasco
                    </th>
                    <td class="px-6 py-4">
                        Ramírez Estrada
                    </td>
                    <td class="px-6 py-4">
                        Maxilofacial
                    </td>
                    <td class="px-6 py-4">
                        834-124-4532
                    </td>
                    <td class="px-6 py-4">
                        bramireze@doctors.com
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </x-slot>
</x-app-layout>