@include('auth.partials.new-vote-module', [
  'id_comment' => $item['id_project'],
  'button' => 'vote-comment',
  'color'  => [
    '1' => '#FF9000',
    '2' => '#FFDD00',
    '3' => '#88DD33',
    '4' => '#22DDEE',
    '5' => '#4488EE',
    '6' => '#AA66DD',
    '7' => '#FF77CC',
  ],
    'label' => [
      '1' => 'VOTE',
      '2' => 'TRUST',
      '3' => 'CARE',
      '4' => 'JOKE',
      '5' => 'COMMIT',
      '6' => 'AI',
      '7' => 'BIZARRE',
  ],
  'popover' => [
    '1' => 'eq-popover',
    '2' => 'trust-popover',
    '3' => 'care-popover',
    '4' => 'joke-popover',
    '5' => 'commit-popover',
    '6' => 'ai-popover',
    '7' => 'bizarre-popover'
    ],
  'title' => [
    '1' => 'Vote',
    '2' => 'Trust',
    '3' => 'Heart',
    '4' => 'Joke',
    '5' => 'Commitment',
    '6' => 'A.I.',
    '7' => 'Bizarre'
    ],
  'description' => [
    '1' => $item['labelDescription'][0],
    '2' => $item['labelDescription'][1],
    '3' => $item['labelDescription'][2],
    '4' => $item['labelDescription'][3],
    '5' => $item['labelDescription'][4],
    '6' => $item['labelDescription'][5],
    '7' => $item['labelDescription'][6],
    ],
  'vote_button' => [
    '1' => 'equivalence',
    '2' => 'trust',
    '3' => 'care',
    '4' => 'joke',
    '5' => 'commit',
    '6' => 'ai',
    '7' => 'bizarre'
    ],
  'vote_comment' => [
    '1' => 'equivalence',
    '2' => 'trust',
    '3' => 'care',
    '4' => 'joke',
    '5' => 'commit',
    '6' => 'ai',
    '7' => 'bizarre'
    ],
  'id' => [
    '1' => 'vote-equivalence',
    '2' => 'vote-trust',
    '3' => 'vote-care',
    '4' => 'vote-joke',
    '5' => 'vote-commit',
    '6' => 'vote-ai',
    '7' => 'vote-bizarre'
    ],
  'icon' => [
    '1' => 'icon-equivalence',
    '2' => 'icon-trust',
    '3' => 'icon-care',
    '4' => 'icon-joke',
    '5' => 'icon-commit',
    '6' => 'icon-ai',
    '7' => 'icon-bizarre'
    ],
  'label_id' => [
    '1' => 'label-equivalence',
    '2' => 'label-trust',
    '3' => 'label-care',
    '4' => 'label-joke',
    '5' => 'label-commit',
    '6' => 'label-ai',
    '7' => 'label-bizarre'
    ],
  'has_voted' => [
    '1' => $item['hasVoted'][1],
    '2' => $item['hasVoted'][2],
    '3' => $item['hasVoted'][3],
    '4' => $item['hasVoted'][4],
    '5' => $item['hasVoted'][5],
    '6' => 'null',
    '7' => $item['hasVoted'][7]
    ],
  'total' => [
    '1' => $item['totalVotes'][1],
    '2' => $item['totalVotes'][2],
    '3' => $item['totalVotes'][3],
    '4' => $item['totalVotes'][4],
    '5' => $item['totalVotes'][5],
    '6' => $item['totalVotes'][6],
    '7' => $item['totalVotes'][7]
    ],
  ])
