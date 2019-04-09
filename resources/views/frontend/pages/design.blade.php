@extends('layouts.frontend') 
@section('content')
<section class="uk-section uk-section-muted">
  <div class="uk-container">
    <div class="section-title">
      <h2 class="heading-secondary">The Creative Process</h2>
      <span class="divide-line"></span>
    </div>
  </div>

  {{--
  <div class="container">
    <ol class="step-list">

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Consectetur adipisicing elit. Reprehenderit perspiciatis.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/1.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Impedit ducimus saepe assumenda</h2>
              <p>Sapiente beatae? Quo maiores consequatur, eveniet autem eos quia molestias perferendis.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/2.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Repellendus</h2>
              <p> Asperiores eum, accusantium harum, aperiam labore assumenda quisquam tempore magnam enim iusto voluptatum aspernatur
                dicta saepe possimus nobis molestiae quas sapiente.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/3.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Quaerat</h2>
              <p> Iusto quod incidunt vel quidem fuga quos laudantium dignissimos eos, tempore sequi quis praesentium.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/4.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Voluptatum alias hic</h2>
              <p>Officiis excepturi atque velit asperiores cum perferendis, repellendus facilis voluptatibus quas! Consequuntur.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/5.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Consectetur adipisicing elit. Reprehenderit perspiciatis.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/6.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Impedit ducimus saepe assumenda</h2>
              <p>Sapiente beatae? Quo maiores consequatur, eveniet autem eos quia molestias perferendis.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/7.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>

      <li class="step-list__item">
        <div class="step-list__item__inner">
          <div class="content">
            <div class="body">
              <h2>Repellendus</h2>
              <p> Asperiores eum, accusantium harum, aperiam labore assumenda quisquam tempore magnam enim iusto voluptatum aspernatur
                dicta saepe possimus nobis molestiae quas sapiente.</p>
            </div>

            <div class="icon">
              <img src="{{ asset('img/8.png') }}" alt="Check" />
            </div>
          </div>
        </div>
      </li>
    </ol>
  </div> --}}
  <div class="uk-container uk-margin-top uk-visible@m">

    <div class="uk-child-width-1-4 first-row" uk-grid>
      <div class="step-first-row">
        <img src="{{ asset('img/1.png') }}" alt="" srcset="">
        <div class="step-title">
          Connect With Us
        </div>
        <div class="step-content">
          Share your ideas with us, either using the contact form or via email at info@kreativerugs.com.
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/2.png') }}" alt="" srcset="">
        <div class="step-title">
          Idea Development
        </div>
        <div class="step-content">
          Our designing team will work on your idea, and eventually contact you for further information, if needed.
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/3.png') }}" alt="" srcset="">
        <div class="step-title">
          Submit Design
        </div>
        <div class="step-content">
          Based on your ideas, our designing team will present a few design options (digital renderings).
        </div>
      </div>
      <div class="step-first-row">
        <img src="{{ asset('img/4.png') }}" alt="" srcset="">
        <div class="step-title">
          Feedback
        </div>
        <div class="step-content">
          We will await feedback any changes asked can be inforporeated and re-sent.
        </div>
      </div>

    </div>

    <div class="uk-child-width-1-4 second-row uk-margin-remove-top" uk-grid>
      <div class="second-row-step">
        <img src="{{ asset('img/8.png') }}" alt="" srcset="">
        <div class="step-title">
          Strike Off
        </div>
        <div class="step-content">
          Upon approva, a carefully selected sample of selected portion of the rug will be woven and sen to you to ensure the color
          is right. (Not mandatory, however advised, as rug color may be slightly vary from the digital rendition).
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/7.png') }}" alt="" srcset="">
        <div class="step-title">
          Weaving
        </div>
        <div class="step-content">
          Upon satisfaction with the 'strike-off', our artisans will start their work and an accurate delivery date will be confirmed.
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/6.png') }}" alt="" srcset="">
        <div class="step-title">
          Update
        </div>
        <div class="step-content">
          Interested in getting updates ? Let us know, and we would be more than happy to send your pictures of your rug as it undergoes
          different stages of production.
        </div>
      </div>
      <div class="second-row-step">
        <img src="{{ asset('img/5.png') }}" alt="" srcset="">
        <div class="step-title">
          Shipping
        </div>
        <div class="step-content">
          Almost there - the rug, upon completion, will be shipped to you via express cargo.
        </div>
      </div>
    </div>

    <div class="section-title">
      <h2 class="heading-secondary">{!!$page->content{0}->sectionTitle!!}</h2>
      <span class="divide-line"></span>
    </div>
    <div class="section-content">
      <div class="section-content__centered">
        {!!$page->content{0}->sectionContent!!}
      </div>
    </div>
  </div>
</section>
@endsection