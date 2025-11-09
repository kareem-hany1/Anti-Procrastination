@props(['type' => 'a'])

<{{$type}}
 {{$attributes->merge(['class' => "flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-[#233648] text-white gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"])}}
>
    {{$slot}}
</{{$type}}>
