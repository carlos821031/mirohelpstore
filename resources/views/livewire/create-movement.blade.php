<div>
    <button wire:click="$set('open', true)"
        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>

        <span>Add movimiento</span>
    </button>

    <x-dialog-modal wire:model='open'>
        <x-slot name="title">
            Crear un nuevo movimiento
        </x-slot>
        <x-slot name="content">
            <div class="container mx-auto mt-5 text-center">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 my-2 bg-white shadow-md rounded">
                    <div class="bg-blue-100 col-span-1 sm:col-span-4 text-center">
                        <div class="flex items-center justify-between sm:mx-10">
                            <label for="type_mov_insert"
                                class="block uppercase tracking-wide text-gray-900 text-sm font-bold py-3 px-4">
                                Fecha:
                                <input
                                    class="bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="date_mov_insert" name="date_mov_insert" type="date"
                                    wire:model="date_mov_insert">
                                <x-input-error for="date_mov_insert" />
                            </label>
                            <label for="type_mov_insert"
                                class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">
                                Dia:
                                <input type="radio" checked id="daytime1_insert" name="daytime_insert" value="true" wire:model="daytime_insert"/>
                            </label>
                            <label for="type_mov_insert"
                                class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">
                                Noche:
                                <input type="radio" id="daytime2_insert" name="daytime_insert" value="false" wire:model="daytime_insert"/>
                            </label>

                        </div>
                    </div>
                    <div class="bg-blue-100">
                        <label for="type_mov_insert"
                            class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">Tipo de
                            Movimieto.</label>
                        <select id="type_mov_insert" wire:model="type_mov_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" selected>- Seleccione el tipo de movimiento</option>
                            @if (!is_null($type_movements))
                                @foreach ($type_movements::cases() as $type_movement)
                                    <option value="{{ $type_movement->value }}">
                                        {{ $type_movement->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <x-input-error for="type_mov_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label for="location_insert"
                            class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">Ubicacion</label>
                        <select id="location_insert" name="location_insert" wire:model="location_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" selected>- Seleccione la ubicacion</option>

                        </select>
                        <x-input-error for="location_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label for="product_insert"
                            class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">Producto</label>
                        <select id="product_insert" name="product_insert" wire:model="product_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" selected>- Seleccione el producto</option>

                        </select>
                        <x-input-error for="product_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label for="employee_insert"
                            class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">Empleado</label>
                        <select id="employee_insert" name="employee_insert" wire:model="employee_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" selected>- Seleccione el empleado</option>

                        </select>
                        <x-input-error for="employee_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2"
                            for="stock_location_insert" value="">
                            Inicio. stock_location_insert
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="stock_location_insert" type="text" placeholder="0" wire:model="stock_location_insert"
                            disabled>
                        <x-input-error for="stock_location_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2"
                            for="stock_Warehouse_insert" value="0">
                            Disponibilidad. stock_warehouse_insert
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="stock_warehouse_insert" type="text" placeholder="Almacen:"
                            wire:model="stock_warehouse_insert">
                        <x-input-error for="stock_warehouse_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2"
                            for="quantity_mov_insert" value="0">
                            Venta. quantity_mov_insert
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="quantity_mov_insert" type="text" placeholder="Ejemplo:1000"
                            wire:model="quantity_mov_insert">
                        <x-input-error for="quantity_mov_insert" />
                    </div>
                    <div class="bg-blue-100">
                        <label class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2"
                            for="sales_insert">
                            Precio de Venta (Costo: ). sales_insert
                        </label>
                        <input id="sales_insert" type="text" placeholder="Ejemplo:300.00"
                            wire:model="sales_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <x-input-error for="sales_insert" />
                    </div>
                    <div class="bg-blue-100 col-span-1 sm:col-span-4">
                        <label for="description_insert"
                            class="block uppercase tracking-wide text-gray-900 text-sm font-bold mb-2">Descripcion.
                            description_insert</label>
                        <input id="description_insert" type="text"
                            placeholder="Escribe una Breve descripcion del producto" wire:model="description_insert"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <x-input-error for="description_insert" />
                    </div>
                    <div class="bg-gray-50 col-span-1 sm:col-span-4 text-center">
                        <button id="btn_add" wire:click="save"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold mb-2 mt-2 py-2 px-4 rounded">
                            Agregar Movimiento
                        </button>
                        <button id="btn_add" wire:click="$set('open', false)"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold mb-2 mt-2 py-2 px-4 rounded">
                            Cancelar
                        </button>
                    </div>
                    <input id="stock_location_insert" type="hidden" wire:model="stock_location_insert">
                    <input id="sales_insert" type="hidden" wire:model="sales_insert">
                </div>
            </div>
            <div>
                @if (session()->has('message'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4 transition-all">
                        {{ session('message') }}
                    </div>
                @endif

            </div>
        </x-slot>
        <x-slot name="footer">
            creado por MIRO
        </x-slot>
    </x-dialog-modal>
</div>
