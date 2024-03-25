<section>

    <header>
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-1 text-center text-gray-900 dark:text-gray-100">
                <a href="{{ url('dashboard') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Back to Dashboard
                </a>
            </div>
        </div>


        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif


        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Inventory') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your inventory information') }}
        </p>
    </header>

    <form action="{{ url('categories/create') }}" method="POST" class="mt-6 space-y-6">
        @csrf
        <!-- Remove the @method('patch') line -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="name" value="{{ old('name') }}" />
            @error('name')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label for="type" :value="__('Choose what type')" />
            <select id="type" name="type" class="mt-1 block w-full" required autofocus autocomplete="type"
                value="{{ old('type') }}">
                <option value="" disabled selected>Type of Item</option>
                <option value="mouse">Mouse</option>
                <option value="keyboard">Keyboard</option>
                <option value="monitor">Monitor</option>
                <option value="printer">Printer</option>
            </select>
            @error('type')
                <span class="text-danger"> {{ $message }}</span>
            @enderror

        </div>

        <div>
            <x-input-label for="serial_number" :value="__('Serial Number')" />
            <x-text-input id="serial_number" name="serial_number" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="serial number" title="Please enter a 5-digit number"
                value="{{ old('serial_number') }}" />
            @error('serial_number')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>


        <div>
            <x-input-label for="status" :value="__('Status')" />
            <select id="status" name="status" class="mt-1 block w-full" required autofocus autocomplete="status">
                <option value="" selected disabled>Choose Status</option>
                <option value="Working">Working</option>
                <option value="For Repair">For Repair</option> <!-- Corrected value -->
                <option value="Dispose">Dispose</option>
            </select>

            @error('status')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
