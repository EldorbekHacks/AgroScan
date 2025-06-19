<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Yangi o\'simlik') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{ route('admin.plants.index') }}" title="{{ __('Create plants') }}">
            {{ __('<< Barcha o\'simliklarga qaytish') }}
        </x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>

    <div class="w-full py-2 overflow-hidden">
        <form method="POST" action="{{ route('admin.plants.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="py-2">
                <x-admin.form.label for="name" class="{{ $errors->has('name') ? 'text-red-400' : '' }}">
                    {{ __('Nomi') }}
                </x-admin.form.label>

                <x-admin.form.input id="name"
                                    class="{{ $errors->has('name') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="muddat" class="{{ $errors->has('muddat') ? 'text-red-400' : '' }}">
                    {{ __('Muddat') }}
                </x-admin.form.label>

                <x-admin.form.input id="muddat"
                                    class="{{ $errors->has('muddat') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="muddat"
                                    value="{{ old('muddat') }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="suv" class="{{ $errors->has('suv') ? 'text-red-400' : '' }}">
                    {{ __('Suv') }}
                </x-admin.form.label>

                <x-admin.form.input id="suv"
                                    class="{{ $errors->has('suv') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="suv"
                                    value="{{ old('suv') }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="description" class="{{ $errors->has('description') ? 'text-red-400' : '' }}">
                    {{ __('Haqida') }}
                </x-admin.form.label>

                <x-admin.form.input id="description"
                                    class="{{ $errors->has('description') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="description"
                                    value="{{ old('description') }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="image" class="{{ $errors->has('image') ? 'text-red-400' : '' }}">
                    {{ __('Rasm') }}
                </x-admin.form.label>

                <x-admin.form.input id="image"
                                    class="{{ $errors->has('image') ? 'border-red-400' : '' }}"
                                    type="file"
                                    name="image" />
            </div>
            <div class="py-2">
                <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight py-4 block sm:inline-block flex">Kategoriya</h3>
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Mevalar" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Mevalar
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Sabzavotlar" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Sabzavotlar
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Don ekinlari" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Don ekinlari
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Poliz ekinlari" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Poliz ekinlari
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Yaratish') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
