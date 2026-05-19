<x-layout>
    <x-slot:title>Check Oil Change Status</x-slot:title>

    <h1>Check Oil Change Status</h1>

    <p>Enter your car's odometer reading and the date of your last oil change to find out if you are due for a new one.</p>

    <form method="POST" action="{{ route('oil-checks.store') }}">
        @csrf

        <label for="current_odometer">Current Odometer (km)</label>
        <input
            type="number"
            id="current_odometer"
            name="current_odometer"
            min="0"
            value="{{ old('current_odometer') }}"
            required
        >
        @error('current_odometer')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="previous_oil_change_date">Date of Previous Oil Change</label>
        <input
            type="date"
            id="previous_oil_change_date"
            name="previous_oil_change_date"
            value="{{ old('previous_oil_change_date') }}"
            required
        >
        @error('previous_oil_change_date')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="previous_odometer">Odometer at Previous Oil Change (km)</label>
        <input
            type="number"
            id="previous_odometer"
            name="previous_odometer"
            min="0"
            value="{{ old('previous_odometer') }}"
            required
        >
        @error('previous_odometer')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Check Status</button>
    </form>
</x-layout>
