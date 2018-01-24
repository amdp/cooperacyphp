var values = ['all', 'equivalence', 'trust', 'care', 'transparency', 'freedom', 'understanding', 'diversity'];

  function randomtype() {            var randomino = (Math.floor(Math.random() * 8));            if (randomino == 0) {
      for (i = 1; i < 8; i++) {                 document.getElementById(values[i]).style['opacity'] = '1'               }
    } else {               document.getElementById(values[randomino]).style.opacity = '1';              setTimeout(function () {
        for (i = 1; i < 8; i++) {if (i === randomino) {continue;};
          document.getElementById(values[i]).style['animation'] = 'fade-in 4s cubic-bezier(.14,.65,.25,.98) forwards'}}, 2300);}}

  function showvalue(v) { for (i = 1; i < 8; i++) {document.getElementById(values[i]+'D').style['display'] = 'none'}
        document.getElementById('typo').style['display'] = 'none';
        document.getElementById('payoff').style['display'] = 'none';
        document.getElementById(values[v]+'D').style['display'] = 'inline'}
  jQuery(window).on('load',function () {randomtype();})
