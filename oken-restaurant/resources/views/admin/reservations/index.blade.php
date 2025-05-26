@extends('layouts.admin')

@section('header', 'Reservations')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-900">Reservations</h1>
</div>

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guests</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($reservations as $reservation)
            <tr>
                <td class="px-6 py-4">
                    <div class="text-sm font-medium text-gray-900">{{ $reservation->name }}</div>
                    <div class="text-sm text-gray-500">{{ $reservation->email }}</div>
                    @if($reservation->phone)
                        <div class="text-sm text-gray-500">{{ $reservation->phone }}</div>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="text-sm text-gray-900">{{ $reservation->reservation_date->format('M d, Y') }}</div>
                    <div class="text-sm text-gray-500">{{ $reservation->time }}</div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-sm text-gray-900">{{ $reservation->guests }} people</div>
                </td>
                <td class="px-6 py-4">
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                        {{ $reservation->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                           ($reservation->status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }}">
                        {{ ucfirst($reservation->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm font-medium">
                    <form action="{{ route('admin.reservations.update', $reservation) }}" method="POST" class="inline">
                        @csrf
                        @method('PUT')
                        <select name="status" onchange="this.form.submit()" 
                            class="text-sm rounded-md border-gray-300 shadow-sm focus:border-black focus:ring-black">
                            <option value="pending" {{ $reservation->status === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $reservation->status === 'confirmed' ? 'selected' : '' }}>Confirm</option>
                            <option value="cancelled" {{ $reservation->status === 'cancelled' ? 'selected' : '' }}>Cancel</option>
                        </select>
                    </form>
                    <a href="{{ route('admin.reservations.show', $reservation) }}" class="ml-3 text-indigo-600 hover:text-indigo-900">
                        View Details
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $reservations->links() }}
</div>
@endsection
