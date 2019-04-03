@extends('layouts.backend') 
@section('content')
<section class="style-default">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-head style-primary">
                    <header>Add FAQ</header>
                </div>
                <div class="card-body floating-label">
                    <form action="{{ route('faq.store') }}" class="form form-validate" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-group {{$errors->has('question') ? 'has-error' : ''}}">
                                        <input type="text" class="form-control" id="question {{$errors->has('question') ? 'inputError' : ''}}" name="question" value="{{ old('question') }}">                                        
                                        @if ($errors->has('question'))
                                        <span class="help-block">{{$errors->first('question')}}</span> 
                                        @endif
                                        <label for="question">Question</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group {{$errors->has('answer') ? 'has-error' : ''}}">
                                    <textarea id="answer" class="form-control" placeholder="Enter text ..." name="answer"></textarea>                                    @if ($errors->has('answer'))
                                    <span class="help-block">{{$errors->first('answer')}}</span> @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <button type="submit" class="btn btn-block btn-success ink-reaction">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion1">
                    @foreach($faqs as $faq)
                    <div class="card panel">
                        <div class="card-head card-head-sm collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-{{ $loop->iteration }}"
                            aria-expanded="false">
                            <header>{{ $faq->query }}</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div id="accordion1-{{ $loop->iteration }}" class="collapse" aria-expanded="false" style="height: 0px;">
                            <div class="card-body">
                                {!! $faq->answer !!}
                            </div>
                            <div class="card-actionbar">
                                <div class="card-actionbar-row">
                                    <button class="btn btn-flat btn-info ink-reaction edit-modal" data-toggle="modal" data-target="#formModal" data-id="{{$faq->id}}"
                                       data-question="{{$faq->query}}"
                                        data-answer="{{$faq->answer}}">Edit
                        </button>

                                    <form method="POST" action="{{ route('faq.destroy', $faq->id) }}" class="pull-right itinerary-destroy">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$faq->id}}">
                                        <button type="submit" class="btn btn-flat btn-danger ink-reaction">
                                Delete
                            </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end .panel -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN FORM MODAL MARKUP -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="formModalLabel">Edit</h4>
                </div>
                <form class="form" role="form">
                    <input type="hidden" id="id-edit">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="question-edit" value="">                          
                            <label for="question">Question</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="answer-edit" cols="30" rows="10"></textarea>                         
                            <label for="answer">Answer</label>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success update">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END FORM MODAL MARKUP -->
</section>
@endsection
 
@section('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '.edit-modal', function() {            
            $('#id-edit').val($(this).data('id'));
            $('#question-edit').val($(this).data('question'));
            $('#answer-edit').val($(this).data('answer'));            
        });

        $('.modal-footer').on('click', '.update', function() {
            var id = $('id-edit').val();
            $.ajax({
                type: 'post',
                url: 'manage/faq/'+id+'/edit',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': $("#id-edit").val(),
                    'query': $("#question-edit").val(),
                    'answer': $('#answer-edit').val(),
                },
                success: function(data){
                    $('#formModal').modal('hide');
                    toastr.success(data.success);
                    location.reload();
                }

            });
        });

    });

</script>

@stop