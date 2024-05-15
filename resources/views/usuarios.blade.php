<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuarios registrados en el sistema.') }}
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
                            Rol
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
                            David Hernández Sepúlveda
                        </th>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-125-6018
                        </td>
                        <td class="px-6 py-4">
                            --
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Erika Medina de la Garza
                        </th>
                        <td class="px-6 py-4">
                            Secretaria
                        </td>
                        <td class="px-6 py-4">
                            834-139-5673
                        </td>
                        <td class="px-6 py-4">
                            --
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Gerardo Manatou Garza
                        </th>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-165-1243
                        </td>
                        <td class="px-6 py-4">
                            --
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Ana de los Santos
                        </th>
                        <td class="px-6 py-4">
                            Secretaria
                        </td>
                        <td class="px-6 py-4">
                            834-212-4122
                        </td>
                        <td class="px-6 py-4">
                            --
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Miguel Moctezuma Hernández
                        </th>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-482-9471
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