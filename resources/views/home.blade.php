@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">Weekly Plannings</div>
                    <table class="table table-striped" style="border-collapse: collapse;">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <col width="100">
                        <thead >
                        <tr>

                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">User name</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Monday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Tuesday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Wednesday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Thursday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Friday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Saturday</th>
                            <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Sunday</th>

                        </tr>
                        </thead>
                    </table>
                            @foreach($tasks as $task)
                    @endforeach
                             @foreach($users as $user)
                            <div >
                            <div style="width:100px;position: relative; display: inline-block;margin-top: 5px;margin-bottom: 5px;font-weight: bold;text-align: center;">
                                <a href="/add/{{$user['id']}}">{{$user->name}}</a></div>

                            @foreach($tasks as $task)
                                @if($user['id']==$task['user_id'])
                                       <a href="{{route('tasks.show',$task->id)}}"><div title="{{$task['title']}}" style="background:{{$colors[$task->color_id]}}; width:{{$times[$task->time_id]*100}}px;position:absolute; left:{{$task->start_time_id * 50+100}}px;display: inline-block;height: 25px;margin-top: 5px;margin-bottom: 5px">
                                    </div></a>
                                    @endif
                            @endforeach
                          @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
