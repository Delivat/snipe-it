@component('mail::message')
# {{ trans('mail.hello') }},

{{ $intro_text }}.

@component('mail::table')
|        |          |
| ------------- | ------------- |
| **{{ trans('mail.user') }}** | {{ $assigned_to }} |
@if (isset($accepted_date))
| **{{ ucfirst(trans('general.accepted')) }}** | {{ $accepted_date }} |
@endif
@if (isset($declined_date))
| **{{ ucfirst(trans('general.declined')) }}** | {{ $declined_date }} |
@endif
@if (isset($note))
| **{{ trans('general.notes') }}** | {{ $note }} |
@endif
@if ((isset($item_tag)) && ($item_tag!=''))
| **{{ trans('mail.asset_tag') }}** | {{ $item_tag }} |
@endif
@if ((isset($item_model)) && ($item_model!=''))
| **{{ trans('mail.asset_name') }}** | {{ $item_model }} |
@endif
@if (isset($item->model))
| **{{ trans('general.asset_model') }}** | {{ $item->model->name }} |
@endif
@if (isset($item_serial))
| **{{ trans('mail.serial') }}** | {{ $item_serial }} |
@endif
@endcomponent

@if ($declined_date)
@component('mail::panel')
{{ trans('mail.please_provide_reason') }}
<form action="{{ url('asset-refusal') }}" method="POST">
    @csrf
    <textarea name="comment" rows="4" cols="50" placeholder="{{ trans('mail.enter_reason') }}"></textarea>
    <br>
    <button type="submit">{{ trans('mail.submit') }}</button>
</form>
@endcomponent
@endif

{{ trans('mail.best_regards') }}

{{ $snipeSettings->site_name }}

@endcomponent

