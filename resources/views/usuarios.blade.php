<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuarios registrados en el sistema') }}
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
                            Rol
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
                            David
                        </th>
                        <td class="px-6 py-4">
                            Hernández Sepúlveda
                        </td>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-125-6018
                        </td>
                        <td class="px-6 py-4">
                            david23@gmail.com
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Erika
                        </th>
                        <td class="px-6 py-4">
                            Medina de la Garza
                        </td>
                        <td class="px-6 py-4">
                            Secretaria
                        </td>
                        <td class="px-6 py-4">
                            834-139-5673
                        </td>
                        <td class="px-6 py-4">
                            emedinag@doctors.com
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Gerardo
                        </th>
                        <td class="px-6 py-4">
                            Manatout Garza
                        </td>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-165-1243
                        </td>
                        <td class="px-6 py-4">
                            conemanatou@hotmail.com
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Ana
                        </th>
                        <td class="px-6 py-4">
                            De Los Santos
                        </td>
                        <td class="px-6 py-4">
                            Secretaria
                        </td>
                        <td class="px-6 py-4">
                            834-212-4122
                        </td>
                        <td class="px-6 py-4">
                            anadelos@doctors.com
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Miguel
                        </th>
                        <td class="px-6 py-4">
                            Moctezuma Hernández
                        </td>
                        <td class="px-6 py-4">
                            Paciente
                        </td>
                        <td class="px-6 py-4">
                            834-482-9471
                        </td>
                        <td class="px-6 py-4">
                            mike45@gmail.com
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>