<div>
    <button type="button" class="order-0 inline-flex items-center px-2.5 py-1.5 sm:px-4 sm:py-2 border border-transparent text-xs sm:text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:order-1 sm:ml-3"
            wire:click="$emitTo('product-modal', 'create')">
        Modal Open
    </button>
</div>

@push('modals')
    <livewire:product-modal/>
@endpush
