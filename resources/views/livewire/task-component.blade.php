<div>
    @foreach ($tasks as $task)
        <p class="text-purple-700 font-bold my-2">{{ $task->title }}</p>
        <p>{{ $task->description }}</p>
    @endforeach


    <!-- component -->

    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">
                Tareas
            </h1>

            <button wire:click="openModal" type="button"
                class="  mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                Nuevo</button>

        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Titulo</th>
                        <th class="text-left p-3 px-5">Descripcion</th>

                        <th></th>
                    </tr>
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5">
                            <p>Nombre</p>
                        </td>
                        <td class="p-3 px-5">
                            <P></P>Descripcion
                        </td>

                        <td class="p-3 px-5 flex justify-end"><button type="button"
                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Modificar</button>
                            <button type="button"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Eliminar</button>
                        </td>
                    </tr>

                </thead>
            </table>
        </div>
    </div>

    <!-- component -->
    <!-- MODAL CODE START -->
    @if ($modal)
    <div data-dialog-backdrop="sign-in-modal" data-dialog-backdrop-close="true"
    class="inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300">
    <div data-dialog="sign-in-modal"
        class="relative mx-auto w-full max-w-[24rem] rounded-lg overflow-hidden shadow-sm">
        <div class="relative flex flex-col bg-white">
            <div class="relative m-2 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                <h3 class="text-2xl">
                    Modificar tarea
                </h3>
            </div>
            <div class="flex flex-col gap-4 p-6">
                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                        Nombre
                    </label>
                    <input type="email"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        />
                </div>

                <div class="w-full max-w-sm min-w-[200px]">
                    <label class="block mb-2 text-sm text-slate-600">
                        Descripcion
                    </label>
                    <input type="password"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        />
                </div>

                <div class="inline-flex items-center mt-2">
                    <label class="flex items-center cursor-pointer relative" htmlFor="check-2">
                        <span
                            class="absolute text-white opacity-0 pointer-events-none peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                fill="currentColor" stroke="currentColor" stroke-width="1">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </label>
                </div>
            </div>
            <div class="p-6 pt-0">
                <button
                    class="w-full rounded-md bg-blue-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    Modificar
                </button>
                
                <button
                    class="w-full rounded-md bg-red-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    Cancelar
                </button>
                
            </div>
        </div>
    </div>
</div>
    @endif

    

  

    

    

    
</div>
