<div class="relative">
    <input wire:model.live.debounce.200ms="search" class="p-3 text-black rounded-sm border w-[250px]" placeholder="Typ hier om live te zoeken">

    @if(sizeof($internships) > 0)
        <div class="absolute z-10 mt-1 text-center w-full">
            <ul class="menu bg-base-100 rounded-box w-full text-black">
                @foreach ($internships as $internship)
                    <li class="px-4 py-2 cursor-pointer"><a href="{{ route('internships.show', $internship->id) }}">{{ $internship->course }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
