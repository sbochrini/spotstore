


{!! Collective\Html\FormFacade::open() !!} {{--array('route' => 'queries.search')--}}
    <div class="typeahead-container" id="typeahead-container">
        <div class="typeahead-field">
            <span class="typeahead-query" id="typeahead-query">
                {!! Collective\Html\FormFacade::text('search', null, array('id' => 'flyer-query', 'placeholder' => 'Search Products...', 'autocomplete' =>'off')) !!}
            </span>
            {!! Collective\Html\FormFacade::submit('Search', ['id' => 'Search-Btn']) !!}
        </div>
    </div>
{!! Collective\Html\FormFacade::close() !!}
