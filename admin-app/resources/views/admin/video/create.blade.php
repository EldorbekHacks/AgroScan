<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Yangi video') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{ route('admin.video.index') }}" title="{{ __('Create Video') }}">
            {{ __('<< Barcha video darslar') }}
        </x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>

    <div class="w-full py-2 overflow-hidden">
        <form method="POST" action="{{ route('admin.video.store') }}" enctype="multipart/form-data">
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
                <x-admin.form.label for="description" class="{{ $errors->has('description') ? 'text-red-400' : '' }}">
                    {{ __('Video haqida') }}
                </x-admin.form.label>

                <x-admin.form.input id="description"
                                    class="{{ $errors->has('description') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="description"
                                    value="{{ old('description') }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="file" class="{{ $errors->has('file') ? 'text-red-400' : '' }}">
                    {{ __('Video faylni biriktiring') }}
                </x-admin.form.label>

                <x-admin.form.input id="file"
                                    class="{{ $errors->has('file') ? 'border-red-400' : '' }}"
                                    type="file"
                                    name="file" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="cover" class="{{ $errors->has('cover') ? 'text-red-400' : '' }}">
                    {{ __('Muqova rasmi') }}
                </x-admin.form.label>

                <x-admin.form.input id="cover"
                                    class="{{ $errors->has('cover') ? 'border-red-400' : '' }}"
                                    type="file"
                                    name="cover" />
            </div>
            <div class="py-2">
                <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight py-4 block sm:inline-block flex">Video turi</h3>
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Yetishtirish usullari" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Yetishtirish usullari
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Parvarish qilish" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Parvarish qilish
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="category" value="Kasalliklarni davolash" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Kasalliklarni davolash
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Qo\'shish') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
