@extends('layouts/edit-form', [
    'createText' => trans('admin/categories/general.create') ,
    'updateText' => trans('admin/categories/general.update'),
    'helpPosition'  => 'right',
    'helpText' => trans('help.categories'),
    'topSubmit'  => 'true',
    'formAction' => (isset($item->id)) ? route('categories.update', ['category' => $item->id]) : route('categories.store'),
])

@section('inputFields')

@include ('partials.forms.edit.name', ['translated_name' => trans('admin/categories/general.name')])

<!-- Type -->
<div class="form-group {{ $errors->has('category_type') ? ' has-error' : '' }}">
    <label for="category_type" class="col-md-3 control-label">{{ trans('general.type') }}</label>
    <div class="col-md-7 required">
        {{ Form::select('category_type', $category_types , old('category_type', $item->category_type), array('class'=>'select2', 'style'=>'min-width:350px', 'aria-label'=>'category_type', ($item->category_type!='') || ($item->itemCount() > 0) ? 'disabled' : '')) }}
        {!! $errors->first('category_type', '<span class="alert-msg" aria-hidden="true"><i class="fas fa-times" aria-hidden="true"></i> :message</span>') !!}
    </div>
    <div class="col-md-7 col-md-offset-3">
        <p class="help-block">{!! trans('admin/categories/message.update.cannot_change_category_type') !!} </p>
    </div>
</div>

<livewire:category-edit-form
    :checkin-email="old('checkin_email', $item->checkin_email)"
    :default-eula-text="$snipeSettings->default_eula_text"
    :eula-text="old('eula_text', $item->eula_text)"
    :require-acceptance="old('require_acceptance', $item->require_acceptance)"
    :use-default-eula="old('use_default_eula', $item->use_default_eula)"
/>

@include ('partials.forms.edit.image-upload', ['image_path' => app('categories_upload_path')])


@stop

@section('content')
@parent


@if ($snipeSettings->default_eula_text!='')
<!-- Modal -->
<div class="modal fade" id="eulaModal" tabindex="-1" role="dialog" aria-labelledby="eulaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="eulaModalLabel">{{ trans('admin/settings/general.default_eula_text') }}</h2>
            </div>
            <div class="modal-body">
                {{ \App\Models\Setting::getDefaultEula() }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.cancel') }}</button>
            </div>
        </div>
    </div>
</div>
@endif



@stop

@section('moar_scripts')
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            function checkAndDisableEmailCheckbox() {--}}
{{--                shouldSendEmail.prop('checked', true);--}}
{{--                shouldSendEmail.prop('disabled', true);--}}
{{--            }--}}

{{--            function uncheckAndEnableEmailCheckbox() {--}}
{{--                shouldSendEmail.prop('checked', false);--}}
{{--                shouldSendEmail.prop('disabled', false);--}}
{{--            }--}}

{{--            let eula = $('textarea[name="eula_text"]');--}}
{{--            let useDefaultEula = $('input[name="use_default_eula"]');--}}
{{--            let shouldSendEmail = $('input[name="checkin_email"]')--}}
{{--            let messageWrapper = $('#email_will_be_sent');--}}
{{--            let messageSpan = $('#email_will_be_sent_message');--}}

{{--            let messages = {--}}
{{--                global: '{{ trans('admin/categories/general.email_will_be_sent_due_to_global_eula') }}',--}}
{{--                local: '{{ trans('admin/categories/general.email_will_be_sent_due_to_category_eula') }}',--}}
{{--            };--}}

{{--            function handleEulaChange() {--}}
{{--                if (eula.val().trim() !== '' || useDefaultEula.is(":checked")) {--}}
{{--                    checkAndDisableEmailCheckbox();--}}
{{--                    useDefaultEula.is(":checked") ? messageSpan.text(messages.global) : messageSpan.text(messages.local);--}}
{{--                    messageWrapper.show();--}}
{{--                    eula.prop('disabled', useDefaultEula.is(":checked"));--}}
{{--                } else {--}}
{{--                    uncheckAndEnableEmailCheckbox();--}}
{{--                    messageWrapper.hide();--}}
{{--                    eula.prop('disabled', useDefaultEula.is(":checked"));--}}
{{--                }--}}
{{--            }--}}

{{--            eula.on('change keyup', function () {--}}
{{--                handleEulaChange();--}}
{{--            });--}}

{{--            useDefaultEula.change(function () {--}}
{{--                handleEulaChange();--}}
{{--            });--}}

{{--            @if (! old('checkin_email', $item->checkin_email))--}}
{{--                handleEulaChange();--}}
{{--            @endif--}}
{{--        });--}}
{{--    </script>--}}
@stop
