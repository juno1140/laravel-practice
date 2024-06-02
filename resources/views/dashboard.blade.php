<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="max-w-xl mx-auto">
            <!-- ツイートカード -->
            @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-4 mb-4">
                    <div class="flex items-start">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/150"
                             alt="プロフィール画像">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-bold">ユーザー名</h4>
                                    <p class="text-gray-500">@ユーザーID</p>
                                </div>
                                <div class="text-gray-500 text-sm">
                                    <span>2時間前</span>
                                </div>
                            </div>
                            <p class="mt-2 text-gray-700">{{ $post->content }}</p>
                            <div class="mt-2 flex items-center text-gray-500">
                                <button class="flex items-center mr-4">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM9.5 9h5v1h-5zm0 2h5v1h-5zm0 2h3v1h-3z"></path>
                                    </svg>
                                    <span>コメント</span>
                                </button>
                                <button class="flex items-center mr-4">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM9.5 9h5v1h-5zm0 2h5v1h-5zm0 2h3v1h-3z"></path>
                                    </svg>
                                    <span>リツイート</span>
                                </button>
                                <button class="flex items-center mr-4">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM9.5 9h5v1h-5zm0 2h5v1h-5zm0 2h3v1h-3z"></path>
                                    </svg>
                                    <span>いいね</span>
                                </button>
                                <button class="flex items-center">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0-18a8 8 0 1 1 0 16 8 8 0 0 1 0-16zM9.5 9h5v1h-5zm0 2h5v1h-5zm0 2h3v1h-3z"></path>
                                    </svg>
                                    <span>共有</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
