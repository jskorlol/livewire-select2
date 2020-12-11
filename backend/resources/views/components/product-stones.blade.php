<tr class="bg-white hover:bg-gray-100"
    wire:key="stones-{{ $key }}">
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <div
            wire:ignore>
            <select
                x-data="{ amount: $wire.entangle('stones.{{ $key }}.stone_id').defer, anElement: null }"
                {{-- If you don't use $wire.entangle, stone data delete is used normally. --}}
                x-init="$nextTick(() => {
{{--                    $($el).select2();--}}
{{--                    $($el).val(@this.stones[{{$key}}]['stone_id']).trigger('change');--}}

{{--                    $($el).on('select2:select', function (e) {--}}
{{--                        console.log(e.params.data);--}}
{{--                        amount = e.params.data.id;--}}
{{--                        @this.set('stones.{{$key}}.stone_id', e.params.data.id);--}}
{{--                    });--}}
                    console.log(`hello-{{$key}}`);
                });"
                class="block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 text-xs"
                x-ref="select"
                x-model="amount"
            >
                <option value=''>null</option>
                @foreach($stone_list as $value2)
                    <option value="{{$value2['id']}}">{{$value2['name']}} {{$value2['id']}}</option>
                @endforeach
            </select>
        </div>
    </td>
</tr>
