@extends('layout')

@section('content')

    <form method="post" action="{{ route('rssfeed.save') }}">

        <div class="publish-form">
            <div class="head card clearfix sticky">
                <h1 class="pull-left">Addon: {!! $title !!}</h1>

                <div class="pull-right">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">{!! translate('rssfeed.save') !!}</button>
                    </div>
                </div>
            </div>

            <hr>

            <div class="publish-main card">
                <div class="row">

                    <div class="publish-fields">
                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.title') }}</label>
                            <small class="help-block">{!! translate('labels.slug_instructions') !!}</small>
                            <input type="text" name="title" class="form-control" />
                        </div>

                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.feed') }}</label>
                            <small class="help-block">{{ translate('labels.feed_instructions') }}</small>
                            <input type="text" name="feed" class="form-control" />
                        </div>

                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.charset') }}</label>
                            <small class="help-block">{{ translate('labels.charset_instructions') }}</small>
                            <input type="text" name="charset" class="form-control" />
                        </div>

                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.enable_cache') }}</label>
                            <small class="help-block">{{ translate('labels.enable_cache_instructions') }}</small>
                            <input type="text" name="enable_cache" class="form-control" />
                        </div>

                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.offset') }}</label>
                            <small class="help-block">{{ translate('labels.offset_instructions') }}</small>
                            <input type="text" name="offset" class="form-control" />
                        </div>

                        <div class="form-group text-fieldtype col-md-6">
                            <label class="block">{{ translate('labels.limit') }}</label>
                            <small class="help-block">{{ translate('labels.limit_instructions') }}</small>
                            <input type="text" name="limit" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

@endsection
