{{-- @if ($crud->buttons()->where('stack', $stack)->count())
	@foreach ($crud->buttons()->where('stack', $stack) as $button)
	   {!! $button->getHtml($entry ?? null) !!}
	@endforeach
@endif --}}

<div class="btn-group mr-3" role="group">
    @if ($crud->buttons()->where('stack', $stack)->count())
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ trans('backpack::crud.actions') }}
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($crud->buttons()->where('stack', $stack) as $button)
                {!! $button->getHtml($entry ?? null) !!}
            @endforeach
        </div>
    @endif
</div>
