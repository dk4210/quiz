@extends('backend.layouts.master')

	@section('title','Exam Assign User')

	@section('content')

<div class="span9">
        <div class="content">
            
            <div class="module">
                <div class="module-head">
                    <h3>Result</h3>
                </div>

                <div class="module-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Test</th>
                          <th>Total Question</th>
                          <th>Attempt Question</th>
                          <th>Correct Answer</th>
                          <th>Wrong Answer</th>
                          <th>Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($quiz as $q)
                        <tr>
                          <td>1</td>
                          <td>{{$q->name}}</td>
                          <td>{{$totalQuestions}}</td>
                          <td>{{$attemptQuestion}}</td>
                          <td>{{$userCorrectedAnswer}}</td>
                          <td>{{$userWrongAnswer}}</td>
                          <td>{{round($percentage,2)}}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>

                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Questions</th>
                                <th>Answer Given</th>
                                <th>Result</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key=>$result)
                              <tr>
                                <td>{{$key+1}}}</td>
                                <td>{{$result->question->question}}</td>
                                <td>{{$result->answer->answer}}</td>
                                @if($result->answer->is_correct)
                                <td><span style="color:green;">Correct</span></td>
                                @else
                                <td><span style="color:red;">Wrong</span></td>
                                @endif
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                   </div>
               </div>
            
            </div>
            
           </div>
    </div> 
    @endsection
