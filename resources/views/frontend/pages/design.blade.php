@extends('layouts.frontend') 
@section('content')
<section class="uk-section uk-section-muted">
  <div class="uk-container">
    <div class="section-title">
      <h2 class="heading-secondary">The Creative Process</h2>
      <span class="divide-line"></span>
    </div>
  </div>
 
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
  </div>
</section>

<section class="uk-section uk-section-default">
  <div class="uk-container">
    <div class="section-title">
      <h2 class="heading-secondary">Lorem ipsum dolor sit amet.</h2>
      <span class="divide-line"></span>
    </div>
    <div class="section-content">
      <div class="section-content__centered">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, quisquam corporis eius impedit nam in recusandae repellat
        blanditiis, cum eos accusamus inventore ut sunt quidem accusantium animi quam ullam deleniti assumenda, explicabo
        eaque ratione qui?
      </div>
    </div>
  </div>
</section>
@endsection