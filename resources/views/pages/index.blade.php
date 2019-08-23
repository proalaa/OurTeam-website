@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mr-auto mb-5">
        <span class="d-block text-uppercase text-secondary">Who We Are</span>
        <span class="divider my-4"></span>
        <h2 class="mb-4 section-title">We Are <strong>Design Agency</strong> That Bring Your Ideas Alive</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit delectus perspiciatis!</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
        <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
      </div>
      <div class="col-lg-6">
        <figure class="img-dotted-bg">
          <img src="images/about_1.jpg" alt="Image" class="img-fluid">
        </figure>
      </div>
    </div>
  </div>
</div>

<div class="section portfolio-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="mb-4 section-title">Latest Work</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <a href="portfolio-single.html" class="work-thumb">
          <div class="work-text">
            <h2>Work Name Here</h2>
            <p>Category Here</p>
          </div>
          <img src="images/work_1.jpg" alt="Image" class="img-fluid">
        </a>
        <a href="portfolio-single.html" class="work-thumb">
          <div class="work-text">
            <h2>Work Name Here</h2>
            <p>Category Here</p>
          </div>
          <img src="images/work_4.jpg" alt="Image" class="img-fluid">
        </a>
      </div>
      <div class="col-lg-6">
        <a href="portfolio-single.html" class="work-thumb">
          <div class="work-text">
            <h2>Work Name Here</h2>
            <p>Category Here</p>
          </div>
          <img src="images/work_2.jpg" alt="Image" class="img-fluid">
        </a>
        <a href="portfolio-single.html" class="work-thumb">
          <div class="work-text">
            <h2>Work Name Here</h2>
            <p>Category Here</p>
          </div>
          <img src="images/work_3.jpg" alt="Image" class="img-fluid">
        </a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 text-center">
        <p><a href="portfolio.html" class="btn btn-outline-white px-4 py-3">More Portfolio</a></p>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mr-auto mb-3">
        <span class="d-block text-uppercase text-secondary">Featured Services</span>
        <span class="divider my-4"></span>
        <h2 class="mb-4 section-title">The <strong>Services</strong> That We Are Providing</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis
          libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit
          delectus perspiciatis!</p>
        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
        
      </div>
      <div class="col-lg-6">
        <div class="row mt-5">
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="service">
              <span class="icon icon-shield mb-4 d-block"></span>
              <h3>Branding</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="service">
              <span class="icon icon-screen-desktop mb-4 d-block"></span>
              <h3>Web Design</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="service">
              <span class="icon icon-screen-smartphone mb-4 d-block"></span>
              <h3>App Design</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <div class="service">
              <span class="icon icon-rocket mb-4 d-block"></span>
              <h3>Start Up</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="section bg-light block-11">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 class="mb-4 section-title">Testimonial</h2>
      </div>
    </div>
    <div class="nonloop-block-11 owl-carousel">
      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">John Smith</h2>
              <span class="meta">XYZ Inc. Client</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat qui, ipsum debitis id
                reprehenderit ut soluta possimus consectetur asperiores totam veniam quasi molestiae. Animi doloribus
                accusamus eius ex laudantium vitae? &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">Joshua Darren</h2>
              <span class="meta">XYZ Inc. Client</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ut enim error molestias maxime
                deserunt voluptate doloribus nihil nesciunt id perferendis, doloremque earum architecto ab incidunt
                sunt
                corrupti. Consequuntur qui ullam voluptates sapiente quod esse eum. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">John Smith</h2>
              <span class="meta">XYZ Inc. Client</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ab? Asperiores dolore
                blanditiis quis sapiente soluta aliquid officiis. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
            <div class="name-text align-self-center">
              <h2 class="heading">John Smith</h2>
              <span class="meta">XYZ Inc. Client</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, accusamus? Porro fugit culpa
                consequuntur dolorum. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END .block-4 -->
</div>

<div class="bg-primary py-5">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <h3 class="text-white mb-4 font-weight-normal">Do You Have An Awesome Project In Mind?</h3>
        <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorem voluptas
          soluta quo, odio
          quaerat.</p>
          
        <p class="mb-0"><a href="contact.html" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
      </div>
    </div>

  </div>
</div>

@endsection