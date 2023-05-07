<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <x-table>

        <div class="px-6 py-4">
            <x-input class="w-full" type="text" placeholder="Buscar" wire:model="search" />
        </div>

        @if ($posts->count())
                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>

                            <th scope="col"
                                class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                ID
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Title
                            </th>

                            <th scope="col"
                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Content
                            </th>


                            <th scope="col" class="relative py-3.5 px-4">
                                <span class="sr-only">Accion</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @foreach ($posts as $post )


                        <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{$post->id}}
                            </div>

                        </td>

                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{$post->title}}
                            </div>

                        </td>

                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{$post->content}}
                            </div>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>

                    </tr>
                    @endforeach


                    </tbody>
                </table>
        @else
        <div class="px-6 py-4">
                No existe registros que coincidan
        </div>

        @endif



    </x-table>

    </div>






</div>

