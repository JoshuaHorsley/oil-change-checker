<x-layout>
    <x-slot:title>Oil Change Result</x-slot:title>

    <h1>Oil Change Result</h1>

    @if ($isDue)
        <div class="result-box result-due">
            <strong>This car is due for an oil change</strong>
        </div>
    @else
        <div class="result-box result-ok">
            <strong>This car is not yet due for an oil change</strong>
        </div>
    @endif

    <h2>Submitted Values</h2>
    <ul>
        <li><strong>Current Odometer:</strong> {{ number_format($oilCheck->current_odometer) }} km</li>
        <li><strong>Date of Previous Oil Change:</strong> {{ $oilCheck->previous_oil_change_date->format('F j, Y') }}</li>
        <li><strong>Odometer at Previous Oil Change:</strong> {{ number_format($oilCheck->previous_odometer) }} km</li>
    </ul>

    <a href="{{ route('oil-checks.create') }}" class="back-link">Check another car</a>

</x-layout>
