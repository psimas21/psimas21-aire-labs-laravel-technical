<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-center sm:py-0">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
        @foreach ($users as $data)
            <div class="bg-white p-6 relative card">
                <div class="flex items-center">
                    <div class="flex space-x-1 text-gray-100">
                        <div class="flex space-x-1 text-gray-100">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 mx-1"
                                    fill="{{ $i <= $data['rating'] ? '#EE9F00' : 'none' }}"
                                    viewBox="0 0 24 24"
                                    stroke-width="3"
                                    stroke="#EE9F00">
                                    <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="my-3">
                    <p class="text-gray-600">{{ $data['comment'] }}</p>
                </div>

                <div class="avatar-container">
                    <div class="avatar">
                         <img src="images/{{ $data['image'] }}" alt="{{  $data['image'] }}">
                    </div>
                    <div class="user-info">
                        <div class="text-xl font-semibold text-gray-900 mb-2 user-name">{{ $data['name'] }}</div>
                        <div class="text-gray-500 mb-2 user-rank">{{ $data['rank'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
