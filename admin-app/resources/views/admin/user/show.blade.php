<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Foydalanuvchilar') }}
    </x-slot>

    <div class="d-print-none with-border">
        <x-admin.breadcrumb href="{{route('admin.user.index')}}" title="{{ __('Foydalanuvchilar') }}">{{ __('<< Ortga qaytish') }}</x-admin.breadcrumb>
    </div>
    <div class="w-full py-2">
        <div class="min-w-full border-base-200 shadow">
            <table class="table-fixed w-full text-sm">
                <tbody>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Nomi') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Email') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$user->email}}</td>
                    </tr>
                    <tr>
                    <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Lavozim') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">

                        <div class="py-2">
                            <div class="grid grid-cols-4 gap-4">
                                @forelse ($roles as $role)
                                    <div class="col-span-4 sm:col-span-2 md:col-span-2">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="roles[]" value="{{ $role->name }}" {{ in_array($role->id, $userHasRoles) ? 'checked' : '' }} disabled="disabled" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @empty
                                    ----
                                @endforelse
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 p-4 pl-8 text-slate-500">{{ __('Vaqti') }}</td>
                        <td class="border-b border-slate-100 p-4 text-slate-500">{{$user->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.wrapper>
