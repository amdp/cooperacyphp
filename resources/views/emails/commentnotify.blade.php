Hello, {{$data[0]['name']}}<br>
Follow the discussion on Cooperacy.

Someone has posted:

<blockquote>{{$data[0]['content']}}</blockquote>



Click on  <a href="{{asset('view-project')}}/{{$data[0]['id']}}#comment{{$data[0]['commentid']}}">{{asset('view-project')}}/{{$data[0]['id']}}#comment{{$data[0]['commentid']}}</a> for more.

Cheers!