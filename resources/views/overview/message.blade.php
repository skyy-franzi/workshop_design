@extends('layouts.main')


@section('title', 'Message')

@section('content')
    <form method="POST" action="{{ route('message.create') }}">
        <div class="form-group">
            <label class="control-label"><b>New Message:</b></label>
            <div class="form-group">
                <label for="title">Title:
                    <input type="text" name="title" class="form-control" value=""/></label><br>
                <label for="text">Text:
                    <textarea style="width:500px;min-height:300px;" name="text" class="form-control" value=""></textarea></label>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Ändern"/>
        </div>
    </form>

@endsection
