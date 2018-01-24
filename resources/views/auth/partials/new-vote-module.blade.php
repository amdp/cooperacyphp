<div style="width:100%">
  @for($i=1;$i<8;$i++)
  @php
    $gray = [
      '1' => '#505050',
      '2' => '#707070',
      '3' => '#888888',
      '4' => '#A8A8A8',
      '5' => '#B8B8B8',
      '6' => '#C8C8C8',
      '7' => '#D8D8D8',
    ];

    if($total[$i]!==0) {

      if($has_voted[$i]!==0) {

        $initialColor = $color[$i];
        $initialOpacity = 1;
        $initialClass = "vote-label-noclick";

        if($total[$i]==1) {
          $clickedColor = $gray[$i];
          $clickedOpacity = 1;
          $clickedClass = "vote-label-click";
        } else {
          $clickedColor = $color[$i];
          $clickedOpacity = 0.5;
          $clickedClass = "vote-label-click";
        }
      } else {
        $initialColor = $color[$i];
        $initialOpacity = 0.5;
        $initialClass = "vote-label-noclick";
        $clickedColor = $color[$i];
        $clickedOpacity = 1;
        $clickedClass = "vote-label-click";
      }
      } else {
      $initialColor = $gray[$i];
      $initialOpacity = 1;
      $initialClass = "vote-label-noclick";
      $clickedColor = $color[$i];
      $clickedOpacity = 1;
      $clickedClass = "vote-label-click";
    }
  @endphp

  <div id="{{$popover[$i]}}{{$id_comment}}" style="width:14.28%;height:30px;float:left;"
    data-content="{{$description[$i]}}" rel="popover" data-placement="top" data-original-title="{{$title[$i]}}" data-trigger="hover">
    <a {{$button}}="{{$vote_comment[$i]}}" commentid="{{$id_comment}}" id="{{$id[$i]}}">
    <div id="bar{{$label_id[$i]}}{{$id_comment}}"
        style="width:100%;height:5px;background:{{$initialColor}};opacity:{{$initialOpacity}};">
    </div>
    <div class="title-popover" id="title{{$popover[$i]}}{{$id_comment}}" style="visibility: hidden;">
      <div id="heading{{$label_id[$i]}}{{$id_comment}}" style="color:{{$initialColor}};opacity:{{$initialOpacity}};text-align:center;">
        <small>{{$label[$i]}} <span
          id="{{$label_id[$i]}}{{$id_comment}}"
          class="{{$initialClass}}"
          initialColor="{{$initialColor}}"
          initialOpacity="{{$initialOpacity}}"
          clickedColor="{{$clickedColor}}"
          clickedOpacity="{{$clickedOpacity}}"
          >{{$total[$i]}}</span></small>
      </div>
    </div>
    </a>
  </div>
  @endfor

</div>
