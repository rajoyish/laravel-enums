<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>Order #{{ $order->id }}</div>
                    <form action="/orders/{{ $order->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-4">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900">
                                Select an Order Status
                            </label>
                            <select id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status }}" @selected($order->status === $status->value)>
                                        {{ $status->label() }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-primary-button>{{ __('Edit') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
