<article {{ post_class() }} >
<section id="top">
  <video poster="" autoplay>
      <source src="" type="video/mp4" />
  </video>
</section>

  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>