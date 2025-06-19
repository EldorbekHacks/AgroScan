<x-admin.wrapper>
    <x-slot name="title">
        {{ __('Kasalliklar ro\'yxati') }}
    </x-slot>

    @can('kasallik create')
        <x-admin.add-link href="{{ route('admin.kasallik.create') }}">
            {{ __('Yangi kasallik qo\'shish') }}
        </x-admin.add-link>
    @endcan

    <div class="py-2">
        <div class="min-w-full border-base-200 shadow overflow-x-auto">
            <x-admin.grid.search action="{{ route('admin.kasallik.index') }}" />
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th>{{ __('Kasallik') }}</x-admin.grid.th>
                        <x-admin.grid.th>{{ __('Haqida') }}</x-admin.grid.th>
                        <x-admin.grid.th>{{ __('Muqova') }}</x-admin.grid.th>
                        @canany(['kasallik edit', 'kasallik delete'])
                            <x-admin.grid.th>{{ __('Harakat') }}</x-admin.grid.th>
                        @endcanany
                    </tr>
                </x-slot>

                <x-slot name="body">
                    @foreach($kasalliks as $kasallik)
                        <tr>
                            <x-admin.grid.td>{{ $kasallik->name }}</x-admin.grid.td>
                            <x-admin.grid.td>{{ Str::limit($kasallik->description, 60) }}</x-admin.grid.td>
                            <x-admin.grid.td>
                                @if($kasallik->cover)
                                    <img src="{{ asset('storage/' . $kasallik->cover) }}" alt="Cover" class="w-12 h-12 object-cover rounded">
                                @else
                                    <span class="text-gray-400 italic">—</span>
                                @endif
                            </x-admin.grid.td>

                            @canany(['kasallik edit', 'kasallik delete'])
                                <x-admin.grid.td>
                                    <form action="{{ route('admin.kasallik.destroy', $kasallik->id) }}" method="POST">
                                        <div class="flex items-center space-x-2">
                                            @can('kasallik edit')
                                                <a href="{{ route('admin.kasallik.edit', $kasallik->id) }}" class="btn btn-square btn-ghost">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                                    </svg>
                                                </a>
                                            @endcan

                                            @can('kasallik delete')
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-square btn-ghost" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                                                    </svg>
                                                </button>
                                            @endcan
                                        </div>
                                    </form>
                                </x-admin.grid.td>
                            @endcanany
                        </tr>
                    @endforeach

                    @if($kasalliks->isEmpty())
                        <tr>
                            <td colspan="4">
                                <div class="flex flex-col justify-center items-center py-4 text-lg">
                                    {{ __('Ma\'lumotlar mavjud emas') }}
                                </div>
                            </td>
                        </tr>
                    @endif
                </x-slot>
            </x-admin.grid.table>
        </div>

        <div class="py-8">
            {{ $kasalliks->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.wrapper>
