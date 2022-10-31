<x-layout>
    <x-setting heading="Publish New Post">
        <x-form.input name="title" type="text" required/>
        <x-form.input name="slug" type="text" required/>
        <x-form.input name="thumbnail" type="file" required/>
        <x-form.textarea name="excerpt" type="text" required/>
        <x-form.textarea name="body" type="text" required/>

        <x-form.field>
            <x-form.label name="category"/>

            <select name="category_id" id="category_id">
                
                @foreach (\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ''  }}>{{ ucwords($category->name) }}</option>
                @endforeach
                
            </select>

            <x-form.error name="category"/>
        </x-form.field>

        <x-form.button>Publish</x-form.button>
    </x-setting>

</x-layout>