<div class="fixed z-40 inset-0 overflow-y-auto"
     x-data="{ open: @entangle('showModal').defer }"
     x-show="open"
     x-cloak
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-init="$watch('open', function(value) { if(value === true) $nextTick(() => { $el.scrollTop = 0; $dispatch('open-event'); }); else console.log(`close`); })">

    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div class="relative flex justify-center items-center w-full h-full"
         @mousedown.self="open = false">
        <div class="m-auto w-full flex justify-center"
             @mousedown.self="open = false">
            <div class="my-12 mx-4 max-w-6xl w-full">
                <div class="inline-block rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline"
                     x-show="open"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <form wire:submit.prevent="submit">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="block absolute top-0 right-0 pt-4 pr-4">
                                <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150" aria-label="Close"
                                        @click="open = false">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="block mx-2 text-left mb-2">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">카타로그 관리</h3>
                                <div class="mt-2" id="modal-content">
                                    <div class="mt-6 grid grid-cols-6 gap-y-3 gap-x-4">
                                        <div class="col-span-6">
                                            <label class="block text-sm font-medium text-gray-700">
                                                스톤 정보
                                            </label>
                                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                    <div class="overflow-hidden border-b border-gray-200">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:30px; width:1%;">
                                                                    M
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:140px; max-width:280px; width:26%;">
                                                                    스톤명
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:65px; width:3%;">
                                                                    알수
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:74px; width:6%;">
                                                                    중량차감
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:74px; width:6%;">
                                                                    공임적용
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:70px; width:6%;">
                                                                    개당중량
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:90px; width:6%;">
                                                                    구매단가
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    colspan="{{ count($price) }}"
                                                                    style="min-width:230px; width:20%;">
                                                                    등급별 판매단가
                                                                </th>
                                                                <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"
                                                                    rowspan="2"
                                                                    style="min-width:140px; width:26%;">
                                                                    설명
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                @foreach($price as $key => $value)
                                                                    <th scope="col" class="p-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                                                        {{$value['name']}}
                                                                    </th>
                                                                @endforeach
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            count: {{ $count }}
                                                            @if(count($stones) > 0)
                                                                @foreach($stones as $key => $value)
                                                                    @include('components.product-stones', ['key'=>$key])
                                                                @endforeach
                                                            @endif
                                                            </tbody>
                                                            <tbody>
                                                            <tr class="bg-white hover:bg-gray-100 border-b">
                                                                <td></td>
                                                                <td class="px-1 py-2 sm:px-2 whitespace-nowrap text-xs text-gray-500">
                                                                    소계
                                                                </td>
                                                                <td class="px-1 py-2 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
                                                                    0
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="px-1 py-2 sm:px-2 whitespace-nowrap text-xs font-medium text-gray-500">
                                                                    자동계산
                                                                </td>
                                                                <td></td>
                                                                @foreach($price as $key => $value)
                                                                    <td></td>
                                                                @endforeach
                                                                <td></td>
                                                            </tr>
                                                            <tr class="bg-white hover:bg-gray-100 border-b">
                                                                <td></td>
                                                                <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs text-gray-500">
                                                                    수동 차감중량
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="px-1 py-1 sm:px-2 whitespace-nowrap text-xs sm:text-sm font-medium text-gray-500">

                                                                </td>
                                                                <td></td>
                                                                @foreach($price as $key => $value)
                                                                    <td></td>
                                                                @endforeach
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2 flex flex-row-reverse">
                                                <span class="flex rounded-md shadow-sm ml-3 w-auto">
                                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                                            wire:click="addStones(1)">
                                                        기본 추가
                                                    </button>
                                                </span>
                                                <span class="flex rounded-md shadow-sm w-auto">
                                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-md text-white bg-red-400 hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                                            wire:click="addStones(2)">
                                                        특수 추가
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <label class="block text-sm font-medium text-gray-700">
                                                기타
                                            </label>
                                            <div class="mt-1">
                                                <textarea class="shadow-sm focus:ring-gray-500 focus:border-gray-500 block w-full text-xs sm:text-sm border-gray-300 rounded-md"
                                                          wire:model.defer="formData.memo"
                                                          placeholder="메모 (7200자 제한)"
                                                          maxlength="7200"
                                                          rows="6">
                                                </textarea>
                                            </div>
                                            @error('formData.memo')<p class="mt-1 text-sm text-red-500">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 flex flex-row-reverse">
                            <div class="flex-1 flex flex-row-reverse">
                                <span class="flex rounded-md shadow-sm ml-3 w-auto">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                      register
                                    </button>
                                </span>
                                <span class="flex rounded-md shadow-sm w-auto">
                                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-xs sm:text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                            @click="open = false">
                                      cancle
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>

    </script>
@endpush
