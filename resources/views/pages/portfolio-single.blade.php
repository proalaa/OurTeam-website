@extends('layouts.app')

@section('content')
    

  <div class="inner-page">
    <div class="slider-item overlay" style="background-image: url('images/hero_2.jpg');"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-lg-9 text-center col-sm-12 element-animate">
            <h1 class="mb-4">Project Title Here</h1>
            <p class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-3">/</span> <a href="portfolio.html">Portfolio</a> <span class="mx-3">/</span> Project Title Here</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6">
          <img src="images/work_1.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-lg-5 ml-auto">
          <h3 class="mb-4">Project Details</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eum quod et, atque expedita ducimus cumque, voluptatibus, fugit eveniet doloremque veniam impedit qui quibusdam aliquid accusantium beatae quam! Ea, voluptatibus?</p>
          <p>Dolore doloribus esse voluptatem illum libero vel, totam velit exercitationem quisquam necessitatibus tempore non quod dolor.</p>
          <ul class="list-unstyled mb-5">
            <li class="mb-3">
              <strong class="d-block text-black">Role:</strong>
              Design, Front-end, CMS
            </li>
            <li>
              <strong class="d-block text-black">Client:</strong>
              XYZ Co.
            </li>
          </ul>
          <p><a href="#" class="btn btn-outline-black ">Visit Website</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <p><a href="#" class="btn btn-outline-black btn-block">Previous Project</a></p>
        </div>
        <div class="col-lg-4">
          <p><a href="#" class="btn btn-outline-black btn-block">All Projects</a></p>
        </div>
        <div class="col-lg-4">
          <p><a href="#" class="btn btn-outline-black btn-block">Next Project</a></p>
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