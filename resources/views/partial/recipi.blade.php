<div class="row">
    <div>
        <img src="{{ url($recipi->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('recipis.show', $recipi->id) }}">{{ $recipi->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $recipi->comment }}</div>
        </div>
    </div>
</div>
