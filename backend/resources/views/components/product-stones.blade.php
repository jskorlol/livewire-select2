<tr class="bg-white hover:bg-gray-100"
    wire:key="stones-{{ $key }}">
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <input type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
               wire:model.defer="stones.{{$key}}.main">
    </td>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500"
        >
        <div
            wire:ignore>
            <select
{{--                x-id="stones_{{ $key }}"--}}
{{--                x-data="{ amount: $wire.get('stones.{{ $key }}.stone_id'), anElement: null }"--}}
    
                x-data="{ amount: $wire.entangle('stones.{{ $key }}.stone_id').defer, anElement: null }"
{{-- If you don't use $wire.entangle, stone data delete is used normally. --}}

{{--                                x-data="{ amount: @entangle('stones.{{ $key }}.stone_id').defer, anElement: null }"--}}
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
                x-id="select"
{{--                wire:model.defer="stones.{{ $key }}.stone_id"--}}
            >
                <option value=''>null</option>
                @foreach($stone_list as $value2)
                    <option value="{{$value2['id']}}">{{$value2['name']}} {{$value2['id']}}</option>
                @endforeach
            </select>
        </div>
    </td>
    <button
        x-data
        x-on:click="$component('select').amount = 1; console.log($component('select').amount);"
        type="button">
        amount change
    </button>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <input type="text" class="focus:ring-gray-500 focus:border-gray-500 block w-full text-xs border-gray-300"
               wire:model.defer="stones.{{$key}}.amount"
               placeholder="0"
        >
    </td>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <select
            class="block w-full bg-white border border-gray-300 focus:outline-none focus:ring-gray-900 focus:border-gray-900 text-xs pr-2"
            wire:model.defer="stones.{{$key}}.weight_apply">
            <option value="0">N</option>
            <option value="1">Y</option>
        </select>
    </td>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <select
            class="block w-full bg-white border border-gray-300 focus:outline-none focus:ring-gray-900 focus:border-gray-900 text-xs pr-2"
            wire:model.defer="stones.{{$key}}.pay_apply">
            <option value="0">N</option>
            <option value="1">Y</option>
        </select>
    </td>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        {{ number_format($stones[$key]['weight']) }}
    </td>
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        {{ number_format($stones[$key]['price_buy']) }}
    </td>
    @foreach($stones[$key]['price'] as $value)
        <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
            {{ $value['value'] }}
        </td>
    @endforeach
    <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
        <input type="text" class="focus:ring-gray-500 focus:border-gray-500 block w-full text-xs border-gray-300"
               wire:model.defer="stones.{{$key}}.memo"
               placeholder="내용">
    </td>
</tr>
