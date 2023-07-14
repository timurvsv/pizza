@extends('admin.layouts.layout')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Редактирование продукта
            </h2>

            <form action="{{  route('products.update', ['id' => $product->id ]) }}" method="POST" enctype="multipart/form-data">
                @method('patch')
                <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
                >
                    <input type="hidden" name="_method" value="PATCH">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Название продукта</span>
                        <input
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Продукт"
                            name="name"
                            value="{{ $product->name }}"
                        />
                    </label>
                    <br>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Цена продукта</span>
                        <input
                            type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="100"
                            name="price"
                            value="{{ $product->price }}"
                        />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Описание</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3"
                            placeholder="Описание продукта"
                            name="text"
                        >{{ $product->text }}</textarea>
                    </label>
                    <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Категория
                </span>
                        <select
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="category_id"
                        >
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id === $product->category_id) selected @endif>{{$category->name}}</option>
                            @endforeach

                        </select>
                    </label>
                    <br>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Выберите изображение</span>
                        <input
                            type="file"
                            name="image"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <br>
                    <button type="submit" class="px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    >
                        Отправить
                    </button>
                    @csrf


                </div>
            </form>

            <!-- General elements -->


        </div>
    </main>


@endsection
