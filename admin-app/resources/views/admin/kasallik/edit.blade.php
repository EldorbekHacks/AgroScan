<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Kasallikni tahrirlash') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{ route('admin.kasallik.index') }}" title="{{ __('Kasallik') }}">
            {{ __('<< Barcha kasalliklar') }}
        </x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>

    <div class="w-full py-2 overflow-hidden">
        <form method="POST" action="{{ route('admin.kasallik.update', $kasallik->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="py-2">
                <x-admin.form.label for="name" class="{{ $errors->has('name') ? 'text-red-400' : '' }}">
                    {{ __('Nomi') }}
                </x-admin.form.label>

                <x-admin.form.input id="name"
                                    class="{{ $errors->has('name') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="name"
                                    value="{{ old('name', $kasallik->name) }}" />
            </div>
            <div class="py-2">
                <x-admin.form.label for="type" class="{{ $errors->has('type') ? 'text-red-400' : '' }}">
                    {{ __('Kasallik turi') }}
                </x-admin.form.label>

                <x-admin.form.input id="type"
                                    class="{{ $errors->has('type') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="type"
                                    value="{{ old('type', $kasallik->type) }}" />
            </div>
            <div class="py-2">
                <x-admin.form.label for="description" class="{{ $errors->has('description') ? 'text-red-400' : '' }}">
                    {{ __('Kasallik haqida') }}
                </x-admin.form.label>

                <x-admin.form.input id="description"
                                    class="{{ $errors->has('description') ? 'border-red-400' : '' }}"
                                    type="text"
                                    name="description"
                                    value="{{ old('description', $kasallik->description) }}" />
            </div>

            <div class="py-2">
                <x-admin.form.label for="image" class="{{ $errors->has('image') ? 'text-red-400' : '' }}">
                    {{ __('Rasm') }}
                </x-admin.form.label>

                @if ($kasallik->cover)
                    <div class="pb-2">
                        <img src="{{ asset('storage/' . $kasallik->cover) }}" alt="Kasallik Image" class="w-32 h-auto rounded shadow" style="height:300px;">
                    </div>
                @endif

                <x-admin.form.input id="image"
                                    class="{{ $errors->has('image') ? 'border-red-400' : '' }}"
                                    type="file"
                                    name="cover" />
            </div>
            <div class="py-2">
                <h3 class="inline-block text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight py-4 block sm:inline-block flex">Darajasi</h3>
                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="havf" value="Yuqori xavf" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Yuqori xavf
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="havf" value="O'rta xavf" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            O'rta xavf
                        </label>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-1">
                        <label class="form-check-label">
                            <input type="radio" name="havf" value="Past xavf" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            Past xavf
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Yangilash') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
