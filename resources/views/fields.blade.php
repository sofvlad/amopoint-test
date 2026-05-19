@extends('layouts.app')

@section('content')
    <h1 class="mb-6 font-medium text-lg">Type Fields</h1>

    <div class="space-y-4">
        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Тип</label>
            <select name="type_val" class="px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 1</label>
            <input name="input_1" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 2</label>
            <input name="input_2" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 3</label>
            <input name="input_3" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 4</label>
            <input name="input_4" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 5</label>
            <input name="input_5" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 6</label>
            <input name="input_6" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex items-center gap-4 mt-4">
            <label class="w-20 text-[#706f6c] dark:text-[#A1A09A]">Поле 7</label>
            <input name="input_7" type="text" class="flex-1 max-w-xs px-3 py-1.5 bg-[#FDFDFC] dark:bg-[#0a0a0a] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:border-[#f53003] dark:focus:border-[#FF4433]">
        </div>

        <div class="flex flex-wrap gap-3 pt-4 mt-4">
            <input name="button_12" type="button" value="Кнопка 1" class="cursor-pointer px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] border border-black dark:border-[#eeeeec] rounded-sm hover:bg-black dark:hover:bg-white transition-colors">
            <input name="button_28" type="button" value="Кнопка 2" class="cursor-pointer px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] border border-black dark:border-[#eeeeec] rounded-sm hover:bg-black dark:hover:bg-white transition-colors">
            <input name="button_88" type="button" value="Кнопка 4" class="cursor-pointer px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] border border-black dark:border-[#eeeeec] rounded-sm hover:bg-black dark:hover:bg-white transition-colors">
            <input name="button_33" type="button" value="Кнопка 3" class="cursor-pointer px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] border border-black dark:border-[#eeeeec] rounded-sm hover:bg-black dark:hover:bg-white transition-colors">
            <input name="button_1" type="button" value="Кнопка 8" class="cursor-pointer px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] border border-black dark:border-[#eeeeec] rounded-sm hover:bg-black dark:hover:bg-white transition-colors">
        </div>
    </div>
@endsection
