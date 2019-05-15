@extends('admin/master')
@section('content')
@section('function','Add Question')
<div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="box box-primary">
        <br>
        <form action="{{route('add-question')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label>Category Parent</label>
                <select class="form-control" name="sltparent">
                    <option value="0">If you want chose parent for it, If not, you can don't chose</option>
                    @php cate_parent($parent_cate); @endphp
                </select>
            </div>
            <div class="form-group">
                <label>Question</label>
                <input class="form-control" name="txtQuestion" placeholder="Please Enter Question" />
            </div>
            <div class="form-group">
                <label>Answer A</label>
                <input class="form-control" name="txtAnswerA" placeholder="Please Enter AnswerA" />
            </div>
            <div class="form-group">
                <label>Answer B</label>
                <input class="form-control" name="txtAnswerB" placeholder="Please Enter AnswerB"/>
            </div>
            <div class="form-group">
                <label>Answer C</label>
                <input class="form-control" name="txtAnswerC" placeholder="Please Enter AnswerC"/>
            </div>
            <div class="form-group">
                <label>Answer D</label>
                <input class="form-control" name="txtAnswerD" placeholder="Please Enter AnswerD"/>
            </div>
            <div class="form-group">
            <label>Answer True</label>
            <label class="checkbox-inline"><input type="checkbox" name="cknAnswer" value="A">A</label>
			<label class="checkbox-inline"><input type="checkbox" name="cknAnswer" value="B">B</label>
			<label class="checkbox-inline"><input type="checkbox" name="cknAnswer" value="C">C</label>
			<label class="checkbox-inline"><input type="checkbox" name="cknAnswer" value="D">D</label>
        </div>
            <button type="submit" class="btn btn-success">Add Question</button>
            <button onclick="location.href='{{route('add-question')}}'" type="reset" class="btn btn-danger" >Reset</button>
        </form>
    </div>
</div>
@endsection