<form method="post" class="ajax-submit" autocomplete="off" action="{{ route('payment_methods.store') }}"
    enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Name') }}</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg"><i class="ti-save"></i>
                {{ _lang('Save') }}</button>
        </div>
    </div>
</form>