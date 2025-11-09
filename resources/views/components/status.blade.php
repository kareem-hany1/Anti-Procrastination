@props(['color' => 'white'])
<button
    {{$attributes->merge(['class' => "flex min-w-[84px] max-w-[480px] text-{$color}-500 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#233648] text-white text-sm font-medium leading-normal w-full"])}}
>
    <span class="truncate text-{{$color}}-500">{{$slot}}</span>
</button>
