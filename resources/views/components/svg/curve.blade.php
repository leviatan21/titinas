
{{--
    https://css-tricks.com/snippets/svg/curved-text-along-path/

    @include('components.svg-curve',['color'=>'red'])
--}}
  <svg viewBox="0 0 600 80">
    <path id="curve" d="M 10 80 Q 95 10 180 80" fill="transparent" stroke="{{ $stroke ?? 'transparent' }}"/>
    <text font-size="{{$size ?? '15'}}" fill="{{$color ?? '#FF9800'}}">
      <textPath text-anchor="middle" startOffset="50%" xlink:href="#curve">
        {!! $text ?? 'Dangerous Curves Ahead' !!}
      </textPath>
    </text>
  </svg>


{{--
https://www.kirupa.com/animations/spinning_circular_text.htm

<style>
  .text {
    font-weight: 600;
    letter-spacing: 1.7px;
    text-transform: uppercase;
    /*font-family: 'Kanit';*/
    font-size: 17px;
    fill: #111;
    text-shadow: 2px 0px #ccc;
  }
  .main {
    display: grid;
    align-items: center;
    justify-items: center;
  }
  .main img {
    position: absolute;
  }
  </style>
<svg id="rotatingText" viewBox="0 0 1000 200" width="1000" height="200">
  <defs>
    <path id="circle" d="M 100, 100 m -75, 0 a 75, 75 0 1, 0 150, 0 a 75, 75 0 1, 0 -150, 0">
    </path>
  </defs>
  <text width="400">
    <textPath alignment-baseline="top" xlink:href="#circle" class="text">
      Part of a heart-healthy breakfast...sorta! -
    </textPath>
  </text>
</svg>
--}}




{{--
https://jhey.dev/cheep/circular-text-with-css/
<svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
  <path id="circlePath" fill="none" stroke-width="4" stroke="hsl(0 100% 50% / 0.5)" d="M 10, 50 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0" />
  <text id="text" font-family="monospace" font-size="12" font-weight="bold" fill="var(--text-1)">
    <textPath id="textPath" href="#circlePath">
      Dangerous Curves Ahead
    </textPath>
  </text>
</svg>
--}}


