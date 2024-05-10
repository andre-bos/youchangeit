<div class="ml-2 mb-5">
    <input class="hidden peer" id="{{ $category->id }}" type="radio" name="category_id" value="{{ $category->id }}" {{$formData === $category->id ? 'checked' : '' }}>
    <label class="flex flex-col items-center px-5 py-2.5 border rounded-lg border-gray-400 cursor-pointer peer-checked:border-green-700 peer-checked:shadow-lg" for="{{ $category->id }}">
        <span class="text-xs font-semibold uppercase">{{ $category->nome }}</span>
    </label>
</div>