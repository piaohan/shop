@extends('admin.layouts.master')
@section('content')
    <a href="javascript:;" class="md-trigger btn btn-primary btn-sm" data-modal="modal-9">Show Me
    </a>
    @section('prompts-title')
    我是孙建魁
    @endsection
    @section('prompts-content')
        <p>This is a modal window. You can do the following things with it:</p>
        <ul>
            <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
            <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
            <li><strong>Close:</strong> click on the button below to close the modal.</li>
        </ul>
    @endsection
    @section('script')
        <script src="http://cdn.rooyun.com/js/classie.js"></script>
        <script src="http://cdn.rooyun.com/js/modaleffects.js"></script>
    @endsection
@endsection