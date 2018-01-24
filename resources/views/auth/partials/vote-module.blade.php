@for($i=1;$i<8;$i++)

  <div id="{{$popover[$i]}}{{$id_comment}}" style="width:35px;float:left;" data-content="{{$description[$i]}}" rel="popover" data-placement="bottom" data-original-title="{{$title[$i]}}" data-trigger="hover"><a {{$button}}="{{$vote_comment[$i]}}" commentid="{{$id_comment}}" id="{{$id[$i]}}"><div><div style="float:left;" class="{{$icon[$i]}}"></div><div style="float:left;" id="{{$label_id[$i]}}{{$id_comment}}" class=
      @if($has_voted[$i]!=='null')
        @if($has_voted[$i]!==0)
          "label label-primary"
        @else
          "label label-default"
        @endif
      @else
        "label label-default"
      @endif
      >{{$total[$i]}}</div></div></a></div>
      <!-- <div class="vote-spacer">&nbsp;</div> -->

@endfor
