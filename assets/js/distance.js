// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var bar = new ProgressBar.Circle(distance, {
  color: '#ff5d00',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 2400,
  text: {
    autoStyleContainer: false
  },
  from: { color: '#ff5d00', width: 1 },
  to: { color: '#ff5d00', width: 4 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 10);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }

  }

  
});

bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2rem';

bar.animate(0.9);  // Number from 0.0 to 1.0
