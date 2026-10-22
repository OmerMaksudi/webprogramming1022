<x-layout>
    <h1>{{$title}}</h1>
    <ul>
        {{--        <?php foreach ($jobs as $job): ?>--}}
        {{--            <li><?php echo $job?></li>--}}
        {{--        <?php endforeach ?>--}}

        @forelse($jobs as $job)
            {{--            @if($job === "Web Developer")--}}
            {{--                @continue--}}
            {{--            @endif--}}
            <li>{{$job}}</li>
        @empty
            <p>No jobs available!!!</p>
        @endforelse
    </ul>
</x-layout>
