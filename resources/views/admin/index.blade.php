@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Админ-панель</h1>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($sections as $sectionKey => $sectionName)
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-4">{{ $sectionName }}</h2>

                    @if (isset($contents[$sectionKey]))
                        @foreach ($contents[$sectionKey] as $content)
                            <form action="{{ route('admin.update', $content->id) }}" method="POST" class="mb-4">
                                @csrf
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    {{ $content->description ?? $content->key }}
                                </label>

                                @if ($content->type === 'text' && strlen($content->value) < 100)
                                    <input 
                                        type="text" 
                                        name="value" 
                                        value="{{ $content->value }}" 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                                    >
                                @else
                                    <textarea 
                                        name="value" 
                                        rows="4" 
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                                    >{{ $content->value }}</textarea>
                                @endif

                                <button 
                                    type="submit" 
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                >
                                    Сохранить
                                </button>
                            </form>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection