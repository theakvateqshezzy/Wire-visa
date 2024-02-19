@props(['percentage'])

<div id="progressbar2" class="progressbar-type-2 relative flex items-center flex-col-reverse justify-center">

@push('js')
<script>
    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

    var bar = new ProgressBar.Line(progressbar2, {
        strokeWidth: 2,
        color: '#E58B3D',
        trailColor: '#F7F8FA',
        trailWidth: 2,
        easing: 'easeInOut',
        duration: 1400,
        svgStyle: null,
        text: {
            value: '',
            alignToBottom: false
        },
        from: {
            color: '#dc2626'
        },
        to: {
            color: '#04724d'
        },
        // Set default step function for all animate calls
        step: (state, bar) => {
            bar.path.setAttribute('stroke', state.color);
            var value = Math.round(bar.value() * 100);
            if (value === 0) {
                bar.setText('');
            } else {
                bar.setText(value + '%');
            }

            bar.text.style.color = state.color;
        }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '2rem';

    bar.animate({{$percentage}});
</script>
@endpush
