<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <label>
                <x-jet-input wire:model.="search" type="search" placeholder="Buscar..."/>
            </label>
            <a href="{{ route('articles.create') }}"
               class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                {{__('New Article')}}
            </a>
        </div>

        <div class="py-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-4 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Created at
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($articles as $article)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                 src="{{$article->imageUrl()}}"
                                                 alt="{{$article->title}}"/>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="{{route('articles.show',$article)}}">
                                                    {{$article->title}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{$article->created_at->diffForHumans()}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{route('articles.edit',$article)}}" class="text-indigo-500 hover:text-indigo-900">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="px-4 py-3 bg-gray-50 border-top">
                        {{$articles->links()}}
                    </div>
                </div>
        </div>
    </div>
</div>
