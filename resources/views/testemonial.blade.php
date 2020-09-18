@extends('home')
@section ('content')
<div class="slider1">
      <div class="slide1 slide-1">
        <div class="slide-text">
          <p class="testimonial-text">
            “ I’ve been interested in coding for a while but never taken the jump, until now. 
  I couldn’t recommend this course enough. I’m now in the job of my dreams and so 
  excited about the future. ”
          </p>
          <p class="author-text">Tanya Sinclair
            <span>UX Engineer</span></p>
        </div>
        <div class="slide-img">
          <img src="{{ asset('images/blog/blog-1.jpg')}}" alt="img">
        </div>
      </div>
      <div class="slide1 slide-2">
        <div class="slide-text">
          <p class="testimonial-text">
            “ If you want to lay the best foundation possible I’d recommend taking this course. 
  The depth the instructors go into is incredible. I now feel so confident about 
  starting up as a professional developer. ”
          </p>
          <p class="author-text">John Tarkpor
            <span>Junior Front-end Developer</span></p>
        </div>
        <div class="slide-img">
          <img src="{{ asset('images/blog/blog-1.jpg')}}" alt="img">
        </div>
      </div>
      <div class="buttons">
        <div class="next"></div>
        <div class="prev"></div>
      </div>
    </div>
    @endsection